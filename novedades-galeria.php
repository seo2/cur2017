<?php
/*

Template name: Novedades Galería

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "PHOTO GALLERY";
	$btn1 = "View More";
	$btn2 = "View more galleries";
	$url  = "en/photo-gallery/";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "GALERIAS DE FOTOS";
	$btn1 = "Veja mais";
	$btn2 = "veja mais galerias";
	$url  = "pt-br/galerias-de-fotos/";
}else{ 
	$tit1 = "galería de fotos";
	$btn1 = "Ver más";
	$btn2 = "ver más galerías";
	$url  = "novedades-galeria/";
} ?>


    <section class="main_content">

	    <div class="titulo_seccion ">
	        <div class="container">
	          <div class="row">
	            <div class="col-sm-12 col-md-10">
	                <h4  class="divider"><?php echo $tit1; ?></h4>
	            </div>
	            <div class="col-sm-12 col-md-2">
	                 <a href="<?php bloginfo('url'); ?>/novedades/#entretencion" class="back">< <?php echo $back; ?></a>
	            </div>
	          </div>
	        </div>
	    </div> <!-- titulo seccion -->
	    <div class="container">  
	    	<div class="row">
	        	<section class="entretencion clearfix">
				<div id="galerias" class="anchor_seccion"></div>
				<div class="grid_tiendas center-block">       
				<?php 
				    $detect = new Mobile_Detect();
					if ($detect->isMobile()) { 
					   include('include-novedades-galeria-mobile.php'); 
					}else{ 	 
					  	include('include-novedades-galeria-desktop.php');
					}
				?>
	          </div>
<!--
	            <section class="galeria_videos ">
	              <h4 class="divider">videos</h4>
	                <div class="container">
	                  <div class="row">
							<?php	                                         
							    $args = array(
									'post_type' 		=> array('video'),
									'posts_per_page' 	=> 2
							    );
								$the_query = new WP_Query ($args);
							    $i = 0;
							    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
							    	$i++;
							?>	   
	                    	<div class="col-sm-6">
	                        <div id="video<?php echo $i; ?>" class="box_video" data-video="<?php echo get('id_video_youtube'); ?>">
	                            <div class="lente_video"></div>
	                            <div class="cap_video" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
	                            <div class="yt-video embed-responsive embed-responsive-16by9">
	                              <iframe  class="videito video<?php echo $i; ?>" width="420" height="315" src="" frameborder="0" allowfullscreen></iframe> 
	                            </div>                        
	                                <div class="btn_play_video">
	                                  <a class="hvr-float play_video">
	                                      <img src="<?php bloginfo('template_url'); ?>/assets/img/btn_play_video.png" alt="">
	                                  </a> 
	                                  <p>ver video</p>                               
	                            </div>
	                        </div>
	                      </div>
							<?php endwhile; else: ?>
							<?php endif; ?>
	                      
	
	                  </div>
	                </div>
	
	            </section>
	            <div class="box_ver_mas_tiendas text-center">
	             <a href="https://www.youtube.com/channel/UC9ZtYWgO0_Fz7Fm7A3loI8A" target="_blank" class="btn btn-default btn_ver_mas hvr-float">
	                <h3 class="ver_mas">ver más videos</h3>
	                <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
	            </a>
	          </div>
-->
	        </section> 
	      </div><!-- row -->

<div id="pages" style="display:none;" data-pagina="tiendas">
<?php 
	$rowcount 	 = 0;

	$args = array(
		'post_type' 	=> 'galeria',
		'posts_per_page'=> -1,
		'category_name'	=> 'novedades'
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



$('.box_ver_mas_tiendas2').on('click', function(){
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
					 	$('.box_ver_mas_tiendas2').hide();
					}
			    });
	    	});
		});
    }
}

</script>