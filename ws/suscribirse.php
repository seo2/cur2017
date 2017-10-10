<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$mail 		= filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);

	$existe = false;
	$participante = $db->rawQuery("select * from pak_suscriptores where susMail LIKE '$mail'");
	if($participante){
		foreach ($participante as $p) {
			$existe = true;
		}
	} 
	if(!$existe){
		$data = Array (
			"susMail" => $mail
		);
		
		$db->insert ('pak_suscriptores', $data);
	}

	echo 'ok';
}else{
	echo 'error';
}
?>