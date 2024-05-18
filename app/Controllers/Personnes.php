<?php

namespace App\Controllers;

use App\Models\ContactModel; // Correct the model name here
use CodeIgniter\Controller;

class Personnes extends Controller
{
    public function liste()
    {
        $contactModel = new ContactModel(); // Correct the variable name here
        $data['personnes'] = $contactModel->findAll();

        return view('liste', $data);
    }
    public function add()
    {
        return view('ajouter');
    }

        public function detail($id)
        {
            $contactModel = new ContactModel();
            $personne = $contactModel->find($id);
    
            if (!$personne) {
                return redirect()->to('/liste')->with('error', 'Personne introuvable.');
            }
    
            // Passer les détails de la personne à la vue
            $data['personne'] = $personne;
            return view('detail', $data);
        }
    
        public function modifier($id)
        {
            // Si le formulaire est soumis
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
    
                // Mettre à jour les informations de la personne dans la base de données
                if ($contactModel->update($id, $data)) {
                    return redirect()->to('/liste')->with('success', 'Les informations de la personne ont été mises à jour avec succès.');
                } else {
                    return redirect()->to('/modifier' . $id)->with('error', 'Échec de la mise à jour des informations.');
                }
            }
    
            // Si le formulaire n'est pas encore soumis, afficher le formulaire de modification
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
    
            // Supprimer la personne de la base de données
            if ($contactModel->delete($id)) {
                return redirect()->to('/liste')->with('success', 'La personne a été supprimée avec succès.');
            } else {
                return redirect()->to('/liste')->with('error', 'Échec de la suppression de la personne.');
            }
        }
    
        public function ajouter()
        {
            // Si le formulaire est soumis
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
    
                // Enregistrer les données dans la base de données
                if ($contactModel->insert($data)) {
                    return redirect()->to('/liste')->with('success', 'Le contact a été ajouté avec succès.');
                } else {
                    return redirect()->to('/ajouter')->with('error', 'Échec de l\'ajout du contact.');
                }
            }
    
            // Afficher le formulaire d'ajout si le formulaire n'est pas soumis
            return view('ajouter');
        }
    }
    

