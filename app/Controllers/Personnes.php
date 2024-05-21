<?php

namespace App\Controllers;

use App\Models\ContactModel; 
use CodeIgniter\Controller;

class Personnes extends Controller
{
    public function liste()
    {
        $contactModel = new ContactModel(); 
        $data['personnes'] = $contactModel->findAll();

        return view('liste', $data);
    }
    public function add()
    {
        $contactModel = new ContactModel(); 
        $data['personnes'] = $contactModel->findAll();

        return view('ajouter');
    }

    public function detail($id)
    {
    
        $data['personne'] = $personne;
        return view('detail', $data);
    }
    
        public function modifier($id)
        {
            if ($this->request->getMethod() === 'post') {
                $contactModel = new ContactModel();
                $data = [
                    'nom' => $this->request->getPost('nom'),
                    'prenom' => $this->request->getPost('prenom'),
                    'pays' => $this->request->getPost('pays'),
                    'ville' => $this->request->getPost('ville'),
                    'code_postal' => $this->request->getPost('code_postal'),
                    'email' => $this->request->getPost('email'),
                    'numero_telephone' => $this->request->getPost('numero_telephone')
                ];

                if ($contactModel->update($id, $data)) {
                    return redirect()->to('/liste')->with('success', 'Les informations de la personne ont été mises à jour avec succès.');
                } else {
                    return redirect()->to('/modifier' . $id)->with('error', 'Échec de la mise à jour des informations.');
                }
            }
    
            $contactModel = new ContactModel();
            $data['personne'] = $contactModel->find($id);
    
            if (!$data['personne']) {
                return redirect()->to('/liste')->with('error', 'Personne introuvable.');
            }
    
            return view('modifier', $data);
        }
    
        public function supprimer($id)
        {
            $contactModel = new ContactModel();
            $personne = $contactModel->find($id);
    
            if (!$personne) {
                return redirect()->to('/liste')->with('error', 'Personne introuvable.');
            }
                if ($contactModel->delete($id)) {
                return redirect()->to('/liste')->with('success', 'La personne a été supprimée avec succès.');
            } else {
                return redirect()->to('/liste')->with('error', 'Échec de la suppression de la personne.');
            }
        }
    
        public function ajouter()
        {
  
            if ($this->request->getMethod() === 'post') {
                $data = [
                    'nom' => $this->request->getPost('nom'),
                    'prenom' => $this->request->getPost('prenom'),
                    'pays' => $this->request->getPost('pays'),
                    'ville' => $this->request->getPost('ville'),
                    'code_postal' => $this->request->getPost('code_postal'),
                    'email' => $this->request->getPost('email'),
                    'numero_telephone' => $this->request->getPost('numero_telephone')
                ];
    
                $contactModel = new ContactModel();
    
                if ($contactModel->insert($data)) {
                    return redirect()->to('/liste')->with('success', 'Le contact a été ajouté avec succès.');
                } else {
                    return redirect()->to('/ajouter')->with('error', 'Échec de l\'ajout du contact.');
                }
            }

            return view('ajouter');
        }
    }
    

