  
<section class="footer_distrito_de_lujo">
    <?php include('include-modal-ubicacion-distrito-de-lujo.php'); ?>
    <h4 class="divider"><?php echo $tit3; ?></h4>
<?php	                                         
    $args = array(
		'post_type' => array('distrito_de_lujo')
    );
	$the_query = new WP_Query ($args);
	
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>    
    <div class="col-sm-6 col-md-6">	
    	<div class="image_dynamic">
        	<div class="image_dynamic_portada" style="background: url(<?php echo get('destacado_1_imagen'); ?>);"> </div>
            <div class="box_title">
            	<div class="caption_title">
                	<h3><?php echo get('destacado_1_titulo'); ?> </h3> 
                    <div class="divider"> </div>
                </div>
            </div>
            <div class="box_caption">
            	<div class="caption_revista" >
                	<h3><?php echo get('destacado_1_sub_titulo'); ?></h3>
                    <p><?php echo get('destacado_1_bajada'); ?></p>
                    <a href="<?php echo get('destacado_1_link'); ?>" class="btn btn-default btn_revista hvr-float" role="button"><?php echo $btn2; ?></a>
            	</div> 
            </div>
        </div>
    </div> <!-- vida en distrito -->
    
    <div class="col-sm-6 col-md-6">
	<?php
	   	$e = 0;
		$sliders = get_order_group('destacado_2_imagen');
		foreach($sliders as $slider){  
			$e++; 
	?>    	    
        <div class="box">
			<a href="<?php echo get('destacado_2_link'); ?>" class="box_enlace">
				<div class="box_img" style="background: url(<?php echo get('destacado_2_imagen'); ?>);"> </div>
				<div class="caption">
					<h3><?php echo get('destacado_2_texto_1'); ?></h3>
					<p><?php echo get('destacado_2_texto_2'); ?></p>
					<div class="divider"> &nbsp </div>
				</div>
			</a>
        </div>
	<?php } ?>
	<?php
   	$e = 0;
	$sliders = get_order_group('destacado_3_imagen');
	foreach($sliders as $slider){  
		$e++; 
?>    	       
        <div class="box">
			<a href="<?php echo get('destacado_3_link'); ?>" class="box_enlace">
				<div class="box_img" style="background: url(<?php echo get('destacado_3_imagen'); ?>);"> </div>
				<div class="caption">
					<!--   <h3>servicios</h3> -->
					<p><?php echo get('destacado_3_texto'); ?></p>
					<div class="divider"> &nbsp </div>
				</div>
			</a>
        </div>
    </div>
	<?php } ?>
<?php endwhile; else: ?>
<?php endif; ?>       
</section>