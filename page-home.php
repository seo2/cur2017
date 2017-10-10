<?
/*

Template name: Home

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
	<section class="main_content">
    	<div class="container">
<?php wp_reset_query(); ?>
<?php
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "Subscribe here";
	$tit2 = "Photo Gallery";
	$tit3 = "HIGHLIGHTS";
	$btn1 = "View all our stores";
	$btn2 = "View more";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){
	$tit1 = "Inscreva-se";
	$tit2 = "Galeria";
	$tit3 = "DESTACADOS";
	$btn1 = "Veja todas as nossas lojas";
	$btn2 = "Veja mais";
}else{
	$tit1 = "Inscríbete";
	$tit2 = "Galería";
	$tit3 = "destacados";
	$btn1 = "ver todas las tiendas";
	$btn2 = "ver más";
} ?>
<?php
    $args = array(
		'post_type' => array('home')
    );
	$the_query = new WP_Query ($args);
    $i = 0;
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    	$i++;
?>
        	<div class="row">
              <div class="col-sm-6 col-md-6">
                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('distrito_de_lujo_imagen_slider');
							foreach($sliders as $slider){
								$e++;
						?>
                          <div class="item">
                              <a href="<?php bloginfo('url'); ?>/tiendas#tiendas">
	                            <?php if($e==1){ ?>
                                   <div class="caption tiendas">
                                      <p>NUESTRAS </p>
                                       <h3>TIENDAS </h3>
                                       <div class="divider"> </div>
                                   </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('distrito_de_lujo_imagen_slider',$slider); ?>);"> </div>
                              </a>
                          </div>
                        <?php } ?>

                      </div><!-- box slider  -->
                  </div> <!-- slider distrito -->
              </div>

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                      <div class="box_slider owl-carousel owl-theme ">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('piso_de_diseno_imagen_slider');
							foreach($sliders as $slider){
								$e++;
						  ?>
                          <!--  <div class="item ">
                               <a href="<?php bloginfo('url'); ?>/turistas">
	                            <?php if($e==1){ ?>
                                   <div class="caption foodcourt">
                                      <p>SERVICIO A NUESTROS</p>
                                       <h3>Turistas </h3>
                                       <div class="divider"> </div>
                                   </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('piso_de_diseno_imagen_slider',$slider); ?>);"> </div>
                               </a>
                            </div>  -->

                             <div class="item">
                                 <a href="https://www.google.com/maps/place/Arauco+Premium+Outlet+Coquimbo/@-29.9757142,-71.2976016,17z/data=!3m1!4b1!4m5!3m4!1s0x9691c9433dd04d4d:0x347855101016b030!8m2!3d-29.9757189!4d-71.2954129?hl=es-ES" target="_blank">
                                <?php if($e==1){ ?>
                                     <div class="caption foodcourt">
                                        <p></p>
                                         <h3>como llegar </h3>
                                         <div class="divider"> </div>
                                     </div>
                                  <?php } ?>
                                  <div class="box_slide" style="background: url(<?php echo get('piso_de_diseno_imagen_slider',$slider); ?>);"> </div>
                                 </a>
                              </div> <!-- item -->

                        <?php } ?>
                       </div><!-- box slider  -->
                   </div>
              </div> <!-- piso diseño -->

              <div class="col-sm-6 col-md-6">
              <!--     <div class="box">
                         <div class="box_slider owl-carousel owl-theme">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('travellers_imagen_slider');
							foreach($sliders as $slider){
								$e++;
						?>
                              <div class="item">
                                  <a href="<?php bloginfo('url'); ?>/food-court-tiendas/#tiendas">
	                            <?php if($e==1){ ?>
                                   <div class="caption galeria">
                                      <p>NUESTRA VARIEDAD </p>
                                       <h3>Food Court </h3>
                                       <div class="divider"> </div>
                                   </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('travellers_imagen_slider',$slider); ?>);"> </div>
                                  </a>
                               </div>

                        <?php } ?>
                          </div>
                   </div> -->
              </div>

              <div class="col-sm-6 col-md-6">
                  <!-- <div class="box">
                    <div class="box_slider owl-carousel owl-theme ">
            					   	<?php
            						   	$e = 0;
            							$sliders = get_order_group('boulevard_imagen_slider');
            							foreach($sliders as $slider){
            								$e++;
            						?>
                           <div class="item">
                                <a href="<?php bloginfo('url'); ?>/servicio-de-transfer">
	                               <?php if($e==1){ ?>
                                       <div class="caption entretencion">
                                          <p>¡TE LLEVAMOS! </p>
                                           <h3>TRANSFER</h3>
                                           <div class="divider"> </div>
                                       </div>
                                <?php } ?>
                                <div class="box_slide" style="background: url(<?php echo get('boulevard_imagen_slider',$slider); ?>);"> </div>
                                  </a>
                               </div>
                        <?php } ?>
                        </div>
                 </div> -->
              </div> <!-- slider zona boulevard -->

              <div class="col-sm-12">
                    <!-- NOVEDADES -->
                    <div class="box_horizontal">
                       <div class="box_slider owl-carousel owl-theme">
					   	<?php
						   	$e = 0;
							$sliders = get_order_group('slider_medio_imagen_desktop');
							foreach($sliders as $slider){
								if(get('slider_medio_imagen_desktop',$slider)){
									$e++;
						?>
                         <div class="item">
                            <div class="img_slide hidden-xs hidden-sm"  style="background: url(<?php echo get('slider_medio_imagen_desktop',$slider); ?>);"> </div>
                            <!-- 700 x 400px -->
                            <div class="img_slide visible-xs visible-sm"  style="background: url(<?php echo get('slider_medio_imagen_mobile',$slider); ?>);"> </div>
				  			<div class="caption">
					  			<?php if(get('slider_medio_texto_1',$slider)){ ?>
                               	<h3><?php echo get('slider_medio_texto_1',$slider); ?></h3>
                               	<?php } ?>
					  			<?php if(get('slider_medio_texto_2',$slider)){ ?>
                               	<h4 class="divider"><?php echo get('slider_medio_texto_2',$slider); ?></h4>
                               	<?php } ?>
					  			<?php if(get('slider_medio_texto_3',$slider)){ ?>
                               	<p><?php echo get('slider_medio_texto_3',$slider); ?></p>
                               	<?php } ?>
					  			<?php if(get('slider_medio_link',$slider)){ ?>
							   	<div class="text-center">
                               		<a href="<?php echo get('slider_medio_link',$slider); ?>" class="btn btn-default btn_blanco"  role="button"><?php echo $btn2; ?></a>
                               	</div>
                               	<?php
										}
	                                ?>
                            </div>
                         </div><!-- item -->
                        <?php
	                        		}
	                        } ?>
                      </div>
                    </div><!-- box horizontal -->

                        <?php if($e==0){ ?>
							<script>
								$(document).ready(function() {
									$('.box_horizontal').hide();
								});
							</script>
                        <?php } ?>
               </div>
            </div> <!-- row -->
<?php endwhile; else: ?>
<?php endif; ?>

  <div class="modal_overlay" data-url="<?php bloginfo('url'); ?>" data-template="<?php bloginfo('template_url'); ?>" style="display:none;">
        <div class="box_modal">
			<a href="javascript:(0);" class="close_modal"></a>
            <div class="header_modal">
                <div class="row">
                    <div class="col-3">
						<div class="logo"></div>
                    </div>
                    <div class="col-9">
                    	<div class="img_mall"></div>
                    </div>
                </div>
				<h2 class="title_modal">suscríbete a nuestras novedades</h2>
            </div>
            <div class="box_form">
                <form id="formModal" action="<?php bloginfo('template_url'); ?>/ajax/grabamodal.php">
                    <div class="row">
						<div class="col-6">
                        	<div class="form-group">
                            	<label for="exampleInputEmail1">Nombres:</label>
								<input type="text" class="form-control" id="modNom" placeholder="Ingreso de datos" name="modNom" required>
                        	</div>
                      	</div>
					  	<div class="col-6">
                        	<div class="form-group">
								<label for="exampleInputEmail1">apellidos:</label>
								<input type="text" class="form-control" id="modApe" placeholder="Ingreso de datos" name="modApe" required>
                        	</div>
                      	</div>

						<div class="col-6">
                        	<div class="form-group">
								<label for="exampleInputEmail1">RUT/DNI/Pasaporte</label>
								<input type="text" class="form-control" id="modRut" placeholder="Ingreso de datos" name="modRut" required>
                    		</div>
						</div>

					  	<div class="col-6">
					  		<div class="form-group">
					  			<label for="exampleInputEmail1">nacionalidad:</label>
<!-- 					  			<input type="text" class="form-control" id="modNac" placeholder="Ingreso de datos" name="modNac" required> -->
						  		<select class="form-control" name="modNac" id="modNac" required>
									<option value="">Seleccione</option>
  									<option value="Afganistán" >Afganistán</option>
  									<option value="Islas Gland" >Islas Gland</option>
  									<option value="Albania" >Albania</option>
  									<option value="Alemania" >Alemania</option>
  									<option value="Andorra" >Andorra</option>
  									<option value="Angola" >Angola</option>
  									<option value="Anguilla" >Anguilla</option>
  									<option value="Antártida" >Antártida</option>
  									<option value="Antigua y Barbuda" >Antigua y Barbuda</option>
  									<option value="Antillas Holandesas" >Antillas Holandesas</option>
  									<option value="Arabia Saudí" >Arabia Saudí</option>
  									<option value="Argelia" >Argelia</option>
  									<option value="Argentina" >Argentina</option>
  									<option value="Armenia" >Armenia</option>
  									<option value="Aruba" >Aruba</option>
  									<option value="Australia" >Australia</option>
  									<option value="Austria" >Austria</option>
  									<option value="Azerbaiyán" >Azerbaiyán</option>
  									<option value="Bahamas" >Bahamas</option>
  									<option value="Bahréin" >Bahréin</option>
  									<option value="Bangladesh" >Bangladesh</option>
  									<option value="Barbados" >Barbados</option>
  									<option value="Bielorrusia" >Bielorrusia</option>
  									<option value="Bélgica" >Bélgica</option>
  									<option value="Belice" >Belice</option>
  									<option value="Benin" >Benin</option>
  									<option value="Bermudas" >Bermudas</option>
  									<option value="Bhután" >Bhután</option>
  									<option value="Bolivia" >Bolivia</option>
  									<option value="Bosnia y Herzegovina" >Bosnia y Herzegovina</option>
  									<option value="Botsuana" >Botsuana</option>
  									<option value="Isla Bouvet" >Isla Bouvet</option>
  									<option value="Brasil" >Brasil</option>
  									<option value="Brunéi" >Brunéi</option>
  									<option value="Bulgaria" >Bulgaria</option>
  									<option value="Burkina Faso" >Burkina Faso</option>
  									<option value="Burundi" >Burundi</option>
  									<option value="Cabo Verde" >Cabo Verde</option>
  									<option value="Islas Caimán" >Islas Caimán</option>
  									<option value="Camboya" >Camboya</option>
  									<option value="Camerún" >Camerún</option>
  									<option value="Canadá" >Canadá</option>
  									<option value="República Centroafricana" >República Centroafricana</option>
  									<option value="Chad" >Chad</option>
  									<option value="República Checa" >República Checa</option>
  									<option value="Chile" >Chile</option>
  									<option value="China" >China</option>
  									<option value="Chipre" >Chipre</option>
  									<option value="Isla de Navidad" >Isla de Navidad</option>
  									<option value="Ciudad del Vaticano" >Ciudad del Vaticano</option>
  									<option value="Islas Cocos" >Islas Cocos</option>
  									<option value="Colombia" >Colombia</option>
  									<option value="Comoras" >Comoras</option>
  									<option value="República Democrática del Congo" >República Democrática del Congo</option>
  									<option value="Congo" >Congo</option>
  									<option value="Islas Cook" >Islas Cook</option>
  									<option value="Corea del Norte" >Corea del Norte</option>
  									<option value="Corea del Sur" >Corea del Sur</option>
  									<option value="Costa de Marfil" >Costa de Marfil</option>
  									<option value="Costa Rica" >Costa Rica</option>
  									<option value="Croacia" >Croacia</option>
  									<option value="Cuba" >Cuba</option>
  									<option value="Dinamarca" >Dinamarca</option>
  									<option value="Dominica" >Dominica</option>
  									<option value="República Dominicana" >República Dominicana</option>
  									<option value="Ecuador" >Ecuador</option>
  									<option value="Egipto" >Egipto</option>
  									<option value="El Salvador" >El Salvador</option>
  									<option value="Emiratos Árabes Unidos" >Emiratos Árabes Unidos</option>
  									<option value="Eritrea" >Eritrea</option>
  									<option value="Eslovaquia" >Eslovaquia</option>
  									<option value="Eslovenia" >Eslovenia</option>
  									<option value="España" >España</option>
  									<option value="Islas ultramarinas de Estados Unidos" >Islas ultramarinas de Estados Unidos</option>
  									<option value="Estados Unidos" >Estados Unidos</option>
  									<option value="Estonia" >Estonia</option>
  									<option value="Etiopía" >Etiopía</option>
  									<option value="Islas Feroe" >Islas Feroe</option>
  									<option value="Filipinas" >Filipinas</option>
  									<option value="Finlandia" >Finlandia</option>
  									<option value="Fiyi" >Fiyi</option>
  									<option value="Francia" >Francia</option>
  									<option value="Gabón" >Gabón</option>
  									<option value="Gambia" >Gambia</option>
  									<option value="Georgia" >Georgia</option>
  									<option value="Islas Georgias del Sur y Sandwich del Sur" >Islas Georgias del Sur y Sandwich del Sur</option>
  									<option value="Ghana" >Ghana</option>
  									<option value="Gibraltar" >Gibraltar</option>
  									<option value="Granada" >Granada</option>
  									<option value="Grecia" >Grecia</option>
  									<option value="Groenlandia" >Groenlandia</option>
  									<option value="Guadalupe" >Guadalupe</option>
  									<option value="Guam" >Guam</option>
  									<option value="Guatemala" >Guatemala</option>
  									<option value="Guayana Francesa" >Guayana Francesa</option>
  									<option value="Guinea" >Guinea</option>
  									<option value="Guinea Ecuatorial" >Guinea Ecuatorial</option>
  									<option value="Guinea-Bissau" >Guinea-Bissau</option>
  									<option value="Guyana" >Guyana</option>
  									<option value="Haití" >Haití</option>
  									<option value="Islas Heard y McDonald" >Islas Heard y McDonald</option>
  									<option value="Honduras" >Honduras</option>
  									<option value="Hong Kong" >Hong Kong</option>
  									<option value="Hungría" >Hungría</option>
  									<option value="India" >India</option>
  									<option value="Indonesia" >Indonesia</option>
  									<option value="Irán" >Irán</option>
  									<option value="Iraq" >Iraq</option>
  									<option value="Irlanda" >Irlanda</option>
  									<option value="Islandia" >Islandia</option>
  									<option value="Israel" >Israel</option>
  									<option value="Italia" >Italia</option>
  									<option value="Jamaica" >Jamaica</option>
  									<option value="Japón" >Japón</option>
  									<option value="Jordania" >Jordania</option>
  									<option value="Kazajstán" >Kazajstán</option>
  									<option value="Kenia" >Kenia</option>
  									<option value="Kirguistán" >Kirguistán</option>
  									<option value="Kiribati" >Kiribati</option>
  									<option value="Kuwait" >Kuwait</option>
  									<option value="Laos" >Laos</option>
  									<option value="Lesotho" >Lesotho</option>
  									<option value="Letonia" >Letonia</option>
  									<option value="Líbano" >Líbano</option>
  									<option value="Liberia" >Liberia</option>
  									<option value="Libia" >Libia</option>
  									<option value="Liechtenstein" >Liechtenstein</option>
  									<option value="Lituania" >Lituania</option>
  									<option value="Luxemburgo" >Luxemburgo</option>
  									<option value="Macao" >Macao</option>
  									<option value="ARY Macedonia" >ARY Macedonia</option>
  									<option value="Madagascar" >Madagascar</option>
  									<option value="Malasia" >Malasia</option>
  									<option value="Malawi" >Malawi</option>
  									<option value="Maldivas" >Maldivas</option>
  									<option value="Malí" >Malí</option>
  									<option value="Malta" >Malta</option>
  									<option value="Islas Malvinas" >Islas Malvinas</option>
  									<option value="Islas Marianas del Norte" >Islas Marianas del Norte</option>
  									<option value="Marruecos" >Marruecos</option>
  									<option value="Islas Marshall" >Islas Marshall</option>
  									<option value="Martinica" >Martinica</option>
  									<option value="Mauricio" >Mauricio</option>
  									<option value="Mauritania" >Mauritania</option>
  									<option value="Mayotte" >Mayotte</option>
  									<option value="México" >México</option>
  									<option value="Micronesia" >Micronesia</option>
  									<option value="Moldavia" >Moldavia</option>
  									<option value="Mónaco" >Mónaco</option>
  									<option value="Mongolia" >Mongolia</option>
  									<option value="Montserrat" >Montserrat</option>
  									<option value="Mozambique" >Mozambique</option>
  									<option value="Myanmar" >Myanmar</option>
  									<option value="Namibia" >Namibia</option>
  									<option value="Nauru" >Nauru</option>
  									<option value="Nepal" >Nepal</option>
  									<option value="Nicaragua" >Nicaragua</option>
  									<option value="Níger" >Níger</option>
  									<option value="Nigeria" >Nigeria</option>
  									<option value="Niue" >Niue</option>
  									<option value="Isla Norfolk" >Isla Norfolk</option>
  									<option value="Noruega" >Noruega</option>
  									<option value="Nueva Caledonia" >Nueva Caledonia</option>
  									<option value="Nueva Zelanda" >Nueva Zelanda</option>
  									<option value="Omán" >Omán</option>
  									<option value="Países Bajos" >Países Bajos</option>
  									<option value="Pakistán" >Pakistán</option>
  									<option value="Palau" >Palau</option>
  									<option value="Palestina" >Palestina</option>
  									<option value="Panamá" >Panamá</option>
  									<option value="Papúa Nueva Guinea" >Papúa Nueva Guinea</option>
  									<option value="Paraguay" >Paraguay</option>
  									<option value="Perú" >Perú</option>
  									<option value="Islas Pitcairn" >Islas Pitcairn</option>
  									<option value="Polinesia Francesa" >Polinesia Francesa</option>
  									<option value="Polonia" >Polonia</option>
  									<option value="Portugal" >Portugal</option>
  									<option value="Puerto Rico" >Puerto Rico</option>
  									<option value="Qatar" >Qatar</option>
  									<option value="Reino Unido" >Reino Unido</option>
  									<option value="Reunión" >Reunión</option>
  									<option value="Ruanda" >Ruanda</option>
  									<option value="Rumania" >Rumania</option>
  									<option value="Rusia" >Rusia</option>
  									<option value="Sahara Occidental" >Sahara Occidental</option>
  									<option value="Islas Salomón" >Islas Salomón</option>
  									<option value="Samoa" >Samoa</option>
  									<option value="Samoa Americana" >Samoa Americana</option>
  									<option value="San Cristóbal y Nevis" >San Cristóbal y Nevis</option>
  									<option value="San Marino" >San Marino</option>
  									<option value="San Pedro y Miquelón" >San Pedro y Miquelón</option>
  									<option value="San Vicente y las Granadinas" >San Vicente y las Granadinas</option>
  									<option value="Santa Helena" >Santa Helena</option>
  									<option value="Santa Lucía" >Santa Lucía</option>
  									<option value="Santo Tomé y Príncipe" >Santo Tomé y Príncipe</option>
  									<option value="Senegal" >Senegal</option>
  									<option value="Serbia y Montenegro" >Serbia y Montenegro</option>
  									<option value="Seychelles" >Seychelles</option>
  									<option value="Sierra Leona" >Sierra Leona</option>
  									<option value="Singapur" >Singapur</option>
  									<option value="Siria" >Siria</option>
  									<option value="Somalia" >Somalia</option>
  									<option value="Sri Lanka" >Sri Lanka</option>
  									<option value="Suazilandia" >Suazilandia</option>
  									<option value="Sudáfrica" >Sudáfrica</option>
  									<option value="Sudán" >Sudán</option>
  									<option value="Suecia" >Suecia</option>
  									<option value="Suiza" >Suiza</option>
  									<option value="Surinam" >Surinam</option>
  									<option value="Svalbard y Jan Mayen" >Svalbard y Jan Mayen</option>
  									<option value="Tailandia" >Tailandia</option>
  									<option value="Taiwán" >Taiwán</option>
  									<option value="Tanzania" >Tanzania</option>
  									<option value="Tayikistán" >Tayikistán</option>
  									<option value="Territorio Británico del Océano Índico" >Territorio Británico del Océano Índico</option>
  									<option value="Territorios Australes Franceses" >Territorios Australes Franceses</option>
  									<option value="Timor Oriental" >Timor Oriental</option>
  									<option value="Togo" >Togo</option>
  									<option value="Tokelau" >Tokelau</option>
  									<option value="Tonga" >Tonga</option>
  									<option value="Trinidad y Tobago" >Trinidad y Tobago</option>
  									<option value="Túnez" >Túnez</option>
  									<option value="Islas Turcas y Caicos" >Islas Turcas y Caicos</option>
  									<option value="Turkmenistán" >Turkmenistán</option>
  									<option value="Turquía" >Turquía</option>
  									<option value="Tuvalu" >Tuvalu</option>
  									<option value="Ucrania" >Ucrania</option>
  									<option value="Uganda" >Uganda</option>
  									<option value="Uruguay" >Uruguay</option>
  									<option value="Uzbekistán" >Uzbekistán</option>
  									<option value="Vanuatu" >Vanuatu</option>
  									<option value="Venezuela" >Venezuela</option>
  									<option value="Vietnam" >Vietnam</option>
  									<option value="Islas Vírgenes Británicas" >Islas Vírgenes Británicas</option>
  									<option value="Islas Vírgenes de los Estados Unidos" >Islas Vírgenes de los Estados Unidos</option>
  									<option value="Wallis y Futuna" >Wallis y Futuna</option>
  									<option value="Yemen" >Yemen</option>
  									<option value="Yibuti" >Yibuti</option>
  									<option value="Zambia" >Zambia</option>
  									<option value="Zimbabue" >Zimbabue</option>
  								</select>
                    		</div>
						</div>
						<div class="col-6">
                        	<div class="form-group">
								<label for="exampleInputEmail1">correo electrónico:</label>
								<input type="email" class="form-control" id="modMail" placeholder="Ingreso de datos" name="modMail" required>
                    		</div>
						</div>
                    </div>
                   <div class="checkbox center-block">
                   		<label>
                       		<input type="checkbox" id="acepto2"> Estoy de acuerdo con los <a href="http://araucopremiumoutletbuenaventura.cl/wp-content/uploads/2017/03/terminos_y_condiciones_newsletter_buenaventura.pdf" target="_blank">términos y condiciones</a>
						</label>
                   </div>
				   <button type="submit" class="btn btn-default btn_rojo center-block">Enviar</button>
                </form>
            </div><!-- box_form -->

        </div><!-- box_modal -->
  </div><!-- modal overlay -->

<?php include('footer.php') ?>

