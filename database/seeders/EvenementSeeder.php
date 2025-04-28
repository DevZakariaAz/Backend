<?php

namespace Database\Seeders;

use App\Models\Evenement;
use Illuminate\Database\Seeder;

class EvenementSeeder extends Seeder
{
    public function run()
    {
        $statuts = ['En cours', 'Terminé', 'Annulé'];
        $priorites = ['Haute', 'Moyenne', 'Basse'];

        for ($i = 0; $i < 10; $i++) {
            Evenement::create([
                'nom' => fake()->words(3, true),
                'statut' => $statuts[array_rand($statuts)],
                'priorite' => $priorites[array_rand($priorites)],
            ]);
        }
    }
}
