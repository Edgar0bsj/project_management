<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'observacao'=>[
                'type'=> 'VARCHAR',
                'constraint'=> '400',
                'null'=>true,
            ]
        ]);
        $this->forge->addPrimaryKey('id')->addUniqueKey('telefone');
        $this->forge->createTable('Usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('Usuarios');
    }
}
