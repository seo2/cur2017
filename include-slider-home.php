     <section class="box_slider_home">
            <?php include('include-datos-tienda.php'); ?>
            <div class="slider_home owl-carousel owl-theme">
<?php
/*
		  	if($_GET['pagina']){
			  	
		  	}else{
			  	$offset1 = 0;
			  	$offset2 = 4;
			  	$e = 0;
			  	$i = 0;
		  	}
*/
			$args = array(
				'p' => 51,
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
                    	<a class="owl-video item-video" href="https://www.youtube.com/watch?v=<?php echo get('slider_video',$slider); ?>"></a>
                    <?php }else{ ?>
                        <!-- 1600x580 hidden-xs hidden-sm-->
                        <div class="owl-lazy img_slide hidden-xs hidden-sm" data-src="<?php echo get('slider_imagen_desktop',$slider); ?>" style="background: url(<?php echo get('slider_imagen_desktop',$slider); ?>)"> </div>
                          <!-- 700x580 -->
                        <div class="owl-lazy img_slide visible-xs visible-sm" data-src="<?php echo get('slider_image_mobile',$slider); ?>" style="background: url(<?php echo get('slider_image_mobile',$slider); ?>);"> </div>
	                    <?php if(get('textos_texto_1',$slider)){ ?>
					    <div class="container">
                          <div class="row">
                            <div class="caption<?php if(get('textos_texto_blanco',$slider)){ ?> texto_blanco<?php } ?>">
	                            <?php if(get('textos_texto_1',$slider)){ ?>
                                <h3><?php echo get('textos_texto_1',$slider); ?></h3>
                                <?php } ?>
	                            <?php if(get('textos_texto_2',$slider)){ ?>
                                <h4 class="divider"><?php echo get('textos_texto_2',$slider); ?></h4>
                                <?php } ?>
	                            <?php if(get('textos_texto_3',$slider)){ ?>
                                <p><?php echo get('textos_texto_3',$slider); ?></p>
                                <?php } ?>
	                            <?php if(get('slider_boton_enlace',$slider) && get('textos_texto_1',$slider)){ ?>
                                <div class="text-center">
                                  <a class="btn btn-default btn_blanco" href="<?php echo get('slider_boton_enlace',$slider); ?>" role="button"><?php echo $texto_boton; ?></a>
                                </div>
                                <?php } ?>
                            </div>
                          </div>
                        </div>
                        <?php } ?>
						<?php if(get('slider_boton_enlace',$slider) && !get('textos_texto_1',$slider)){ ?>
                        <a class="btn btn-default btn_blanco btn_single_img" href="<?php echo get('slider_boton_enlace',$slider); ?>" role="button"><?php echo $texto_boton; ?></a>     
                        <?php } ?>                          
                    <?php } ?>    
                  </div>
<?php 		} 
        endwhile; 
  } 
?>	
            </div><!-- slider home -->
     </section><!-- / slider home -->