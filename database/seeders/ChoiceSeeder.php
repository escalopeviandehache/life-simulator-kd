<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Choice;
use App\Models\Chapter;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // supprimer tous les choix existants
        Choice::truncate();

        // données brutes : référence par ordre de chapitre
        $choicesData = [
            ['chapter_order'=>1, 'label'=>'Murmurer ton rêve à ton·ta meilleur·e ami·e dans la cour de récréation',            'next_order'=>2,  'effects'=>['passion'=>1,  'clarity'=>1],   'order'=>1],
            ['chapter_order'=>1, 'label'=>'Garder ton rêve secret et te fondre dans les attentes scolaires',   'next_order'=>3,  'effects'=>['motivation'=>-1,'clarity'=>-1], 'order'=>2],
            ['chapter_order'=>2, 'label'=>'Écrire un premier plan de projet sur un vieux cahier',         'next_order'=>4,  'effects'=>['motivation'=>1],            'order'=>1],
            ['chapter_order'=>2, 'label'=>'Douter encore et ranger ton idée au fond d’un tiroir',       'next_order'=>3,  'effects'=>['passion'=>-2, 'clarity'=>-1],  'order'=>2],
            ['chapter_order'=>3, 'label'=>'Chercher un mentor malgré la peur qui serre ta poitrine',         'next_order'=>4,  'effects'=>['passion'=>2,  'motivation'=>1],'order'=>1],
            ['chapter_order'=>3, 'label'=>'Rester dans ta zone de confort, là où tout est connu',           'next_order'=>5,  'effects'=>['clarity'=>-2],               'order'=>2],
            ['chapter_order'=>4, 'label'=>'Présenter ton plan à un investisseur sceptique mais curieux',      'next_order'=>6,  'effects'=>['motivation'=>2],            'order'=>1],
            ['chapter_order'=>4, 'label'=>'Peaufiner encore et encore chaque détail du projet',              'next_order'=>5,  'effects'=>['clarity'=>1,  'motivation'=>-1],'order'=>2],
            ['chapter_order'=>5, 'label'=>'Forcer le lancement malgré les doutes et les nuits blanches',         'next_order'=>6,  'effects'=>['passion'=>1,  'motivation'=>1],'order'=>1],
            ['chapter_order'=>5, 'label'=>'Abandonner le rêve et chercher un emploi stable et rassurant',    'next_order'=>7,  'effects'=>['passion'=>-3],              'order'=>2],
            ['chapter_order'=>6, 'label'=>'Retravailler le business model avec une nouvelle vision',           'next_order'=>8,  'effects'=>['clarity'=>2],               'order'=>1],
            ['chapter_order'=>6, 'label'=>'Tout lâcher et quitter la ville pour changer d’air',          'next_order'=>9,  'effects'=>['motivation'=>-2, 'clarity'=>-1],'order'=>2],
            ['chapter_order'=>7, 'label'=>'Reprendre tes études pour te réinventer',                    'next_order'=>8,  'effects'=>['passion'=>1,  'motivation'=>1],'order'=>1],
            ['chapter_order'=>7, 'label'=>'Te résigner à ta routine quotidienne sans éclat',                'next_order'=>25,'effects'=>[],                            'order'=>2],
            ['chapter_order'=>8, 'label'=>'Démarrer vite le projet avec énergie et impatience',                'next_order'=>10, 'effects'=>['passion'=>1,  'clarity'=>-1],'order'=>1],
            ['chapter_order'=>8, 'label'=>'Consolider l’équipe en misant sur la confiance mutuelle',                    'next_order'=>9,  'effects'=>['motivation'=>1],            'order'=>2],
            ['chapter_order'=>9, 'label'=>'Saisir cette nouvelle voie pleine d’incertitudes',             'next_order'=>11, 'effects'=>['passion'=>2,  'motivation'=>-1],'order'=>1],
            ['chapter_order'=>9, 'label'=>'Rester accroché·e au projet initial malgré les vents contraires',           'next_order'=>10, 'effects'=>['clarity'=>1],                'order'=>2],
            ['chapter_order'=>10,'label'=>'Réinvestir tous les profits pour faire grandir l’entreprise',           'next_order'=>12, 'effects'=>['motivation'=>2,  'clarity'=>-1],'order'=>1],
            ['chapter_order'=>10,'label'=>'Sécuriser une réserve financière pour les temps difficiles',       'next_order'=>11, 'effects'=>['clarity'=>2],               'order'=>2],
            ['chapter_order'=>11,'label'=>'Suivre la nouvelle direction dictée par les événements',          'next_order'=>13, 'effects'=>['motivation'=>1,  'passion'=>-1],'order'=>1],
            ['chapter_order'=>11,'label'=>'Te séparer de ton·ta associé·e malgré la douleur',             'next_order'=>12, 'effects'=>['clarity'=>-2, 'passion'=>1],  'order'=>2],
            ['chapter_order'=>12,'label'=>'Prendre un break imposé pour te recentrer',               'next_order'=>14, 'effects'=>['clarity'=>2,  'motivation'=>-1],'order'=>1],
            ['chapter_order'=>12,'label'=>'Pousser encore plus fort malgré la fatigue',             'next_order'=>13, 'effects'=>['motivation'=>2,  'clarity'=>-2],'order'=>2],
            ['chapter_order'=>13,'label'=>'Faire face publiquement aux défis et critiques',               'next_order'=>15, 'effects'=>['clarity'=>2],               'order'=>1],
            ['chapter_order'=>13,'label'=>'Fuir et couvrir l’affaire pour protéger ta réputation',              'next_order'=>24,'effects'=>['passion'=>-2,'motivation'=>-1],'order'=>2],
            ['chapter_order'=>14,'label'=>'Redéfinir ta vision avec clarté et passion renouvelée',                   'next_order'=>15, 'effects'=>['clarity'=>2,  'passion'=>1],  'order'=>1],
            ['chapter_order'=>14,'label'=>'Renoncer définitivement à ton rêve et tourner la page',               'next_order'=>27,'effects'=>['motivation'=>-3],         'order'=>2],
            ['chapter_order'=>15,'label'=>'Jouer la carte de l’émotion pour toucher les cœurs',           'next_order'=>23,'effects'=>['passion'=>2],              'order'=>1],
            ['chapter_order'=>15,'label'=>'Prouver tes chiffres et ta rigueur pour convaincre',     'next_order'=>26,'effects'=>['clarity'=>2],               'order'=>2],
            ['chapter_order'=>15,'label'=>'Proposer un compromis sentimental pour apaiser les tensions',      'next_order'=>28,'effects'=>['motivation'=>1,'clarity'=>1],'order'=>3],
            ['chapter_order'=>15,'label'=>'Révéler un secret explosif qui pourrait tout changer',             'next_order'=>16, 'effects'=>['passion'=>-1,'clarity'=>-2], 'order'=>4],
            ['chapter_order'=>16,'label'=>'Engager un avocat pour riposter face aux accusations',        'next_order'=>17, 'effects'=>['motivation'=>1],            'order'=>1],
            ['chapter_order'=>16,'label'=>'Confier un mea culpa sincère pour apaiser les tensions',          'next_order'=>18, 'effects'=>['passion'=>1,'clarity'=>1],   'order'=>2],
            ['chapter_order'=>17,'label'=>'Chercher du soutien thérapeutique pour surmonter la crise',     'next_order'=>18, 'effects'=>['clarity'=>2],              'order'=>1],
            ['chapter_order'=>17,'label'=>'Fuir la lumière et partir à l’étranger pour tout recommencer', 'next_order'=>30,'effects'=>['motivation'=>-2],         'order'=>2],
            ['chapter_order'=>18,'label'=>'Lancer un nouveau projet éthique porteur de sens',      'next_order'=>29,'effects'=>['passion'=>2,'clarity'=>1],  'order'=>1],
            ['chapter_order'=>18,'label'=>'Partager ton histoire comme conférencier inspirant', 'next_order'=>28,'effects'=>['motivation'=>2],           'order'=>2],
            ['chapter_order'=>19,'label'=>'Confier ton mal-être à un·e ami·e de confiance',      'next_order'=>20, 'effects'=>['clarity'=>1, 'motivation'=>1],'order'=>1],
            ['chapter_order'=>19,'label'=>'T’isoler encore davantage dans ta solitude',             'next_order'=>21, 'effects'=>['passion'=>-1,'clarity'=>-1],'order'=>2],
            ['chapter_order'=>20,'label'=>'Saisir une ultime lettre d’adieu pleine d’espoir',      'next_order'=>31,'effects'=>['clarity'=>1],              'order'=>1],
            ['chapter_order'=>20,'label'=>'Trouver une lueur de sens pour continuer à avancer',             'next_order'=>18, 'effects'=>['motivation'=>2,'clarity'=>1],'order'=>2],
            ['chapter_order'=>21,'label'=>'Voler le capital de ton entreprise dans un acte désespéré',    'next_order'=>22, 'effects'=>['motivation'=>1,'clarity'=>-1],'order'=>1],
            ['chapter_order'=>21,'label'=>'Saboter le projet d’un·e rival·e pour te protéger',      'next_order'=>22, 'effects'=>['passion'=>1,'motivation'=>-2],'order'=>2],
            ['chapter_order'=>22,'label'=>'Fuir le pays avec l’argent volé pour échapper à la justice',       'next_order'=>32,'effects'=>['motivation'=>-1,'clarity'=>-2],'order'=>1],
            ['chapter_order'=>22,'label'=>'Te rendre et subir le jugement avec courage',       'next_order'=>33,'effects'=>['clarity'=>1],              'order'=>2],
        ];

        foreach ($choicesData as $data) {
            $chapterId = Chapter::where('order', $data['chapter_order'])->value('id');
            $nextId    = $data['next_order'] ? Chapter::where('order', $data['next_order'])->value('id') : null;

            Choice::create([
                'chapter_id'      => $chapterId,
                'label'           => $data['label'],
                'next_chapter_id' => $nextId,
                'effects'         => $data['effects'],
                'order'           => $data['order'],
            ]);
        }

        $this->command->info('Choices insérés avec succès!');
    }
}
