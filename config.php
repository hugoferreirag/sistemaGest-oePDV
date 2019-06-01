<?php 
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/system/");
	$config['dbname'] = 'pdv';
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['dbpass'] = '';

}else{
	define("BASE_URL", "http://fersoftsolutions.com.br/");
	$config['dbname'] = 'mvc';
	$config['host'] = 'localhost';
	$config['user'] = 'root';
	$config['dbpass'] = '';

}
global $db;
try {
	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['user'], $config['dbpass'], $options);
	
} catch (PDOException $e) {
	echo "ERRO : ".$e->getMessage();
	exit;
	
}

