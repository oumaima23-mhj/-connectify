<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Logout extends Controller
{
    public function logout()
    {
        // Détruire la session
        $session = session();
        $session->destroy();
        
        // Rediriger vers la page de connexion avec un message de succès
        return redirect()->to('/login')->with('message', 'Déconnexion réussie.');
    }
}
