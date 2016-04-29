<?php
require ('autoloader.php');


$escola = Zend_Db::factory('PDO_MYSQL', array(
'hostname'=>'localhost',
'username'=>'root',
'password'=>'',
'dbname'=>'escola'));
Zend_Db_Table_Abstract::setDefaultAdapter($escola);