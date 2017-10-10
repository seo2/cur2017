<?php
$style = '';
if(isset($_GET['tiendaID'])){
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
        	
			$desc 	= trim($t['descripcion']);
			$fono	= $t['telefono_punto_interes'];
			$piso	= $t['piso']; 
			$url	= $t['url_punto_interes']; 
			
			$local = $db->rawQuery("select * from pak_tiendas_local where punto_interes = $punto_interes");
			if($local){
				foreach ($local as $l) {   
					$local = $l['local'];
				}
			}
			
	    }
	}
	$style = 'style="display:block"';
}

?>

<div id="caja_datos_tienda" class="container-fluid nopad" <?php echo $style; ?>>
	<div class="container">
    	<div id="adidas" class="datos_tienda">
			<div class="row ">
            	<div class="col-sm-6 col-sm-push-6 nopad relative">
                	<div class="img_tienda" style="background: url(<?php echo $imagen; ?>);" ></div><!-- // img tienda -->
            	</div>
				<div class="col-sm-6  col-sm-pull-6 nopad relative min-height">
                    <div class="datos">
                        <div class="logo_tienda">
                            <img src="<?php echo $logo; ?>" alt="" class="img-responsive">
                        </div>
						<p class="descripciontienda"><?php echo $desc; ?></p>
<!--                         <h4>SECTOR: <span class="piso"><?php echo $piso; ?></span></h4>  -->
                        <h4>LOCAL: <span class="local"><?php echo $local; ?></span></h4> 
                        <h3>CONTACTO: <span class="telefono"><?php echo $fono; ?><span></h3>
                        <div class="clearfix"></div>
                        <?php if($url){ ?>
                        <a href="mailto:<?php echo $url; ?>" class="url btn btn-default btn-url">Enviar correo</a>
                        <?php }else{ ?>
                        <a href="" class="url btn btn-default btn-url" style="display:none">Enviar correo</a>
                        <? } ?>
                        <div class="share_tienda">
                        	<ul>
                            	<li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fs219687.gridserver.com%2Fclientes%2Fbond%2Fpak%2F&t=" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL),'Facebook Sharer', 'width=500,height=500'); return false;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fs219687.gridserver.com%2Fclientes%2Fbond%2Fpak%2F&text=:%20https%3A%2F%2Fs219687.gridserver.com%2Fclientes%2Fbond%2Fpak%2F" target="_blank" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL),'Twitter Sharer', 'width=500,height=500'); return false;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        	</ul>
                        </div> <!-- share -->
                    </div> <!-- datos  -->
				</div>
            </div>
        </div> <!-- adidas -->
	</div>

    <section class="search_home_xs visible-xs visible-sm">
        <?php include('include-search-home-mobile.php'); ?>
    </section>
</div>