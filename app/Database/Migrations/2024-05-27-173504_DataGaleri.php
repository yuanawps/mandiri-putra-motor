<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataGaleri extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_galeri' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'foto_galeri' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_galeri', true);
        $this->forge->createTable('data_galeri');
    }

    public function down()
    {
        $this->forge->dropTable('data_galeri');
    }
}
