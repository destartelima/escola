<?php
require('escola.php');
$aluno = array('aluno'=> $_POST('aluno'),'rg'=> $_POST('rg'),
		'cpf'=>$_POST('cpf'));

if($aluno->insert('aluno', $aluno)){
	print "<p> Registro Inserido </p>";
	print "<p><a href=\"aluno.php\">Listar</a></p>";
}
