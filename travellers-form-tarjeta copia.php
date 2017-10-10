<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php // include('include-slider-home.php') ?>
<?php //include('include-search-home.php') ?>
<?php include('include-search-no-slider.php') ?>

    <section class="main_content">
      <div class="container">
          <div class="row">
          <section class="tarjeta_descuento">
             <h4 class="divider">SOLICITA TU TARJETA DE DESCUENTO  <a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a></h4>

             <p>Para recibir este benefcio solo debes ingresar estos datos y ya estarás disfrutando de fabulosos descuentos.</p>
             <?php include('include-form-tarjeta-travellers.php') ?>
          
          </section> <!-- tarjeta_descuento -->
      </div> <!-- row -->
<?php include('footer.php') ?>

