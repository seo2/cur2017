 <?php
/*

Template name: Turistas
*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-servicios-cliente.php') ?>
<?php include('include-search-no-slider.php') ?>

<?php
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "CUSTOMER SERVICE";
	$tit2 = "Contact us";
	$tit3 = "TIME SCHEDULES";
	$tit4 = "Services";
	$tit5 = "HOW TO GET THERE";
	$btn1 = "View all our stores";
	$btn2 = "View more";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){
	$tit1 = "SERVIÇO AO CLIENTE:";
	$tit2 = "Contate-Nos";
	$tit3 = "HORÁRIOS";
	$tit4 = "SERVIÇOS";
	$tit5 = "COMO CHEGAR";
	$btn1 = "Veja todas as nossas lojas";
	$btn2 = "Veja mais";
}else{
	$tit1 = "servicios turistas";
	$tit2 = "contáctanos";
	$tit3 = "Horarios";
	$tit4 = "Descuentos";
	$tit5 = "cómo llegar";
	$btn1 = "ver todas las tiendas";
	$btn2 = "ver más";
} ?>

    <div class="titulo_seccion sin_slider ">
        <div class="container">
        	<div class="row">
            	<div class="col-sm-12 col-md-10">
                	<h4 class="divider"><?php echo $tit1; ?></h4>
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
        		<section class="servicios_cliente clearfix">
		 		<?php
				    $detect = new Mobile_Detect();

					if ($detect->isMobile()) {

					   include('include-sac-como-llegar-mobile.php');
					}else{

						include('include-sac-como-llegar-desktop.php');
					}
				?>
        <div class="col-sm-6 col-md-6">
            <div class="box">
                <div class="box_slider">
                    <div class="item disable-owl-swipe">
                        <a href="<?php bloginfo('url'); ?>/turistas/descuentos/">
                            <div class="caption">
                                <p>&nbsp </p>
                                <h3><?php echo $tit4; ?> </h3>
						    <div class="divider"> </div>
                            </div>
                            <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_sac_servicios.jpg);"> </div>
                        </a>
                   	</div> <!-- item -->
                </div><!-- box slider  -->
            </div><!-- servicios -->
        </div>
                 <div class="col-sm-6 col-md-6">
            <div class="box">
                <div class="box_slider">
                    <div class="item disable-owl-swipe">
                         <a href="<?php bloginfo('url'); ?>/servicio-de-transfer">
                            <div class="caption">
                                 <p>¡TE LLEVAMOS! </p>
                                 <h3>TRANSFER</h3>
                                  <div class="divider"> </div>
                            </div>
                            <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_transfer.png);"> </div>
                        </a>
                    </div> <!-- item -->
                </div><!-- box slider  -->
            </div><!-- servicios -->
        </div>

					<div id="content_como_llegar" class="content_servicio collapse hidden-xs">
                <div id="content_como_llegarancla" class="anclita"></div>
                <div class="container">
                    <h4 class="divider verde"><?php echo $tit5; ?></h4>
                    <div class="close_servicio" data-target="#content_como_llegar"></div>
                      <div class="row">
                          <div class="col-md-12 ">
                            <div class="desc_servicio">
                              <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>

                              <div class='embed-container'>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1728.0546794294107!2d-71.295227!3d-29.976287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x347855101016b030!2sArauco+Premium+Outlet+Coquimbo!5e0!3m2!1ses!2sus!4v1507143891484" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>





                              </div>

                          </div>

                        </div>
          						<div class="datos_como_llegar clearfix">
          						    <div class="col-xs-12">
          								<br>
          						        <p><strong>Transporte Público</strong><br>
                              <i>Public transport</i><br>
          						        <i>Transporte Público</i></p>

          						        <p><strong>Para poder llegar a Arauco Premium Outlet Buenaventura, debes realizar el siguiente recorrido:</strong><br>
                              <i>To get to Arauco Premium Outlet Buenaventura, follow these instructions:</i><br>
          						        <i>Para poder chegar no Arauco Premium Outlet Buenaventura, deve o trajeto seguinte:
                              </i></p>

          						        <p><strong>Tomar el Metro de Santiago hasta la estación Vespucio Norte (Línea Amarilla).</strong><br>
                              <i>Take the metro to Vespucio Norte station (Yellow Line).</i><br>
          						        <i>Pegar o Metrô de Santiago até a Estação Vespucio Norte,(Linha Amarela).</i></p>

          						        <p><strong>Bajarse en la estación y caminar hasta la calle Av. Américo Vespucio Norte / El Rosal.</strong><br>
                              <i>Get off at the station and walk to Av. Vespucio Norte / El Rosal.</i><br>
          						        <i>Desça  na estação e caminha até a Av. Américo Vespúcio Norte/ El Rosal.</i></p>

          						        <p><strong>Tomar bus Transantiago B05 (Sentido hacia sector Buenaventura).</strong><br>
                              <i>Take the Transantiago bus B05 (Direction: Buenaventura).</i><br>
          						        <i>Pegar o ônibus Transantiago B05 (no sentido até o setor Buenaventura).</i></p>

          						        <p><strong>Bajarse en la parada PB1013 San Ignacio Esq. / Galvarino.</strong><br>
                              <i>Get off at stop PB1013, San Ignacio Esq. / Galvarino.</i><br>
          						        <i>Desça no ponto PB1013 San Ignacio Esq./ Galvarino.</i></p>

          						        <p><strong>Caminar hacia Arauco Premium Outlet Buenaventura (San Ignacio 500).</strong><br>
                              <i>Walk to Arauco Premium Outlet Buenaventura (San Ignacio 500).</i><br>
          						        <i>Caminhar até Arauco Premium Outlet Buenaventura (San Ignacio 500).</i></p>

          						        <br>
          						        <p><strong>Recomendaciones</strong><br>
                              <i>Recommendations</i><br>
          						        <i>Recomendações</i></p>

          						        <p><strong>En Chile el transporte público funciona a través de la tarjeta BIP, la cual puedes obtener en todas las estaciones de Metro de Santiago.</strong><br>
                              <i>In Chile, public transport works with the BIP card, which can be bought at any metro station.</i><br>
          						        <i>No Chile o transporte público funciona a través de cartão BIP, onde poderá obter em todas as estações de Metrô de Santiago.</i></p>
          						    </div>
          						</div>


          </div> <!-- row -->
        </div> <!-- container -->
		</section>
  </div> <!-- row -->
<?php include('footer.php') ?>

