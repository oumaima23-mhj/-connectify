<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Charger le modèle Person_model
        $this->load->model('Person_model');
    }

    // Afficher la liste des personnes
    public function index()
    {
        $data['persons'] = $this->Person_model->get_all();
        $this->load->view('persons/index', $data);
    }

    // Afficher les détails d'une personne
    public function show($id)
    {
        $data['person'] = $this->Person_model->get_by_id($id);
        if (!$data['person']) {
            show_404(); // Afficher une erreur 404 si la personne n'existe pas
        }
        $this->load->view('persons/show', $data);
    }

    // Afficher le formulaire de création d'une nouvelle personne
    public function create()
    {
        $this->load->view('persons/create');
    }

    // Enregistrer une nouvelle personne
    public function store()
    {
        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Si la validation échoue, rechargez le formulaire avec les erreurs
            $this->load->view('persons/create');
        } else {
            $data = array(
                'code' => $this->input->post('code'),
                'name' => $this->input->post('name')
                // Ajouter d'autres champs au besoin
            );
            $this->Person_model->create($data);
            redirect('person/index');
        }
    }

    // Afficher le formulaire de mise à jour d'une personne
    public function edit($id)
    {
        $data['person'] = $this->Person_model->get_by_id($id);
        if (!$data['person']) {
            show_404(); // Afficher une erreur 404 si la personne n'existe pas
        }
        $this->load->view('persons/edit', $data);
    }

    // Mettre à jour les informations d'une personne
    public function update($id)
    {
        $this->form_validation->set_rules('code', 'Code', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Si la validation échoue, rechargez le formulaire avec les erreurs
            $this->load->view('persons/edit');
        } else {
            $data = array(
                'code' => $this->input->post('code'),
                'name' => $this->input->post('name')
                // Ajouter d'autres champs au besoin
            );
            $this->Person_model->update($id, $data);
            redirect('person/index');
        }
    }

    // Supprimer une personne
    public function delete($id)
    {
        $this->Person_model->delete($id);
        redirect('person/index');
    }
}
