<?php
	//Durma o código por x segundos.
	/*
	sleep(2);
	echo 'Olá, Mundo!';
	sleep(2);
	echo ' => ';
	sleep(2);
	echo 'Bye!'
	*/
	
	$nome = 'Gui';
	if($nome == 'João'){
		//continuamos o código
		echo 'tudo certo!';
	}else{
		die("O script parou de ser executado!");
 	}
 	sleep(2);
	echo 'Olá, Mundo!';
	sleep(2);
	echo ' => ';
	sleep(2);
	echo 'Bye!';
?>
