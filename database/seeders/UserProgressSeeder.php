<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserProgress;
use Carbon\Carbon;

class UserProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // vider les données existantes
        UserProgress::truncate();

        // créer une progression initiale pour chaque utilisateur
        $users = User::all();
        foreach ($users as $user) {
            UserProgress::create([
                'user_id'    => $user->id,
                'chapter_id' => 1,
                'stats'      => ['passion' => 0, 'motivation' => 0, 'clarity' => 0],
                'history'    => [],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $this->command->info('User progress insérée avec succès!');
    }
}
