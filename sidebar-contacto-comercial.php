
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "get update";
	$tit2 = "DISCOUNTS";
	$tit3 = "Services";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "atualização";
	$tit2 = "DESCONTOS";
	$tit3 = "Serviços";
}else{ 
	$tit1 = "actualízate";
	$tit2 = "descuentos";
	$tit3 = "servicios";
} ?>
        <!-- arauco tag -->
<?php	                                         
    $args = array(
		'post_type' => array('home')
    );
	$the_query = new WP_Query ($args);
    $i = 0;
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    	$i++;
?>	
                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('distrito_de_lujo_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	                        
                          <div class="item">
                              <a href="<?php bloginfo('url'); ?>/tiendas#tiendas">
	                            <?php if($e==1){ ?>
                                   <div class="caption tiendas">
                                      <p>NUESTRAS </p>
                                       <h3>TIENDAS </h3>
                                       <div class="divider"> </div>
                                   </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('distrito_de_lujo_imagen_slider',$slider); ?>);"> </div>
                              </a>
                          </div>
                        <?php } ?>
                          
                      </div><!-- box slider  -->
                  </div> <!-- slider distrito -->

                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('boulevard_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>  
                              <div class="item">
                                  <a href="<?php bloginfo('url'); ?>/novedades/#entretencion">     
	                            <?php if($e==1){ ?>
                                       <div class="caption entretencion">
                                          <p>ZONA </p>
                                           <h3>ENTRETENCIÓN </h3>
                                           <div class="divider"> </div>
                                       </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('boulevard_imagen_slider',$slider); ?>);"> </div>                       
                                  </a>
                               </div> <!-- item -->
                        <?php } ?>
                        </div><!-- box slider  -->
                 </div>

                  <div class="box">
                      <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('piso_de_diseno_imagen_slider');
							foreach($sliders as $slider){  
								$e++; 
						?>    	
                           <div class="item">
                               <a href="<?php bloginfo('url'); ?>/food-court-tiendas/#tiendas">
	                            <?php if($e==1){ ?>
                                   <div class="caption foodcourt">
                                      <p>NUESTRA VARIEDAD </p>
                                       <h3>Patio de Comidas </h3>
                                       <div class="divider"> </div>
                                   </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('piso_de_diseno_imagen_slider',$slider); ?>);"> </div>              
                               </a>
                            </div> <!-- item -->
                        <?php } ?>
                       </div><!-- box slider  -->
                   </div>
<?php endwhile; else: ?>
<?php endif; ?>



