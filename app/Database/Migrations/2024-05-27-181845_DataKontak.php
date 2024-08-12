<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataKontak extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_kontak' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_input' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'alamat_kontak' => [
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ],
            'nomor_kontak' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'jam_operasional' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'email_kontak' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);
        $this->forge->addKey('id_kontak', true);
        $this->forge->createTable('data_kontak');
    }

    public function down()
    {
        $this->forge->dropTable('data_kontak');
    }
}
