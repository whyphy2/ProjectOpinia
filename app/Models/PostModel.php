<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'post_type';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['jenis','type'];

    // Dates

}
