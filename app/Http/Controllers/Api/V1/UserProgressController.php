<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Choice;
use App\Models\UserProgress;
use App\Services\ProgressService;
use Illuminate\Support\Facades\Auth;



class UserProgressController extends Controller
{
    // récupère ou crée une progression initiale
    public function show(Request $request)
    {
        $user = $request->user();
        return $user->progress()->firstOrCreate([], [
            'chapter_id' => 1,
            'stats'      => ['passion'=>0,'motivation'=>0,'clarity'=>0],
            'history'    => [],
        ]);
    }

    // create/update
    public function storeOrUpdate(Request $request)
    {
        $data = $request->validate([
            'chapter_id' => 'required|exists:chapters,id',
            'stats'      => 'required|array',
            'history'    => 'sometimes|array',
        ]);

        $progress = $request->user()->progress;
        $progress->update($data);

        return response()->json($progress);
    }

    // reset explicit
    public function reset(Request $request)
    {
        $progress = $request->user()->progress;
        $progress->update([
          'chapter_id' => 1,
          'stats'      => ['passion'=>0,'motivation'=>0,'clarity'=>0],
          'history'    => [],
        ]);

        return response()->json($progress);
    }
}