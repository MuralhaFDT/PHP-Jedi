<?php
	//Array single
	$arr = ['Guilherme', 'João'];
	$arr = array('Guilherme','chave2'=>'João');

	$arr[0] = 'Guilherme';
	$arr[] = 'João'; 


	//Arrays Multidimencionais

	//$arr2 = array(array('Guilherme','João'),array(23,45));

	//$arr2[0] = array('chave1'=>'Guilherme','João');

	$arr2[0]['chave1'] = 'Felipe';

	echo $arr2[0]['chave1'];
?>