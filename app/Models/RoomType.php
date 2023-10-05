<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomType extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'room_types';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'service_id', 'shortcode', 'description', 'capacity', 'max_capacity', 'extra_bed', 'charge_addbed',
                                 'status', 'price', 'image', 'highestPrice'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    

    //
}
