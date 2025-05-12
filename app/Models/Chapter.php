<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Choice;
use Illuminate\Support\Str;


class Chapter extends Model
{
    use HasFactory;

    // colonnes modifiables en masse
    protected $fillable = [
        'title',
        'content',
        'order',
    ];


    // expose explicitement ces champs + la relation
    protected $visible = ['id','title','content','order','choices'];


    
    public function choices()
    {
        return $this->hasMany(Choice::class)->orderBy('order');
    }

    /**
     * Lorsque l’on accède à $chapter->content,
     * on renvoie uniquement le texte avant la balise **Choix
     */
    public function getContentAttribute($value): string
    {
        return Str::before($value, '**Choix');
    }
}