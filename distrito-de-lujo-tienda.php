<?
/*

Template name: Distrito de lujo tienda

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-dl.php') ?>
<?php //include('include-search-home.php') ?>
<?php include('include-search-no-slider.php') ?>

<?php
	
$style = '';
if(isset($_GET['tiendaID'])){
	$punto_interes = $_GET['tiendaID'];
	$tiendas = $db->rawQuery("select * from pak_tiendas where idioma  = $idioma and punto_interes = $punto_interes");
	if($tiendas){
		foreach ($tiendas as $t) {   
	    	$imagen = get_img_tienda($t['punto_interes']);
	    	if(!$imagen){
	        	$imagen = "assets/img/demobgtienda.jpg";
	    	}else{
                $imagen = 'ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
	    	}
			$logo 	= "ws/uploads/logo_". $t['punto_interes'].".jpg";
			$desc 	= trim($t['descripcion']);
			$fono	= $t['telefono_punto_interes'];
			$piso	= $t['numero_piso']; 
			$url	= $t['url_punto_interes']; 
			$mapa	= "ws/uploads/plano_".$t['punto_interes'].".jpg";  	
	    	$nom	= $t['nombre'];
	    }
	}
	$style = 'style="display:block"';
}

?> 
    <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider"><?php echo $nom; ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="javascript:window.history.back();" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

    <section class="main_content">
      <div class="container">
          <div class="row">
          <section class="tiendas_distrito">
         
           
<!--                <a href="javascript:void(0);" class="ver" data-toggle="modal" data-target="#mapaDistrito">ubicación distrito de lujo <i class="fa fa-map-marker" aria-hidden="true"></i></a>
 -->
            
            <div class="col-sm-12">
              <div class="caja_tienda_single clearfix">
                    <div class="col-sm-6 col-sm-push-6">
                          <img class="img-responsive visible-xs center-block logo" src="<?php bloginfo('template_url'); ?>/<?php echo $logo; ?>" alt="">

                          <div class="slider_single_tiendas_dl owl-carousel owl-theme pull-right">
	                            <div class="item">
	                                <div class="img_slide" style="background: url(<?php bloginfo('template_url'); ?>/<?php echo $imagen; ?>);"></div>
	                            </div>
<!--
	                            <div class="item">
	                            	<div class="img_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/nueva_coleccion2.jpg);"></div>
	                            </div>
-->
                          </div><!-- slider single tienda -->
                      </div>
                      <div class="col-sm-6 col-sm-pull-6">
                          <div class="desc_tienda">
                              <img class="img-responsive hidden-xs logo" src="<?php bloginfo('template_url'); ?>/<?php echo $logo; ?>" alt="">
                              <div class="datos_tienda">
                                <p>LOCAL Nº <?php echo get_local($punto_interes); ?> - <?php echo $piso; ?> º PISO</p>
<!--                                 <p>Horarios: 10:00am a 22:00pm hrs</p> -->
                              </div>
                            
<!--                               <h3>Los nuevos detalles de Carolina Herrera</h3> -->
                              <p><?php echo $desc; ?></p>
                             
                              <!-- <p class="share">Quiero compartir este post: </p> -->
                      </div>
                      </div>
               </div><!-- caja tienda -->
                 <a href="<?php bloginfo('url'); ?>/distrito-de-lujo/distrito-de-lujo-tiendas" class="ver_mas_tiendas raya_after pull-right"> ver más tiendas </a>
            </div>
          </section> <!-- fin grilla tiendas distrito -->

       </div>
     <div class="row">
        <?php include('footer-distrito-de-lujo.php') ?>
      </div> 
<?php include('footer.php') ?>

