<?php
require 'environment.php';

define("BASE", "http://localhost/AulasB7Web/Zero_Proficional/PHP_SP_AVANCADO/cms/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'cms';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'cms';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
?>