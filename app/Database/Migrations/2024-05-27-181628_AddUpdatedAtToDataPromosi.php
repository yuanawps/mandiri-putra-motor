<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToDataPromosi extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_promosi', [
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_promosi', 'updated_at');
    }
}
