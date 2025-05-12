<?php
namespace App\Services;

use App\Models\Choice;
use App\Models\UserProgress;

class ProgressService
{
    /**
     * Apply a user's choice, updating stats and current chapter.
     *
     * @param  UserProgress  $progress
     * @param  Choice        $choice
     * @return UserProgress
     */
    public function applyChoice(UserProgress $progress, Choice $choice): UserProgress
    {
        // update stats
        $effects = $choice->effects;
        $progress->passion    += $effects['passion']    ?? 0;
        $progress->motivation += $effects['motivation'] ?? 0;
        $progress->clarity    += $effects['clarity']    ?? 0; // Fixed typo here

        // clamp values between 0 and 100
        $progress->passion    = max(0, min(100, $progress->passion));
        $progress->motivation = max(0, min(100, $progress->motivation));
        $progress->clarity    = max(0, min(100, $progress->clarity));

        // move to next chapter
        $progress->current_chapter_id = $choice->next_chapter_id;

        $progress->save();

        return $progress;
    }
}
