<form method="post">
	<input type="text" name="adress">
	<input type="submit" name="acao" value="Enviar">
</form>
<?php
if(isset($_POST['acao'])){
	//Requisição para o Google utilizando o file get contents
	$url = urlencode($_POST['adress']);
	$str = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=true&key=AIzaSyDfn09TXYb9PY8fhjz67j2wTmECpkI-uRY');
	$endereco = json_decode($str);

	/*
	echo '<pre>';
	print_r($endereco);
	echo '</pre>';
	*/

	echo 'Nome do Bairro: ';
	echo $endereco->results[0]->address_components[1]->short_name;

	echo '<hr>';

	echo 'Nome correto da rua: ';
	echo $endereco->results[0]->address_components[0]->short_name;
	}	
?>