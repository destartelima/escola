<?php
require('escola.php');
$id = null;
$nome = null;
$rg = null;
$cpf = null;
if(isset($_GET['id'])){
	if($aluno = $escola->fetchRow('SELECT * FROM aluno WHERE id='.$_GET['id'])){
		$id = $aluno->id;
		$nome = $aluno->nome;
		$rg = $aluno->rg;
		$cpf = $aluno->cpf;
	}
	
}
$form = new Zend_Form('aluno');
$form->setAction('altera-aluno.php');
$form->setMethod('POST');
//definindo campos do formulário

$element = new Zend_Form_Element_Text('id');
$element->setLabel('Id: ');
$element->setValue($id);
$element->setAttrib('readonly','readonly');
$form->addElement($element);

$element = new Zend_Form_Element_Text('nome');
$element->setLabel('Nome: ');
$element->setValue($nome);
$form->addElement($element);

// criar os elementos para 'interpret' e 'jahr'
$element = new Zend_Form_Element_Text('email');
$element->setLabel('Email:');
$element->setValue($email);
$form->addElement($element);

$element = new Zend_Form_Element_Text('ano_entrada');
$element->setLabel('Ano Entrada: ');
$element->setValue($ano_entrada);
$form->addElement($element);

$element = new Zend_Form_Element_Submit('Gravar');
$form->addElement($element);
$form->setView(new Zend_View());

print $form;
