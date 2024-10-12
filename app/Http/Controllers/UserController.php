<?php
//UserController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données envoyées
        $request->validate([
            'prenom_nom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        // Enregistrer les données dans la table `users`
        User::create([
            'prenom_nom' => $request->prenom_nom,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);

        // Stocker le prénom et le nom dans la session
        $nomComplet = $request->prenom_nom;
        session(['prenom_nom' => $nomComplet]);

        // Redirection vers la page du chatbot
        return redirect()->route('chatbot');
    }
}
