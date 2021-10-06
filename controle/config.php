<?php
    $aluno = array();
	$aluno['nome'] = 'Thiago';
	$aluno['nome'] = 'Valeska';
	$aluno['idade'] = 25;
	$aluno['turma'] = '3TI-C';
	
	$aluno['materia'] = array();
	$aluno['materia'][0] = "Programação";
	$aluno['materia'][1] = "Banco de Dados";
	$aluno['materia'][2] = "TCC";
	
	$aluno['notas'] = array();
	$aluno['notas'][0] = 5;
	$aluno['notas'][1] = 7;
	$aluno['notas'][2] = 10;
	
	echo "<b>Nome do Aluno: </b>".$aluno['nome']."<br>";
	echo "<b>Idade do Aluno: </b>".$aluno['idade']."<br>";
	echo "<b>Turma do Aluno: </b>".$aluno['turma']."<br>";
	echo "<hr>";
	echo "<b>Boletim do aluno</b><hr>";
	
	for ($i = 0; $i < count($aluno['materia']); $i++)
	{
		echo $aluno['materia'][$i]." - Nota: <b>".$aluno['notas'][$i]."</b><br>";
	}
	echo "<hr>";
	?>	