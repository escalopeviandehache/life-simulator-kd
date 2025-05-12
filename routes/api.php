<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ChapterController;
use App\Http\Controllers\Api\V1\ChoiceController;
use App\Http\Controllers\Api\V1\ProgressController;

Route::prefix('v1')->group(function () {
    Route::apiResource('chapters', ChapterController::class);
    Route::apiResource('choices',  ChoiceController::class);
    Route::middleware('auth:sanctum')
         ->post('progress/choose/{choice}', [ProgressController::class, 'choose']);
});

  // Route::delete('/test', function () {
  //   return response()->json(['message' => 'Deleting']);
  // });

  // Route::post('/time', function () {
  //   $timeClient = request()->input('timeClient', 0);
  //   sleep(2); // Simulate a long-running process
  //   return response()->json(['timeClient' => $timeClient, 'timeServer' => now()]);
  // });

