<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePersonnesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nom' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'prenom' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'pays' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'ville' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'code_postal' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'numero_telephone' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('personnes');
    }

    public function down()
    {
        $this->forge->dropTable('personnes');
    }
}
