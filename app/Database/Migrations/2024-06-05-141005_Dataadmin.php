<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dataadmin extends Migration
{
     public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_user' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('id_admin');
    }

    public function down()
    {
        $this->forge->dropTable('id_admin');
    }

}
