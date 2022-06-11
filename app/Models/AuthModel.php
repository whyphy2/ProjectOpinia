<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model 
{
    protected $table = "user";
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name','email','password','phone'];



}