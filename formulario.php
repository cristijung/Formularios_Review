<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <title>Conexão com BD</title>
  </head>
  <body>
  <body style="font-family: 'Montserrat', sans-serif;">
    <section>
      <header style="background:#4682B4; font-family: 'Chilanka', cursive;">
		<h1><div style="color:#fff; padding-top:1%; padding-left:2%;">Tutorial</h1>
        <div style="padding-left:2%; padding-botton:1%; font-size:42px; font-weight:bold; color:#B0C4DE;">Conectando com Banco de Dados</div>
      </header>
	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Destaques</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Preços</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link disabled" href="#">Desativado</a>
			  </li>
			</ul>
		  </div>
		</nav>
	<section class="container">
		<div class="row">
			<div class="col-md-12"><h2>Contato</h2></div>		
		</div>
		<div class="row">
			<div class="col-md-6">
			
			<!--início do formulário-->
				<form action="controller/contato.controller.php" method="post" name="form01">
					<label for="txtnome">Nome:</label>
					<input type="text" name="txtnome" id="txtnome" class="form-control">
					<label for="txttelefone">Telefone:</label>
					<input type="text" name="txttelefone" id="txttelefone" class="form-control">
					<label for="txtemail">Email:</label>
					<input type="email" name="txtemail" id="txtemail" class="form-control">
					<label for="txtmensagem">Mensagem:</label>
					<textarea class="form-control" name="txtmensagem"></textarea>
					<hr>
					<input type="submit" value="Limpar" class="btn btn-info">
					<input type="submit" value="Enviar" class="btn btn-info">
				
				</form>	
			<!--encerramento de formulario-->
			</div>		
			<div class="col-md-6">
				<img src="img/banner_bd.jpg" class="card-img" alt="Conexão de Banco de Dados" title="Conexão de Banco de Dados"/>
			</div>		
		</div>
	
	
	</section>
    
	
	</section>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>