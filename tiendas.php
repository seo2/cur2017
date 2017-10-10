<?php
/*

Template name: Tiendas

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "Stores";
	$btn1 ="View all our stores";
	$tit2 = "our stores";
	$tit3 = "HIGHLIGHTS";
	$btn2 = "View more stores";
	$page = 'stores';
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Lojas";
	$btn1 ="Veja todas as nossas lojas";
	$tit2 = "nossas lojas";
	$tit3 = "DESTACADOS";
	$btn2 = "Veja mais lojas";
	$page = 'lojas';
}else{ 
	$tit1 = "Tiendas";
	$btn1 ="ver todas las tiendas";
	$tit2 = "nuestras tiendas";
	$tit3 = "destacados";
	$btn2 = "ver más tiendas";
	$page = 'tiendas';
} ?> 
	<section class="main_content">

      <div class="titulo_seccion ">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-10">
                <?php if($_GET['busqueda']){ ?>
                  <h4 class="divider">Resultado Búsqueda: "<?php echo $_GET['busqueda']; ?>" </h4>
				  <?php }elseif($_GET['catID']){ ?>
                  <h4 class="divider"><?php echo get_nom_categoria($idioma,$_GET['catID']); ?></h4>
				  <?php }else{ ?>
                  <h4 class="divider"><?php echo $tit1; ?> </h4>
                  <?php } ?>
              </div>
              <div class="col-sm-12 col-md-2">
                 <a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a>
              </div>
            </div>
          </div>
      </div> <!-- titulo seccion -->


    	<div class="container">
        	<div class="row">
            	<section class="tiendas">
              <div id="tiendas" class="anchor_seccion"></div>
					       <div class="grid_tiendas center-block">
                        <div class="container">
                        	<div class="row" id="caja_tienda">
	                            <?php
								if($_GET['busqueda']){
									$buscar = filter_var($_GET["busqueda"], FILTER_SANITIZE_STRING);
									if($_GET['pagina']){
										$desde = 12 * ($_GET['pagina'] - 1);
										$tiendas = $db->rawQuery("select * from pak_tiendas where (descripcion LIKE '%$buscar%' OR nombre LIKE '%$buscar%') ORDER BY nombre limit $desde, 12");
									}else{
										$tiendas = $db->rawQuery("select * from pak_tiendas where (descripcion LIKE '%$buscar%' OR nombre LIKE '%$buscar%') ORDER BY nombre limit 12");
									}
								}elseif($_GET['catID']){
									$buscar = $_GET['catID'];
									if($_GET['pagina']){
										$desde = 12 * ($_GET['pagina'] - 1);
										$tiendas = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre limit $desde,12");
									}else{
										$tiendas = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre limit 12");
/* 										echo "SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre limit 12"; */
									}
								}else{
									if($_GET['pagina']){
										$desde 	 = 12 * ($_GET['pagina'] - 1);
										$tiendas = $db->rawQuery("select * from pak_tiendas where tipo = 1 order by nombre limit $desde, 12");
									}else{
										$tiendas = $db->rawQuery("select * from pak_tiendas where tipo = 1 order by nombre limit 12");
									}
								}
								
		                            
								if($tiendas){
									foreach ($tiendas as $t) {   
                                    	$imagen = get_img_tienda($t['punto_interes']);
                                    	if(!$imagen){

                                    		$imagen 	= '/ws/fotos/'. quitatodo($t['nombre']).'.png';
                                    		$imagen1    = $imagen;
										  	$imagen	 	= get_template_directory_uri().$imagen;


										  	if(is_url_exist($imagen)){
		                                    	$params1 	= array( 'width' => 650, 'height' => 650, 'crop' => true );	
											  	$imagen  	= bfi_thumb( $imagen, $params1 );
										  	}else{
	                                        	$imagen 	= "/assets/img/demobgtienda.jpg";
											  	$imagen	 	= get_template_directory_uri().$imagen;
										  	}
										  	
                                    	}else{
	                                    	$imagen 	= '/ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
	                                    	$params1 	= array( 'width' => 650, 'height' => 650, 'crop' => true );	
										  	$imagen	 	= get_template_directory_uri().$imagen;
										  	$imagen  	= bfi_thumb( $imagen, $params1 );
                                    	}
                                    	
                                    	$logo = '/ws/logos/'. quitatodo($t['nombre']).'.jpg';
                                    	$logo = get_template_directory_uri().$logo;
                                    	
                                		if(is_url_exist($logo)){
	                                		$logo = $logo;
									  	}else{
                                        	$logo 	= "/assets/img/logo_381.jpg?v=2";
										  	$logo	= get_template_directory_uri().$logo;
									  	}
                                    	
                                
										if($t['pinDescuento'] != '' && $t['pinDescuento'] != '0'){
											$clase = ' tieneDescuento';
										}else{
											$clase = '';
										}
										$punto_interes = $t['punto_interes'];
										$local = $db->rawQuery("select * from pak_tiendas_local where punto_interes = $punto_interes");
										if($local){
											foreach ($local as $l) {   
												$local = $l['local'];
											}
										}
			
								?>
                                <div class="col-sm-3 caja_tienda"> 
                                      <div class="item_tienda" id="tienda_<?php echo $t['punto_interes']; ?>">
                                        <div  class="tienda">
                                            <a class="btn_tienda" href="javascript:void(0);" >
                                              <h4 class="nombre_tienda"><?php echo $t['nombre']; ?></h4>
                                               <div class="borde"> </div>
                                              <span class="bg_nombre_tienda"> </span>
                                                <span id="adidas" class="overlay_img<?php echo $clase; ?>" data-clander="<?php echo $imagen1; ?>" data-id="<?php echo $t['punto_interes']; ?>" data-logo="<?php echo $logo; ?>" data-desc='<?php echo trim($t["descripcion"]); ?>' data-img="<?php echo $imagen; ?>" data-fono="<?php echo $t['telefono_punto_interes']; ?>" data-piso="<?php echo $t['piso']; ?>" data-url="<?php echo $t['url_punto_interes']; ?>" data-mapa="<?php bloginfo('template_url'); ?>/ws/uploads/plano_<?php echo $t['punto_interes']; ?>.jpg" data-nombre="<?php echo $t['nombre']; ?>" data-tipo="<?php echo $t['tipo']; ?>" data-pindcto="<?php echo $t['pinDescuento']; ?>" data-pinctodesc="<?php echo $t['piiDescripcionDescuento']; ?>" data-local="<?php echo $local; ?>"></span>
                                                <img class="img-responsive" src="<?php echo $imagen; ?>">
                                            </a>
											<div class="box_logo_tienda">
                                            	<div class="logo_tienda">
                                                	<img src="<?php echo $logo; ?>" alt="" class="img-responsive">
                                            	</div> <!-- logo_tienda -->
                                        	</div> <!-- box logo tienda -->
                                        </div> <!--  tienda -->
                                    </div> <!-- item tienda -->
                            	</div> <!-- col sm 3 -->
								<?php
									}
								}  		
								?>
                            </div><!-- row tiendas -->
                        </div> <!-- grid container  -->
                        <div class="box_ver_mas_tiendas text-center">
                        	<a href="javascript:void(0);" class="btn btn-default btn_ver_mas hvr-float">
                            	<h3 class="ver_mas" id="cargar_mas"><?php echo $btn2; ?> </h3>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
                                <span id="loader"  style="display:none"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
                            </a>
                        </div> <!-- ver mas -->                     
                    </div><!-- grid tiendas -->
            	</section> <!-- end tiendas -->
			</div>
             
