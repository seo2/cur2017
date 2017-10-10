<?php
/*

Template name: Arauco Tag FAQ

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-tag.php') ?>
<?php include('include-search-home.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "Arauco Tag / FREQUENTLY ASKED QUESTIONS";
	$btn1 = "View More";
	$btn2 = "View more galleries";
	$url  = "en/distrito-de-luxo/life-in-the-district/";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Arauco Tag / PREGUNTAS FREQUENTES";
	$btn1 = "Veja mais";
	$btn2 = "veja mais galerias";
	$url  = "pt-br/distrito-de-luxo/vida-no-distrito/";
}else{ 
	$tit1 = "arauco tag / preguntas frecuentes";
	$btn1 = "Ver más";
	$btn2 = "ver más galerías";
	$url  = "distrito-de-lujo/galerias/";
} ?> 


    <section class="main_content">
        <div class="titulo_seccion ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider"><?php echo $tit1; ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
               <a href="javascript:window.history.back();" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->


    <div class="container">
        <div class="row">
        	<section class="arauco_tag_faq clearfix">
				<?php 
				// TRADUCCIONES
				if(ICL_LANGUAGE_CODE=='en'){
					include('include-arauco-tag-ing.php');
				}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
					include('include-arauco-tag-por.php');
				}else{ 
					include('include-arauco-tag-esp.php');
				} ?> 
				<section id="preguntas" class="box_faq">
                	<div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                	<div id="faq" class="ancla"> </div>
 
									<?php	                                         
									    $args = array(
											'post_type' 		=> array('arauco_tag_faq'),
											'posts_per_page' 	=> -1
									    );
										$the_query = new WP_Query ($args);
									    $i = 0;
									    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
									    	$i++;
									?>	   	                                  
									<div class="panel panel-default">
                                    	<div class="panel-heading" role="tab" id="">
                                        	<div class="ribbon"></div>
											<h4 class="panel-title">
												<a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q<?php echo $i; ?>" aria-expanded="false" aria-controls="q<?php echo $i; ?>">
													<?php the_title(); ?>
	                                        	</a>
                                    		</h4>
                                    	</div>
										<div id="q<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
											<div class="panel-body">
												<?php the_content(); ?>
                                    		</div>
                                    	</div>
                                	</div><!-- panel -->
									<?php endwhile; else: ?>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                	</div>
            	</section>
    		</section> <!-- end araucotag  faq -->
		</div>
<?php include('footer.php') ?>

