<?php
	$pdo = new PDO('mysql:hos=localhost;dbname=modulo_8','root','');

	$sql = $pdo->prepare("SELECT * FROM `clientes`");

	$sql->execute();

	$usuarios = $sql->fetchAll();
	foreach ($usuarios as $key => $value) {
		echo $value['nome'];
		echo '<hr>';
	}
?>