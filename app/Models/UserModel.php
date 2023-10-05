<?php

namespace App\Models;
use App\Libraries\Hash;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'password', 'usertype', 'status'];

       // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [
        'email' =>'required|is_unique[users.email]', 
        'password' => 'required|min_length[8]'];

    protected $cleanValidationRules = true;
   
    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert    = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) {
            return $data;
        }
        $data['data']['password'] = Hash::make($data['data']['password']);
        return $data;
    }

   

}
