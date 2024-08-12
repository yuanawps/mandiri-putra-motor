<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAlamatModel extends Model
{
    protected $table            = 'data_alamat';
    protected $primaryKey       = 'id_alamat';
    protected $returnType       = 'object';
    protected $allowedFields    = ['maps_alamat'];

    //    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'updated_at';
}
