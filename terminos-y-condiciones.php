<?php
/*

Template name: Términos y Condiciones

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php // include('include-slider-home.php') ?>
<?php //include('include-search-home.php') ?>
<?php include('include-search-no-slider.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit  = "TERMS AND CONDITIONS";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit  = "TERMOS E CONDIÇÕES";
}else{ 
	$tit  = "términos y condiciones";
} ?>

    <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider"><?php echo $tit; ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->


    <section class="main_content">
      	<div class="container">
        	<div class="row">
            	<section class="terminos clearfix">
                    <div class="col-sm-12">
						<?php	                                         
						    $args = array(
								'post_type' 		=> array('term_y_cond'),
								'posts_per_page' 	=> -1
						    );
							$the_query = new WP_Query ($args);
						    $i = 0;
						    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
						    	$i++;
						?>	   	                   
						<div class="termino">
							<div class="title">
								<h3 ><?php the_title(); ?></h3>
								<div class="underline"> </div>
							</div>
							<?php the_content(); ?>
                    	</div> <!-- termino -->
						<?php endwhile; else: ?>
						<?php endif; ?>
					</div>
				</section> <!-- end terminos -->
			</div>

<?php include('footer.php') ?>

