<?php
/*

Template name: Travellers Actividades

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
	$tit  = "activities";
	$tit1 = "cinema";
	$tit2 = "theater";
	$tit3 = "art Gallery
";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit  = "atividades";
	$tit1 = "cinema";
	$tit2 = "teatro";
	$tit3 = "galeria de Arte";
}else{ 
	$tit  = "actividades";
	$tit1 = "cine";
	$tit2 = "teatro";
	$tit3 = "galería de arte";
} ?>
     <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider"><?php echo $tit; ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
                 <a href="javascript:window.history.back();" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

    <section class="main_content">
      <div class="container">
          <div class="row">
          <section class="travellers_actividades clearfix">
         
                <div class="col-sm-6 col-md-6">

                      <div class="box">
                            <div class="box_slider owl-carousel owl-theme ">
                                  <div class="item">
                                      <a href="<?php bloginfo('url'); ?>/cartelera_boulevard/cartelera-boulevard/#cartelera">
                                           <div class="caption">
                                              <p>&nbsp </p>
                                               <h3>boulevard </h3>

                                               <div class="divider"> </div>
                                           </div>
                                           <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_zona.jpg);"> </div>                             
                                      </a>
                                   </div> <!-- item -->
                                    <!-- <div class="item">
                                      <a href="">
                                           <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_zona.jpg);"> </div>                             
                                      </a>
                                   </div>  item -->
                              </div><!-- box slider  -->
                     </div>
                </div> 

                <div class="col-sm-6 col-md-6">
                    <div class="box">
                          <div class="box_slider owl-carousel owl-theme ">
                            <div class="item">
                               
                                <a href="<?php bloginfo('url'); ?>/distrito-de-lujo/">
                                  <div class="logo_seccion logo_distrito" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_distrito.svg);"> </div>
                                  <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_distrito.png);"> </div>
                                </a>
                            </div>
                      <!--       <div class="item">
                                <a href="">
                                  <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider2.jpg);"> </div>
                                </a>
                            </div>
                            <div class="item">
                                  <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider3.jpg);"> </div>
                            </div>
                            <div class="item">
                                  <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider4.jpg);"> </div>
                            </div> -->
                        </div><!-- box slider  -->
                    </div> <!-- slider distrito -->
                </div> 

                <div class="col-sm-6 col-md-6">
                     <div class="box">
                           <div class="box_slider owl-carousel owl-theme ">
                                 <div class="item">
                                     <a href="http://www.cinehoyts.cl/cartelera/santiago-oriente/parque-arauco" target="_blank">
                                          <div class="caption">
                                             <p>&nbsp </p>
                                              <h3><?php echo $tit1; ?> </h3>
                                              <div class="divider"> </div>
                                          </div>
                                          <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_cine.jpg);"> </div>                             
                                     </a>
                                  </div> <!-- item -->
                                    <!-- <div class="item">
                                     <a href="">
                                          <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_zona.jpg);"> </div>                             
                                     </a>
                                  </div> item -->
                             </div><!-- box slider  -->
                    </div><!-- cine -->
                </div> 

                <div class="col-sm-6 col-md-6">
                     <div class="box">
                           <div class="box_slider owl-carousel owl-theme ">
                                 <div class="item">
                                     <a href="http://www.centromori.cl/">
                                          <div class="caption">
                                             <p>&nbsp </p>
                                              <h3><?php echo $tit2; ?> </h3>
                                              <div class="divider"> </div>
                                          </div>
                                          <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_teatro.jpg);"> </div>                             
                                     </a>
                                  </div> <!-- item -->
                             </div><!-- box slider  -->
                    </div><!-- teatro -->

                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="box">
                     <div class="box_slider owl-carousel owl-theme">
                           <div class="item">
                             <a href="http://www.galeriaisabelaninat.cl/" target="_blank">
                                <div class="caption">
                                    <p>&nbsp </p>
                                     <h3><?php echo $tit3; ?> </h3>
                                    <div class="divider"> &nbsp </div>
                                </div>
                               <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_galeria_arte.jpg);"> </div>
                             </a>
                           </div>

                           <!-- <div class="item">
                                <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider2.jpg);"> </div>
                            </div> -->
                         <!--   <div class="item">
                                <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider3.jpg);"> </div>
                            </div> -->
                        <!--    <div class="item"> 
                                <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider4.jpg);"> </div>
                            </div> -->
                       </div><!-- box slider  -->
                </div> <!-- galeria -->
            </div>



          </section>
       
           
            </div> <!-- row -->


            
<?php include('footer.php') ?>

