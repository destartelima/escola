<?php
$dir_zend = '/home/aluno/Downloads/ZendFramework-1.12.17-minimal/library/';

$dir_atuais = get_include_path();

set_include_path($dir_atuais.PATH_SEPARATOR.$dir_zend);

require("Zend/Loader/Autoloader.php");
Zend_Loader_AutoLoader::getInstance();