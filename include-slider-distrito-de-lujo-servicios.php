<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "Valet parking";
	$txt1 = "We invite you to enjoy the comfort of this exclusive benefit in the Premium parking spaces in Parque Arauco.";
	$tit2 = "SCHEDULE";
	$txt2 = "<p>Monday to Saturday<br>10:30 am to 9:00 pm.<br></p><p>Sunday and hollydays <br>11:00 am to 9:00 pm <br></p>";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Valet parking";
	$txt1 = "Te convidamos para aproveitar da comodidade deste exclusivo benefício nos estacionamentos Premium de Parque Arauco.";
	$tit2 = "Horarios";
	$txt2 = "<p>Segunda a sábado <br>10:30 h às 21:00 h.<br></p><p>Domingo e feriados <br>11:00 h às 21:00 h <br></p>";
}else{ 
	$tit1 = "Valet Parking";
	$txt1 = "Te invitamos a disfrutar de la comodidad de este exclusivo beneficio en los estacionamientos Premium de Parque Arauco.";
	$tit2 = "Horarios";
	$txt2 = "<p>Lunes a Sábado<br>10:30 hrs a 21:00 hrs.<br></p><p>Domingo y festivos <br>11:00 hrs a 21:00 hrs <br></p>";
} ?> 
        <div class="slider_servicios_generales owl-carousel owl-theme clearfix">
            <div class="item clearfix">
            	<div class="col-md-6 col-md-push-6 ">
                    <div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/servicios-de-lujo-valet.jpg);"> </div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="desc_servicio">
						<h3><?php echo $tit1; ?></h3>
						<div class="underline"></div>
						<p><?php echo $txt1; ?></p>
                    </div>
            	</div>
        	</div>

            <div class="item clearfix">
                <div class="col-md-6 col-md-push-6">
                    <div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/servicios-de-lujo-horario.jpg);"> </div>
                </div>
                <div class="col-md-6 col-md-pull-6">
                    <div class="desc_servicio">
                        <h3><?php echo $tit2; ?></h3>
                        <div class="underline"></div>
                        <?php echo $txt2; ?>
                    </div>
                </div>       
            </div>
        </div><!--  slider_servicios_generales -->