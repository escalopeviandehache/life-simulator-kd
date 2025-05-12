<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // ordre d’exécution des seeders
        $this->call([
            UserSeeder::class,
            ChapterSeeder::class,
            ChoiceSeeder::class,
        ]);
    }


}