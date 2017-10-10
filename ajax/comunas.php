<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require  $_SERVER['DOCUMENT_ROOT'] .'/wp-load.php';

$regionID = $_POST["regionID"];



global $wpdb;
$sql = 'SELECT comuna_id, comuna_nombre FROM provincia p INNER JOIN comuna c ON p.provincia_id = c.comuna_provincia_id WHERE provincia_region_id = '.$regionID.' ORDER BY comuna_nombre ASC';

$results = $wpdb->get_results($sql, OBJECT);
foreach ($results as $r) {
    $json[] = array('Value' => $r->comuna_id, 'Display' => $r->comuna_nombre);
}

$comunas = array('comunas' => $json);

header("Content-Type: application/json", true);

echo json_encode($comunas);
?>