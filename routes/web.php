<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\UserController;

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


Route::get('/admin', function () {
    return view('admin');
})->name('admin');
