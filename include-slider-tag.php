<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$btn1 = "Sign up here";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$btn1 = "Registe-se aqui";
}else{ 
	$btn1 = "Inscríbete aquí";
} ?> 
     <section class="box_slider_tag">
        <div class="slider_tag owl-carousel owl-theme">
<?php
			$args = array(
				'p' => 54,
				'post_type'	=> array('slider')
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();							
					$e++;
					$i = 0;
					$sliders = get_order_group('slider_imagen_desktop');
					foreach($sliders as $slider){   
						$i++;
						$texto_boton = 'Ver más';
						if(get('slider_boton_texto',$slider)){
							$texto_boton = get('slider_boton_texto',$slider);
						}
?>              
                  <div class="item" id="item<?php echo $i; ?>"> 
	               	<?php if(get('slider_video',$slider)){ ?>
                    	<a class="owl-video item-video" href="https://www.youtube.com/watch?v=3DgsV87OcJY"></a>
                    <?php }else{ ?>
                        <!-- 1600x580 hidden-xs hidden-sm-->
                        <div class="owl-lazy img_slide" data-src="<?php echo get('slider_imagen_desktop',$slider); ?>" style="background: url(<?php echo get('slider_imagen_desktop',$slider); ?>)"> </div>
                          <!-- 700x580 -->
                        <div class="owl-lazy img_slide visible-xs visible-sm" data-src="<?php echo get('slider_image_mobile',$slider); ?>" style="background: url(<?php echo get('slider_image_mobile',$slider); ?>);"> </div>
	                    <?php if(get('textos_texto_1',$slider)){ ?>
					    <div class="container">
                          <div class="row">
                            <div class="caption<?php if(get('textos_texto_blanco',$slider)){ ?> texto_blanco<?php } ?>">
                                <img class="logo_travellers" src="<?php bloginfo('template_url'); ?>/assets/img/logo_travellers.svg" alt="">
	                            <?php if(get('textos_texto_1',$slider)){ ?>
                                <h3><?php echo get('textos_texto_1',$slider); ?></h3>
                                <?php } ?>
	                            <?php if(get('textos_texto_2',$slider)){ ?>
                                <h4 class="divider"><?php echo get('textos_texto_2',$slider); ?></h4>
                                <?php } ?>
	                            <?php if(get('textos_texto_3',$slider)){ ?>
                                <p><?php echo get('textos_texto_3',$slider); ?></p>
                                <?php }else{ ?>
                                <p>Solicita tu tarjeta de descuento en el mesón central de informaciones del mall.</p>
                                <p>Exclusivo para extranjeros con pasaporte o DNI</p>
                                <?php } ?>
	                            <?php if(get('slider_boton_enlace',$slider) && get('textos_texto_1',$slider)){ ?>
                                <div class="text-center">
                                  <a class="btn btn-default btn_blanco" href="<?php echo get('slider_boton_enlace',$slider); ?>" role="button"><?php echo $texto_boton; ?></a>
                                </div>
                                <?php } ?>
                            </div>
                          </div>
                        </div>
                        <?php }elseif(get('slider_boton_enlace',$slider) && !get('textos_texto_1',$slider)){ ?>
                        <a class="btn btn-default btn_blanco btn_single_img" href="<?php echo get('slider_boton_enlace',$slider); ?>" role="button"><?php echo $texto_boton; ?></a>     
                        <?php }else{ ?>
					    <div class="container">
                          <div class="row">
                            <div class="caption">
                              <!--   <h3>ACTUALIZA</h3>
                                <h4 class="divider">TU MANERA DE ESTACIONAR</h4>
                                <p>Y podrás acceder a los estacionamientos del mall con el mismo TAG que usas en las autopistas urbanas</p> -->
                                  <div class="box_btn_registro_tag">
                                      <img src="assets/img/logo_arauco_tag.png" alt="" class="center-block hidden">
                                      <div class="strip"> </div>
                                      <a href="https://www.costaneranorte.cl/sucursal_virtual/login.html"  target="_blank" class="btn btn-default btn_verde" role="button"><?php echo $btn1; ?></a>
                                  </div>
                               
                            </div>
                          </div>
                        </div>
                        <?php } ?>                          
                    <?php } ?>    
                  </div>
<?php 		} 
        endwhile; 
	} 
?>
        </div><!-- slider home -->
    </section><!-- / slider home -->
     