<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function register()
    {
        return view('register');
    }

    public function alert()
    {
        // Votre logique pour valider et ajouter l'utilisateur

        // Ajouter un message flash pour indiquer que l'inscription a réussi
        session()->setFlashdata('success', 'Inscription réussie !');

        // Rediriger vers une autre page ou afficher une vue
        return redirect()->to('Login');
    }
}
