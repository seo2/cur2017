<?php
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "CUSTOMER SERVICE";
	$tit2 = "EVERYTHING YOU NEED TO KNOW";
	$tit3 = "Where we are, parking fees, contact and FAQ.";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){
	$tit1 = "SERVIÇO AO CLIENTE:";
	$tit2 = "TUDO QUE VOCÊ PRECISA SABER";
	$tit3 = "Onde estamos, taxas de estacionamento, contato e perguntas mais frequentes.";
}else{
	$tit1 = "servicio al cliente";
	$tit2 = "TODO LO QUE NECESITAS SABER";
	$tit3 = "Dónde estamos, estacionamiento, contacto y preguntas frecuentes.";
} ?>
    		<div class="row">
                <div class="col-sm-12">
                    <div class="image_dynamic hover">
                    	<a href="<?php bloginfo('url'); ?>/servicio-al-cliente">
							<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_servicio_cliente.png);"> </div>
                            <div class="caption_lg">
                            	<h3><?php echo $tit1; ?></h3>
                                <h4 class="divider"><?php echo $tit2; ?></h4>
                                <p><?php echo $tit3; ?></p>
                            </div><!-- caption_lg -->
                    	</a>
                	</div>
                </div>
            </div><!-- END MAIN ROW -->
		</div> <!-- END MAIN CONTAINER -->
    </section> <!-- END MAIN_CONTENT -->

    <?php include('include-visitanos.php') ?>

<?php
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$menu1 = "Investor Relations";
	$menu2 = "COMMERCIAL CONTACT";
	$menu3 = "CORPORATE CONDUCT CODE";
	$menu4 = "TERMS AND CONDITIONS OF USE";
	$menu5 = "SALES REPORTS";
	$menu6 = "SUPPLIERS AND TENANTS";
	$menu7 = "LEGAL BASIS FOR TENDERS";
	$tit1  = "see on maps";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){
	$menu1 = "RELAÇÕES COM INVESTIDORES";
	$menu2 = "CONTATO COMERCIAL";
	$menu3 = "CÓDIGO DE CONDUTA EMPRESARIAL";
	$menu4 = "TERMOS E CONDIÇÕES DE USO";
	$menu5 = "RELATÓRIOS DE VENDAS";
	$menu6 = "PROVEDORES E LOCATARIOS";
	$menu7 = "CONCURSOS LEGAIS";
	$tit1  = "VER NO MAPA";
}else{
	$menu1 = "Investor Relations";
	$menu2 = "Contacto Comercial";
	$menu3 = "Código Conducta Empresarial";
	$menu4 = "Términos y Condiciones de Uso";
	$menu5 = "Relatorios de ventas";
	$menu6 = "Proveedores y Locatarios";
	$menu7 = "Legales concursos";
	$tit1  = "ver en mapa";
} ?>
    <div class="container">
     <footer>
      <div class="row">
          <div class="col-xs-12 col-sm-4">
            <ul class="menu_footer">
              <li class=""><a href="http://www.parauco.com/" target="_blank"><?php echo $menu1; ?></a></li>
              <li><a href="<?php bloginfo('url'); ?>/contacto-comercial"><?php echo $menu2; ?></a></li>
              <li><a href="https://secure.ethicspoint.com/domain/media/es/gui/23025/index.html" target="_blank"><?php echo $menu3; ?></a></li>
              <li><a href="<?php bloginfo('url'); ?>/terminos-y-condiciones"><?php echo $menu4; ?></a></li>
              <li><a href="http://sistemas.parquearauco.cl/Relatorios/Inicio.aspx" target="_blank"><?php echo $menu5; ?></a></li>
              <li><a href="http://sistemas.parquearauco.cl/Portal" target="_blank"><?php echo $menu6; ?></a></li>
              <!-- <li><a href="<?php bloginfo('url'); ?>/legales-concursos"><?php echo $menu7; ?></a></li> -->
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6">
              <ul class="bullets">
                <li class="bullet clearfix">
                  <div class="bullet-icon bullet-icon-1">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <div class="bullet-content">
                    <h2><?php bloginfo('name'); ?></h2>
                    <p>La Cantera 2325<br>
                    Coquimbo<br>
                    <a href="https://www.google.com/maps?ll=-29.976287,-71.295227&z=18&t=m&hl=es-ES&gl=US&mapclient=apiv3&cid=3780865414655291440" class="link_rojo" target="_blank"><?php echo $tit1; ?></a></p>
                  </div>
                </li>
                <li class="bullet clearfix">
                  <div class="bullet-icon bullet-icon-2">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                  </div>
                  <div class="bullet-content">
					<?php if(ICL_LANGUAGE_CODE=='en'){ ?>
                    <h2>TIME SCHEDULES</h2>
                    <p>MONDAYS TO SUNDAYS FROM 10:30 AM. TO 9 PM.</p>
					<?php }elseif(ICL_LANGUAGE_CODE=='pt-br'){  ?>
                    <h2>HORÁRIOS</h2>
                    <p>SEGUNDA A DOMINGO DAS 10:30H ATÉ AS 21:00H.</p>
					<?php }else{  ?>
                    <h2>horarios</h2>
                    <p>lunes a domingo y festivos
                    de 10 a 21 hrs.</p>
					<?php } ?>
                  </div>
                </li>
              </ul>
          </div>
            <a href="http://www.parauco.com/" class="btn_inversionistas hvr-float" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/btn_inversionistas.svg" class="img-responsive">
            </a>
        </div> <!-- row -->
      </footer> <!-- footer -->
    </div><!-- container footer -->
    <div class="container">
          <div class="footer_bottom">
          <div class="copy">
              <?php echo date("Y"); ?> © Todos los derechos reservados.
          </div>
