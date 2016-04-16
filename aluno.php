<?php
require('escola.php');
$alunos = $escola->fetchAll('Select * From aluno');
foreach($alunos as $aluno){
	print "<p> $aluno->nome(aluno->id) - Ações:
	<a href=\"zend-formulario-aluno.php?id=$aluno->id\">editar</a>
	|<a href=\"deleta-aluno.php?id=$aluno->id\">excluir> </a> </p>";
}
print "<a href=\"zend-formulario-aluno.php\">incluir</a>";