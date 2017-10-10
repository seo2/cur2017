<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$pla = "WHAT STORE OR CATEGORY ARE YOU LOOKING FOR?";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$pla = "QUE LOJA OU CATEGORIA ESTÁ BUSCANDO?";
}else{ 
	$pla = "¿QUÉ TIENDA O CATEGORÍA ESTÁS BUSCANDO?";
} ?> 


     <section class="search_home" data-placeholder="<?php echo $pla; ?>">
         <div class="container-fuid nopad">
            <div class="container width">
                <div class="box_search_home">
                  <form class="search-bar" role="search" action="<?php bloginfo('url'); ?>/tiendas" method="get">
                      <input id="input_search_home" name="busqueda" class="form-control typeahead tt-query" spellcheck="false" type="search" placeholder="<?php echo $pla; ?>"/>
                      <button type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    </form>
                </div>
            </div>
         </div>
     </section><!-- search home -->


