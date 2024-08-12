<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToDataStatus extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_status', [
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_status', 'updated_at');
    }
}
