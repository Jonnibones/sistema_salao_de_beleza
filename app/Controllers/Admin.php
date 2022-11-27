<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $dados = array(
            'view_principal' => 'login_admin',
            'title' => 'Sistema salão de beleza'
        );
        return view('master_view', $dados);
    }
    
}
