<?php	
	session_start();

	include('facebook-php-sdk/autoload.php');
	use Facebook\Facebook;
	use Facebook\Exceptions\FacebookResponseException;
	use Facebook\Exceptions\FacebookSDKException;

	$appId = '389447640756083';
	$appSecret = 'f62072b1fcec15f3ee609da2813631f8';
	$redirectUrl = 'http://localhost/modulo_010/aula_03/';
	$fbPermission = array('email');

	$fb = new Facebook(array(
		'app_id'=> $appId,
		'app_secret'=> $appSecret,
		'default_graph_version' => 'v3.0'
	));

	$helper = $fb->getRedirectLoginHelper();

	try{
		if(isset($_SESSION['facebook_access_token'])){
			$accessToken = $_SESSION['facebook_access_token'];
		}else{
			$accessToken = $helper->getAccessToken();
		}
	}catch(FacebookResponseException $e){}
?>