<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'personnes'; // Name of the table in the database
    protected $primaryKey = 'id'; // Primary key of the table
    protected $allowedFields = [
        'nom', 
        'prenom', 
        'pays', 
        'ville', 
        'code_postal', 
        'email', 
        'numero_telephone'
    ]; // Fields allowed to be inserted or updated

    /**
     * Retrieve the list of all persons.
     *
     * @return array
     */
    public function getAllPersons(): array
    {
        return $this->findAll();
    }

    /**
     * Retrieve the details of a person by their ID.
     *
     * @param int $id
     * @return array|null
     */
    public function getPersonById(int $id): ?array
    {
        return $this->find($id);
    }

    /**
     * Insert a new person into the database.
     *
     * @param array $data
     * @return bool|int|string
     */
    public function insertPerson(array $data)
    {
        if ($this->validateData($data)) {
            return $this->insert($data);
        }
        return false;
    }

    /**
     * Update a person's information in the database.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updatePerson(int $id, array $data): bool
    {
        if ($this->validateData($data)) {
            return $this->update($id, $data);
        }
        return false;
    }

    /**
     * Delete a person from the database.
     *
     * @param int $id
     * @return bool
     */
    public function deletePerson(int $id): bool
    {
        return $this->delete($id);
    }

    /**
     * Validate the data before inserting or updating.
     *
     * @param array $data
     * @return bool
     */
    private function validateData(array $data): bool
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nom' => 'required|min_length[2]|max_length[50]',
            'prenom' => 'required|min_length[2]|max_length[50]',
            'pays' => 'required|max_length[50]',
            'ville' => 'required|max_length[50]',
            'code_postal' => 'required|numeric|max_length[10]',
            'email' => 'required|valid_email|max_length[100]',
            'numero_telephone' => 'required|numeric|max_length[15]'
        ]);

        return $validation->run($data);
    }
}
