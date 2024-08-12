<?php

namespace App\Models;

use CodeIgniter\Model;

class DataHeroModel extends Model
{
    protected $table            = 'data_hero';
    protected $primaryKey       = 'id_hero';
    protected $returnType       = 'object';
    protected $allowedFields    = ['konten_hero', 'video_hero', 'foto_hero', 'id_admin'];

    //    
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'updated_at';
}
