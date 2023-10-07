<?php

namespace App\Models;

use CodeIgniter\Model;

class PaidServiceModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'paidservices';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['title','description','price','status'];


}
