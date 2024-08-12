<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataAlamat extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_alamat' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'maps_alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_alamat', true);
        $this->forge->createTable('data_alamat');
    }

    public function down()
    {
        $this->forge->dropTable('data_alamat');
    }
}
