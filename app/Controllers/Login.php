<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        // Validation des données du formulaire
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Charger le modèle
        $loginModel = new LoginModel();
        $user = $loginModel->where('username', $username)->first();

        // Vérification des informations d'identification
        if ($user && password_verify($password, $user['password'])) {
            // Démarrer la session
            $session = session();
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/')->with('success', 'Connexion réussie.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Nom d\'utilisateur ou mot de passe incorrect.');
        }
    }
}
