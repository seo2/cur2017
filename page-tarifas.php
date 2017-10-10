<?php
/*

Template name: Tarifas

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-servicios-cliente.php') ?>
<?php include('include-search-no-slider.php') ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>		
    <div class="titulo_seccion sin_slider ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                 <h4 class="divider"><?php the_title(); ?></h4> 
            </div>
            <div class="col-sm-12 col-md-2">
               <a href="<?php bloginfo('url'); ?>/servicio-al-cliente/" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->


    <section class="main_content">
      <div class="container">
      
      <div class="row">
        <section class="cartelera clearfix">
          
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                   <?php the_content();; ?>
                </div>
              </div>
       
            </div><!-- container -->
      </section><!-- cartelera -->
    </div><!-- row -->
<?php
		
	endwhile;
endif;
?>

<?php include('footer.php') ?>

