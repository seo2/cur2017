<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$nom	 	= filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
	$rut	 	= filter_var($_POST["rut"], FILTER_SANITIZE_STRING);
	$fono	 	= filter_var($_POST["fono"], FILTER_SANITIZE_STRING);
	$mail 		= filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
	$motivo	 	= filter_var($_POST["motivo"], FILTER_SANITIZE_STRING);
	$tipo	 	= filter_var($_POST["tipo"], FILTER_SANITIZE_STRING);
	$mensaje	= filter_var($_POST["mensaje"], FILTER_SANITIZE_STRING);
	$optIn		= filter_var($_POST["optIn"], FILTER_SANITIZE_STRING);



if($tipo==1){
	$servicio = "Servicio al Cliente";	
	$to = "sarias@parauco.com";
}elseif($tipo==2){
	$servicio = "Estacionamientos";	
	$to = "kcastillo@parauco.com";
}elseif($tipo==3){
	$servicio = "Actividades del mall";	
	$to = "poyarzun@parauco.com";
}elseif($tipo==4){
	$servicio = "Arriendo espacios y locales";	
	$to = "jaldunate@parauco.com";
}elseif($tipo==5){
	$servicio = "Arriendo Plazas, Activaciones y Medios";	
	$to = "tmendez@parauco.com";
}elseif($tipo==6){
	$servicio = "Arriendo Módulos";	
	$to = "jaldunate@parauco.com";
}elseif($tipo==7){
	$servicio = "Sitio web y redes sociales";	
	$to = "poyarzun@parauco.com";
}
	
//	$to 	 = 'seodos@gmail.com';
	
	$message = '<html><body>';
	$message .= '<div>';
	$message .= "<p>De:  <strong>".$nom." </strong></p>";  
	$message .= "<p>Correo: <strong>".$mail." </strong></p>";  
	$message .= "<p>Fono: <strong>".$fono." </strong></p>";   
	$message .= "<p>Motivo: <strong>".$motivo." </strong></p>";   
	$message .= "<p>TIpo de Servicio: <strong>".$servicio." </strong></p>";  
	$message .= "<p>Mensaje:</p>"; 
	$message .= "<p> <strong>".$mensaje." </strong></p>";  
	$message .= "</div>";
	$message .= "</body></html>";
	
	$subject = 'Mensaje desde arauco araucopremiumoutletbuenaventura.cl/';
	$headers = "From: " . "<no-reply@araucopremiumoutletbuenaventura.cl/> Contacto Arauco Premium Outlet Buenaventura" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	mail($to, $subject, $message, $headers);

	date_default_timezone_set('America/Santiago');
	$ahora 	= date("Y-m-d H:i:s");
	$hoy	= date('Y-m-d');

		$data = Array (
		  'conNom'  => $nom,
		  'conRut'  => $rut,
		  'conMail' => $mail,
		  'conFono' => $fono,
		  'conMot'  => $motivo,
		  'conSer'  => $tipo,
		  'conMen'  => $mensaje,
		  'conOptIn'	=> $optIn,
		  'conTS'   => $ahora
		);
		
		$db->insert ('pak_contacto', $data);


	echo 'ok';
}else{
	echo 'error';
}
?>