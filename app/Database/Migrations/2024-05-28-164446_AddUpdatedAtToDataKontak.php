<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToDataKontak extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_kontak', [
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_kontak', 'updated_at');
    }
}
