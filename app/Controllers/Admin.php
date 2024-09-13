<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class Admin extends BaseController
{
    private $usuarioModel;
    private $session;
    private $sessionNome;
    private $sessionStatus;

    public function __construct()
    {
        $this->usuarioModel = new UsuariosModel();
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

        $usuariosInfoGeral = $this->usuarioModel->findAll();


        $data = [
            'nome_conta' => $this->sessionNome,
            'title' => 'Dashboard',
            'usuarios' => $usuariosInfoGeral,
        ];
        return view('Admin/principal', $data);
    }

    // -----------------------------------------------------



}
