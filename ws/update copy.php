<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  		<div class="container">
  			<div class="row">
				<?php
				require_once("_lib/config.php");
				require_once("_lib/MysqliDb.php");
				$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
				$url  = 'http://107.20.253.116:10000/totem/rest/front/getPuntosInteres';
				$url  = 'http://52.45.110.155:8080/totem/rest/front/getPuntosInteres';
				$lang = $_GET['lang'];
				
				$ch = curl_init();
				
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n \"edificio\":86,\n \"canal\":2,\n \"idioma\":\"$lang\"\n}");
				curl_setopt($ch, CURLOPT_POST, 1);
				
				$headers = array();
				$headers[] = "Cache-Control: no-cache";
				$headers[] = "Content-Type: application/json";
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				
				$result = curl_exec($ch);
				if (curl_errno($ch)) {
				    echo 'Error:' . curl_error($ch);
				}
				
				curl_close ($ch);
				$json = json_decode($result, true);
				
				//print_r($json);
				$e = 0;
				foreach(  $json['objetoRetorno'] as $value ){

 
				    $ok = false;
					$punto_interes 	 				= $value['punto_interes'];
					$nombre			 				= $value['nombre']; 
					if($value['descripcion']){
						$descripcion	 			= $value['descripcion'];  
					}else{
						$descripcion 			= ""; 
					} 
					$logo			 				= $value['logo'];   
					$orden			 				= $value['orden'];  
					$prioridad		 				= $value['prioridad']; 
					$nombre_estado_contenido 		= $value['nombre_estado_contenido']; 
					$estado_punto_interes 			= $value['estado_punto_interes']; 
					$nombre_estado_punto_interes 	= $value['nombre_estado_punto_interes'];  
					$piso 							= $value['piso'];  
					$numero_piso 					= $value['numero_piso'];  
					$categoria 						= $value['categoria'];  
					if($value['url_punto_interes']){
						$url_punto_interes			= $value['url_punto_interes'];  
					}else{
						$url_punto_interes 			= ""; 
					}  
					if($value['telefono_punto_interes']){
						$telefono_punto_interes		= $value['telefono_punto_interes'];  
					}else{
						$telefono_punto_interes 	= ""; 
					}  
					$imagen_plano_punto_interes		= $value['imagen_plano_punto_interes'];  
					if($value['imagen_plano_punto_interes']){
						$imagen_plano_punto_interes		= $value['imagen_plano_punto_interes']; 
					}else{
						$imagen_plano_punto_interes 			= ""; 
					}  
					$pinDescuento		 			= $value['pinDescuento']; 
					if($value['piiDescripcionDescuento']){
						$piiDescripcionDescuento 	= $value['piiDescripcionDescuento']; 
					}else{
						$piiDescripcionDescuento 	= ""; 
					} 
					if($value['createdAt']){
						$createdAt 					= $value['createdAt']; 
					}else{
						$createdAt 					= ""; 
					}
					if($value['createdAt']){
						$updatedAt 					= $value['updatedAt'];  
					}else{
						$updatedAt 					= ""; 
					}
					
					if($lang=='Esp'){
						$idioma = 1;
					}elseif($lang=="Ing"){
						$idioma = 2;
					}elseif($lang=="Por"){
						$idioma = 3;
					}
					$grabado = 'No ha sido grabado';
					$pak_tiendas = $db->rawQuery("select * from pak_tiendas where punto_interes = $punto_interes and idioma = $idioma");
					if($pak_tiendas){
						foreach ($pak_tiendas as $pt) {
							$ok = true;
							$grabado = 'En la base';
							
						}
					} 
					if(!$ok){
						$ok = false;
						$data = Array (
							"idioma" 						=> $idioma,
							"punto_interes" 				=> $punto_interes,
							"nombre" 						=> $nombre,
							"descripcion" 					=> $descripcion,
							"logo"							=> $logo,
							"prioridad" 					=> $prioridad,
							"nombre_estado_contenido" 		=> $nombre_estado_contenido,
							"estado_punto_interes"			=> $estado_punto_interes,
							"nombre_estado_punto_interes" 	=> $nombre_estado_punto_interes,
							"piso" 							=> $piso,
							"numero_piso" 					=> $numero_piso,
							"categoria"						=> $categoria,
							"url_punto_interes" 			=> $url_punto_interes,
							"telefono_punto_interes" 		=> $telefono_punto_interes,
							"imagen_plano_punto_interes" 	=> $imagen_plano_punto_interes,
							"estado_punto_interes"			=> $estado_punto_interes,
							"pinDescuento" 					=> $pinDescuento,
							"piiDescripcionDescuento" 		=> $piiDescripcionDescuento
						);
						$id = $db->insert ('pak_tiendas', $data);
						if ($id)
						    echo 'user was created. Id=' . $id;
						else
						    echo 'insert failed: ' . $db->getLastError();
						
						if($idioma == 1){
							$ch = curl_init($logo);
							$fp = fopen('uploads/logo_'.$punto_interes.'.jpg', 'wb');
							curl_setopt($ch, CURLOPT_FILE, $fp);
							curl_setopt($ch, CURLOPT_HEADER, 0);
							curl_exec($ch);
							curl_close($ch);
							fclose($fp);
							
							$ch = curl_init($imagen_plano_punto_interes);
							$fp = fopen('uploads/plano_'.$punto_interes.'.jpg', 'wb');
							curl_setopt($ch, CURLOPT_FILE, $fp);
							curl_setopt($ch, CURLOPT_HEADER, 0);
							curl_exec($ch);
							curl_close($ch);
							fclose($fp);
						}
					}else{
						$ok = false;
						$data = Array (
							"nombre" 						=> $nombre,
							"descripcion" 					=> $descripcion,
							"logo"							=> $logo,
							"prioridad" 					=> $prioridad,
							"nombre_estado_contenido" 		=> $nombre_estado_contenido,
							"estado_punto_interes"			=> $estado_punto_interes,
							"nombre_estado_punto_interes" 	=> $nombre_estado_punto_interes,
							"piso" 							=> $piso,
							"numero_piso" 					=> $numero_piso,
							"categoria"						=> $categoria,
							"url_punto_interes" 			=> $url_punto_interes,
							"telefono_punto_interes" 		=> $telefono_punto_interes,
							"imagen_plano_punto_interes" 	=> $imagen_plano_punto_interes,
							"estado_punto_interes"			=> $estado_punto_interes,
							"pinDescuento" 					=> $pinDescuento,
							"piiDescripcionDescuento" 		=> $piiDescripcionDescuento
						);
						
						$db->where ('idioma', $idioma);
						$db->where ('punto_interes', $punto_interes);
						$id = $db->update ('pak_tiendas', $data);
						
						if($idioma == 1){
							$loguito = 'uploads/logo_'.$punto_interes.'.jpg';
							if (unlink($loguito)) {
								$ch = curl_init($logo);
								$fp = fopen($loguito, 'wb');
								curl_setopt($ch, CURLOPT_FILE, $fp);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_exec($ch);
								curl_close($ch);
								fclose($fp);
							} else {
							    echo 'No se reemplazó el logo '.$punto_interes;
							}
							
							
							$plano = 'uploads/plano_'.$punto_interes.'.jpg';
							if (unlink($plano)) {
								$ch = curl_init($imagen_plano_punto_interes);
								$fp = fopen($plano, 'wb');
								curl_setopt($ch, CURLOPT_FILE, $fp);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_exec($ch);
								curl_close($ch);
								fclose($fp);
							} else {
							    echo 'No se reemplazó el plano '.$punto_interes;
							}
						}
					}					
					
					
					
				?>
				<div class="panel panel-primary">
					<div class="panel-heading">
				<?
						    echo '<h3><span class="label label-info">'.$value['punto_interes'] .'</span> '.$value['nombre'] .' <small>'.$grabado.'</small></h3>'; 
				?>
					</div>
					<div class="panel-body" style="word-wrap: break-word;">
						<div class="row">
							<div class="col-sm-4">
								<?php echo '<p><img src="'.$value['logo'] .'" class="img-responsive"></p>'; ?>
							</div>
							<div class="col-sm-4">
								<?php echo '<p>'.strip_tags($value['descripcion']) .'</p>'; ?>
							</div>
							<div class="col-sm-4">
								<?php  echo '<p><img src="'.$value['imagen_plano_punto_interes'] .'"></p>'; ?>
							</div>
						</div>
				<?			$e++;
						   
						    
						    echo '<p>'.$value['orden'] .'</p>';
						    $tags = $value['tags'];
						    echo '<h4>Tags:</h4>';
							foreach( $tags as $key => $ord ){
							    echo '<p>'.$ord.'</p>';
							    if($ord){
								    $existe = false;
								    $ord = addslashes( $ord);
									$participante = $db->rawQuery("select * from pak_tiendas_tags where punto_interes = $punto_interes and tag LIKE '$ord'");
									if($participante){
										foreach ($participante as $p) {
											$existe = true;
										}
									} 
									if(!$existe){
										$data = Array (
											"idioma" 		=> $idioma,
											"punto_interes" => $punto_interes,
											"tag" 			=> $ord
										);
										
										$mk125_ID = $db->insert ('pak_tiendas_tags', $data);
									}
								}
							}
						    echo '<h4>Local:</h4>';
						    $local = $value['local'];
							foreach( $local as $key => $loc ){
							    echo '<p>'.$loc.'</p>';
							    if($loc){
								    $existe = false;
									$participante = $db->rawQuery("select * from pak_tiendas_local where punto_interes = $punto_interes and local = $loc");
									if($participante){
										foreach ($participante as $p) {
											$existe = true;
										}
									} 
									if(!$existe){
										$data = Array (
										"idioma" 		=> $idioma,
										"punto_interes" => $punto_interes,
										"local" 		=> $loc
										);
										
										$db->insert ('pak_tiendas_local', $data);
									}
								}
							}
						    echo '<p>'.$value['nombre_estado_contenido'] .'</p>';
						    echo '<p>'.$value['estado_punto_interes'] .'</p>';
						    echo '<p>'.$value['nombre_estado_punto_interes'] .'</p>';
						    $sub_categoria = $value['sub_categoria'];
						    echo '<h4>Categorías:</h4>'.'<p>';
						    $categorias = '';
							foreach( $sub_categoria as $key => $sc ){
							    echo $sc . ' ';
							    $categorias .= $sc.',';
							    if($sc){
								    $existe = false;
									$participante = $db->rawQuery("select * from pak_tiendas_scat where punto_interes = $punto_interes and sub_categoria = $sc");
									if($participante){
										foreach ($participante as $p) {
											$existe = true;
										}
									} 
									if(!$existe){
										$data = Array (
											"idioma" 		=> $idioma,
											"punto_interes" => $punto_interes,
											"sub_categoria" => $sc
										);
										
										$db->insert ('pak_tiendas_scat', $data);
										
										if($sc == 131 || $sc == 119 || $sc == 110){
											$data = Array (
												"tipo" => $sc
											);
										
											$db->where ('idioma', $idioma);
											$db->where ('punto_interes', $punto_interes);
											$db->update ('pak_tiendas', $data);
										}
									}
								}
							}
							$categorias = rtrim($categorias, ',');
							echo '</p><p>'.$categorias.'</p>';
							$data = Array (
								"categorias" => $categorias
							);
							$db->where ('idioma', $idioma);
							$db->where ('punto_interes', $punto_interes);
							$db->update ('pak_tiendas', $data);
							
							$i = 0;
						    $imagenes = $value['imagenes'];
						    echo '<div class="row">';
							foreach( $imagenes as $key => $img ){
							    echo '<div class="col-sm-3"><img src="'.$img.'" class="img-responsive"></div>';
							    if($img){ 
								    $existe = false;
									$participante = $db->rawQuery("select * from pak_tiendas_img where punto_interes = $punto_interes and imagenes LIKE '$img'");
									if($participante){
										foreach ($participante as $p) {
											$existe = true;
										}
									} 
									$i++;
									if(!$existe){
										$data = Array (
											"idioma" 		=> $idioma,
											"imgID" 		=> $i,
											"punto_interes" => $punto_interes,
											"imagenes"		=> $img
										);
										$db->insert ('pak_tiendas_img', $data);
										
										if($idioma == 1){
											$ch = curl_init($img);
											$fp = fopen('uploads/img_'.$punto_interes.'_'.$i.'.jpg', 'wb');
											curl_setopt($ch, CURLOPT_FILE, $fp);
											curl_setopt($ch, CURLOPT_HEADER, 0);
											curl_exec($ch);
											curl_close($ch);
											fclose($fp);										
										}
									}else{
										$ok = false;
										$data = Array (
											"imagenes"		=> $img
										);
										
										$db->where ('idioma', $idioma);
										$db->where ('imgID', $i);
										$db->where ('punto_interes', $punto_interes);
										$id = $db->update ('pak_tiendas_img', $data);
										
										if($idioma == 1){
											$foto = 'uploads/img_'.$punto_interes.'_'.$i.'.jpg';
											if (unlink($foto)) {
												$ch = curl_init($img);
												$fp = fopen($foto, 'wb');
												curl_setopt($ch, CURLOPT_FILE, $fp);
												curl_setopt($ch, CURLOPT_HEADER, 0);
												curl_exec($ch);
												curl_close($ch);
												fclose($fp);
											} else {
											    echo 'No se reemplazó la foto '.$punto_interes.' - '.$i;
											}
										}										
									}
								}
							}
						    echo '</div>';
						    echo '<p>'.$value['piso'] .'</p>';
						    echo '<p>'.$value['categoria'] .'</p>';
						    echo '<p><a href="'.$value['url_punto_interes'] .'">Link</a></p>';
						    echo '<p>'.$value['telefono_punto_interes'] .'</p>';
						    echo '<p>'.$value['pinDescuento'] .'</p>';
						    echo '<p>'.$value['piiDescripcionDescuento'] .'</p>';
						    echo '<p>createdAt: '.$createdAt .'</p>';
						    echo '<p>updatedAt: '.$updatedAt.'</p>';
						    
						    

				?>
					</div>
</div>
				<?
				}
				echo $e;
				?>   				
  			</div>	
  		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>

