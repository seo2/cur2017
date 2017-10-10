<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "Visit us";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Visítanos";
}else{ 
	$tit1 = "visítanos";
} ?> 
  <div class="container">
      <section class="visitanos">
        <h2><?php echo $tit1; ?></h2>
		<?php 	 
			if ($detect->isMobile()) { 
		?>				
        <div class="logos_pak_xs visible-xs visible-sm visible-md">
            <div class="slider_logos_mall owl-carousel owl-theme">
	           <div class="item">
	                <a href="http://www.parquearauco.cl/" target="_blank">
	                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/parque_arauco_xs.svg" alt="Parque Arauco" class="center-block">
	                </a>
	            </div>
                <div class="item">
                    <a href="http://www.araucomaipu.cl/" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_maipu.svg" alt="" class="center-block">
                    </a>
                </div>
                <div class="item">
                    <a href="http://araucoestacion.cl/" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_estacion.svg" alt="" class="center-block">
                    </a>
                </div>
                <div class="item">
                    <a href="http://www.araucoquilicura.cl/" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_quilicura.svg" alt="" class="center-block">
                    </a>
                </div>
                <div class="item">
                    <a href="http://www.araucosanantonio.cl/" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_san_antonio.svg" alt="" class="center-block">
                    </a>
                </div>
                <div class="item">
                    <a href="http://www.araucochillan.cl/" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_chillan.svg" alt="" class="center-block">
                    </a>
                </div>
                <div class="item">
                    <a href="http://araucopremiumoutlet.cl/" target="_blank">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_premium_outlet.svg" alt="" class="center-block">
                    </a>
                </div>
            </div> 
        </div> <!-- slider logos pak xs -->		
		<?php
			}else{
		?>
		<div class="logos_pak_lg hidden-xs hidden-sm hidden-md">
          <ul>
		  	<li>
            	<a class="hvr-float" href="http://www.parquearauco.cl/" target="_blank">
<!--                 	<img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/parque_arauco.svg" class=""> -->
                	<img src="<?php bloginfo('template_url'); ?>/assets/img/logo_xs.svg" class="logo_size">
              	</a>
            </li>
            <li>
                <a class="hvr-float" href="http://www.araucomaipu.cl/" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_maipu.svg" class="logo_size">
                </a>
            </li>
            <li>
                <a class="hvr-float" href="http://araucoestacion.cl/" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_estacion.svg" class="logo_size">
                </a>
            </li>
            <li>
                <a class="hvr-float" href="http://www.araucoquilicura.cl/" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_quilicura.svg" class="logo_size">
                </a>
            </li>
            <li>
                <a class="hvr-float" href="http://www.araucosanantonio.cl/" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_san_antonio.svg" class="logo_size negative_top">
                </a>
            </li>
            <li>
                <a class="hvr-float" href="http://www.araucochillan.cl/" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_chillan.svg" class="logo_size">
                </a>
            </li>
            <li>
                <a class="hvr-float" href="http://araucocoronel.cl/" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_coronel.svg" class="logo_size">
                </a>
            </li>
            <li>
                <a class="hvr-float" href="http://araucopremiumoutlet.cl/" target="_blank">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/logos_mall/arauco_premium_outlet.svg" class="logo_size positive_top">
                </a>
            </li>
          </ul>
        </div>
		<?php		
			}
		?>       
      </section><!-- logos pak -->
   </div> <!--  / container visitanos -->
