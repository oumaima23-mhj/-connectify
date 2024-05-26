<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        helper(['form']);

        // Vérifier si la méthode de requête est POST
        if ($this->request->getMethod() == 'post') {
            // Définir les règles de validation
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]'
            ];

            // Valider les données soumises
            if (!$this->validate($rules)) {
                // Si la validation échoue, retourner à la vue login avec les erreurs
                return view('login', [
                    'validation' => $this->validator
                ]);
            } else {
                // Si la validation réussit, vérifier l'utilisateur
                $userModel = new UserModel();
                $user = $userModel->where('email', $this->request->getPost('email'))->first();

                if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                    // Si l'utilisateur est trouvé et le mot de passe est correct, définir la session utilisateur
                    $this->setUserSession($user);
                    return redirect()->route('liste');
                } else {
                    // Si l'authentification échoue, retourner à la vue login avec une erreur
                    session()->setFlashdata('error', 'Email ou mot de passe incorrect');
                    return redirect()->back()->withInput();
                }
            }
        }

        // Si la méthode de requête n'est pas POST, retourner à la vue login
        return view('login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'email' => $user['email'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }
}
