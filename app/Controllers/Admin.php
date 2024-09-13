<?php

namespace App\Controllers;

class Admin extends BaseController
{
    private $session;
    private $sessionNome;
    private $sessionStatus;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->sessionNome = \Config\Services::session()->get('nome');
        $this->sessionStatus = \Config\Services::session()->get('status');
    }



    public function dashboard(): string
    {
        $this->session->regenerate();

        if (!$this->sessionStatus) {
            return view('Login/index', ['erro' => 'você precisa está logado']);
        }


        $data = [
            'nome_conta' => $this->sessionNome,
            'title' => 'Dashboard',
        ];
        return view('Admin/principal', $data);
    }

    // -----------------------------------------------------



}
