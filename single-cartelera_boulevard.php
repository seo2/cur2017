<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
<?php
$dias  = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>
    <section class="main_content">
       <div class="titulo_seccion">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider">Cartelera boulevard</h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="javascript:window.history.back();" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

      <div class="container">
      <div class="row">
        <section class="cartelera clearfix">
        <div id="cartelera" class="anchor_seccion"></div>
            <div class="container">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>                 
<?php if(get('tipo_de_plantilla')=='Solo imagen'){ ?>            
              <div class="row">
                <div class="col-sm-12">
                   <img class="img-responsive visible-md visible-lg center-block" src="<?php echo get('imagen_desktop'); ?>" alt="Cartelera boulevard" >
                   <img class="img-responsive visible-xs visible-sm center-block" src="<?php echo get('imagen_mobile'); ?>" alt="Cartelera boulevard" >
                </div>
              </div>
<?php }elseif(get('tipo_de_plantilla')=='1 imagen y listado'){ ?>     
            <div class="row">
                <div class="col-sm-12">
                   <img class="img-responsive visible-md visible-lg center-block" src="<?php echo get('imagen_desktop'); ?>" alt="Cartelera boulevard" >
                   <img class="img-responsive visible-xs visible-sm center-block" src="<?php echo get('imagen_mobile'); ?>" alt="Cartelera boulevard" >
                </div>
            </div>
            <div class="row">
                <div class="content_cartelera">
                	<div class="col-sm-12">
						<div class="main_title">
							<h3><?php echo get('titulo_linea_1'); ?></h3>
							<h4 class="divider_left"><?php echo get('titulo_linea_2'); ?></h4>
						</div>
					</div>
				   	<?php
						$eventos = get_order_group('evento_fecha');
						foreach($eventos as $evento){ 
							$datetime = new DateTime(get('evento_fecha',$evento));
							$dia	= $datetime->format('d');
							$mes 	= $meses[$datetime->format('m')-1];
					?>                    
					<div class="evento clearfix">
                    	<div class="col-sm-6">
                        	<div class="fecha clearfix">
                            	<div class="num">
	                                <p><?php echo $dia; ?></p>
	                            </div>
								<div class="mes">
                                	<p><?php echo $mes; ?></p>
									<p class="dia"><?php echo get('evento_dias',$evento); ?></p>
                            	</div>
                        	</div>
							<div class="tit_evento">
                            	<div class="triangle_top_left"> </div>
                                <p><?php echo get('evento_titulo',$evento); ?></p>
                        	</div>
                    	</div>
						<div class="col-sm-6">
                            <div class="datos_evento">
                                <div class="hora">
                                	<p><?php echo get('evento_horario',$evento); ?></p>
									<p class="lugar"><?php echo get('evento_lugar',$evento); ?></p>
                                </div>
                                <div class="desc">
                                  	<p><?php echo get('evento_descripcion',$evento); ?></p>
                                </div>
                          	</div>                      
						</div>
						<div class="clear"></div> 
					</div><!-- evento -->
					<div class="divisor"> </div>
                    <?php } ?>
                </div> <!-- content cartelera -->
            </div><!-- row -->         
<?php }else{ ?>
              <div class="row">
                <div class="col-sm-12">
                   <img class="img-responsive visible-md visible-lg" src="<?php bloginfo('template_url'); ?>/assets/img/1140.png" alt="" >
                   <img class="img-responsive visible-xs visible-sm" src="<?php bloginfo('template_url'); ?>/assets/img/720.png" alt="" >
                </div>
              </div>
              <div class="row">
                <div class="content_cartelera">
                	<div class="col-sm-12">
						<div class="main_title">
							<h3><?php echo get('titulo_linea_1'); ?></h3>
							<h4 class="divider_left"><?php echo get('titulo_linea_2'); ?></h4>
                  		</div>
                	</div>
				   	<?php
						$eventos = get_order_group('evento_fecha');
						foreach($eventos as $evento){   
							$datetime = new DateTime(get('evento_fecha',$evento));
							$dia	= $datetime->format('d');
							$mes 	= $meses[$datetime->format('m')-1];
					?>       
					<div class="evento clearfix">
                    	<div class="col-sm-6">
                        	<img class="img-responsive" src="<?php echo get('evento_imagen',$evento); ?>">
                    	</div>
						<div class="col-sm-6 relative">
                        	<div class="fecha clearfix">
                            	<div class="num">
                                	<p><?php echo $dia; ?> <br><span><?php echo $mes; ?></span>
                                	</p>
                            	</div>
								<div class="mes">
									<p class="dia_2"><?php echo get('evento_dias',$evento); ?></p>
									<p><?php echo get('evento_horario',$evento); ?></p>
									<p class="lugar"><?php echo get('evento_lugar',$evento); ?></p>
                            	</div>
                        	</div>
							<div class="box_datos_evento">
								<div class="tit_evento">
									<div class="triangle_top_left"> </div>
									<p><?php echo get('evento_titulo',$evento); ?></p>
                          		</div>
						  		<div class="datos_evento">
                                	<div class="desc_2">
                                    	<p><?php echo get('evento_descripcion',$evento); ?></p>
                                  	</div>
                            	</div> 
                        	</div>                 
						</div>
						<div class="clear"></div>
                	</div><!-- evento -->
					<!--  <div class="divisor"> </div> -->
                    <?php } ?>
                </div> <!-- content cartelera -->
              </div><!-- row -->  
<?php }?>  
<?php endwhile; ?>
<?php endif; ?>             
              <div class="row">

<?php include('include-mejores-sabores.php') ?>		

              </div><!-- row -->
            </div><!-- container -->
      </section><!-- cartelera -->
    </div><!-- row -->
<?php include('footer.php') ?>