<!--
          <div class="trip_advisor">
              <div id="TA_socialButtonBubbles464" class="TA_socialButtonBubbles">
                  <ul id="RuQEoXeD" class="TA_links x91SAq">
                      <li id="ErqX32" class="PZPJHn">
                      <a target="_blank" href="https://www.tripadvisor.cl/Attraction_Review-g294305-d2491922-Reviews-Parque_Arauco-Santiago_Santiago_Metropolitan_Region.html"><img src="https://www.tripadvisor.cl/img/cdsi/img2/branding/socialWidget/20x28_green-21693-2.png"/></a>
                      </li>
                  </ul>
              </div>
              <script src="https://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=464&amp;locationId=2491922&amp;color=green&amp;size=rect&amp;lang=es_CL&amp;display_version=2"></script>

          </div>
--> <!-- trip advisor -->
      </div><!-- footer_bottom -->
    </div>
    <!-- js -->

<?php wp_footer(); ?>

<script>
	$(function(){
  var currencies = [

	  <?php
	$categorias = $db->rawQuery("select * from pak_categorias where idioma = $idioma");
	if($categorias){
		foreach ($categorias as $p) {

			echo "{ value: '".addslashes($p['nombre_subcategoria'])."', id: '".$p['id_subcategoria']."', tipo: '-', busqueda: 'Cat' },";
		}
	}
	$tiendas = $db->rawQuery("select * from pak_tiendas");
	if($tiendas){
		foreach ($tiendas as $t) {

			echo "{ value: '". str_replace("'", "",  addslashes($t['nombre']))."', id: '".$t['punto_interes']."', tipo: '".$t['tipo']."', busqueda: 'Tienda' },";
		}
	}
	  ?>

  ];

  // setup autocomplete function pulling from currencies[] array
  $('#input_search_home').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
     // alert(suggestion.busqueda+': '+suggestion.value+ ' - id: '+ suggestion.id);


      if(suggestion.busqueda=='Cat'){
	      pagina = '<?php bloginfo('url'); ?>/tiendas?catID=';
      }else if(suggestion.busqueda=='Tienda'){
	      if(suggestion.tipo=='1'){
		      pagina = '<?php bloginfo('url'); ?>/tiendas?tiendaID=';
	      }else if(suggestion.tipo=='3'){
		      pagina = '<?php bloginfo('url'); ?>/food-court-tiendas?tiendaID=';
		  }else if(suggestion.tipo=='2'){
		      pagina = '<?php bloginfo('url'); ?>/bazar-central?tiendaID=';
		  }
      }else{

      }

	  window.location.href = pagina+suggestion.id;

    }
  });


});

<?php
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url,'distrito-de-lujo-tienda') !== false) {
	    $dl = true;
	} else {
	    $dl = false;
	}
	if(isset($_GET['tiendaID']) && !$dl){
?>
    $("#lang_switcher").removeClass('visible-xs visible-sm').css('display', 'none');
    $(".lang, .rrss, .search").hide();
    $("#caja_datos_tienda").css("display", "block");
    $(".close_tienda").css('display','block').show();
    $('body').toggleClass('menu_open');
<?php } ?>

</script>

  </body>
</html>
