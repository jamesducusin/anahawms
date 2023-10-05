<?php

namespace App\Models;

use CodeIgniter\Model;

class FacilityType extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'facility_types';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'image'];

}
