<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('adminlogin'); // Afficher le formulaire de connexion
    }

    public function login(Request $request)
    {
        // Validation des données
        $request->validate([
            'email' => 'required|email',
            'mot_de_passe' => 'required',
        ]);

        // Tentative de connexion
        if (Auth::attempt(['email' => $request->email, 'password' => $request->mot_de_passe])) {
            // Connexion réussie, redirige vers la page admin
            return redirect()->route('admin.dashboard'); // Redirige vers la route qui affiche admin.blade.php
        }

        // Si la connexion échoue, redirige avec un message d'erreur personnalisé
        return redirect()->back()->withErrors(['login' => "Vous n'êtes même pas un admin."]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login'); // Redirige vers le formulaire de connexion après déconnexion
    }
}
