<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Data admin default
        $data = [
            [
                'nama_admin' => 'admin1',
                'email_admin' => 'yuanawangsap1@example.com',
                'password' => password_hash('yuana123', PASSWORD_DEFAULT),
            ],
            [
                'nama_admin' => 'adminmpm',
                'email_admin' => 'hermansibarani823@gmail.com',
                'password' => password_hash('mpm123', PASSWORD_DEFAULT),
            ],
        ];

        // Sisipkan data admin default
        $this->db->table('data_admin')->insertBatch($data);
    }
}
