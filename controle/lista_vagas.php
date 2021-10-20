<?php
	include('config.php');
	
	$query = "SELECT v.id_vaga, v.titulo_vaga, v.descricao_vaga, v.data_criacao, v.salario, u.email, e.nome_empresa  FROM vagas AS v
			  INNER JOIN usuarios AS u ON u.id_usuario = v.id_usuario
			  INNER JOIN empresa AS e ON e.id_empresa = u.id_empresa
			  ORDER BY data_criacao";
	
	$bd = mysqli_query($conexao, $query) or die("Não foi possivel realizar a consulta");
		
	while($linha = mysqli_fetch_assoc($bd)){
		echo "<h1>".$linha['titulo_vaga']."</h1>";
		echo "<p align='justify'>".$linha['descricao_vaga']."</p>";
		echo "<hr>";
	}

?>