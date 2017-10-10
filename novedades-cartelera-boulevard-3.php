<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
<?php // include('include-search-no-slider.php') ?>


    <section class="main_content">
       <div class="titulo_seccion">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                   <h4 class="divider">cartelera boulevard</h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="boulevard.php" class="back">< volver</a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

      <div class="container">
      <div class="row">
        <section class="cartelera clearfix">
        <div id="cartelera" class="anchor_seccion"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                   <img class="img-responsive visible-md visible-lg" src="<?php bloginfo('template_url'); ?>/assets/img/1140.png" alt="" >
                   <img class="img-responsive visible-xs visible-sm" src="<?php bloginfo('template_url'); ?>/assets/img/720.png" alt="" >
                </div>
              </div>
              <div class="row">
         

                <div class="content_promos clearfix">
                  <div class="col-sm-12">
                    <div class="main_title">
                        <h3>los mejores</h3>
                        <h4 class="divider_left">sabores</h4>
                    </div>
                  </div>

                  <section class="otras_tiendas clearfix">
                <div class="grid_tiendas">
	                <?php
		            
					$tiendas = $db->rawQuery("select * from pak_tiendas where tipo = 110 order by rand() limit 4");
					if($tiendas){
					foreach ($tiendas as $t) {   
	                	$imagen = get_img_tienda($t['punto_interes']);
	                	if(!$imagen){
	                    	$imagen = "<?php bloginfo('template_url'); ?>/assets/img/demobgtienda.jpg";
	                	}else{
	                    	$imagen = 'ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
	                	}
		            ?>    
                                    <div class="col-sm-3 caja_tienda"> 
                                      <div class="item_tienda" id="tienda_<?php echo $t['punto_interes']; ?>">
                                            <div  class="tienda">
                                                <a class="btn_tienda" href="javascript:void(0);"  >
                                                    <span id="adidas" class="overlay_img" data-id="<?php echo $t['punto_interes']; ?>" data-logo="ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" data-desc="<?php echo trim($t['descripcion']); ?>" data-img="<?php echo $imagen; ?>" data-fono="<?php echo $t['telefono_punto_interes']; ?>" data-piso="<?php echo $t['numero_piso']; ?>" data-url="<?php echo $t['url_punto_interes']; ?>" data-mapa="ws/uploads/plano_<?php echo $t['punto_interes']; ?>.jpg" data-nombre="<?php echo $t['nombre']; ?>" data-tipo="<?php echo $t['tipo']; ?>"></span>
                                                    <img class="img-responsive" src="<?php echo $imagen; ?>">
                                                  </a>
                                                      <div class="box_logo_tienda">
                                                        <div class="logo_tienda">
                                                            <img src="ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" alt="" class="img-responsive">
                                                        </div> <!-- logo_tienda -->
                                                      </div> <!-- box logo tienda -->
                                            </div> <!--  tienda -->
                                    </div> <!-- item tienda -->

                              </div> <!-- col sm 3 -->   
			<?php
				}
			}  		
			?>           
                </div>
                            
                  </section> <!-- end otras tiendas -->
        

               
                </div><!-- content promos -->
              </div><!-- row -->
            </div><!-- container -->
      </section><!-- cartelera -->
    </div><!-- row -->
<?php include('footer.php') ?>

