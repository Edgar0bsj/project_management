<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class Login extends BaseController
{
    private $userModel;
    // -----------------------------------------------
    public function __construct()
    {
        $this->userModel = new UsuariosModel();
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

        $usuario = $this->userModel->where(['email' => $email])->find();

        if (!empty($usuario)) {
            $verificEmail = $usuario[0]['email'] === $email ?? true;
            $verificSenha = $usuario[0]['senha'] === md5($senha) ?? true;

            if ($verificEmail && $verificSenha) {
                return redirect()->route('Dashboard');
            }
        } else {

            // ---------------validando dados-----------------
            return view('Login/index',['erro'=>'Senha ou Email Inválidos']);
        }

    }

}
