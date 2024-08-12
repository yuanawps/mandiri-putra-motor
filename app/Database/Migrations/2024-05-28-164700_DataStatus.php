<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataStatus extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_status' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'stok_mobil' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jumlah_cabang' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'waktu_terjual' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'unit_terjual' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_status', true);
        $this->forge->createTable('data_status');
    }

    public function down()
    {
        $this->forge->dropTable('data_status');
    }
}
