<?php
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN (1,2,3)");

	$sql->execute();

	$emails = $sql->fetchAll();

	print_r($emails);
?>