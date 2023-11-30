<?php

namespace App\Models;
use CodeIgniter\Model;

class FormModel extends Model {
    protected $table = 'newsoperators';
    protected $primarykey = 'userid';
    protected $allowedFields = ['username', 'password', 'firstname', 'lastname'];
    protected $returnType = 'object';
  }