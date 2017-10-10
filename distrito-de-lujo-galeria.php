<?php
/*

Template name: Distrito de lujo Galería

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-dl.php') ?>
<?php include('include-search-no-slider.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "LIFE IN THE DISTRICT";
	$btn1 = "View More";
	$btn2 = "View more galleries";
	$url  = "en/distrito-de-luxo/life-in-the-district/";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "VIDA NO DISTRITO";
	$btn1 = "Veja mais";
	$btn2 = "veja mais galerias";
	$url  = "pt-br/distrito-de-luxo/vida-no-distrito/";
}else{ 
	$tit1 = "vida en distrito";
	$btn1 = "Ver más";
	$btn2 = "ver más galerías";
	$url  = "distrito-de-lujo/galerias/";
} ?> 
    <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4  class="divider"><?php echo $tit1; ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
                 <a href="javascript:window.history.back();" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->


    <section class="main_content">
		<div class="container">
			<div class="row">
            	<section class="entretencion clearfix">
					<div id="galerias" class="anchor_seccion"></div>
					<div class="grid_tiendas center-block">
						<?php 
						    $detect = new Mobile_Detect();
						    	 
							if ($detect->isMobile()) { 
							   include('include-distrito-galeria-mobile.php'); 
							}else{ 	 
							  	include('include-distrito-galeria-desktop.php');
							}
						?>
        			</div>
				</section> <!-- entretencion -->
			</div><!-- row -->
			
<div id="pages" style="display:none;" data-pagina="tiendas">
<?php 
	$rowcount 	 = 0;

	$args = array(
		'post_type' 	=> 'galeria',
		'posts_per_page'=> -1,
		'category_name'	=> 'distrito-de-lujo'
	);

    $query = new WP_Query( $args ); 
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) : $query->the_post();							
			$rowcount++;
		endwhile; 
    } 
	echo "Total Items: ".$rowcount;
	
	$paginas = ceil($rowcount/$postperpage); 
	
	echo " - Páginas: ".$paginas;
	
	$x = 1;
	while($x <= $paginas) {
	?>
		<a href="<?php bloginfo('url'); ?>/<?php echo $url; ?>?pagina=<?php echo  $x.$cola; ?>"></a>
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
				pines = $(data).find(".caja-galerias");
				console.log(pines);
				$('#loader').fadeOut('slow', function() {
					$('#caja-galerias').append( $(pines).hide().fadeIn(2000));
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