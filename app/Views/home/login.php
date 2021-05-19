<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url('public/assets/css/bootstrap.css')?>" rel="stylesheet" >

    <title>Sistema Administrativo</title>
	  
	<style>
		html,
		body {
		  height: 100%;
		}

		body {
		  display: flex;
		  align-items: center;
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #f5f5f5;
		}

		.form-signin {
		  width: 100%;
		  max-width: 330px;
		  padding: 15px;
		  margin: auto;
		}
		.form-signin .checkbox {
		  font-weight: 400;
		}
		.form-signin .form-control {
		  position: relative;
		  box-sizing: border-box;
		  height: auto;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}  
	</style>
  </head>
  <body class="text-center">
	<main class="form-signin bg-white border rounded shadow">
	<form action="/Home/validation" method="post">
        <?= csrf_field() ?>	
		<img class="mb-4" src="<?= base_url('public/assets/img/logo.jpg')?>" alt=""  height="82">
		<h1 class="h3 mb-3 fw-normal">Sistema Administrativo</h1>
        <?= isset($alert)? $alert : ''?>
        <span class="text-danger text-left"><?= \Config\Services::validation()->listErrors(); ?></span>
		<label for="inputLogin" class="visually-hidden">Login</label>
		<input type="text" id="inputLogin" name="Usuário" class="form-control" placeholder="Usuário"  autofocus>
		<label for="inputSenha" class="visually-hidden">Password</label>
		<input type="password" id="inputSenha" name="Senha" class="form-control" placeholder="Senha" >
		<button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Acessar</button>
		
        <?php 
        /* 
          No argument required for current year.
          Otherwise, pass start year as a 4-digit value.
        */
        function auto_copyright($startYear = null) {
            if (!is_numeric($startYear) || intval($startYear) >= date('Y')) {
                echo "&copy; " . date('Y'); // display current year if $startYear is same or greater than this year
            } else {
                // Display range of years. Replace date('Y') with date('y') to display range of years in YYYY-YY format.
                echo "&copy; " . intval($startYear) . "&ndash;" . date('Y'); 
            }
        } 
        ?>

        <?php //auto_copyright(); // Current year?>
        
        <?php auto_copyright(2010); // Current year?>

	</form>
	</main>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>