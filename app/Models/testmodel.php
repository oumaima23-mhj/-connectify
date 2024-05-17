<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model
{
    protected $table = 'personnes'; // Nom de la table dans la base de données
    protected $primaryKey = 'id'; // Clé primaire de la table
    protected $allowedFields = ['nom', 'prenom']; // Champs autorisés à être insérés ou mis à jour

    // Méthode pour récupérer la liste des personnes
    public function getAllPersons()
    {
        return $this->findAll();
    }

    // Méthode pour récupérer les détails d'une personne par son ID
    public function getPersonById($id)
    {
        return $this->find($id);
    }

    // Méthode pour insérer une nouvelle personne dans la base de données
    public function insertPerson($data)
    {
        return $this->insert($data);
    }

    // Méthode pour mettre à jour les informations d'une personne dans la base de données
    public function updatePerson($id, $data)
    {
        return $this->update($id, $data);
    }

    // Méthode pour supprimer une personne de la base de données
    public function deletePerson($id)
    {
        return $this->delete($id);
    }
}
