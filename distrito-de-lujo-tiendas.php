<?
/*

Template name: Distrito de lujo Tiendas

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-dl.php') ?>
<?php //include('include-search-home.php') ?>
<?php include('include-search-no-slider.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "About luxury district";
	$btn1 ="View all our stores";
	$tit2 = "our stores";
	$tit3 = "HIGHLIGHTS";
	$btn2 = "View more stores";
	$page = 'distrito-de-luxo/luxury-district-stores';
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Sobre o distrito de luxo";
	$btn1 ="Veja todas as nossas lojas";
	$tit2 = "nossas lojas";
	$tit3 = "DESTACADOS";
	$btn2 = "Veja mais lojas";
	$page = 'distrito-de-luxo/distrito-de-luxo-lojas';
}else{ 
	$tit1 = "Sobre distrito de lujo";
	$btn1 ="ver todas las tiendas";
	$tit2 = "nuestras tiendas";
	$tit3 = "destacados";
	$btn2 = "ver más tiendas";
	$page = 'distrito-de-lujo/distrito-de-lujo-tiendas';
} ?> 

    <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider"><?php echo $tit1; ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="javascript:window.history.back();" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->


    <section class="main_content">
      <div class="container">
          <section class="tiendas_distrito clearfix" id="tiendas_distrito">
          

<!-- <a href="javascript:void(0);" class="ver" data-toggle="modal" data-target="#mapaDistrito">ubicación distrito de lujo <i class="fa fa-map-marker" aria-hidden="true"></i></a> -->
     
            <?php
			if($_GET['busqueda']){
				$buscar = filter_var($_GET["busqueda"], FILTER_SANITIZE_STRING);
				if($_GET['pagina']){
					$desde = 8 * ($_GET['pagina'] - 1);
					$tiendas = $db->rawQuery("select * from pak_tiendas where idioma  = $idioma and descripcion LIKE '%$buscar%' OR nombre LIKE '%$buscar%' ORDER BY nombre limit $desde, 8");
				}else{
					//echo "select * from pak_tiendas where idioma  = $idioma and descripcion LIKE '%$buscar%' OR nombre LIKE '%$buscar%' ORDER BY nombre limit 12";
					$tiendas = $db->rawQuery("select * from pak_tiendas where idioma  = $idioma and descripcion LIKE '%$buscar%' OR nombre LIKE '%$buscar%' ORDER BY nombre limit 8");
				}
			}else{
				if($_GET['pagina']){
					$desde 	 = 8 * ($_GET['pagina'] - 1);
					$tiendas = $db->rawQuery("select * from pak_tiendas where idioma  = $idioma and tipo = 119 order by nombre limit $desde, 8");
				}else{
					$tiendas = $db->rawQuery("select * from pak_tiendas where idioma  = $idioma and tipo = 119 order by nombre limit 8");
				}
			}
                
			if($tiendas){
				foreach ($tiendas as $t) {   
                	$imagen = get_img_tienda($t['punto_interes']);
                	if(!$imagen){
                    	$imagen = "assets/img/demobgtienda.jpg";
                	}else{
                    	$imagen = 'ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
                	}
            ?>
			<div class="col-sm-6 col-md-3 caja_tienda">
                <div class="box_tienda">
                  <a class="hover" href="<?php bloginfo('url'); ?>/distrito-de-lujo/distrito-de-lujo-tienda?tiendaID=<?php echo $t['punto_interes']; ?>">
                      <img class="logo_tienda hover" src="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" style="filter: invert(100%);">
                      <img class="logo_tienda" src="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg">
                      
                  </a>
                </div>
                <div class="box_nombre_tienda">
                    <?php echo $t['nombre']; ?>
                </div>
              </div>
			<?php
				}
			}  		
			?>
            <?php include('include-modal-ubicacion-distrito-de-lujo.php'); ?>

          </section> <!-- fin grilla tiendas distrito -->
		<section class="tiendas_distrito clearfix">
			<div class="row">
	            <div class="box_ver_mas_tiendas text-center">
	            	<a href="javascript:void(0);" class="btn btn-default btn_ver_mas hvr-float">
	                	<h3 class="ver_mas" id="cargar_mas"><?php echo $btn2; ?> </h3>
	                    <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
	                    <span id="loader"  style="display:none"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
	                </a>
	            </div> <!-- ver mas -->  
            </div>
   		</section>
    <!--   <div class="row">
        <?php// include('footer-distrito-de-lujo.php') ?>
      </div> -->
      
<div id="pages" style="display:none;" data-pagina="<?php bloginfo('template_url'); ?>/distrito-de-lujo-tienda">
<?php 
	$postperpage = 8;
	$rowcount = 0;
	$tiendas = $db->rawQuery("select * from pak_tiendas where tipo = 119");    
	if($tiendas){
		foreach ($tiendas as $t) {   
			$rowcount++;
		}
	}
	echo "Total Items: ".$rowcount;
	
	$paginas = ceil($rowcount/$postperpage); 
	
	echo " - Páginas: ".$paginas;
	
	$x = 1;
	while($x <= $paginas) {
	?>
		<a href="<?php bloginfo('url'); ?>/<?php echo $page; ?>/?pagina=<?php echo  $x; ?>"></a>
	<?php 
		$x++; 
	}
	?>
</div>      
      
<?php include('footer.php') ?>

<script>
<?php if($paginas==1){ ?>
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
					$('#tiendas_distrito').append( $(pines).hide().fadeIn(2000));
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