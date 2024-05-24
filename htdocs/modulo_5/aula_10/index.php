<?php
	$valor = 10;
	$valor2 = 9;


	//Um sinal de igual quer dizer que estamos atribuindo um valor.
	//Sempre retorna verdadeiro.
	/*
	if ($nome = $nome2) {
		echo $nome;
	}
	*/

	//Apenas confere se o valor é igual.
	/*if ($nome == $nome2){
		echo 'verdade';
	}*/
	

	//Conferimos para ver se é diferente.
	/*if($nome != $nome2){
		echo 'é diferente';
	}
	if($nome === $nome2){
		echo 'verdade';

	}else{
		echo 'não são identicos';
	}*/

	//Comparamos para ve se são diferentes (tipo e valor)
	if($valor !== $valor2){
		echo 'verdade';
	}
?>