<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPromosiModel extends Model
{
    protected $table            = 'data_promosi';
    protected $primaryKey       = 'id_promosi';
    protected $returnType       = 'object';
    protected $allowedFields    = ['isi_promosi', 'judul_promosi'];

    //    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'updated_at';
}
