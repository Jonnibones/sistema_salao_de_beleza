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

    public function auth()
    {
        $session = session(); 

        if ($this->request->getMethod() === 'post') 
        {
            $userModel = new \App\Models\UsersModel();

            $login = $this->request->getVar('login');
            $password = $this->request->getVar('password');

            $data = $userModel->where('login', $login)->first();

            $pass = $data->password;
            //die(var_dump($verify_pass));

            if ($password === $pass) 
            {
                $new_data = [

                    'id' => $data->id,
                    'login' => $data->login,
                    'name' => $data->name,
                    'logged' => TRUE

                ];

                $session->set($new_data);
                return redirect()->to('/admin/main');
            }
            else
            {
                //exibir uma mensagem de senha errada e redirecionar para o formulário de login
                $session->setFlashdata('msg', 'Senha errada.');
                $session->setFlashdata('alert', 'danger');
                return redirect()->to('/admin');
            }
            
        }else
        {
            return redirect()->to('/admin');
        }
        
    }

    public function main()
    {
        session();
        $dados = array(
            'view_principal' => 'main_admin',
            'title' => 'Sistema salão de beleza'
        );
        return view('master_view', $dados);
    }

    public function logoff()
    {
        $session = session();

        $new_data = [

            'id' => null,
            'email' => null,
            'password' => null,
            'name' => null,
            'logged' => FALSE

        ];

        $session->set($new_data);

        $session->setFlashdata('msg', 'Deslogado com sucesso!');
        $session->setFlashdata('alert', 'primary');

        return redirect()->to('/user_login');

    }
    
}
