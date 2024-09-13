<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class Login extends BaseController
{
    private $userModel;
    private $session;

    // -----------------------------------------------
    public function __construct()
    {
        $this->userModel = new UsuariosModel();
        $this->session = \Config\Services::session();
    }

    // -----------------------------------------------
    public function index()
    {

        return view('Login/index');
    }

    // -----------------------------------------------

    public function verificarLogin()
    {
        $email = $this->request->getVar('email');
        $senha = $this->request->getVar('senha');

        // --verificando se existe no banco de dados-----------------

        $usuarioInfo = $this->userModel->where(['email' => $email])->find();

        if (!empty($usuarioInfo)) {
            $verificEmail = $usuarioInfo[0]['email'] === $email ?? true;
            $verificSenha = $usuarioInfo[0]['senha'] === md5($senha) ?? true;

            if ($verificEmail && $verificSenha) {

                $sessionDados = [
                    'nome' => $usuarioInfo[0]['nome'],
                    'status' => true
                ];

                $this->session->set($sessionDados);

                return redirect()->route('Dashboard');
            }else {
                return view('Login/index', ['erro' => 'Senha Inválidos']);
            }
        } else {

            // ---------------validando dados-----------------
            return view('Login/index', ['erro' => 'Senha ou Email Inválidos']);
        }

    }

    public function logout(){

        $this->session->destroy();
        return redirect()->route('login');

    }

}
