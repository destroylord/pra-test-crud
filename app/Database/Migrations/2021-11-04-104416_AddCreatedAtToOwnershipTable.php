<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCreatedAtToOwnershipTable extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type' => 'DATETIME',
                'null'  => true,
                'after' => 'foundation'
                ]
            ];
            $this->forge->addColumn('ownership', $fields);

    }

    public function down()
    {
        $this->forge->dropColumn('ownership', 'created_at');
    }
}
