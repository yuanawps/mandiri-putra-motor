<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToDataGaleri extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_galeri', [
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_galeri', 'updated_at');
    }
}
