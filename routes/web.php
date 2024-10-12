<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminLoginController;

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

// Page après connexion (à créer plus tard)
Route::get('/chatbot/admin/dashboard', function () {
    return view('admin'); // À remplacer par la vue appropriée plus tard
})->name('admin.dashboard')->middleware('auth');
