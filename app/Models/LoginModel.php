<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'users'; // Nom de la table des utilisateurs
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password']; // Champs autorisés à être insérés/actualisés

    // Méthode pour authentifier l'utilisateur
    public function authenticate($username, $password)
    {
        $user = $this->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }
}
