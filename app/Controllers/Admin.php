<?php

namespace App\Controllers;

class Admin extends BaseController
{


    public function dashboard(): string
    {
        $data = ['title' => 'Dashboard'];
        return view('Admin/principal',$data);
    }

    // -----------------------------------------------------

    public function bancoDeDados(){
        $db = [];
        return $db;

    }


    
}
