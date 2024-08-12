<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataPromosi extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_promosi' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'isi_promosi' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_promosi', true);
        $this->forge->createTable('data_promosi');
    }

    public function down()
    {
        $this->forge->dropTable('data_promosi');
    }
}
