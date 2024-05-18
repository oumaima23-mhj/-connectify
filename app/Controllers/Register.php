<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function register()
    {
        return view('persons/register_form');
    }

    public function save()
    {
        $validationRules = [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|valid_email',
            'password'   => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $data = [
            'first_name'  => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'     => $this->request->getPost('email'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ];

        $userModel->insert($data);

        return redirect()->to('/login')->with('success', 'Compte créé avec succès.');
    }
}
