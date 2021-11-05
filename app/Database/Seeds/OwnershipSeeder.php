<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class OwnershipSeeder extends Seeder
{
    public function run()
    {
        $ownership_data = [
            [
                'name'              => 'Pemerintahan',
                'businnes_entity'   => '0',
                'individual'        => '1',
                'foundation'        => '0',
                'created_at'        => Time::now()
            ],

            [
                'name'              => 'BUMN',
                'businnes_entity'   => '0',
                'individual'        => '1',
                'foundation'        => '0',
                'created_at'        => Time::now()
            ],

            [
                'name'              => 'Swasta',
                'businnes_entity'   => '1',
                'individual'        => '1',
                'foundation'        => '1',
                'created_at'        => Time::now()
            ],
        ];


        foreach ($ownership_data as $data ) {
            $this->db->table('ownership')->insert($data);
        }

    }
}
