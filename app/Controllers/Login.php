<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index()
    {

        return view('Login/index');
    }


    public function verificarLogin()
    {
        $email = $this->request->getVar('email');
        $senha = $this->request->getVar('senha');

        $base = $this->bancoDeDados();

        foreach ($base as $chave) {
            if ($email===$chave['email'] && $senha===$chave['senha']) {
                echo "TO DENTRO!";
                die();
            }else {
                echo "ERRO!";
            }
        }


    }

    // -----------------------------------------------------

    public function bancoDeDados()
    {
        $db = [
            [
                'email' => 'chaves@gmail.com',
                'senha' => '123456',
                'info' =>['nome'=>'chaves'],
            ],
            [
                'email' => 'barriga@gmail.com',
                'senha' => '123456',
                'info' =>['nome'=>'barriga'],
            ],
            [
                'email' => 'florinda@gmail.com',
                'senha' => '123456',
                'info' =>['nome'=>'florinda'],
            ],
            [
                'email' => 'kiko@gmail.com',
                'senha' => '123456',
                'info' =>['nome'=>'kiko'],
            ],

        ];
        return $db;

    }



}
