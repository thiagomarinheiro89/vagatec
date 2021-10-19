<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "vagatec";
	
	$conexao	= mysqli_connect($host, $user, $password, $database);
	
	$query = "SELECT * FROM usuarios";
	
	$bd = mysqli_query($conexao, $query) or die("Não foi possivel realizar a query");
	
	while($linha = mysqli_fetch_assoc($bd)){
		echo $linha['login']." - ".$linha['senha'];
		echo "<hr>";
	}
?>
