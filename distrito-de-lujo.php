<?php
/*

Template name: Distrito de Lujo

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-dl.php') ?>
<?php include('include-search-home.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "About Luxury District";
	$btn1 = "View all our stores";
	$tit2 = "our stores";
	$tit3 = "HIGHLIGHTS";
	$btn2 = "View more";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Sobre Distrito de Luxo";
	$btn1 = "Veja todas as nossas lojas";
	$tit2 = "nossas lojas";
	$tit3 = "DESTACADOS";
	$btn2 = "Veja mais";
}else{ 
	$tit1 = "sobre distrito de lujo";
	$btn1 = "ver todas las tiendas";
	$tit2 = "nuestras tiendas";
	$tit3 = "destacados";
	$btn2 = "ver más";
} ?>    

    <section class="main_content">
        <div class="titulo_seccion">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider"><?php echo $tit1; ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="javascript:window.history.back();" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->
    
      <div class="container">
          <div class="row">
		  	<section class="sobre_distrito">      
                <div class="container">
                  <div class="box_content" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/demo_bg_about_dl.png);">
                      <div class="content_about texto_blanco">
                          <div class="col-sm-6">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_about_dl.png" alt="" class="img-responsive">
								<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>                                
								<?php the_content(); ?>
						        <?php endwhile; ?>
								<?php // Navegación ?>
								<?php else : ?>
								<?php // Cuando no hay post ?>
								<?php endif; ?>
                                <div class="text-center">
                                    <a class="btn btn-default btn_blanco" href="<?php bloginfo('url'); ?>/distrito-de-lujo-tiendas" role="button"><?php echo $btn1; ?></a>
                                </div>
                          </div>
                      </div>
                    </div>
                </div>
            </section>
<?php	                                         
    $args = array(
		'post_type' => array('distrito_de_lujo')
    );
	$the_query = new WP_Query ($args);
    $i = 0;
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    	$i++;
?>	            
            <section class="distrito_de_lujo">
                <h4 class="divider"><?php echo $tit2; ?></h4>
<!--                     <a href="javascript:void(0);" class="ver" data-toggle="modal" data-target="#mapaDistrito">ubicación distrito de lujo <i class="fa fa-map-marker" aria-hidden="true"></i></a> --> 
             	<div class="container">
                	<div class="slider_tiendas_dl owl-carousel owl-theme">
                      
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('slider_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                    	<div class="item"> 
                              <!--1140 x 520 -->
							<div class="img_slide" style="background: url(<?php echo get('slider_imagen_slider',$slider); ?>);"> </div>
								  <!-- 700x580 -->
							<div class="container">
								<div class="row">
									<div class="caption texto_blanco">
										<div class="text-center">
											<div class="logo_tienda_dl">
												<img src="<?php echo get('slider_logo',$slider); ?>" alt="" class="img-responsive">
											</div>
											<a class="btn btn-default btn_blanco" href="<?php echo get('slider_link',$slider); ?>" role="button"><?php echo $btn2; ?></a>
										</div>
									</div> <!-- caption -->
								</div>
							</div>
                      	</div> <!-- item -->
                        <?php } ?>
					</div><!-- slider tiendas -->

                </div>
            </section> 
            <!-- end distrito de lujo -->
 
<?php endwhile; else: ?>
<?php endif; ?>               
      </div>
      <div class="row">
        <?php include('footer-distrito-de-lujo.php') ?>        
      </div>


    
  

<?php include('footer.php') ?>

