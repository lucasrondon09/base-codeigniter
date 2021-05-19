<?php

function permission()
{
	$session = session();
		
	if(!isset($session->idUser)){
		$session->destroy();
		throw new \CodeIgniter\Exceptions\PageNotFoundException('Você precisa estar logado na aplicação!');
		

	}
}