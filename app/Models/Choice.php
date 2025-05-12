<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapter;

class Choice extends Model
{
    use HasFactory;

    // colonnes modifiables en masse
    protected $fillable = [
        'chapter_id',
        'label',
        'next_chapter_id',
        'effects',
        'order',
    ];

    // caster le JSON en tableau PHP
    protected $casts = [
        'effects' => 'array',
    ];

    /**
     * chapitre parent
     */
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    /**
     * chapitre suivant si ce choix est sélectionné
     */
    public function nextChapter()
    {
        return $this->belongsTo(Chapter::class, 'next_chapter_id');
    }
}