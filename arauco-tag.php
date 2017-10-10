<?php
/*

Template name: Arauco Tag

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-tag.php') ?>
<?php include('include-search-home.php') ?>
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

    <section class="main_content">
    
        <div class="titulo_seccion ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider">arauco tag </h4>
            </div>
            <div class="col-sm-12 col-md-2">
               <a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->


    <div class="container">
		<div class="row">
		<?php 
		// TRADUCCIONES
		if(ICL_LANGUAGE_CODE=='en'){
			include('include-arauco-tag-ing.php');
		}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
			include('include-arauco-tag-por.php');
		}else{ 
			include('include-arauco-tag-esp.php');
		} ?> 			
		</div>

<?php include('footer.php'); ?>

