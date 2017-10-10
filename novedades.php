<?php
/*

Template name: Novedades

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "NEWS OF THE MONTH";
	$tit2 = "Entertainment";
	$tit3 = "HIGHLIGHTS";
	$btn1 = "More information";
	$btn2 = "View more restaurants";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Novidades DO MÊS";
	$tit2 = "Diversão";
	$tit3 = "DESTACADOS";
	$btn1 = "mais informação";
	$btn2 = "Veja mais restaurantes";
}else{ 
	$tit1 = "NOVEDADES DEL MES";
	$tit2 = "ENTRETENCIÓN";
	$tit3 = "destacados";
	$btn1 = "más información";
	$btn2 = "ver más restaurantes";
} ?> 
    <section class="main_content">
	    <div class="titulo_seccion ">
	        <div class="container">
	        	<div class="row">
	            	<div class="col-sm-12 col-md-10">
	                	<h4 class="divider"><?php echo $tit1; ?></h4>
	            	</div>
					<div class="col-sm-12 col-md-2">
						<a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a>
					</div>
				</div>
	        </div>
	    </div> <!-- titulo seccion -->

      <div class="container">
          <div class="row">
              <section  class="novedades">
              <div id="novedades" class="anchor_seccion"></div>
                      <div class="grid_tiendas center-block">
                          <div class="container">
<?php	                                         
    $args = array(
		'post_type' => array('novedades_top')
    );
	$the_query = new WP_Query ($args);
	
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?> 
                        	<div class="row">
                            	<div class="col-sm-4 col-md-3"> 
                                	<div class="item_tienda">
                                        <div class="tienda">
                                        	<a class="" href="<?php echo get('caluga_cine_link'); ?>" target="_blank">
                                            	<img class="img-responsive" src="<?php echo get('caluga_cine_imagen'); ?>">
                                            </a>
                                            <div class="box_logo_destacado">
                                            	<div class="logo_destacado center-block">
                                                	<img src="<?php bloginfo('template_url'); ?>/assets/img/cinemark.jpg" alt="" class="img-responsive">
                                              	</div> <!-- logo_tienda -->
                                                <div class="desc_destacado visible-xs">
                                                    <h3>¡Descubre los mejores estrenos!</h3>
                                                    <p>Si eres amante del cine, entra aquí y conoce las últimas novedades en la cartelera de Cinemark Arauco Coronel.</p>
                                                    <a href="<?php echo get('caluga_cine_link'); ?>" target="_blank">www.cinemark.cl</a>
                                                </div>
                                            </div> <!-- box logo tienda -->
                                        </div> <!--  tienda -->
                                  	</div> <!-- item tienda -->
								</div> <!-- col sm 4 -->
								
								<div class=" col-sm-8 col-md-9"> 
									<div class="box_horizontal box_novedades">
										<div class="box_slider">
											<div class="item disable-owl-swipe">
												<div class="image_dynamic">
													<div class="img_lg" style="background: url(<?php echo get('banner_grande_imagen'); ?>);"> </div>
													<div class="caption texto_blanco">
														<div class="">
															<?php if(get('banner_grande_link')){ ?>
															<a class="btn btn-default btn_blanco" href="<?php echo get('banner_grande_link'); ?>" role="button"><?php echo $btn1; ?></a>
															<?php } ?>
														</div>
													</div> 
                        						</div><!-- image dynamic -->
											</div><!-- item -->
										</div> <!-- box slider -->
									</div> <!-- box horizontal -->
								</div> <!-- col sm 12 -->
							</div><!-- fin row -->
<!--
						    <div class="row">
						        <section class="entretencion clearfix">				    
							   	<?php
								   	$e = 0;
									$sliders = get_order_group('destacados_imagen');
									foreach($sliders as $slider){  
										$e++;
										if($e<=4){ 
								?> 
								    <div class="col-xs-6 col-sm-3 col-md-3">
								        <div class="box_servicio" >
									        <a href="<?php echo get('destacados_link',$slider); ?>">
									            <img class="img-responsive" src="<?php echo get('destacados_imagen',$slider); ?>" alt="">
									        </a>
								        </div>
								        <div class="box_more_info">
								          <a  href="<?php echo get('destacados_link',$slider); ?>"><?php echo get('destacados_texto',$slider); ?></a>
								        </div>
								    </div>
								<?php 
										}
									} ?>   
							    </section>
							</div>
-->
							<?php endwhile; else: ?>
							<?php endif; ?>             
                        </div> <!-- container grilla novedades -->
         
                      </div><!-- grid tiendas -->
              
              </section> <!-- end tiendas -->
      </div>

    <div class="row">
        <section class="entretencion clearfix">
        	<div id="entretencion" class="anchor_entretencion"></div>
			<h4 class="divider"><?php echo $tit2; ?></h4>    
<?php 
    $detect = new Mobile_Detect();
    	 
	if ($detect->isMobile()) { 
	   include('include-entretencion-mobile.php'); 
	}else{ 	 
	  	include('include-entretencion-desktop.php');
	}
?>
   
        </section>
    </div><!-- row -->
      
<div id="pages" style="display:none;" data-pagina="boulevard"></div>
<?php include('footer.php') ?>

