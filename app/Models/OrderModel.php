<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'orders';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['order_no', 'room_type_id', 'room_id', 'checkin', 'checkout', 'adults', 'kids', 'request', 
                                'status', 'mode_payment', 'payment_proof', 'payment_ref', 'payment_stats', 'additional_person',
                                'additional_person_amount','amount', 'taxamount', 'paid_service_id', 'paid_service_amount', 
                                'totalamount', 'advance_amount', 'nigths', 'is_new', 'is_canecel_by_guest', 'reason_id', 'feedback'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


}
