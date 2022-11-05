<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dados = array(
            'view_principal' => 'main',
            'title' => 'Sistema salão de beleza'
        );
        return view('master_view', $dados);
    }
}
