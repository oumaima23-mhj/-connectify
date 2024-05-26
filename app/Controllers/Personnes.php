<?php

namespace App\Controllers;

use App\Models\PersonnesModel;
use CodeIgniter\Controller;

class Personnes extends Controller
{
    public function liste()
    {
        $personnesModel = new PersonnesModel();
        $data['personnes'] = $personnesModel->findAll();
        return view('personnes/liste', $data);
    }

    public function ajouter()
    {
        
        return view('personnes/ajouter' );
    }

    public function detail($id)
    {
        $personnesModel = new PersonnesModel();
        $data['personne'] = $personnesModel->find($id);
        return view('personnes/detail', $data);
    }

    public function store()
    {
        $personnesModel = new PersonnesModel();
        $data = [
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'pays' => $this->request->getPost('pays'),
            'ville' => $this->request->getPost('ville'),
            'code_postal' => $this->request->getPost('code_postal'),
            'email' => $this->request->getPost('email'),
            'numero_telephone' => $this->request->getPost('numero_telephone'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $personnesModel->save($data);
        return redirect()->to('/personnes/liste');
    }
    

    public function modifier($id)
    {
        $personnesModel = new PersonnesModel();
        $data['personne'] = $personnesModel->find($id);
        return view('personnes/modifier', $data);
    }

    public function update($id)
    {
        $personnesModel = new PersonnesModel();
        $data = [
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'pays' => $this->request->getPost('pays'),
            'ville' => $this->request->getPost('ville'),
            'code_postal' => $this->request->getPost('code_postal'),
            'email' => $this->request->getPost('email'),
            'numero_telephone' => $this->request->getPost('numero_telephone'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $personnesModel->update($id, $data);
        return redirect()->to('/personnes/liste');
    }

    public function supprimer($id)
    {
        $personnesModel = new PersonnesModel();
        $personnesModel->delete($id);
        return redirect()->to('/personnes/liste');
    }

    public function confirmer_suppression($id)
    {
        $personnesModel = new PersonnesModel();
        $data['personne'] = $personnesModel->find($id);
        return view('personnes/confirmer_suppression', $data);
    }
}
