<?php
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
    $menu2 = "Luxury district";
    $menu3 = "boulevard";
    $menu4 = "Design floor";
    $menu5 = "Entertainment";
    $menu6 = "News";
    $menu7 = "Stores";
	$menu8 = "arauco tag";
    $menu9 = "Revista detalle - Magazine";
    $menu10 = "Customer service";
    $menu11 = "travellers";

	$tit1 = "Time schedules ";
	$tit2 = "How to get there ";
	$tit3 = "Subscribe here";
	$tit4 = "I accept the conditions";
	$tit5 = "Enter your email";
	$btn1 = "View all our stores";
	$btn2 = "View more";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){
    $menu2 = "Distrito de luxo";
    $menu3 = "boulevard";
    $menu4 = "Andar de desenho";
    $menu5 = "Diversão";
    $menu6 = "Novidades";
    $menu7 = "Lojas";
	  $menu8 = "arauco tag";
    $menu9 = "Revista detalhe";
    $menu10 = "Serviço ao cliente";
    $menu11 = "Viajantes";

	$tit1 = "Horários";
	$tit2 = "Como chegar";
	$tit3 = "Inscreva-se";
	$tit4 = "Aceito as condições";
	$tit5 = "Digite o seu e-mail";
	$btn1 = "Veja todas as nossas lojas";
	$btn2 = "Veja mais";
}else{
    $menu3 = "Patio de Comidas";
    $menu4 = "Bazar Central";
    $menu5 = "Turistas";
    $menu6 = "novedades";
    $menu7 = "tiendas";
	$menu8 = "Galería";
    $menu10 = "servicio al cliente";

	$tit1 = "horarios";
	$tit2 = "cómo llegar";
	$tit3 = "suscríbete";
	$tit4 = "Acepto las condiciones";
	$tit5 = "ingresa tu email";
	$btn1 = "ver todas las tiendas";
	$btn2 = "ver más";

} ?>
<?php
    $detect = new Mobile_Detect();
