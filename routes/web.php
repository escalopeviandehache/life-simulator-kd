<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\ChapterController;
use App\Http\Controllers\Api\V1\ChoiceController;
use App\Http\Controllers\Api\V1\ProgressController;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;

// Page d'accueil de l'application (vue "welcome")
Route::get('/', function () {
    return view('welcome');
});

// Tableau de bord affichant la liste des histoires disponibles pour l'utilisateur
Route::get('/dashboard', function () {
    $stories = [
        ['id' => 1, 'title' => 'Life Simulator', 'description' => 'Une aventure interactive pleine de choix.', 'active' => true],
        ['id' => 2, 'title' => 'Legacy of Kingdom', 'description' => 'Unissez les royaumes de la Chine impériale.', 'active' => false],
        ['id' => 3, 'title' => 'Le Labyrinthe des ombres', 'description' => 'Explorez un ancien labyrinthe mystique.', 'active' => false],
        ['id' => 4, 'title' => 'Crisis Simulator', 'description' => 'Soyez président en temps de gestion de crise.', 'active' => false],
        ['id' => 5, 'title' => 'Dernier appel', 'description' => 'Enquêtez et trouvez qui est le criminel.', 'active' => false],
        ['id' => 6, 'title' => 'Reflet', 'description' => 'Une thérapie virtuelle qui en sait plus que vous...', 'active' => false],
    ];
    return view('stories.index', compact('stories'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes liées à la gestion du profil utilisateur (édition, mise à jour, suppression)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inclusion des routes d’authentification générées par Laravel Breeze/Fortify/etc.
require __DIR__.'/auth.php';

// Routes API versionnées exposées via le routeur "web" (pour usage rapide)
Route::prefix('api/v1')->group(function () {
    // Récupérer tous les chapitres
    Route::get('chapters',       [ChapterController::class, 'index']);
    // Récupérer un chapitre spécifique par ID
    Route::get('chapters/{id}',  [ChapterController::class, 'show']);
    // Récupérer toutes les options de choix
    Route::get('choices',        [ChoiceController::class,  'index']);
    // Récupérer un choix spécifique par ID
    Route::get('choices/{id}',   [ChoiceController::class,  'show']);
    // Soumettre un choix (authentification requise)
    Route::post('progress/choose/{choice}', [ProgressController::class, 'choose'])
         ->middleware('auth');
});

// Page listant les histoires disponibles
Route::get('/stories', function () {
    $stories = [
        ['id' => 1, 'title' => 'Life Simulator', 'description' => 'Une aventure interactive pleine de choix.', 'active' => true],
        ['id' => 2, 'title' => 'Legacy of Kingdom', 'description' => 'Unissez les royaumes de la Chine impériale.', 'active' => false],
        ['id' => 3, 'title' => 'Le Labyrinthe des ombres', 'description' => 'Explorez un ancien labyrinthe mystique.', 'active' => false],
        ['id' => 4, 'title' => 'Crisis Simulator', 'description' => 'Soyez président en temps de gestion de crise.', 'active' => false],
        ['id' => 5, 'title' => 'Dernier appel', 'description' => 'Enquêtez et trouvez qui est le criminel.', 'active' => false],
        ['id' => 6, 'title' => 'Reflet', 'description' => 'Une thérapie virtuelle qui en sait plus que vous...', 'active' => false],
    ];
    return view('stories.index', compact('stories'));
})->middleware(['auth'])->name('stories.index');

// Route pour démarrer une histoire (enregistre l'ID de l'histoire en session)
Route::post('/story/start', function (Request $request) {
    session(['story_id' => $request->input('story_id')]);
    return redirect()->route('story.play');
})->name('story.start');

// Affiche le lecteur de chapitre d'une histoire (vue principale de lecture)
Route::get('/story', function () {
    return view('story.play');
})->name('story.play')->middleware(['auth']);

// Route pour démarrer une histoire (middleware admin)
// Route::get('/story', function () {
//     return view('story.play');
// })->name('story.play')->middleware(['auth', AdminMiddleware::class]);