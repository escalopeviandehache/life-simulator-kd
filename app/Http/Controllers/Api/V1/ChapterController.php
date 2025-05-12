<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * lister tous les chapitres
     */
    public function index()
    {
        return response()->json(Chapter::with('choices')->orderBy('order')->get());
    }

    /**
     * créer un nouveau chapitre
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'order'   => 'required|integer|min:0',
        ]);

        $chapter = Chapter::create($data);

        return response()->json($chapter, 201);
    }

    /**
     * afficher un chapitre précis
     */
    // public function show(Chapter $chapter)
    // {
    //     return response()->json($chapter->load('choices'));
    // }

    public function show($id)
{
    $chapter = Chapter::with('choices')->findOrFail($id);
    return response()->json($chapter);
}
    /**
     * mettre à jour un chapitre
     */
    public function update(Request $request, Chapter $chapter)
    {
        $data = $request->validate([
            'title'   => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'order'   => 'sometimes|required|integer|min:0',
        ]);

        $chapter->update($data);

        return response()->json($chapter);
    }

    /**
     * supprimer un chapitre
     */
    public function destroy(Chapter $chapter)
    {
        $chapter->delete();

        return response()->json(null, 204);
    }
}