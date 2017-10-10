<?php
/*

Template name: Horarios

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-servicios-cliente.php') ?>
<?php include('include-search-no-slider.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit3 = "TIME SCHEDULES";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit3 = "HORÁRIOS";
}else{ 
	$tit3 = "Horarios";
} ?>  
     <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider"><?php echo $tit3; ?></h4>
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
	       	<div id="content_horarios" class="content_servicio ">
	           	<div class="container">
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
	                                 
                                      <div class="panel-group " id="accordion" role="tablist" aria-multiselectable="true">
        							<?php	                                         
        							    $args = array(
        									'post_type' 		=> array('horario'),
											'posts_per_page' 	=> -1
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
        </section>
	</div> <!-- row -->
<?php include('footer.php') ?>

