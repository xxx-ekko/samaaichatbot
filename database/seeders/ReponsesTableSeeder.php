<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reponse;

class ReponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reponses = [
            ['question' => 'Bonjour', 'reponse' => 'Salut ! Comment puis-je vous aider aujourd\'hui ?'],
            ['question' => 'Quels types d\'œuvres d\'art proposez-vous ?', 'reponse' => 'Nous proposons une large sélection de peintures, sculptures, photographies et éditions limitées.'],
            ['question' => 'Comment puis-je passer une commande ?', 'reponse' => 'Pour passer une commande, ajoutez simplement l\'œuvre d\'art souhaitée à votre panier et suivez les étapes de paiement.'],
            // ... ajoute d'autres questions/réponses ici
        ];

        foreach ($reponses as $reponse) {
            Reponse::create($reponse);
        }
    }
}
