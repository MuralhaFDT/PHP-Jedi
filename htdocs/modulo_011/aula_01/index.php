<?
	require('vendor/autoload.php');
	use Carbon\Carbon;
	$amanha = Carbon::now()->addDay();
	//printf("Now: %s", Carbon::now());
	echo $amanha;
?>