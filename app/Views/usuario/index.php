	<script type="text/javascript">

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
	</script>
<main>
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<div class="card bg-white border-0 shadow-sm">
				  <div class="card-body">
					<div class="row">
						<div class="col-8">
							<h5 class="card-title mb-5 text-uppercase">Cadastro de Usuários</h5>
						</div>
						<div class="col-4">
							<form action="/Usuario" method="get"> 
								<input type="text" class="form-control form-control-sm border-0 bg-light" id="busca" name="busca" placeholder="Buscar">
							</form>	
						</div>
					</div> 
					<div class="row">
						<div class="col-12">
							<a href="/Usuario/create" class="btn btn-warning  mb-3 px-5">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
								  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
								  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
								Cadastrar
							</a>						
						</div>  
					</div>  
					<div class="row">
						<div class="col-12">
							<?= !empty($alert)?$alert:''; ?>
						</div>  
					</div>  
					<div class="row">
						<div class="col-12">
							<table class="table table-sm table-hover">
							  <thead>
								<tr>
								  <th scope="col">ID</th>
								  <th scope="col">Nome</th>
								  <th scope="col">Login</th>
								  <th scope="col" class="col-2"></th>
								</tr>
							  </thead>
							  <tbody>
								  <?php foreach($table as $tableItem):?>
									<tr>	
									  <th scope="row"><?= $tableItem['id']?></th>
									  <td><?= $tableItem['nome']?></td>
									  <td><?= $tableItem['login']?></td>
									  <td class=" d-flex justify-content-end">
										<a href="/Usuario/edit/<?= $tableItem['id']?>" class="text-decoration-none mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
											  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
											</svg>
										</a>
										<a href="/Usuario/delete/<?= $tableItem['id']?>" class="text-decoration-none mx-2" onClick="return deletar()" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Excluir">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
											  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
											  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
											</svg>								  
										</a>						  
									  </td>	
									</tr>
								 <?php endforeach;?>   
							  </tbody>
							</table>
						</div>  
					</div>
					 				  
				  </div>
                <?= $pager->links('default', 'default_page') ?>    
				</div>			
			</div>
		</div>
	</div>
</main>


<script type="text/javascript">
	
	function deletar(){
		
		if(!confirm("Você deseja realmente excluir esse registro?")){
			
			return false;
			
		}else{
			return true;
		}
		
	}
	
</script>

