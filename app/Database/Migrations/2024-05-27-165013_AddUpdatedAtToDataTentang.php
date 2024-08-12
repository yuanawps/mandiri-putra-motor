<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToDataAbout extends Migration
{
    public function up()
    {
        $this->forge->addColumn('data_about', [
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('data_about', 'updated_at');
    }
}
