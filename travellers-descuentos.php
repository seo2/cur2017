<?php
/*

Template name: Travellers Descuentos

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-search-no-slider.php') ?>

<?php
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
  $tit1 = "Stores with DISCOUNTS for travellers";
  $tit2 = "Filter by";
  $tit3 = "All Categories";
  $btn1 = "See more discounts";
  $btn2 = "View more stores";
  $page = '/en/travellers/discounts';
}elseif(ICL_LANGUAGE_CODE=='pt-br'){
  $tit1 = "Lojas com desconto para viajantes";
  $tit2 = "Filtrar";
  $tit3 = "todas as categorias";
  $btn1 = "veja mais descontos";
  $btn2 = "Veja mais lojas";
  $page = '/pt-br/viajantes/descontos';
}else{
  $tit1 = "DESCUENTOS TURISTAS";
  $tit2 = "filtrar por";
  $tit3 = "Todas las categorías";
  $btn1 = "ver más descuentos";
  $btn2 = "ver más tiendas";
  $page = '/travellers/travellers-descuentos';
} ?>

<?php
function tiene_descuentos($idioma, $catID){
  $i      = 0;
  $db     = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
  $tiendas  = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE a.pinDescuento != '' AND a.pinDescuento != '0' and b.sub_categoria = $catID AND a.punto_interes = b.punto_interes ORDER BY a.nombre limit 1");
  if($tiendas){
    foreach ($tiendas as $t) {
      $i++;
    }
  }
  return $i;
}
?>
   <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider"><?php echo $tit1; ?></h4>
               <div class="bajada">
                 <p>Descubre los descuentos exclusivos para turistas. <a href="<?php bloginfo('template_url') ?>/docs/descuentos_turistas.pdf" target="_blank">Descarga aquí </a>el folleto y presentar en las tiendas
                 adheridas junto a tu pasaporte o DNI, para poder acceder a los descuentos.</p>
                 <small>*Descuentos válidos solamente para extranjeros hasta el 31 de diciembre del 2017, presentando su pasaporte o DNI.</small>
               </div>

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
        <section class="travelers_descuentos clearfix">
          <div class="col-sm-12">
            <div id="filtro_descuento" class="text-right">
              <div id="text"> <?php echo $tit2; ?>: </div>
                <select name="" class="selectpicker show-menu-arrow" id="categorias">
                  <option value="<?php bloginfo('url'); ?>/travellers/discounts/"><?php echo $tit3; ?></option>
<?php
          $categorias = $db->rawQuery("SELECT * FROM pak_categorias where idioma = $idioma order by nombre_subcategoria");
          if($categorias){
          foreach ($categorias as $c) {
            $tiene = 0;
            $tiene = tiene_descuentos($idioma, $c['id_subcategoria']);
            if($tiene == 1){
?>
                             <option value="<?php bloginfo('url'); ?>/travellers/discounts/?catID=<?php echo $c['id_subcategoria']; ?>" <?php if($_GET['catID']==$c['id_subcategoria']){ ?>selected<?php } ?>><?php echo $c['nombre_subcategoria']; ?></option>

            <?php
                }
              }
            }
            ?>
                        </select>
                      </div>
            </div>
          <div class="clear"></div>
          <div class="grid_descuentos center-block">

            <div class="container">
              <div class="row" id="caja_tienda">

 <?php
            if($_GET['catID']){
              $buscar = $_GET['catID'];
              if($_GET['pagina']){
                $desde    = 12 * ($_GET['pagina'] - 1);
                $tiendas  = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE  a.pinDescuento != '' AND a.pinDescuento != '0' and b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre limit $desde,12");
              }else{
                $tiendas = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE  a.pinDescuento != '' AND a.pinDescuento != '0' and b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre limit 12");
              }
            }else{
              if($_GET['pagina']){
                $desde   = 12 * ($_GET['pagina'] - 1);
                $tiendas = $db->rawQuery("select * from pak_tiendas where pinDescuento != '' AND pinDescuento != '0' order by nombre limit $desde, 12");
              }else{
                $tiendas = $db->rawQuery("select * from pak_tiendas where pinDescuento != '' AND pinDescuento != '0' order by nombre limit 12");
              }
            }

            if($tiendas){
              foreach ($tiendas as $t) {

                                      $imagen = get_img_tienda($t['punto_interes']);
                                      if(!$imagen){

                                        $imagen   = '/ws/fotos/'. quitatodo($t['nombre']).'.png';
                                        $imagen1    = $imagen;
                                        $imagen   = get_template_directory_uri().$imagen;


                        if(is_url_exist($imagen)){
                                          $params1  = array( 'width' => 650, 'height' => 650, 'crop' => true );
                          $imagen   = bfi_thumb( $imagen, $params1 );
                        }else{
                                            $imagen   = "/assets/img/demobgtienda.jpg";
                          $imagen   = get_template_directory_uri().$imagen;
                        }

                                      }else{
                                        $imagen   = '/ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
                                        $params1  = array( 'width' => 650, 'height' => 650, 'crop' => true );
                        $imagen   = get_template_directory_uri().$imagen;
                        $imagen   = bfi_thumb( $imagen, $params1 );
                                      }

                                      $logo = '/ws/logos/'. quitatodo($t['nombre']).'.jpg';
                                      $logo = get_template_directory_uri().$logo;

                                    if(is_url_exist($logo)){
                                      $logo = $logo;
                      }else{
                                          $logo   = "/assets/img/logo_381.jpg?v=2";
                        $logo = get_template_directory_uri().$logo;
                      }

                        ?>


                          <div class="col-md-3 caja_tienda">
                              <div class="box_descuento">
                                      <div class="item_descuento" id="tienda_<?php echo $t['punto_interes']; ?>">

                                      <?php
                                      if($t['tipo']=='0'){
                                        $url = '/tiendas?tiendaID='.$t['punto_interes'];
                                      }elseif($t['tipo']=='110'){
                                        $url = '/boulevard-tiendas?tiendaID='.$t['punto_interes'];
                                      }elseif($t['tipo']=='119'){
                                        $url = '/distrito-de-lujo/distrito-de-lujo-tienda/?tiendaID='.$t['punto_interes'];
                                      }elseif($t['tipo']=='131'){
                                        $url = '/piso-diseno?tiendaID='.$t['punto_interes'];
                                      }
                                      ?>

                                        <a href="javascript:void(0);<?php //bloginfo('url'); ?><?php //echo $url; ?>" data-id="<?php echo $t['punto_interes']; ?>" data-logo="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" data-img="<?php echo $imagen; ?>" data-fono="<?php echo $t['telefono_punto_interes']; ?>" data-piso="<?php echo $t['numero_piso']; ?>" data-url="<?php echo $t['url_punto_interes']; ?>" data-mapa="<?php bloginfo('template_url'); ?>/ws/uploads/plano_<?php echo $t['punto_interes']; ?>.jpg" data-nombre="<?php echo $t['nombre']; ?>" data-tipo="<?php echo $t['tipo']; ?>">
                                          <div class="borde"></div>
                                          <div class="box_nombre_tienda">
                                            <h4 class="nombre_tienda"><?php echo $t['nombre']; ?></h4>
                                          </div>
                                          <div class="box_dcto">

                                              <div class="datos_dcto">
                                                      <div class="num bigtext">
                                                        <span>
                                                          <?php echo  $t['pinDescuento']; ?>
                                                          <?php //echo str_replace('%', '', $t['pinDescuento']); ?>
                                                          </span>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                  <p><?php echo $t['piiDescripcionDescuento']; ?></p>
                                                </div>
                                            </div>
                                            <!-- 720 x 720 -->
                                            <img class="img-responsive" src="<?php echo $imagen; ?>">
                                        </a>
                                        <div class="box_logo_tienda">
                                          <div class="logo_tienda">
                                            <img src="<?php echo $logo; ?>" alt="" class="img-responsive">
                                          </div> <!-- logo_tienda -->
                                          <img src="<?php bloginfo('template_url'); ?>/assets/img/logotravellersxs.png" alt="" class="img-responsive logotravellersxs">
                                        </div> <!-- box logo tienda -->
                                    </div> <!--  tienda -->
                            </div> <!-- item tienda -->
                      </div> <!-- col sm 3-->

            <?php
              }
            }
            ?>
              </div>
            </div> <!-- container grilla descuentos -->

                <div class="box_ver_mas_descuentos text-center">
                  <a href="javascript:void(0);" class="btn btn-default btn_ver_mas hvr-float">
                      <h3 class="ver_mas" id="cargar_mas"><?php echo $btn1; ?></h3>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
                        <span id="loader"  style="display:none"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
                    </a>
                </div> <!-- ver mas -->
              </div><!-- grid descuentos -->

          </section>
</div> <!-- row -->

<div id="pages" style="display:none;" data-pagina="tiendas">
<?php
  $postperpage  = 12;
  $rowcount     = 0;
  if($_GET['catID']){
    $tiendas = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE  a.pinDescuento != '' AND a.pinDescuento != '0' and b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre");
    if($tiendas){
      foreach ($tiendas as $t) {
        $rowcount++;
      }
    }
    $cola = "&catID=$buscar";
  }else{
    $tiendas = $db->rawQuery("select * from pak_tiendas where pinDescuento != '' AND pinDescuento != '0'");
    if($tiendas){
      foreach ($tiendas as $t) {
        $rowcount++;
      }
    }
    $cola = "";
  }

  echo "Total Items: ".$rowcount;

  $paginas = ceil($rowcount/$postperpage);

  echo " - Páginas: ".$paginas;

  $x = 1;
  while($x <= $paginas) {

  ?>
    <a href="<?php bloginfo('url'); ?><?php echo $page; ?>/?pagina=<?php echo  $x.$cola; ?>"></a>
  <?php
    $x++;
  }
  ?>

</div>


<?php include('footer.php') ?>

<script>
<?php if($paginas<=1){ ?>
  $('.box_ver_mas_descuentos').hide();
<?php } ?>


var pages   = new Array();
var current = 0;
var loaded  = new Array();

$('#pages a').each(function(index) {
    pages[index] = $(this).attr('href');
    loaded[$(this).attr('href')] = 0;
});



$('.box_ver_mas_descuentos').on('click', function(){
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
          $('.bigtext').bigtext({
              maxfontsize: 50
          });
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
