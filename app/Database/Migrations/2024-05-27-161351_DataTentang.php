<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataTentang extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_about' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'isi_about' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'video_about' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'foto_about' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'no_kontak' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_about', true);
        $this->forge->createTable('data_about');
    }

    public function down()
    {
        $this->forge->dropTable('data_about');
    }
}
