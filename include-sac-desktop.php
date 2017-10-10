    <div class="col-sm-6 col-md-6"> 
        <div class="box">
            <div class="box_slider" id="contactanosbox">
                <div class="item disable-owl-swipe">
                    <a href="javascript:void(0);"  data-toggle="collapse" data-target="#content_contactanos">
                        <div class="caption">
                            <p>&nbsp </p>
                            <h3><?php echo $tit2; ?></h3>
                            <div class="divider"> </div>
                        </div>
                        <div class="box_slide" style="background: url( <?php bloginfo('template_url'); ?>/assets/img/bg_sac_contactanos.jpg);"> </div>                             
                    </a>
                </div> <!-- contactanos -->
            </div><!-- box slider  -->
            <div class="marker"> </div>
        </div>
	</div>
    <div class="col-sm-6 col-md-6">
        <div class="box">
			<div class="box_slider" id="horariobox">
                <div class="item disable-owl-swipe">
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_horarios">
                        <div class="caption">
                            <p>&nbsp </p>
                            <h3><?php echo $tit3; ?></h3>
                            <div class="divider"></div>
                        </div>
                        <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_sac_horarios.jpg);"> </div>                             
                    </a>
                 </div> <!-- item -->
            </div><!-- box slider  -->
            <div class="marker"> </div>
        </div> <!-- horarios -->
    </div> 
    
    <div id="content_contactanos" class="content_servicio collapse">
    	<div id="content_contactanosancla" class="anclita"></div>
        	<div class="container">
			<?php	                                         
			    $args = array(
					'page_id' => 1511
			    );
				$the_query = new WP_Query ($args);
			    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			    	
			?>	        	
				<h4 class="divider verde"><?php the_title(); ?></h4> 
				<div class="close_servicio" data-target="#contactanos"> </div>
				<div class="row">
                	<div class="col-md-12 ">
                    	<div class="desc_servicio">
	                    <?php the_content(); ?>
                        <?php include("include-form-sac-contacto.php"); ?>
                		</div>
                	</div>
            	</div>  
			<?php endwhile; else: ?>
			<?php endif; ?>	   
			</div> <!-- container -->
    	</div> <!-- content contactanos-->

		<div id="content_horarios" class="content_servicio collapse">
        	<div id="content_horariosancla" class="anclita"></div>
				<div class="container">
					<h4 class="divider verde"><?php echo $tit3; ?> </h4> 
					<div class="close_servicio" data-target="#horario"> </div>
					<div class="row">
						<div class="col-md-12 ">
							<div class="desc_servicio">
								<section class="box_horarios">
                                    <div class="col-sm-12">

										<?php	                                         
										    $args = array(
												'page_id' => 24
										    );
											$the_query = new WP_Query ($args);
										    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
										    	
										?>	                                    
                                    	<?php the_content(); ?>
										<?php endwhile; else: ?>
										<?php endif; ?>	   
										
										
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        							<?php	                                         
        							    $args = array(
        									'post_type' 		=> array('horario')
        							    );
        								$the_query = new WP_Query ($args);
        							    $i = 0;
        							    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        							    	$i++;
        							?>	                    
                                           <div class="panel panel-default">
                                             <div class="panel-heading" role="tab" id="">
                                                 <!-- <div class="ribbon"></div> -->
                                                   <h4>
                                                     <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q<?php echo $i; ?>" aria-expanded="true" aria-controls="q<?php echo $i; ?>">
                                                         <?php the_title(); ?>
                                                     </a>
                                                   </h4>
                                             </div>
                                             <div id="q<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                               <div class="panel-body">
					 
											   	<?php
													$horarios = get_order_group('fila_titulo_1');
													foreach($horarios as $horario){   
												?>        
                                                   <div class="row">
                                                         <div class="col-sm-6"> 
	                                                         <h4><?php echo get('fila_titulo_1',$horario); ?></h4>
                                                             <p><?php echo get('fila_texto_1',$horario); ?></p>
                                                         </div>
                                                         <div class="col-sm-6">
	                                                         <h4><?php echo get('fila_titulo_2',$horario); ?></h4>
                                                             <p><?php echo get('fila_texto_2',$horario); ?></p>
                                                        </div>
                                                        <div class="col-sm-12">
                                                           <p><?php echo get('fila_texto_en_1_columna',$horario); ?></p>
                                                        </div>
                                                   </div>
                                                <?php } ?>
                                               </div>
                                             </div>
                                           </div>
											<?php endwhile; else: ?>
											<?php endif; ?>
											<?php wp_reset_query(); ?>
											<?php $i++; ?>
                                           <div class="panel panel-default hide">
                                              <div class="panel-heading" role="tab" id="">
                                                  <!-- <div class="ribbon"></div> -->
                                                <h4 class="panel-title">
                                                  <a class="cd-faq-trigger collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#q<?php echo $i; ?>" aria-expanded="false" aria-controls="q<?php echo $i; ?>">
                                                   ESTACIONAMIENTOS PARQUE ARAUCO
                                                  </a>
                                                </h4>
                                              </div>
                                              <div id="q<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="">
                                                <div class="panel-body nopad">
                                                     <div class="row">
                                                       <div class="col-sm-12"> 
                                                           <p> Lunes a domingo abierto desde las 07:00 y acceso restringido a partir de las 23:30 hrs.</p>
                                                       </div>
                                                     </div>
                                              
                                                <table id="table_horarios_estacionamientos" class="table table-bordered hide">
                                                     <tr>
                                                       <td colspan="5" align="center" class="titulo_tabla">
                                                         <h5>ESTACIONAMIENTOS</h5>
                                                       </td>
                                                     </tr>
                                                       <tr>
                                                         <th>accesos <br>  del mall</th>
                                                         <th><div class="green_dot"></div>apertura <br><span class="small">(lunes a sábado)</span></th>
                                                         <th><div class="red_dot"> </div>cierre</th>
                                                         <th><div class="green_dot"></div>apertura <br><span class="small">(dom y festivos)</span></th>
                                                         <th><div class="red_dot"> </div>cierre</th>
                                                       </tr>
                                                       <tr class="text-center">
                                                         <td class="bold">ripley norte</td>
                                                         <td>7:00</td>
                                                         <td>23:00</td>
                                                         <td>7:00</td>
                                                         <td>23:00</td>
                                                       </tr>
                                                       <tr class="text-center">
                                                         <td class="bold">messanina</td>
                                                         <td>8:00</td>
                                                         <td>23:00</td>
                                                         <td>9:00</td>
                                                         <td>23:00</td>
                                                       </tr>
                                                       <tr class="text-center">
                                                         <td class="bold">acceso costado</td>
                                                         <td>7:00</td>
                                                         <td>22:00</td>
                                                         <td>7:00</td>
                                                         <td>23:00</td>
                                                       </tr>
                                                       <tr class="text-center">
                                                         <td class="bold">rosario norte</td>
                                                         <td>7:00</td>
                                                         <td>00:00</td>
                                                         <td>7:00</td>
                                                         <td>00:00</td>
                                                       </tr>
                                                       <tr class="text-center">
                                                         <td class="bold">placa bancaria</td>
                                                         <td>7:00</td>
                                                         <td>00:30</td>
                                                         <td>7:00</td>
                                                         <td>00:30</td>
                                                       </tr>
                                                       <tr class="text-center">
                                                         <td class="bold">cerro colorado achs</td>
                                                         <td>7:00</td>
                                                         <td>22:00</td>
                                                         <td>7:00</td>
                                                         <td>22:00</td>
                                                       </tr>
                                                       <!-- <tr>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                         <td></td>
                                                       </tr> -->
                                                     </table> <!-- end tabla horarios -->
                                                </div>
                                              </div>
                                            </div>                                           
										</div> <!-- END panel group -->
										
                                </div>
                          </section> <!-- box horarios del mall -->
                     </div> <!-- end desc_servicio -->
                </div>
              </div>
          </div> <!-- end container -->
       </div> <!-- end content horarios -->
               