?>

     <section class="top">
		<?php
			if (!$detect->isMobile()) {
		?>
        <nav id="nav_desktop" class="navbar navbar-default navbar-fixed-top bg_blanco">
         <div class="nav_bottom_line"></div>
           <div class="container width">
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar top_bar"></span>
                 <span class="icon-bar middle_bar"></span>
                 <span class="icon-bar bottom_bar"></span>
               </button>
                  <div class="logo">
                    <a href="<?php bloginfo('url'); ?>"> Arauco Coquimbo</a>
                  </div> <!-- brand -->

<!--
                    <div id="lang_switcher" class="visible-xs visible-sm">
                       <select name="language" class="selectpicker show-menu-arrow">
                            <option selected="" value="/esp/">ESP</option>
                            <option value="/eng/">ENG</option>
                             <option value="/por/">POR</option>
                      </select>

                      </div>

                  <div class="lang ">
                    <ul class="hidden-xs hidden-sm">
						<?php icl_post_languages(); ?>
                    </ul>
                   </div>
-->

                <div class="rrss hidden-xs hidden-sm">
                   <ul>
                     <li><a href="https://www.facebook.com/araucocoronel/" target="_blank"><i class="fa fa-facebook hvr-float" aria-hidden="true"></i></a></li>
<!--
                     <li><a href="https://www.instagram.com/parquearauco/" target="_blank"><i class="fa fa-instagram hvr-float" aria-hidden="true"></i></a></li>-->
                     <li><a href="https://twitter.com/APremiumOutlet" target="_blank"><i class="fa fa-twitter hvr-float" aria-hidden="true"></i></a></li>

					 <li><a href="<?php bloginfo('site_url'); ?>/horarios"><i class="fa fa-clock-o hvr-float" aria-hidden="true"></i></a></li>
                   </ul>
                </div>
                <!-- RRSS -->


              <a class="close_tienda" href="javascript:void(0);" data-id="<?php echo $_GET['tiendaID']; ?>"> </a>
             </div> <!-- navbar header -->

          <div id="navbar" class="navbar-collapse collapse ">
               <div class="container menu_container">
                  <div class="divisor_v"></div>
                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                          <!-- col izquierda  -->
                          <div class="row">
                            <div class="col-sm-12 col-md-6">
                                 <ul class="nav navbar-nav">
                                     <li class="active"><a 			href="<?php bloginfo('url'); ?>">Home</a></li>
                                     <li><a id="btn_tiendas" 		href="<?php bloginfo('url'); ?>/tiendas#tiendas"><?php echo $menu7; ?></a></li>
                                   <!--   <li><a id="btn_boulevard" 		href="<?php bloginfo('url'); ?>/food-court-tiendas#tiendas"><?php echo $menu3; ?></a></li> -->
<!--                                      <li><a id="btn_piso" 			href="<?php bloginfo('url'); ?>/bazar-central"><?php echo $menu4; ?></a></li> -->
                                    <!--  <li><a id="btn_entretencion" 	href="<?php bloginfo('url'); ?>/turistas"><?php echo $menu5; ?></a></li> -->
                                    <!--  <li><a id="btn_novedades" 		href="<?php bloginfo('url'); ?>/novedades#novedades"><?php echo $menu6; ?></a></li> -->
                                     <li><a href="<?php bloginfo('url'); ?>/servicio-al-cliente"><?php echo $menu10; ?></a></li>
                                </ul>
                            </div>

                            <div class="divisor_h"></div>
                            <div class="col-sm-12 col-md-6">
                                  <ul class="nav navbar-nav">
                                       <li class="hidden-xs hidden-sm"><a class="invisible" href="javascript:void(0);">&nbsp</a></li>
<!--                                        <li class="hidden-xs hidden-sm"><a class="invisible" href="javascript:void(0);">&nbsp</a></li> -->
                                       <li class="hidden-xs hidden-sm"><a class="invisible" href="javascript:void(0);">&nbsp</a></li>
                                       <li class="hidden-xs hidden-sm"><a class="invisible" href="javascript:void(0);">&nbsp</a></li>
<!--                                        <li><a href="<?php bloginfo('url'); ?>/novedades-galeria/#galerias"><?php echo $menu8; ?></a></li> -->
<!--                                        <li><a href="<?php bloginfo('url'); ?>/servicio-al-cliente"><?php echo $menu10; ?></a></li> -->
                                  </ul>
                            </div>

                          </div>
                      </div>
                      <div class="divisor_h"></div>
                      <div class="col-sm-12 col-md-6">
                      <!-- col derecha -->
                          <div class="row">
                            <div class="col-md-6">
                            <!--      <div class="faq">
                                        <a href="">
                                          preguntas <i class="fa fa-comments-o" aria-hidden="true"> </i><br>
                                            <span>frecuentes</span>
                                        </a>
                                 </div> -->
                              <div class="horarios">
                                    <ul class="clearfix">
                                      <li>
                                            <a href="<?php bloginfo('url'); ?>/horarios"><i class="fa fa-clock-o" aria-hidden="true"></i>  <?php echo $tit1; ?> </a>
                                      </li>

                                      <li>
                                            <a href="https://www.google.com/maps/place/Arauco+Premium+Outlet+Coquimbo/@-29.9757142,-71.2976016,17z/data=!3m1!4b1!4m5!3m4!1s0x9691c9433dd04d4d:0x347855101016b030!8m2!3d-29.9757189!4d-71.2954129?hl=es-ES" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $tit2; ?> </a>
                                      </li>
                                    </ul>
                              </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div> <!-- row -->
						<div class="row">
							<div class="col-sm-12 col_box_news_letter">
								<div class="box_newsletter" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_box_newsletter.jpg);">
									<h3><?php echo $tit3; ?></h3>
									<form class="form_neswsletter" role="" id="form_neswsletter">
										<div class="box_input">
											<input  class="form-control" type="email" placeholder="<?php echo $tit5; ?>" required name="mail"/>
											<button type="submit">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</button>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" id="acepto"> <a href=""><?php echo $tit4; ?></a>
											</label>
										</div>
									</form>
								</div>
							</div>
						<div class="clearfix"></div>
						</div>
                      </div><!-- col -->
                  </div><!-- row -->
               </div><!-- container -->

             </div><!--/.nav-collapse -->
           </div>
         </nav> <!-- nav desktop-->
        <?php } ?>
		<?php
			if ($detect->isMobile()) {
			   include('include-nav-mobile.php');
			}
		?>
     </section> <!-- top -->
