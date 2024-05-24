<?php
	//$nome = 'João';
	/*
	switch ($nome) {
		case 'Guilherme':
			echo "Minha variável é Guilherme";
			break;
		case 'João':
			echo 'Minha variável é João';
			break;
	}
	*/
	//Break para o loop: for, while, do, foreach e switch;
	//Break tambem utilizamos para switch;
	//Continue para loop: for, while, do e foreach;
	for($i = 0; $i < 10; $i++){
		if ($i == 5 || $i === 9)
			continue;
		
		
		echo "$i";
		echo '<hr>';
		/*
		if($i == 5)
			break;
		*/
	}	
	/*
	$var = false;
	if ($var == true)
		$nome = 'Guilherme';
	$idade = 23;
	echo $idade;
	echo '<hr>';
	echo $nome;
	*/
?>