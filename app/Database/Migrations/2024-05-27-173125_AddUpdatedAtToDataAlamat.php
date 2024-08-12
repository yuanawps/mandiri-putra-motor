<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToDataAlamat extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_alamat', [
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_alamat', 'updated_at');
    }
}
