<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    //--------------------------------------------------------------------
	public function __construct()
	{
	
		$this->model 	= new UsuarioModel();
		
	}
    
    //--------------------------------------------------------------------
	public function index()
	{
	
		echo view('template/header');
        echo view('home/index');
        echo view('template/footer');
		
	}
    
    //--------------------------------------------------------------------
	public function login()
	{
	
		echo view('home/login');
		
	}
    
	//--------------------------------------------------------------------
	public function validation()
	{	
        
		helper('form');
		
		$user = $this->request->getVar('Usuário');
		$pass = sha1($this->request->getVar('Senha'));
		
		$rules =[
				'Usuário' => 'required|min_length[3]|max_length[255]',
				'Senha' => 'required|min_length[3]|max_length[255]'
				];

		
		if (!$this->validate($rules))
		{
			echo view('home/login');
		}
		else
		{
			$login =$this->model
					->where('login', $user)
					->where('senha', $pass)
					->first();
			
			if($login)
			{
				
				$session 			= session();
				$session->loginUser	= $user;
				$session->nameUser	= $login['nome'];
				$session->idUser 	= $login['id'];
				
				
				return $this->index();
                
			}else{
                
                $alert =	'<div class="alert alert-danger" role="alert">
						  Usuário ou Senha incorretos!
						 </div>';
			
                $this->data = 	[
                                'alert'	=> $alert
                                ];

                echo view('home/login', $this->data);  
                
            }
			
		}
	}
    
    //--------------------------------------------------------------------
	public function logout()
	{
		$session = session();
		$session->destroy();
		
		echo view('home/login');

	
	}
	
}
