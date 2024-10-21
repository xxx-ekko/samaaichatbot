<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reponse; // Assurez-vous d'importer le modèle Reponse

class AgentController extends Controller
{
    public function index()
    {
        // Récupérer le prénom et le nom de l'utilisateur depuis la session
        $prenomNom = session('prenom_nom', ''); // Fournit une valeur par défaut

        // Limiter à 4 questions
        $questions = Reponse::limit(4)->get();

        return view('welcome', compact('questions', 'prenomNom')); // Passer les variables à la vue
    }
}
