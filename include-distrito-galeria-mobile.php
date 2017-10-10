<div class="container" id="caja-galerias">
  <div class="row caja-galerias">
	  	<?
		  	$postperpage = 4;
		  	if($_GET['pagina']){
			  	$lapagina = $_GET['pagina'];
			  	$offset1 = 4 *($lapagina-1);
			  	$offset2 = $offset1 + 4;
			  	$e = $offset1;
			  	$i = $offset1;
		  	}else{
			  	$offset1 = 0;
			  	$offset2 = 4;
			  	$e = 0;
			  	$i = 0;
		  	}
			$args = array(
				'post_type' 	=> 'galeria',
				'posts_per_page'=> 4,
				'category_name'	=> 'distrito-de-lujo',
				'offset' 		=> $offset1
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();							
					$e++;	
		?>
    	<div class="col-sm-6">
        	<div class="box_servicio" id="gal<?php echo $e; ?>_xsbox">
				<a href="javascript:void(0);" class="borde_verde"  data-toggle="collapse" data-target="#gal<?php echo $e; ?>_xs">
					<?php the_post_thumbnail('preview_galerias', array( 'class' => 'center-block img-responsive' ) ); ?>
          		</a>
        	</div>
			<div class="box_more_info sin_borde">
				<a href="javascript:void(0);" data-toggle="collapse" data-target="#gal<?php echo $e; ?>_xs"><?php the_title(); ?></a>
        	</div>
    	</div>

        <div id="gal<?php echo $e; ?>_xs" class="content_servicio collapse">
         <div id="gal<?php echo $e; ?>_xsancla" class="anclita_xs"></div>
        	<div class="container">
            	<h4 class="divider"><?php the_title(); ?></h4>
                <div class="close_servicio" data-target="#gal<?php echo $e; ?>_xs"></div>
                <div class="row">
                	<div class="col-md-6">
                    	<div class="slider_entrentencion owl-carousel owl-theme">
							<?php $imagenes = muestra_galeria(); ?>
							<?php foreach ($imagenes as $imagen): ?>
							<div class="item">
                            	<div class="img_servicio" style="background: url(<?php echo wp_get_attachment_url($imagen->ID); ?>);"></div>
                        	</div>
							<?php endforeach ?>
                        </div><!--  slider_entretenion -->
                    </div>
                    <div class="col-md-6">
                    	<div class="desc_servicio desc_galeria">
                        	<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
                            <div class="btn-mas"><a href="bazar_organico_huerto_del_parque.php"><?php echo $btn1; ?></a></div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div> <!-- content gal   -->
<?php    
        endwhile; 
  } 
?>	
	</div> <!-- row -->
</div><!-- container -->
<div class="box_ver_mas_tiendas text-center">
   	<a href="javascript:void(0);" class="btn btn-default btn_ver_mas hvr-float">
    	<h3 class="ver_mas"><?php echo $btn2; ?></h3>
		<img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
		<span id="loader"  style="display:none"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
	</a>
</div>

    





