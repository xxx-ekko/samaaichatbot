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
        // Validation des champs email et mot de passe
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Tentative d'authentification
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('admin.dashboard');
        }
    
        // Si l'authentification échoue, renvoyer une erreur
        return back()->withErrors([
            'email' => 'Les informations d\'identification ne sont pas valides.',
        ])->withInput($request->only('email'));
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
