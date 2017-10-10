<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-search-home.php') ?>

    <div class="titulo_seccion ">
        <div class="container">
          	<div class="row">
            	<div class="col-sm-12 col-md-10">
                	<h4  class="divider"><?php the_title(); ?></h4>
            	</div>
            	<div class="col-sm-12 col-md-2">
                 	<a href="javascript:window.history.back();" class="back">< <?php echo $back; ?></a>
				</div>
			</div>
        </div>
    </div> <!-- titulo seccion -->

	<section class="main_content">
    	<div id="galerias" class="container">
			<div class="row">
				<section class="entretencion clearfix">
					<div class="grid_tiendas center-block">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>					
						<!--GALERIA-->
						<div class="box-galery">
							<?php $imagenes = muestra_galeria(); ?>
							<?php foreach ($imagenes as $imagen): ?>
							<div class="item-gal">
                            	<div class="img_servicio" style="background: url();"></div>
                            	<div class="img_servicios"><img src="<?php echo wp_get_attachment_url($imagen->ID); ?>"></div>

                        	</div>
							<?php endforeach ?>
            			</div>
						<!--FIN GALERIA-->
<?php endwhile; ?>
<?php // Navegación ?>
<?php else : ?>
<?php // Cuando no hay post ?>
<?php endif; ?>						
        			</div>
        		</section> <!-- entretencion -->
    		</div><!-- row -->

<?php include('footer.php') ?>