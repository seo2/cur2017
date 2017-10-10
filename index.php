<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>  
	<section class="main_content">
    	<div class="container">
<?php wp_reset_query(); ?>	    	
<?php	                                         
    $args = array(
		'post_type' => array('home')
    );
	$the_query = new WP_Query ($args);
    $i = 0;
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    	$i++;
?>	
        	<div class="row">
              <div class="col-sm-6 col-md-6">
                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('distrito_de_lujo_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	                        
                          <div class="item">
                              <a href="<?php bloginfo('url'); ?>/distrito-de-lujo">
	                            <?php if($e==1){ ?>
                                <div class="logo_seccion logo_distrito" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_distrito.svg);"> </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('distrito_de_lujo_imagen_slider',$slider); ?>);"> </div>
                              </a>
                          </div>
                        <?php } ?>
                          
                      </div><!-- box slider  -->
                  </div> <!-- slider distrito -->
              </div> 

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('boulevard_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>  
                              <div class="item">
                                  <a href="<?php bloginfo('url'); ?>/boulevard">     
	                            <?php if($e==1){ ?>
                                       <div class="caption">
                                          <p>&nbsp </p>
                                           <h3>boulevard </h3>
                                           <div class="divider"> </div>
                                       </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('boulevard_imagen_slider',$slider); ?>);"> </div>                       
                                  </a>
                               </div> <!-- item -->
                        <?php } ?>
                        </div><!-- box slider  -->
                 </div>
              </div> <!-- slider zona boulevard -->

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                      <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('piso_de_diseno_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                           <div class="item">
                               <a href="<?php bloginfo('url'); ?>/piso-diseno">
	                            <?php if($e==1){ ?>
                                <div class="logo_seccion logo_piso_diseno" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_piso_diseno.svg);"> </div> 
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('piso_de_diseno_imagen_slider',$slider); ?>);"> </div>              
                               </a>
                            </div> <!-- item -->
                        <?php } ?>
                       </div><!-- box slider  -->
                   </div>
              </div> <!-- piso diseño -->

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                         <div class="box_slider owl-carousel owl-theme">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('travellers_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                              <div class="item">
                                  <a href="<?php bloginfo('url'); ?>/travellers">                                   
	                            <?php if($e==1){ ?>
                                        <div class="logo_seccion logo_travellers" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_travellers_blanco.svg);"> </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('travellers_imagen_slider',$slider); ?>);"> </div>                       
                                  </a>
                               </div>
                        <?php } ?>
                          </div><!-- box slider  -->
                   </div><!-- travellers -->
              </div>
                
              <div class="col-sm-12">
                    <!-- NOVEDADES -->
                    <div class="box_horizontal">
                       <div class="box_slider owl-carousel owl-theme">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('slider_medio_imagen_desktop');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                         <div class="item">
                            <div class="img_slide hidden-xs hidden-sm"  style="background: url(<?php echo get('slider_medio_imagen_desktop',$slider); ?>);"> </div>
                            <!-- 700 x 400px -->
                            <div class="img_slide visible-xs visible-sm"  style="background: url(<?php echo get('slider_medio_imagen_mobile',$slider); ?>);"> </div> 
				  			<div class="caption">
					  			<?php if(get('slider_medio_texto_1',$slider)){ ?>
                               	<h3><?php echo get('slider_medio_texto_1',$slider); ?></h3>
                               	<?php } ?>
					  			<?php if(get('slider_medio_texto_2',$slider)){ ?>
                               	<h4 class="divider"><?php echo get('slider_medio_texto_2',$slider); ?></h4>
                               	<?php } ?>
					  			<?php if(get('slider_medio_texto_3',$slider)){ ?>
                               	<p><?php echo get('slider_medio_texto_3',$slider); ?></p>
                               	<?php } ?>
					  			<?php if(get('slider_medio_link',$slider)){ ?>
							   	<div class="text-center">
                               		<a href="<?php echo get('slider_medio_link',$slider); ?>" class="btn btn-default btn_blanco"  role="button">ver más</a>

                               	</div>
                               	<?php } ?>
                            </div>
                         </div><!-- item -->
                        <?php } ?>
                      </div>
                    </div><!-- box horizontal -->
              </div>
                
            </div> <!-- row -->
            <div class="row">
              <div class="col-sm-6 col-md-6">
                  <div class="box">
                        <!-- arauco tag -->
                        <a href="<?php bloginfo('url'); ?>/arauco-tag" class="box_enlace">
                          <div class="box_img" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_arauco_tag.png);"> </div>
                          <div class="caption">
                              <h3>Inscríbete</h3>
                              <div class="divider"> &nbsp </div>
                          </div>
                        </a>
                 </div> <!-- arauco tag -->
                      
                  <div class="box">
                     <div class="box_slider owl-carousel owl-theme">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('galerias_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                           <div class="item">
                             <a href="<?php bloginfo('url'); ?>/novedades-galeria#galerias">
	                            <?php if($e==1){ ?>
                                <div class="caption">
                                    <h3>Galería</h3>
                                    <div class="divider"> &nbsp </div>
                                </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('galerias_imagen_slider',$slider); ?>);"> </div>   
                             </a>
                           </div>
                        <?php } ?>
                       </div><!-- box slider  -->
                </div> <!-- galeria -->
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="image_dynamic">
                    <div class="lente"></div>
                    <div class="image_dynamic_portada" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/revista_detalle.jpg);"> </div>
                    <div class="caption_revista" >
                      <div class="logo_revista" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_revista_detalle.svg);"> </div>
                        <p>Suscríbete y podrás estar al día de todas las tendencias.
                            <a href="http://www.revistadetalle.cl/" target="_blank"  class="btn btn-default btn_revista hvr-float" role="button">revista detalle</a>
						</p>
                    </div>
                 </div>
              </div> <!-- revista detalle -->
      </div> <!-- row -->
<?php endwhile; else: ?>
<?php endif; ?>



<?php include('footer.php') ?>

