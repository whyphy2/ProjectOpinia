<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostType extends Migration
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
            'jenis' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ]
           
        ]);

        
        $this->forge->addKey('id', true);
        $this->forge->createTable('post_type');
    }

    public function down()
    {
        $this->forge->dropTable('post_type');
    }
}
