<?php

namespace App\Models;

use CodeIgniter\Model;

class HousekeepingModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'housekeeping';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['room_id','status','remarks','user_id','date_limit','date_finish'];

    protected $deletedField  = 'deleted_at';
}
