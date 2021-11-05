<?php

namespace App\Models;

use CodeIgniter\Model;

class Ownership extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'ownership';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'name', 'businnes_entity', 'individual', 'foundation'
    ];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
 

    public function search($searchData)
    {
        return $this->table('ownership')->like('name', $searchData);
    }
}
