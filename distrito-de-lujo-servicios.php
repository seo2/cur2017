<?php
/*

Template name: Distrito de lujo Servicios

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
	$tit1 = "LUXURY SERVICES:";
	$btn1 = "View More stores";
	$btn2 = "View more galleries";
	$url  = "en/distrito-de-luxo/life-in-the-district/";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "SERVIÇOS DE LUXO";
	$btn1 = "Veja mais lojas";
	$btn2 = "veja mais galerias";
	$url  = "pt-br/distrito-de-luxo/vida-no-distrito/";
}else{ 
	$tit1 = "servicios de lujo";
	$btn1 = "Ver más tiendas";
	$btn2 = "ver más galerías";
	$url  = "distrito-de-lujo/galerias/";
} ?> 
     <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
             <h4 class="divider"><?php echo $tit1; ?></h4>  
            </div>
            <div class="col-sm-12 col-md-2">
             <a href="javascript:window.history.back();" class="back">&lt; <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->
   
    <section class="main_content">
      <div class="container">
          <div class="row">
          <section class="distrito_de_lujo_servicios clearfix">
<!--                <a href="javascript:void(0);" class="ver" data-toggle="modal" data-target="#mapaDistrito">ubicación distrito de lujo <i class="fa fa-map-marker" aria-hidden="true"></i></a>
 -->           
            <div class="col-sm-12">
              <?php include('include-slider-distrito-de-lujo-servicios.php') ?>
              <a href="<?php bloginfo('url'); ?>/distrito-de-lujo/distrito-de-lujo-tiendas/" class="ver_mas_tiendas raya_after pull-right"> <?php echo $btn1; ?> </a>
            </div>
             <?php include('include-modal-ubicacion-distrito-de-lujo.php'); ?>
          </section> <!-- fin grilla tiendas distrito -->

       </div>
  
<?php include('footer.php') ?>

