<?php
require ('Zend/Loader/Autoloader.php');
Zend_Loader_Autoloader::getInstance();

$config = new Zend_Config_Ini('escola.ini','database');
$escola = Zend_Db::factory($config->adapter,$config->params);
$escola->getConnection();
$escola->setFetchMode(Zend_Db::FETCH_OBJ);