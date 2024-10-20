<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'prenom_nom', // Si tu veux toujours utiliser ce champ dans la base de données
        'email',
        'mot_de_passe',
    ];

    protected $hidden = [
        'mot_de_passe',
    ];

    // Hachage du mot de passe avant de le stocker
// Hachage du mot de passe avant de le stocker
        public function setMotDePasseAttribute($value)
        {
            $this->attributes['mot_de_passe'] = bcrypt($value);
        }

    

    // Utilisation de la colonne 'mot_de_passe' pour l'authentification
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }
}
