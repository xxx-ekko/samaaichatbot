<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AgentController;

// Route pour afficher le formulaire d'inscription
Route::get('/', function () {
    return view('login'); // Formulaire d'inscription
});

// Route pour enregistrer les utilisateurs
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Route pour afficher le chatbot après l'inscription
Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot');

// Route pour gérer les réponses du chatbot
Route::post('/samaaichatbot', [ChatbotController::class, 'repondre']);

// Route pour afficher le tableau de bord de l'admin
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

// Route pour afficher le formulaire de connexion de l'administrateur
Route::get('/chatbot/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');

// Gérer la soumission du formulaire de connexion
Route::post('/chatbot/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Déconnexion de l'administrateur
Route::post('/chatbot/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Page après connexion
Route::get('/chatbot/admin/dashboard', function () {
    return view('admin'); // Remplace cette vue par celle que tu veux afficher pour l'admin
})->name('admin.dashboard'); // Retiré le middleware 'auth' pour permettre l'accès


Route::get('/chat-agent', function () {
    // Vous pouvez passer ici les données nécessaires comme le nom de l'utilisateur
    $prenomNom = 'Nom Prénom Utilisateur'; // Remplacer par la logique appropriée pour récupérer le nom
    return view('agent', ['prenomNom' => $prenomNom]);
})->name('agent.chat');


Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');