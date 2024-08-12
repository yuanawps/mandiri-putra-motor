<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAdminModel extends Model
{
    protected $table      = 'data_admin';
    protected $primaryKey = 'id_admin';
    protected $returnType = 'object';
    protected $allowedFields = ['nama_admin', 'email_admin', 'password'];

    // Jika perlu, tambahkan method lain yang sesuai dengan kebutuhan
}
