<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model 
{
    protected $table = "articel";
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['title','description','type','user'];
}