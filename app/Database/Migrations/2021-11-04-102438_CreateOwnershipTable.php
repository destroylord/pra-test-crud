<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOwnershipTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => true,
                'auto_increment'=> true
            ],

            'name' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            
            'businnes_entity' => [
                'type'          => 'ENUM',
                'constraint'    => ['0','1'],
                'default'       => '0'
            ],

            'individual' => [
                'type'          => 'ENUM',
                'constraint'    => ['0','1'],
                'default'       => '0'
            ],

            'foundation' => [
                'type'          => 'ENUM',
                'constraint'    => ['0','1'],
                'default'       => '0'
            ],
        ];

        $this->forge->addField($fields);
        
        $this->forge->addKey('id', TRUE);

        $this->forge->createTable('ownership', TRUE);

    }

    public function down()
    {
        $this->forge->dropTable('ownership');
    }
}
