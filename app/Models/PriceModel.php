<?php

namespace App\Models;

use CodeIgniter\Model;

class PriceModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'prices';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['room_type_id','mon','tue','wed','thu','fri','sat','sun'];

 

  
}
