<?php
/*

Template name: Legales Concursos

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php // include('include-slider-home.php') ?>
<?php //include('include-search-home.php') ?>
<?php include('include-search-no-slider.php') ?><?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit  = "LEGAL BASIS FOR TENDERS";
	$txt = "SELECT THE BASIS FOR THE TENDER YOU ARE SEARCHING (.PDF)";
	$txt2 = "SELECT";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit  = "BASES LEGAIS DOS CONCURSOS";
	$txt = "SELECIONA A BASE DO CONCURSO QUE ESTÁ BUSCANDO (PDF)";
	$txt2 = "SELECIONA";
}else{ 
	$tit  = "bases legales concursos";
	$txt = "Selecciona la base del concurso que estas buscando(.PDF)";
	$txt2 = "Selecciona";
}


global $sitepress;
    // save current language
    $current_lang = $sitepress->get_current_language();
    //get the default language
    $default_lang = $sitepress->get_default_language();
    //fetch posts in default language
    $sitepress->switch_lang($default_lang);

?>

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
						<div class="content">
		                    <form id="bases">
		                      <div class="col-sm-12">
		                          <div class="form-group">
		                              <label for=""> <?php echo $txt; ?></label>
		                              <select class="selectpicker input-large form-control" id="legales">    
		                                  <option value=""> <?php echo $txt2; ?> </option>
										<?php	                                         
										    $args = array(
												'post_type' => array('bases_legales'),
												'posts_per_page' => -1
										    );
											$the_query = new WP_Query ($args);
											
										    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
										?>   			                          
		                                  <option value="<?php echo get('archivo_pdf'); ?>"><?php the_title(); ?></option>
										<?php endwhile; else: ?>
										<?php endif; ?>     
		                              </select>
		                        </div>
		                      </div>
		                    </form>
                		</div>
					</div>
            	</section> <!-- end terminos -->
			</div>

<?php include('footer.php') ?>

