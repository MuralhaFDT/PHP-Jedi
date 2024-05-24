<?php
	/*
	function mostrarNome($nome,$idade){
		echo '<h2>Nome é: </h2>'.$nome;	
		echo '<hr>';
		echo "<h2>Idade: </h2>$idade";	
	}
	mostrarNome('João',23);*/

	function calculadora($numero1 = 10,$numero2 = 5,$numero3 = 0){
		echo ($numero1+$numero2+$numero3);
	}
	//calculadora(20,20,30);

	function verdade(){
		return true;
	}

	function retornarString(){
		return 'Guilherme';
	}
	echo retornarString();

	$variavel = verdade();	
?>