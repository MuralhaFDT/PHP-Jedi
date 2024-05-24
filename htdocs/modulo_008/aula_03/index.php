<?php
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 2;

	//OR = `ou` - AND = `e`

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Cezar',sobrenome='Santana de Almeida' WHERE id=$id");

	if($sql->execute()){
		echo "Meu cliente foi atualizado com sucesso!";
	}
?>