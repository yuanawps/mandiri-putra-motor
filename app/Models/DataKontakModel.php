<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKontakModel extends Model
{
    protected $table            = 'data_kontak';
    protected $primaryKey       = 'id_kontak';
    protected $returnType       = 'object';
    protected $allowedFields    = ['alamat_kontak', 'nomor_kontak', 'email_kontak', 'jam_operasional', 'id_admin'];

    //    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'updated_at';
}
