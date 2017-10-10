<?php
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
    $key=$_GET['key'];
    $array = array();

	$participante = $db->rawQuery("select * from pak_categorias where nombre_subcategoria LIKE '%{$key}%'");
	if($participante){
		foreach ($participante as $p) {
			$array[] = $row['nombre_subcategoria'];
		}
	}      
    
    
    echo json_encode($array);
?>