<?php

namespace App\Models;
use CodeIgniter\Model;

class AuthModel extends Model {
    protected $table = 'newsoperators';
    protected $primarykey = 'userid';
    protected $allowedFields = ['username', 'password', 'firstname', 'lastname'];
    protected $returnType = 'object';
  }