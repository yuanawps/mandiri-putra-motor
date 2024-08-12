<?php

namespace App\Models;

use CodeIgniter\Model;

class DataGaleriModel extends Model
{
    protected $table            = 'data_galeri';
    protected $primaryKey       = 'id_galeri';
    protected $returnType       = 'object';
    protected $allowedFields    = ['foto_galeri', 'id_admin'];

    //    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'updated_at';
}
