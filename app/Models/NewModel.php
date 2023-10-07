<?php

namespace App\Models;

use CodeIgniter\Model;

class NewModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'news';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'status'];



    protected $validationRules      = [
        'email' =>'required|is_unique[news.email]'
    ];

    protected $cleanValidationRules = true;
   

}
