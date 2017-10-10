
        <div class="slider_servicios_generales owl-carousel owl-theme clearfix">
			<?php	                                         
			    $args = array(
					'post_type' 		=> array('servicios_generales'),
					'posts_per_page' 	=> -1,
					'order'   			=> 'ASC',
					'category_name'		=> 'servicios-generales-2',
			    );
				$the_query = new WP_Query ($args);
			    $i = 0;
			    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			    	$i++;
			?>	                
            <div class="item clearfix">
            	<div class="col-md-6 col-md-push-6 ">
                	<div class="owl-lazy img_servicio" data-src="<?php echo get_the_post_thumbnail_url(); ?>" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"> </div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                	<div class="desc_servicio">
                    	<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
                         <!-- <p>Quiero compartir este post: </p> -->
                    </div>
              	</div>
        	</div>
			<?php endwhile; else: ?>
			<?php endif; ?>
		</div><!--  slider_servicios_generales -->