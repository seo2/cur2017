<?php
/*

Template name: Contacto Comercial

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php // include('include-slider-home.php') ?>
<?php //include('include-search-home.php') ?>
<?php include('include-search-no-slider.php') ?>
    <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider"><?php the_title(); ?></h4>
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
            <div class="col-sm-12"></div>
              <section class="contacto_comercial clearfix">
              <!--   <div class="col-sm-12">
                 <a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a>
                  <div class="termino">
                    <div class="title">
                      <h3>contacto comercial</h3>
                       <div class="underline"> </div>
                    </div>
                  </div>
                </div> -->
               <!--  <a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a> -->
                  <div class="col-sm-6">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
                    <div class="content">
                    	<?php the_content(); ?>
                    </div><!-- content -->
			        <?php endwhile; ?>
					<?php // Navegación ?>
					<?php else : ?>
					<?php // Cuando no hay post ?>
					<?php endif; ?>
                  </div> <!-- col-sm-6 -->
                  <div class="col-sm-6">
                      <?php include('sidebar-contacto-comercial.php'); ?>
                  </div><!-- col-sm-6 -->
              </section> <!-- end contacto_comercial -->
		</div>
<?php include('footer.php') ?>