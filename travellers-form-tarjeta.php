<?php
/*

Template name: Travellers Formulario

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
	$tit2 = "Contact us";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit2 = "Contate-Nos";
}else{ 
	$tit2 = "contáctanos";
} ?>   
     <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider"><?php echo $tit2; ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
                 <a href="travellers.php" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

    <section class="main_content">
      <div class="container">
          <div class="row">
          <section class="tarjeta_descuento">
			<?php	                                         
			    $args = array(
					'page_id' => 49
			    );
				$the_query = new WP_Query ($args);
			    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			    	the_content(); 
			?>	  
			<?php endwhile; else: ?>
			<?php endif; ?>	  
                <!-- formulario  -->
               <?php  include('include-form-tarjeta-travellers.php') ?>
             

          
          
          </section> <!-- tarjeta_descuento -->
      </div> <!-- row -->
<?php include('footer.php') ?>

