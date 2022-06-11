<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Articel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'type' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            'user' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('articel');
    }

    public function down()
    {
        $this->forge->dropTable('articel');
    }
}
