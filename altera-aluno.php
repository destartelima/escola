<?php
	require('escola.php');
	$aluno = array(
		'nome' => $_POST['nome'],
		'email' => $_POST['email'],
		'ano_ingresso' => $_POST['ano_ingresso']
	);
	if(empty($_POST['id'])){
		if($escola->insert('aluno', $aluno)){
			header('LOCATION: aluno.php');
		}else{
			print "<p>Falha ao inserir registro.</p>";
		}
	}else{
		$criterio[] = 'id='.$_POST['id'];
		if($escola->update('aluno', $aluno, $criterio)){
			header('LOCATION: aluno.php');
		}else{
			print "<p>Falha ao alterar registro.</p>";
		}
	}
