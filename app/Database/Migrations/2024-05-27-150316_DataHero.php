<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataHero extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_hero' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'konten_hero' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'video_hero' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_hero', true);
        $this->forge->createTable('data_hero');
    }

    public function down()
    {
        $this->forge->dropTable('data_hero');
    }
}
