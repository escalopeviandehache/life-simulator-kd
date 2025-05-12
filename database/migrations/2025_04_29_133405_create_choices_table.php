<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();                                  // identifiant unique
            $table->foreignId('chapter_id')                // référence au chapitre
                  ->constrained('chapters')
                  ->onDelete('cascade');
            $table->string('label');                       // texte affiché pour le choix
            $table->unsignedBigInteger('next_chapter_id')  // chapitre suivant si sélectionné
                  ->nullable();
            $table->json('effects')                        // effets possibles (ex : carrière, stats…)
                  ->nullable();
            $table->unsignedInteger('order')->default(0);  // position dans la liste des choix
            $table->timestamps();                          // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
