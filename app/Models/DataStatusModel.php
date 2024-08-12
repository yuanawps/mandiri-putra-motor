<?php

namespace App\Models;

use CodeIgniter\Model;

class DataStatusModel extends Model
{
    protected $table            = 'data_status';
    protected $primaryKey       = 'id_status';
    protected $returnType       = 'object';
    protected $allowedFields    = ['stok_mobil', 'jumlah_cabang', 'jumlah_karyawan', 'unit_terjual', 'id_admin'];

    //    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'updated_at';
}
