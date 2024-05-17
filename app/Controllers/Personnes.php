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

    public function Detail($id)
    {
        $personModel = new PersonModel();
        $personne = $personModel->find($id);

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
            $personModel = new PersonModel();
            $data = [
                'nom' => $this->request->getPost('nom'),
                'prenom' => $this->request->getPost('prenom')
                // Ajoutez d'autres champs à mettre à jour si nécessaire
            ];

            // Mettre à jour les informations de la personne dans la base de données
            $personModel->update($id, $data);

            return redirect()->to('/liste')->with('success', 'Les informations de la personne ont été mises à jour avec succès.');
        }

        // Si le formulaire n'est pas encore soumis, afficher le formulaire de modification
        $personModel = new PersonModel();
        $data['personne'] = $personModel->find($id);

        return view('modifier', $data);
    }

    public function supprimer($id)
    {
        $personModel = new PersonModel();
        $personne = $personModel->find($id);

        if (!$personne) {
            return redirect()->to('/liste')->with('error', 'Personne introuvable.');
        }

        // Supprimer la personne de la base de données
        $personModel->delete($id);

        return redirect()->to('/liste')->with('success', 'La personne a été supprimée avec succès.');
    }

    public function ajouter()
    {
        // Récupérer les données du formulaire
        $nom = $this->request->getPost('nom');
        $prenom = $this->request->getPost('prenom');
        $pays = $this->request->getPost('pays');
        $ville = $this->request->getPost('ville');
        $code_postal = $this->request->getPost('code_postal');
        $email = $this->request->getPost('email');
        $numero_telephone = $this->request->getPost('numero_telephone');

        // Valider les données si nécessaire

        // Enregistrer les données dans la base de données
        $personneModel = new PersonneModel();
        $personneData = [
            'nom' => $nom,
            'prenom' => $prenom,
            'paye' => $pays,
            'ville' => $ville,
            'code_postal' => $code_postal,
            'email' => $email,
            'numero_telephone' => $numero_telephone
        ];
        $personneModel->insert($personneData);

        // Rediriger vers la page de liste des personnes ou une autre page
        return redirect()->to(site_url('liste'))->with('success', 'Le contact a été ajouté avec succès');
    }
}

