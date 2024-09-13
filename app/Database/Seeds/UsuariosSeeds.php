<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeds extends Seeder
{
    public function run()
    {
        $data = [
            'nome'=>'chaves',
            'email'=>'chaves@azmail.com',
            'telefone'=>'21912345678',
            'senha'=>md5('a'),
        ];

        $this->db->table('Usuarios')->insert($data);
    }
}
