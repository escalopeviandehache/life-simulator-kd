<?php
// app/Http/Controllers/Api/V1/ProgressController.php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Choice;
use App\Models\UserProgress;
use App\Services\ProgressService;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    protected ProgressService $service;

    public function __construct(ProgressService $service)
    {
        $this->service = $service;
    }

    /**
     * User chooses an option, progress updated accordingly
     */
    public function choose(Request $request, int $choiceId)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $choice = Choice::find($choiceId);
        if (!$choice) {
            return response()->json(['error' => 'Choice not found'], 404);
        }

        $progress = UserProgress::firstOrCreate(
            ['user_id' => $user->id],
            ['current_chapter_id' => null, 'passion' => 0, 'motivation' => 0, 'clarity' => 0]
        );

        $updated = $this->service->applyChoice($progress, $choice);

        return response()->json([
            'progress' => $updated,
            'next_chapter' => $updated->chapter ? $updated->chapter->load('choices') : null,
        ]);
    }
}

