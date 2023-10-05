<?php

namespace App\Models;

use CodeIgniter\Model;

class PromoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'promos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'discount', 'description', 'roomtype_id', 'season', 'videoLink', 'thumbnail', 'expiration', 'status'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


 
}
