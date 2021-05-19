<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Usuario extends Controller{
	//--------------------------------------------------------------------
	public function __construct()
	{
        helper('auth');
		permission();	
		$this->model	= new UsuarioModel();
	}
	
	//--------------------------------------------------------------------
	public function index()
	{	
		$busca = $this->request->getVar('busca');
		
		if(!empty($busca))
		{
			
			$this->data	=	[
							'table' => $this->model->like('nome', $busca)->paginate(10),
                            'pager'	=> $this->model->pager
													
							];
           

			
		}
		else
		{
			$this->data	=	[
							'table' => $this->model->paginate(10),
                            'pager'	=> $this->model->pager
							];

		}

		
		echo view('template/header');
		echo view('usuario/index', $this->data);
		echo view('template/footer');
	}
	
	//--------------------------------------------------------------------
	public function edit($id)
	{
		
		helper('form');
		
		$this->data = 	[
						'field' => $this->model->get($id)
						];
		
		echo view('template/header');
		echo view('usuario/edit', $this->data);
		echo view('template/footer');
	}
	
	//--------------------------------------------------------------------
	public function update($id)
	{
		
		helper('form');
		
		$rules =[
				'Nome'	=> 	'required|min_length[3]|max_length[255]',
				'Login'	=>	'required|min_length[3]|max_length[255]',
				'Senha'	=>	'required|min_length[3]|max_length[255]'
				];

		
		if (!$this->validate($rules))
		{
			$this->data = 	[
							'field' => $this->model->get($id)
							];
			
			echo view('template/header');
			echo view('usuario/edit', $this->data);
			echo view('template/footer');
		}
		else
		{
			
			
			$fields = 	[
						'nome'	=> $this->request->getVar('Nome'),
						'login'	=> $this->request->getVar('Login'),
						'senha'	=> $this->request->getVar('Senha')
						];
			

			$update = $this->model->update($id, $fields);
			
			if($update)
			{
				$alert =	'<div class="alert alert-success" role="alert">
							  Registro alterado com sucesso!
							 </div>';	
			}
			else
			{
				$alert =	'<div class="alert alert-danger" role="alert">
							  Não foi possível alterar o registro!
							 </div>';	
			}
			
			$this->data = 	[
							'alert' => $alert,
							'field' => $this->model->get($id)
							];
			
			echo view('template/header');
			echo view('usuario/edit', $this->data);
			echo view('template/footer');
			
		}
		
		
	}
	
	//--------------------------------------------------------------------
	public function create()
	{	
		echo view('template/header');
		echo view('usuario/create');
		echo view('template/footer');
	}
	
	//--------------------------------------------------------------------
	public function save()
	{
	
		helper('form');
		
		$rules =[
				'Nome'	=> 	'required|min_length[3]|max_length[255]',
				'Login'	=>	'required|min_length[3]|max_length[255]',
				'Senha'	=>	'required|min_length[3]|max_length[255]'
				];

		
		if (!$this->validate($rules))
		{
			echo view('template/header');
			echo view('usuario/create');
			echo view('template/footer');
		}
		else
		{
			
			
			$fields = 	[
						'nome'	=> $this->request->getVar('Nome'),
						'login' => $this->request->getVar('Login'),
						'senha' => $this->request->getVar('Senha')
						];
			

			$save = $this->model->insert($fields);
			
			if($save)
			{
				$alert =	'<div class="alert alert-success" role="alert">
							  Registro cadastrado com sucesso!
							 </div>';	
			}
			else
			{
				$alert =	'<div class="alert alert-danger" role="alert">
							  Não foi possível cadastrar o registro!
							 </div>';	
			}
			
			$this->data = 	[
							'alert' => $alert
							];
			
			echo view('template/header');
			echo view('usuario/create', $this->data);
			echo view('template/footer');
			
		}
		
		
	}
	
	//--------------------------------------------------------------------
	public function delete($id)
	{
		
		$delete = $this->model->delete($id);
		
		if($delete){
			$alert	= 	'<div class="alert alert-success alert-dismissible fade show" role="alert">
							  Registro excluído com sucesso!
							  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
		}else{
			$alert	= 	'<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  Não foi possível excluir o registro!
							  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';
		}
		
		$this->data = 	[
						'alert'	=> $alert,
						'table' => $this->model->get()
						];
		
		echo view('template/header');
		echo view('usuario/index', $this->data);
		echo view('template/footer');

	
	}

	
}
