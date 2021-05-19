 
<main>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<div class="card bg-white border-0 shadow-sm">
				  <div class="card-body">
					<div class="row">
						<div class="col-12">
							<h5 class="card-title mb-5 text-uppercase">
								<a href="/Usuario" class="text-decoration-none text-dark me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
									  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
									</svg>							
								</a>
								Cadastrar
							</h5>
						</div>
					</div> 
					<div class="row">
						<div class="col-12">
							<span class="text-danger"><?= \Config\Services::validation()->listErrors(); ?></span>
							<?= !empty($alert)?$alert:''; ?>
						</div>
					</div>  
					<div class="row">
						<div class="col-12">
							<form method="post" action="/Usuario/save">	
							  <?= csrf_field() ?>
							  <div class="mb-3">
								<label for="LNome" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome" name="Nome">
							  </div>
							  <div class="mb-3">
								<label for="LLogin" class="form-label">Login</label>
								<input type="text" class="form-control" id="login" name="Login">
							  </div>
							  <div class="mb-3">
								<label for="LSenha" class="form-label">Senha</label>
								<input type="text" class="form-control" id="senha" name="Senha">
							  </div>
							  <button type="submit" class="btn btn-warning px-5">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
									  <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
									</svg>								  
								  	Salvar
							  </button>  
							</form>						
						</div>  
					</div>					  
										
				  </div>
				</div>			
			</div>
		</div>
	</div>
</main>


