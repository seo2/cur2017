<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$back = 'back';
	$idioma = 2;
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$back = 'voltar';
	$idioma = 3;
}else{ 
	$back = 'volver';
	$idioma = 1;
} ?> 
<?php 
	include('Mobile_Detect.php'); 
	include('classes/BFI_Thumb.php');	
?>
<?php
	require_once("ws/_lib/config.php");
	require_once("ws/_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


	function get_img_tienda($id){
		$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$tiendas = $db->rawQuery("select * from pak_tiendas_img where punto_interes = $id limit 1");
		if($tiendas){
			foreach ($tiendas as $t) {
				$imagenes = $t['imagenes'];
			}
		}
		return $imagenes;
	}
	function get_local($id){
		$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$tiendas = $db->rawQuery("select * from pak_tiendas_local where punto_interes = $id limit 1");
		if($tiendas){
			foreach ($tiendas as $t) {
				$imagenes = $t['local'];
			}
		}
		return $imagenes;
	}
	function get_nom_categoria($idioma, $id){
		$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$tiendas = $db->rawQuery("select * from pak_categorias where id_categoria = 128 and id_subcategoria = $id limit 1");
		if($tiendas){
			foreach ($tiendas as $t) {
				$imagenes = $t['nombre_subcategoria'];
			}
		}
		return $imagenes;
	}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if(isset($_GET['tiendaID'])){ 
		$punto_interes = $_GET['tiendaID'];
		$tiendas = $db->rawQuery("select * from pak_tiendas where punto_interes = $punto_interes");
		if($tiendas){
			foreach ($tiendas as $t) {   
            	$imagen = get_img_tienda($t['punto_interes']);
            	if(!$imagen){

            		$imagen 	= '/ws/fotos/'. quitatodo($t['nombre']).'.png';
				  	$imagen	 	= get_template_directory_uri().$imagen;

				  	if(is_url_exist($imagen)){
                    	$params1 	= array( 'width' => 650, 'height' => 650, 'crop' => true );	
					  	$imagen  	= bfi_thumb( $imagen, $params1 );
				  	}else{
                    	$imagen 	= "/assets/img/demobgtienda.jpg";
					  	$imagen	 	= get_template_directory_uri().$imagen;
				  	}
				  	
            	}else{
                	$imagen 	= '/ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
                	$params1 	= array( 'width' => 650, 'height' => 650, 'crop' => true );	
				  	$imagen	 	= get_template_directory_uri().$imagen;
				  	$imagen  	= bfi_thumb( $imagen, $params1 );
            	}
            	
            	$logo = '/ws/logos/'. quitatodo($t['nombre']).'.jpg';
            	$logo = get_template_directory_uri().$logo;
            	
        		if(is_url_exist($logo)){
            		$logo = $logo;
			  	}else{
                	$logo 	= "/assets/img/logo_381.jpg?v=2";
				  	$logo	= get_template_directory_uri().$logo;
			  	}
            	
		    	$nombre = $t['nombre'];
				$desc 	= trim($t['descripcion']);
				$fono	=$t['telefono_punto_interes'];
				$piso	= $t['numero_piso']; 
				$url	= $t['url_punto_interes']; 
				$mapa	="ws/uploads/plano_".$t['punto_interes'].".jpg";  	
		    	
		    }
		}
		$title = 'Parque Arauco | '.$nombre;
	}else{
		$title = 'Parque Arauco | Mucho más que comprar';
		$imagen = "assets/img/demobgtienda.jpg";
	} 
	
	?>

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico">
    
	<meta property="og:type"	content="business.business">
	<meta property="og:title" 	content="<?php echo $title; ?>">
	<meta property="og:url" 	content="<?php echo $actual_link; ?>">
	<meta property="og:image" 	content="<?php bloginfo('template_url'); ?>/<?php echo $imagen; ?>">

	<?php wp_head(); ?>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
    <script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '186949351735883');
      fbq('track', 'PageView');
    </script>
    <noscript>
	    <img src="https://www.facebook.com/tr?id=186949351735883&ev=PageView&noscript=1" height="1" width="1" style="display:none"/>
    </noscript>
   
  </head>
  <body data-url="<?php bloginfo('url'); ?>" data-template="<?php bloginfo('template_url'); ?>">

  	<!-- marca boton arauco tag-->
	<!-- Google Code for Inscripci&oacute;n Arauco Tag Conversion Page
	In your html page, add the snippet and call
	goog_report_conversion when someone clicks on the
	chosen link or button. -->
	<script type="text/javascript">
	   /* <![CDATA[ */
	   goog_snippet_vars = function() {
	     var w = window;
	     w.google_conversion_id = 878634096;
	     w.google_conversion_label = "tRsbCMrRk2oQ8Mj7ogM";
	     w.google_remarketing_only = false;
	   }
	   // DO NOT CHANGE THE CODE BELOW.
	   goog_report_conversion = function(url) {
	     goog_snippet_vars();
	     window.google_conversion_format = "3";
	     var opt = new Object();
	     opt.onload_callback = function() {
	     if (typeof(url) != 'undefined') {
	       window.location = url;
	     }
	   }
	   var conv_handler = window['google_trackConversion'];
	   if (typeof(conv_handler) == 'function') {
	     conv_handler(opt);
	   }
	}
	/* ]]> */
	</script>
	<script type="text/javascript"
	   src="//www.googleadservices.com/pagead/conversion_async.js">
	</script>
	  
	  
    <a href="javascript:void(0);" id="return-to-top">
      <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    