<?php
/*

Template name: Servicio al Cliente Servicios

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-servicios-cliente.php') ?>
<?php include('include-search-no-slider.php') ?>

<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "General services";
	$tit2 = "ADDITIONAL SERVICES";
	$tit3 = "LOCATION POINTS";
	$btn1 = "more information";
	$serv1 = "Transfer";
	$serv2 = "Exchange offices";
	$serv3 = "Services and tourist agencies";
	$serv4 = "Private taxis";
	$serv5 = "Banks";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "serviços gerais";
	$tit2 = "SERVIÇOS ADICIONAIS";
	$tit3 = "PONTOS DE LOCALIZAÇÃO";
	$btn1 = "mais informação";
	$serv1 = "Transfer";
	$serv2 = "Casas de Câmbio";
	$serv3 = "Serviços e agências de turismo";
	$serv4 = "Táxis privados";
	$serv5 = "Bancos";
}else{ 
	$tit1 = "servicios generales";
	$tit2 = "servicios adicionales";
	$tit3 = "PUNTOS DE UBICACIÓN";
	$btn1 = "más información";
	$serv1 = "Transfer";
	$serv2 = "Casas de cambio";
	$serv3 = "Servicios y agencias turismo";
	$serv4 = "Taxis privados";
	$serv5 = "Bancos";
} ?>  
    <div class="titulo_seccion sin_slider ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider"><?php echo $tit1; ?></h4> 
            </div>
            <div class="col-sm-12 col-md-2">
                 <a href="<?php bloginfo('url'); ?>/servicio-al-cliente" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

    <section class="main_content">
    	<div class="container">
        	<div class="row">
				<section class="travellers_servicios_generales clearfix">
					<div class="col-sm-12">
		            	<?php include('include-slider-travellers-servicios-generales.php'); ?>
					</div>
          		</section><!-- travellers servicios generales -->
		  		<section class="travellers_servicios_adicionales clearfix">
		<?php 
/*
			    $detect = new Mobile_Detect();
			    	 
				if ($detect->isMobile()) { 
				   include('include-travellers-servicios-adicionales-mobile.php'); 
				}else{ 	 
				  	include('include-travellers-servicios-adicionales-desktop.php');
				}
*/
		?>
        		</section>
    		</div> <!-- row -->

<?php include('footer.php') ?>