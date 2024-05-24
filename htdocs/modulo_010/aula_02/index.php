<?php
	//Aula CURL
	$endereco = urlencode('coqueiros');
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL,"https://maps.googleapis.com/maps/api/geocode/json?address=".$endereco."&sensor=true&key=AIzaSyDfn09TXYb9PY8fhjz67j2wTmECpkI-uRY");
	//curl_setopt($curl, CURLOPT_URL,"http://localhost/modulo_010/aula_02/request.php");
	curl_setopt($curl,CURLOPT_POST,1);

	//na vida real voce pode usar passando como um array e usar a função http_build_query...
	curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array('request'=>'name_return')));

	//receive server response...
	curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);

	$server_output = curl_exec($curl);

	curl_close($curl);

	echo $server_output;
	
	//requisição com CURL no server local
	/*
	$resultado = json_decode($server_output);

	echo $resultado->titulo[0];
	echo '<br />';
	echo $resultado->conteudo[0];
	*/
?>