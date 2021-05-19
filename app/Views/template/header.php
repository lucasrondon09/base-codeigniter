<?php $session = session();?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('public/assets/css/bootstrap.css')?>" rel="stylesheet" >
	<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>  
	  
    <title>Sistema Administrativo</title>
  </head>
  <body class="bg-light">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4 shadow">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">Sistema Administrativo</span></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="/Home">Home</a>
				</li>
                <li class="nav-item">
				  <a class="nav-link" href="/Usuario" tabindex="-1" aria-disabled="true">Usuários</a>
				</li>  
				<!--
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Item
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">Subitem</a></li>
					<li><a class="dropdown-item" href="#">Subitem</a></li>
				  </ul>
				</li>-->
			  </ul>
			  <div class="d-flex align-items-center">
					<a href="#" class="text-decoration-none mx-2 link-light">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
						  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
						</svg>
						<?= $session->nameUser;?>
				  	</a>
					<a class="btn btn-outline-warning mx-2 px-4" href="/Home/logout">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
						  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
						  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
						</svg>
						Sair
				    </a>
			  </div>
			</div>
		  </div>
		</nav>
	</header> 