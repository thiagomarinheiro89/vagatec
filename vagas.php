<!DOCTYPE html>
<html lang="en">
<head>
  <title>VagaTec</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="index.html">VagaTec</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="vagas.php">Vagas</a></li>
          <li><a href="https://www.globalempregos.com.br/blog-do-emprego/" target="_blank">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><button class='btn btn-danger mt-5' style='float:right; margin-top: 7px;' onclick='$("#login").modal("show")'><span class='glyphicon glyphicon-user'></span> Entrar</button>
          </ul>
      </div>
    </div>
  </nav>
  <div class='banner'>
      <img src='img/banner.jpg' class='img-banner'>
          <h1 class='slogan'>Conte da gente, conte com a Gente<h1>
          <input class='form-control text-vaga' id='text-vaga'  placeholder="Pesquise por vagas (Cargo, Empresa ou localização)">
          <button class='btn btn-primary btn-search' id='btn-search'><span class='glyphicon glyphicon-search'></span> Pesquisar</button>
  </div>

	<div class='container' style='margin-top: 51vh'>
		<?php
			include("controle/lista_vagas.php");
		?>
	</div>

  <div class='rodape'>
    <hr>
    <center>
      <h3><b>Vaga</b>Tec</h3>
      2021 Todos os direitos reservados VagaTec - Site ativo desde 2015<br>
      É proibida a reprodução do conteúdo deste site, em qualquer meio, eletrônico ou impresso, sem autorização escrita.
    </center>
  </div>
  
 
  <!-- Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <p>Preencha os campos do formularios para realizar login.</p>
		<form id='form-login'>
			Login:
			<input type='text' name='login' class='form-control' placeholder='E-mail, CPF ou Usuario'>
			Senha:
			<input type='password' name='senha' class='form-control' placeholder='Senha'>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Logar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>
