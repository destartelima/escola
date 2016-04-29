<?php
require('escola.php');
$aluno = array('aluno'=> $_POST('aluno'),'nome'=> $_POST('nome'),
		'email'=>$_POST('email'));

if($aluno->insert('aluno', $aluno)){
	print "<p> Registro Inserido </p>";
	print "<p><a href=\"aluno.php\">Listar</a></p>";
}
