<?php
require ('escola.php');
if(empty($_POST['id'])){
	$criterio[] = 'id = '.$_GET['id'];
	if($escola->delete('aluno', $criterio)){
		header('LOCATION: aluno.php');	
}else{
	print "<p>operação não realizada</p>";
	}
}