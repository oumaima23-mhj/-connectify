<?php
defined('BASEPATH') OR exit('No direct script access allowed...');

class Person_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Charger la base de données
        $this->load->database();
    }

    // Récupérer toutes les personnes
    public function get_all()
    {
        return $this->db->get('persons')->result();
    }

    // Récupérer une personne par son ID
    public function get_by_id($id)
    {
        return $this->db->get_where('persons', array('id' => $id))->row();
    }

    // Créer une nouvelle personne
    public function create($data)
    {
        $this->db->insert('persons', $data);
    }

    // Mettre à jour les informations d'une personne
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('persons', $data);
    }

    // Supprimer une personne par son ID
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('persons');
    }
}
