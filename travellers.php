<?php
/*

Template name: Travellers

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-travellers.php') ?>
<?php include('include-search-home.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit  = "Travellers";
	$tit1 = "stores";
	$tit2 = "DISCOUNTS";
	$tit3 = "Services";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit  = "Viajantes";
	$tit1 = "Lojas";
	$tit2 = "DESCONTOS";
	$tit3 = "Serviços";
}else{ 
	$tit  = "Travellers";
	$tit1 = "tiendas";
	$tit2 = "descuentos";
	$tit3 = "servicios";
} ?>

    <section class="main_content">
        <div class="titulo_seccion">
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
    
		<div class="container">
	        <div class="row">			
				<section class="travellers clearfix">
					<div class="col-sm-6 col-md-6">
						<div class="box">
	                    	<div class="box_slider owl-carousel owl-theme ">
	                        	<div class="item">
	                            	<a href="<?php bloginfo('url'); ?>/travellers-descuentos">
										<div class="caption">
											<p><?php echo $tit1; ?> </p>
											<h3><?php echo $tit2; ?> </h3>
											<div class="divider"> </div>
										</div>
										<div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_descuentos.jpg);"> </div>                             
	                                </a>
	                            </div> <!-- item -->
	                        </div><!-- box slider  -->
			            </div><!-- tiendas descuentos -->
			        </div> 
	
	                <div class="col-sm-6 col-md-6">
	                    <div class="box">
	                          <div class="box_slider owl-carousel owl-theme ">
	                                <div class="item">
	                                    <a href="<?php bloginfo('url'); ?>/servicio-al-cliente/servicios/">
	                                         <div class="caption">
	                                            <p>&nbsp </p>
	                                            <h3><?php echo $tit3; ?> </h3>
	
	                                             <div class="divider"> </div>
	                                         </div>
	                                         <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_servicios.jpg);"> </div>                             
	                                    </a>
	                                 </div> <!-- item -->
	                                   <!--<div class="item">
	                                    <a href="">
	                                         <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_zona.jpg);"> </div>                             
	                                    </a>
	                                 </div>  item -->
	                            </div><!-- box slider  -->
	                   </div><!-- servicios  -->
	                </div> 
	
	                <div class="col-sm-6 col-md-6">
	                     <div class="box">
	                           <div class="box_slider owl-carousel owl-theme ">
	                                 <div class="item">
	                                     <a href="<?php bloginfo('url'); ?>/travellers-actividades">
	                                          <div class="caption">
	                                             <p>&nbsp </p>
	                                              <h3>actividades </h3>
	                                              <div class="divider"> </div>
	                                          </div>
	                                          <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_actividades.jpg);"> </div>                             
	                                     </a>
	                                  </div> <!-- item -->
	                                    <!-- <div class="item">
	                                     <a href="">
	                                          <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_zona.jpg);"> </div>                             
	                                     </a>
	                                  </div> item -->
	                             </div><!-- box slider  -->
	                    </div><!-- actividades -->
	                </div> 
	
	                <div class="col-sm-6 col-md-6">
	                     <div class="box">
	                           <div class="box_slider owl-carousel owl-theme ">
	                                 <div class="item">
	                                     <a href="<?php bloginfo('url'); ?>/travellers-contacto">
	                                          <div class="caption">
	                                             <p>&nbsp </p>
	                                              <h3>contacto </h3>
	                                              <div class="divider"> </div>
	                                          </div>
	                                          <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_travellers.png);"> </div>                             
	                                     </a>
	                                  </div> <!-- item -->
	                             </div><!-- box slider  -->
	                    </div><!-- actividades -->
	                </div>
	                
	            </section> <!-- end section travellers -->
	        </div> <!-- row -->

<?php include('footer.php') ?>

