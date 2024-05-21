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
            $data = [];
            helper(['form']);
    
            if ($this->request->getMethod() == 'post') {
                // Validation
                $rules = [
                    'email' => 'required|valid_email',
                    'password' => 'required|min_length[6]|validateUser[email,password]',
                ];
    
                $errors = [
                    'password' => [
                        'validateUser' => 'Email or Password do not match'
                    ]
                ];
    
                if (!$this->validate($rules, $errors)) {
                    $data['validation'] = $this->validator;
                } else {
                    // Set the user session
                    $userModel = new UserModel();
                    $user = $userModel->where('email', $this->request->getPost('email'))->first();
    
                    $this->setUserSession($user);
    
                    return redirect()->route('liste');
                }
            }
    
            return view('login', $data);
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
    