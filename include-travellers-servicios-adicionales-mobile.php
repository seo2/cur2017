<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">
    <div class="col-xs-6">
        <div class="box_servicio" id="serv1xsbox">
          <a href="javascript:void(0);" class="borde_verde"  data-toggle="collapse" data-target="#serv1xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/transfer.svg"  class="center-block">
              <p><?php echo $serv1; ?></p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv1xs"><?php echo $btn1; ?></a>
        </div>
    </div>

    <div class="col-xs-6">
        <div class="box_servicio" id="serv2xsbox">
          <a href="javascript:void(0);" class="borde_azul" data-toggle="collapse" data-target="#serv2xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/casa_cambio.svg"   class="center-block">
              <p><?php echo $serv2; ?></p>
          </a>
        </div>
		<div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv2xs"><?php echo $btn1; ?></a>
        </div>
    </div>

	<?php	                                         
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 1609
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>	  
            
    <div id="serv1xs" class="content_servicio collapse">
    	<div id="serv1xsancla" class="anclita_xs4"></div>
    	<div class="container">
        	<h4 class="divider verde"><?php the_title(); ?></h4>
			<div class="close_servicio" data-target="#serv1xs"></div>
			<div class="row">
            	<div class="col-md-6 col-md-push-6">
					<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
            	</div>
				<div class="col-md-6 col-md-pull-6 ">
                    <div class="desc_servicio">
                       <?php the_content(); ?>
                    </div>
            	</div>
            </div>
            <h4 class="divider verde"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $tit3; ?></h4>
            <div class="row">
            	<div class="col-sm-4">
                   	<div class="box_ubicacion">
                    	<h2> las condes </h2>
						<div class="lista">
                        	<ul class="dashed">
								<li>Atton El Bosque</li>
								<li>Atton Las Condes</li>
								<li>Best Western Premier Marina</li>
								<li>Grand Hyatt</li>
								<li>Holiday Inn</li>
								<li>Ibis Manquehue</li>
								<li>Intercontinental</li>
								<li>Marriot</li>
								<li>Plaza El Bosque Las Condes</li>
								<li>Plaza El Bosque Park Suites</li>
								<li>NH Collection</li>
								<li>Regal Pacific</li>
								<li>Ritz Carlton</li>
								<li>W Hotels</li>
                        	</ul>
                    	</div>
					</div>
            	</div>
                <div class="col-sm-4">
                	<div class="box_ubicacion">
						<h2>vitacura </h2>
						<div class="lista">
                     		<ul class="dashed">
								<li>Atton Vitacura</li>
								<li>Kennedy</li>
								<li>Noi</li>
								<li>Novotel</li>
								<li>Cumbres Vitacura</li>
							</ul>
						</div>
					</div>
					<div class="box_ubicacion">
						<h2> providencia</h2>
						<div class="lista">
							<ul class="dashed">
							   <li>Four Points</li>
							   <li>Ibis Providencia</li>
							   <li>Neruda</li>
							   <li>NH Ciudad de Santiago</li>
							   <li>Santiago Park Plaza</li>
							   <li>Sheraton y San Cristobal Tower</li>
							   <li>Torremayor</li>
							   <li>Solacera</li>
							</ul>
						</div>
					</div>
            	</div>
                <div class="col-sm-4">
                	<div class="box_ubicacion">
						<h2>centro</h2>
						<div class="lista">
							<ul class="dashed">
								<li>Apart Hoteles Huerfanos 547:
								Bellas Artes, Altamira, Amistar.</li>
								<li>Apart Hoteles Monjitas 744: 
								Monjitas Center, Met Suites,       
								Relen Suites, Costa
								Bellas Artes.</li>
								<li>Crowne Plaza</li>
								<li>Fundador</li>
								<li>Galerias</li>
								<li>Gen Suite</li>
								<li>Panamericano</li>
								<li>Serrano Apart</li>
								<li>Plaza San Francisco</li>
								<li>Principado de Asturias</li>
								<li>Mercure</li>
							</ul>
						</div>
					</div>
				</div>
			</div> 
		</div> <!-- container -->
	</div> <!-- content transfer -->

	<?php endwhile; else: ?>
	<?php endif; ?>
	
	<?php	                                         
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 1615
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>
	<div id="serv2xs" class="content_servicio collapse">
        <div id="serv2xsancla" class="anclita_xs4"></div>
        <div class="container">
        	<h4 class="divider azul"><?php the_title(); ?></h4>
            <div class="close_servicio" data-target="#serv2xs"> </div>
            <div class="row">
            	<div class="col-md-6 col-md-push-6">
                	<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                </div>
                <div class="col-md-6 col-md-pull-6 ">
                	<div class="desc_servicio">
                    	<?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- casas de cambio -->

	<?php endwhile; else: ?>
	<?php endif; ?>
   
      <div class="col-xs-6">
        <div class="box_servicio" id="serv3xsbox">
          <a href="javascript:void(0);" class="borde_naranja" data-toggle="collapse" data-target="#serv3xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/agencia.svg"  class="center-block">
              <p><?php echo $serv3; ?></p>
          </a>
        </div>
          <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv3xs"><?php echo $btn1; ?></a>
          </div>
    </div>
      
      <div class="col-xs-6">
        <div class="box_servicio" id="serv4xsbox">
          <a href="javascript:void(0);" class="borde_amarillo" data-toggle="collapse" data-target="#serv4xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/taxis.svg"  class="center-block">
              <p><?php echo $serv4; ?></p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" ata-toggle="collapse" data-target="#serv4xs"><?php echo $btn1; ?></a>
        </div>
    </div>

    <div id="serv3xs" class="content_servicio collapse">
    	<div id="serv3xsancla" class="anclita_xs4"></div>
        	<div class="container">
        	<h4 class="divider naranja"><?php echo $serv3; ?></h4>
            <div class="close_servicio" data-target="#serv3xs"> </div>
            <div class="row">
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                <div class="col-md-4">
					<div class="box_agencia">
                        <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/turistik.png" alt="" width="65" height="80">
                        </div>
                        <div class="desc_servicio text-center">
                            <p>It offers culture, entertainment and recreation through safe, secure and quality tourist services that flexibly show the most relevant tourist attractions in Santiago and its surroundings.</p>
                            <p>Telephone: +56228201000 </p>
                            <p>Currency type: Dollar, Brazilian Reais, Argentinian Pesos, Euros and others.</p>
                            <a href="http://www.turistik.cl/" target="_blank" class="url_agencia">www.turistik.cl</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="box_agencia">
                      <div class="head_agencia">
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/latam.png" alt="" width="229" height="70">
                      </div>
                      <div class="desc_servicio text-center">
                        <p>Dream vacations are easier than ever in our Lan Tam store where you can buy and reserve your tickets and tourist packages, and get information about promotions, discounts and benefits…everything at the same place!</p>
                        <a href="http://www.lan.com" target="_blank" class="url_agencia">www.lan.com</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_agencia">
                          <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cocha.png" alt="" width="187" height="80">
                          </div>
                          <div class="desc_servicio text-center">
                          <p>When it comes to travels, Cocha is the expert.  With more than 60 years of experience, this agency is dedicated to travel sales considering tickets, stays and tours all over the world, with professional advice to guarantee that everything works properly in an unforgettable trip.</p>
                          <p>Vacations? Now!</p> 
                          <a href="http://www.cocha.com" target="_blank" class="url_agencia">www.cocha.com</a>
                          </div>
                    </div>
                </div>
				<?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){ ?> 
                <div class="col-md-4">
					<div class="box_agencia">
                        <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/turistik.png" alt="" width="65" height="80">
                        </div>
                        <div class="desc_servicio text-center">
                            <p>Oferece cultura e diversão através de serviços turísticos seguros, confiáveis e de alta qualidade que, de forma flexível, mostram os atrativos turísticos de Santiago e seus entornos</p>
                            <p>Tel.: +56228201000 </p>
                            <p>Tipo de moeda: Dólar, Reais Brasileiros, Pesos Argentinos, Euros e outras.</p>
                            <a href="http://www.turistik.cl/" target="_blank" class="url_agencia">www.turistik.cl</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="box_agencia">
                      <div class="head_agencia">
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/latam.png" alt="" width="229" height="70">
                      </div>
                      <div class="desc_servicio text-center">
                        <p>As férias sonhadas nunca foram mais simples de obter na nossa loja LATAM, onde é possível comprar e reservar suas passagens e pacotes turísticos, obter informações de promoções, descontos e benefícios. Tudo no mesmo lugar.</p>
                        <a href="http://www.lan.com" target="_blank" class="url_agencia">www.lan.com</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_agencia">
                          <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cocha.png" alt="" width="187" height="80">
                          </div>
                          <div class="desc_servicio text-center">
                          <p>Quando se trata de viagens, Cocha é o expert. Acima de 60 anos de experiência, esta agencia está dedicada a venda de viagens que consideram passagens, estadias e tours por todo o mundo, com assessoramento profissional para que nada falte numa viagem inesquecível.</p>
                          <p>Férias? Agora!</p> 
                          <a href="http://www.cocha.com" target="_blank" class="url_agencia">www.cocha.com</a>
                          </div>
                    </div>
                </div>
				<?php }else{  ?>
                <div class="col-md-4">
					<div class="box_agencia">
                        <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/turistik.png" alt="" width="65" height="80">
                        </div>
                        <div class="desc_servicio text-center">
                            <p> Ofrece cultura, esparcimiento y diversión a través de servicios turísticos seguros, 
                            confiables y de alta calidad que, de forma flexible,
                            muestran los atractivos turísticos más relevantes de Santiago y de sus alrededores.</p>
                            <p>Tel.: +56228201000 </p>
                            <p> tipo de moneda: Dólar, Reales Brasileños, Pesos Argentinos, Euros y otras.</p>
                            <a href="http://www.turistik.cl/" target="_blank" class="url_agencia">www.turistik.cl</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="box_agencia">
                      <div class="head_agencia">
                       <img src="<?php bloginfo('template_url'); ?>/assets/img/latam.png" alt="" width="229" height="70">
                      </div>
                      <div class="desc_servicio text-center">
                        <p> Las vacaciones soñadas nunca fueron más simples de obtener que en nuestra tienda Lan Tam, 
                        donde puedes comprar y reservar tus pasajes y paquetes turísticos, informarte de promociones, 
                        descuentos y beneficios ¡todo en el mismo lugar! </p>
                        <a href="http://www.lan.com" target="_blank" class="url_agencia">www.lan.com</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box_agencia">
                          <div class="head_agencia">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/cocha.png" alt="" width="187" height="80">
                          </div>
                          <div class="desc_servicio text-center">
                          <p> Cuando de viajes se trata, Cocha es el experto. Con más de 60 años de experiencia,
                          esta agencia está dedicada a la venta de viajes que consideran pasajes,
                          estadías y tours por todo el mundo, con asesoría profesional para que 
                          nada falle en un viaje inolvidable.</p>
                          <p>¿Vacaciones? ¡Ahora!</p> 
                          <a href="http://www.cocha.com" target="_blank" class="url_agencia">www.cocha.com</a>
                          </div>
                    </div>
                </div>
				<?php } ?>  	                
                
                
              </div>
        </div>
    </div> <!-- content agencia -->

	<?php	                                         
	    $args = array(
			'post_type' 		=> array('servicios_generales'),
			'p' 				=> 1622
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>
    <div id="serv4xs" class="content_servicio collapse">
        <div id="serv4xsancla" class="anclita_xs4"></div>
        <div class="container">
            <h4 class="divider amarillo"><?php the_title(); ?></h4>
            <div class="close_servicio" data-target="#serv4xs"> </div>
            <div class="row">
            	<div class="col-md-6 col-md-push-6">
                	<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                </div>
                <div class="col-md-6 col-md-pull-6 ">
                	<div class="desc_servicio">
						<?php the_content(); ?>
					</div>
                </div>
            </div>
        </div>
    </div> <!-- content taxis -->

	<?php endwhile; else: ?>
	<?php endif; ?>
     
      <div class="col-xs-6">
         <div class="box_servicio" id="serv5xsbox">
          <a href="javascript:void(0);" class="borde_rojo" data-toggle="collapse" data-target="#serv5xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bancos.svg"   class="center-block">
              <p><?php echo $serv5; ?></p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv5xs"><?php echo $btn1; ?></a>
          </div>
      </div>

    <!--   <div class="col-xs-6">
        <div class="box_servicio">
          <a href="javascript:void(0);" class="borde_verde_oscuro" data-toggle="collapse" data-target="#content_chip_xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/arauco_chip.svg"  class="center-block">
              <p>Arauco Chip </p>
          </a>
        </div>
          <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_chip_xs"><?php echo $btn1; ?></a>
          </div>
      </div> -->

    <div id="serv5xs" class="content_servicio collapse">
    	<div id="serv5xsancla" class="anclita_xs4"></div>
        <div class="container">
        	<h4 class="divider rojo"><?php echo $serv5; ?></h4>
        	<div class="close_servicio" data-target="#serv5xs"> </div>
			<div class="row">
				<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Mondays to Fridays  <br>
                             from 9am to 2pm   <br>
                                  </p>
                                  <p class="tel">Telephone: +56226638365 </p>

                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                              </div>
                         
                       </div>
                 </div>
                 <div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                       </div>
                       <div class="desc_servicio text-center">
                            <p> Mondays to Fridays  <br>
                             from 9am to 2pm   <br>
                                  </p>
                                  <p class="tel"> Telephone: +56232054249 </p>
                                   <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                       </div>
                     </div>
                </div>				
				<?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){ ?> 
                <div class="col-md-4">
                       <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Segunda a Sexta <br>
                             das 09:00h às 14:00h<br>
                                  </p>
                                  <p class="tel">Tel.: +56226638365 </p>

                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                              </div>
                         
                       </div>
                 </div>
                 <div class="col-md-4">
                 <div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                       </div>
                       <div class="desc_servicio text-center">
                           <p> Segunda a Sexta <br>
                             das 09:00h às 14:00h <br>
                                  </p>
                                  <p class="tel"> Tel.: +56232054249 </p>
                                   <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                       </div>
                     </div>
                </div>		
				<?php }else{  ?>
                <div class="col-md-4">
                    <div class="box_agencia">
                             <div class="head_agencia">
                               <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_bbva.png" height="40">
                             </div>
                             <div class="desc_servicio text-center">
                             <p> Lunes a Viernes <br>
                             de 09:00 a 14:00 hrs  <br>
                                  </p>
                                  <p class="tel">Tel.: +56226638365 </p>

                                   <a href="http://www.bbva.cl/" target="_blank" class="url_agencia">www.bbva.cl</a>
                              </div>
                         
                    </div>
                </div>
                <div class="col-md-4">
                	<div class="box_agencia">
                       <div class="head_agencia">
                         <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
                       </div>
                       <div class="desc_servicio text-center">
                           <p> Lunes a Viernes <br>
                             de 09:00 a 14:00 hrs  <br>
                                  </p>
                                  <p class="tel"> Tel.: +56232054249 </p>
                                   <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
                       </div>
                     </div>
                </div>		
				<?php } ?>  	                   
			</div> 
        </div>
	</div><!-- content bancos -->

          <!-- ARAUCO CHIP OCULTO -->
          <!--
          <div id="content_chip_xs" class="content_servicio collapse">
           <div class="container">
              <h4 class="divider verde_oscuro">Tarjeta Arauco chip</h4>
               <div class="close_servicio"> </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="desc_servicio">
                                 <p>Arauco Pass y Arauco Chip son tarjetas que permiten prepagar los estacionamientos y así evitar 
                                 pasar por cajeros cuando termines de realizar tus compras. ¿Qué cómodo, no te parece?</p>

                                        <section class="box_faq">
                                               <div class="col-sm-12">
                                                   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">
                                                        
                                                             <h4>
                                                               <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q1_xs" aria-expanded="true" aria-controls="q1">
                                                                   ¿DÓNDE OBTENERLA?
                                                               </a>
                                                             </h4>
                                                       </div>
                                                       <div id="q1_xs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                              <p>Acercándose a los cajeros manuales de Central Parking, ubicado
                                                                  en el Acceso París y costado Clínica Arauco Salud nivel -1.</p>
                                                         
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">
                                                           
                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q2_xs" aria-expanded="false" aria-controls="q2">
                                                             ¿CUÁNTO VALE?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q2_xs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                           <p>La tarjeta Arauco Chip tiene un valor de $3.000, monto que quedará disponible para el pago
                                                                de estacionamiento. Una vez consumido el saldo, el monto mínimo de recarga es de $1.000</p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">
                                                           
                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q3_xs" aria-expanded="false" aria-controls="q3">
                                                             ¿Cuándo se activa la tarjeta?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q3_xs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                         <p>Las tarjetas se activarán al momento de la entrega y una vez cargadas con el monto mínimo.
                                                              Si la tarjeta no fuera cargada por un período de un año, quedará desactivada impidiendo
                                                            la posibilidad de uso.</p>
                                                         </div>
                                                       </div>
                                                     </div>

                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">
                                                           
                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q4_xs" aria-expanded="false" aria-controls="q3">
                                                             ¿CÓMO FUNCIONAN?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q4_xs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                             <h3> Arauco Chip</h3>
                                                             <ol>
                                                               <li>Acercar tarjeta a gabinete donde aparece la figura de una tarjeta, una vez que se encienda la
                                                              luz anaranjada en este. NO SACAR TICKET.</li>
                                                               <li> Al término de su visita, presentar nuevamente la tarjeta en la figura en gabinete de barrera de
                                                              salida de los estacionamientos.</li>
                                                               <li>Se descontará y mostrará el saldo de su tarjeta al momento de retirarla
                                                              y luego se abrirá la barrera.</li>
                                                             </ol>
                                                         </div>
                                                       </div>
                                                     </div>

                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">
                                                          
                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q5_xs" aria-expanded="false" aria-controls="q3">
                                                             ¿CÓMO SE CARGAN?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q5_xs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                            <p>La carga mínima de Arauco Chip es de $3.000, se puede realizar en cualquiera de los 57
                                                                cajeros automáticos de estacionamientos ubicados dentro y fuera del mall o en los dos cajeros
                                                                manuales ubicados en el acceso a París y costado Clínica Arauco Salud nivel -1.</p>

                                                            <p>La carga de la tarjeta tiene duración indefinida y es de responsabilidad del usuario conservarla en
                                                            un lugar seguro para evitar la pérdida y en consecuencia el saldo asociado a esta.
                                                            Por tu seguridad la tarjeta no debe quedar al interior de tu automóvil cuando utilices
                                                            los estacionamientos de Parque Arauco.</p>
                                                         </div>
                                                       </div>
                                                     </div>

                                                     <div class="panel panel-default">
                                                       <div class="panel-heading" role="tab" id="">
                                                          
                                                         <h4 class="panel-title">
                                                           <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q6_xs" aria-expanded="false" aria-controls="q3">
                                                             ¿Qué hacer en caso de pérdida de la tarjeta?
                                                           </a>
                                                         </h4>
                                                       </div>
                                                       <div id="q6_xs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                         <div class="panel-body">
                                                            <p>En caso de pérdida dirigirse a la oficina central de Central Parking, ubicado al costado de la
                                                                Clínica Arauco Salud nivel -1. Debes dar el código de la tarjeta -ubicado en el costado superior
                                                                derecho de esta- para que se te asigne una tarjeta nueva con un nuevo código y realizar el
                                                                traspaso del saldo en caso que así se requiera..</p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                               </div>
                                 </section>

                          </div>
                      </div>
                  </div>
              </div> 
          </div> end content arauco chip -->


  </div>
</div>


    





