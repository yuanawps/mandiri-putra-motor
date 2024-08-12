<?php

namespace App\Models;

use CodeIgniter\Model;

class DataTentangModel extends Model
{
    protected $table            = 'data_about';
    protected $primaryKey       = 'id_about';
    protected $returnType       = 'object';
    protected $allowedFields    = ['isi_about', 'video_about', 'foto_about', 'no_kontak'];

    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'updated_at';
}
