
<div class="container">
  <div class="row">	    
<?php
	$args = array(
		'post_type'	=> array('novedades')
	);
    $n = 0;
    $query = new WP_Query( $args ); 
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) : $query->the_post();
			$url = 'javascript:void(0);';
			if(get('adicionales_enlace')){
				$url = get('adicionales_enlace');
			}
			
			$n++;
			$post_slug = 'novedad'.$n;
				
?>
    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="<?php echo $post_slug; ?>box">
	        <a href="<?php echo $url; ?>" class="" <?php if(get('adicionales_enlace_externo')){ ?> target="_blank" <?php } if(!get('adicionales_enlace')){ ?>data-toggle="collapse" data-target="#<?php echo $post_slug; ?>"<?php } ?>>
	              <?php the_post_thumbnail('preview_galerias', array( 'class' => 'center-block img-responsive' ) ); ?>
	        </a>
        </div>
        <div class="box_more_info">
          <a  href="<?php echo $url; ?>" <?php if(get('adicionales_enlace_externo')){ ?> target="_blank" <?php } if(!get('adicionales_enlace')){ ?> data-toggle="collapse" data-target="#<?php echo $post_slug; ?>" <?php } ?>><?php echo get('adicionales_titulo'); ?></a>
        </div>
    </div>
<?php 
        endwhile; 
	} 
	$n = 0;
    $query = new WP_Query( $args ); 
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) : $query->the_post();
			
			$n++;
			$post_slug = 'novedad'.$n;
				
?>
    <div id="<?php echo $post_slug; ?>" class="content_servicio collapse" >
    	<div id="<?php echo $post_slug; ?>ancla" class="anclita"></div>
        <div class="container">
        	<h4 class="divider"><?php the_title(); ?></h4>
            <div class="close_servicio" data-target="#<?php echo $post_slug; ?>"></div>
            <div class="row">
            	<div class="col-md-6 col-md-push-6">
                	<div class="slider_entrentencion owl-carousel owl-theme">
                    	<div class="item">
                        	<div class="img_servicio" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                        </div>
                    </div><!--  slider_entretenion -->
                    <?php if($post->ID == 431){ ?>
                    <div class="box_cartelera clearfix">
                    	<div class="row">
                        	<div class="col-xs-8">
                            	<a href="https://www.happyland.cl/mall-costa-pacifico/" target="_blank">Más información</a>
                            </div>
                            <div class="col-xs-4">
                            	<img src="<?php bloginfo('template_url'); ?>/assets/img/logo_happyland.png" alt="" class="img-responsive pull-right">
                            </div> 
                        </div>    
                    </div>
                    <?php }elseif($post->ID == 434){ ?>
<!--
                    <div class="box_cartelera clearfix">
                    	<div class="row">
                        	<div class="col-xs-8">
                            	<a href="http://www.cinemark.cl/theatres/coronel" target="_blank">Más información</a>
                            </div>
                            <div class="col-xs-4">
                            	<img src="<?php bloginfo('template_url'); ?>/assets/img/cinemark.jpg" alt="" class="img-responsive pull-right">
                            </div> 
                        </div>    
                    </div>
-->
                    <?php } ?>
                </div>
                <div class="col-md-6 col-md-pull-6 ">
                    <div class="desc_servicio desc_entretencion">
						<?php the_content(); ?>
                    </div>
               	</div>
            </div>                    
        </div> <!-- container -->         
    </div> <!-- content galeria de arte  -->
<?php 
        endwhile; 
	} 
?>       
  </div>
</div>


    





