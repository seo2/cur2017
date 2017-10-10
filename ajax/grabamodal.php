<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';

if ($ajax) {
	
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	session_start();
	require  $_SERVER['DOCUMENT_ROOT'] .'/wp-load.php';
	
	$modNom 		= $_POST['modNom'];	
	$modApe 		= $_POST['modApe'];	
	$modRUT 		= $_POST['modRut'];	
	$modMail 		= $_POST['modMail'];	
	$modNac 		= $_POST['modNac'];	
	$modReg 		= $_POST['modReg'];	
	$modCom 		= $_POST['modCom'];	
	

	date_default_timezone_set('Chile/Continental');


		$wpdb->insert( 
			'datos_modal', 
			array( 	
				'modNom'  => $modNom,	
				'modApe'  => $modApe, 
				'modRUT'  => $modRUT, 		
				'modMail' => $modMail,  
				'modNac'  => $modNac,  
				'modReg'  => $modReg,  
				'modCom'  => $modCom  
			)
		);	


	echo 'ok';

}else{
	echo 'error';
}
?>