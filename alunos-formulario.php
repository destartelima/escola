<?php
require 'Alunos.php';


$id = null;
$nome = null;
$ano_ingresso = null;
$email = null;

// verificar se vai inserir ou alterar

if(isset($_GET['id'])){
	$tabela = new Alunos();
	if ($aluno = $tabela->find($_GET['id'])->current()){
		$id = $aluno->id;
		$nome = $aluno->nome;
		$ano_ingresso = $aluno->ano_ingresso;
		$email = $aluno->email;
	}
}//caso contrário permanecem valores nulos 

$form = new Zend_Form();
$form->setAction('alunos-atualizar.php');
$form->setMethod('post');

$element = new Zend_Form_Element_Text('id');
$element->setLabel('Id: ');
$element->setAttrib('readonly','readonly');
$element->setValue($id);//valor padrão de $id
$form->addElement($element);

$element = new Zend_Form_Element_Text('nome');
$element->setLabel('Nome: ');
$element->setValue($nome);
$form->addElement($element);

// 
$element = new Zend_Form_Element_Text('email');
$element->setLabel('Email:');
$element->setValue($email);
$form->addElement($element);

$element = new Zend_Form_Element_Text('ano_ingresso');
$element->setLabel('Ano Entrada: ');
$element->setValue($ano_ingresso);
$form->addElement($element);

$element = new Zend_Form_Element_Submit('Gravar');
$form->addElement($element);

//Construir o elemento Button Voltar

$element = new Zend_Form_Element_Button("Voltar");
$element->setAttrib('onclick', 'location.assign("alunos-listar.php")');
$form->addElement($element);


$form->setView(new Zend_View());
print $form;

