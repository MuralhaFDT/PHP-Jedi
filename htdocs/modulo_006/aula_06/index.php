<?php
	$conteudo = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

	//serve para recortar uma string.
	//echo substr($conteudo,0,20);

	$nome = 'Guilherme Cherem Grillo';

	$nomes = explode(' ', $nome);

	//print_r($nomes);

	//Serve para juntar um array com um delimitador.
	//No caso o espaço.
	$nomes = implode(' ', $nomes);

	//echo $nomes;

	//Strips_tags serve para retirar todo o codigo HTML.
	$conteudo = '<h1>Guilherme</h1>Outra coisa';

	//echo strip_tags("$conteudo");

	//htmlentities que mostra o codigo html na pagina.
	echo htmlentities('<div></div>');
?>