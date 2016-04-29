<?php
require('Alunos.php');
$tabela = new Alunos();
$alunos = $tabela->fetchAll();


foreach($alunos as $aluno){
	print"<p>$aluno->nome,$aluno->ano_ingresso($aluno->email).
	| <a href=\"alunos-formulario.php?id=$aluno->id\">Editar </a></p>";
	
}