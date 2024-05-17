<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContactUserTable extends Migration
{
    public function up()
    {
        // Ajout des colonnes existantes
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'prenom' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'adresse' => [ 
                'type'       => 'VARCHAR',
                'constraint' => '255', 
            ],
            'code_postal' => [ 
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'numero_telephone' => [ 
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'autre_numero' => [ 
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contact_user_table'); // Changement du nom de la table

    }

    public function down()
    {
        $this->forge->dropTable('contact-user-table');
    }
}
