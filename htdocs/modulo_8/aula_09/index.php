<?php
	$pdo = new PDO('mysql:hos=localhost;dbname=modulo_8','root','');

	$pdo->exec("LOCK TABLES `clientes` WRITE");

	sleep(10);	
?>