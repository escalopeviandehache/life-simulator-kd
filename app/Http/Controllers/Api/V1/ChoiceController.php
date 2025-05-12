<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * lister tous les choix
     */
    public function index()
    {
        return response()->json(Choice::with(['chapter', 'nextChapter'])->orderBy('order')->get());
    }

    /**
     * créer un nouveau choix
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'chapter_id'      => 'required|exists:chapters,id',
            'label'           => 'required|string|max:255',
            'next_chapter_id' => 'nullable|exists:chapters,id',
            'effects'         => 'nullable|array',
            'order'           => 'required|integer|min:0',
        ]);

        $choice = Choice::create($data);

        return response()->json($choice, 201);
    }

    /**
     * afficher un choix précis
     */
    public function show(Choice $choice)
    {
        return response()->json($choice->load(['chapter', 'nextChapter']));
    }

    /**
     * mettre à jour un choix
     */
    public function update(Request $request, Choice $choice)
    {
        $data = $request->validate([
            'chapter_id'      => 'sometimes|required|exists:chapters,id',
            'label'           => 'sometimes|required|string|max:255',
            'next_chapter_id' => 'nullable|exists:chapters,id',
            'effects'         => 'nullable|array',
            'order'           => 'sometimes|required|integer|min:0',
        ]);

        $choice->update($data);

        return response()->json($choice);
    }

    /**
     * supprimer un choix
     */
    public function destroy(Choice $choice)
    {
        $choice->delete();

        return response()->json(null, 204);
    }
}