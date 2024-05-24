<?php
	define('HOST','localhost');
	define('DB', 'modulo_8');
	define('USER', 'root');
	define('PASS', '');

	//tratamento de erro para não deixar mostrar dados da senha do servidor SQL.
	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo 'erro ao conectar';
	}
	
	/*
	$sql = $pdo->prepare("SELECT * FROM `posts9`");	
	$sql->execute();
	*/
?>
