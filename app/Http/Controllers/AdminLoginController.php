<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('adminlogin'); // Afficher le formulaire de connexion
    }

    public function login(Request $request)
    {
        // Désactiver la validation et la tentative de connexion
        // Peu importe les informations fournies, redirige directement vers la page admin

        // Redirection directe vers le tableau de bord de l'administrateur
        return redirect()->route('admin.dashboard'); // Redirige vers la vue admin.blade.php
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login'); // Redirige vers le formulaire de connexion après déconnexion
    }
}