<?php // include('include-otras-tiendas.php') ?>
<div id="pages" style="display:none;" data-pagina="tiendas">
<?php 
	$postperpage = 12;
	$rowcount = 0;

	if($_GET['busqueda']){
		
		$tiendas = $db->rawQuery("select * from pak_tiendas where (descripcion LIKE '%$buscar%' OR nombre LIKE '%$buscar%') ORDER BY nombre");
		if($tiendas){
			foreach ($tiendas as $t) { 
				$rowcount++;
			}
		}
		$cola = "&busqueda=".$buscar;		
	}elseif($_GET['catID']){
		$tiendas = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre");
		if($tiendas){
			foreach ($tiendas as $t) { 
				$rowcount++;
			}
		}
		$cola = "&catID=$buscar";	
	}else{
		$db->where('tipo', Array(2,3), 'NOT IN');
		$rowcount = $db->getValue ("pak_tiendas", "count(*)");
		$cola = "";
	}

	echo "Total Items: ".$rowcount;
	
	$paginas = ceil($rowcount/$postperpage); 
	
	echo " - Páginas: ".$paginas;
	
	$x = 1;
	while($x <= $paginas) {
	?>
		<a href="<?php bloginfo('url'); ?>/<?php echo $page; ?>?pagina=<?php echo  $x.$cola; ?>"></a>
	<?php 
		$x++; 
	}
	?>
	
</div>
<?php include('footer.php') ?>

<script>
<?php if($paginas<=1){ ?>
	$('.box_ver_mas_tiendas').hide();
<?php } ?>	
	
	
var pages 	= new Array();
var current = 0; 
var loaded 	= new Array();
	
$('#pages a').each(function(index) {
    pages[index] = $(this).attr('href');
    loaded[$(this).attr('href')] = 0;
});



$('.box_ver_mas_tiendas').on('click', function(){
  	loaded[pages[current+1]] = loaded[pages[current+1]] + 1; 
    if(loaded[pages[current+1]] <= 1){
         loadMoreContent(current+1);
	}
}) 

function loadMoreContent(position) {
    if(position < pages.length) {
		$('#loader').fadeIn('slow', function() {
			$.post(pages[position], function(data) {
				pines = $(data).find(".caja_tienda");
				console.log(pines);
				$('#loader').fadeOut('slow', function() {
					$('#caja_tienda').append( $(pines).hide().fadeIn(2000));
			        current=position;
			        if(position +1 < pages.length) {
					
					}else{
					 	$('.box_ver_mas_tiendas').hide();
					}
			    });
	    	});
		});
    }
}

</script>