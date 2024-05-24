<?php
	/*
	$json = '{"a":"Guilherme","b":{"0":"Felipe","1":"João"},"c":3,"d":4,"e":5}';

	//Decodificamos o json
	$obj = json_decode($json);
	$arr = json_decode($json, true);*/

	//echo $arr['b']['1'];

	//echo $obj->a;

	//var_dump(json_decode($jason, true));

	/*
	$arr = ['nome'=>'Guilherme','cidade'=>'Floripa'];
	$json = json_encode($arr);
	echo $json;*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$.ajax({
				url:'request.php',
				dataType:'json'

			}).done(function(data){
				console.log(data.nome);
			})
		})
	</script>
</body>
</html>