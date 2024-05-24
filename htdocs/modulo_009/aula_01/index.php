<?php
	$xml = simplexml_load_file('arquivo.xml');

	//Ler arquivo XML

	//echo $xml->informacoes2->item->nome;
	//echo $xml->informacoes->item->idade;
	//print_r($xml);

	//Criando XML a partir de um array

	//$arr = ['Guilherme' =>'nome','24'=>'idade'];

	excreverXML(array('Guilherme'=>'nome','24'=>'idade','futebol,tennis'=>'esportes'),'arquivo.xml');

	/*$xml = new SimpleXMLElement('<root/>');
	array_walk_recursive($arr, array ($xml, 'addChild'));
	file_put_contents('arquivo.xml',$xml->asXML());*/

	//Lendo o XML
	$content = simplexml_load_file('arquivo.xml');

	echo $content->esportes;

	function excreverXML($arr,$nomedoarquivo){
		$xml = new SimpleXMLElement('<root/>');
		array_walk_recursive($arr, array ($xml, 'addChild'));
		file_put_contents('arquivo.xml',$xml->asXML());
	}
?>