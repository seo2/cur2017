// Función para obtener la query de una URL
// http://goo.gl/qzucR
function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) return pair[1];
    }
	return false;
}

// Opciones para pasar de/a UTF-8
// http://goo.gl/ROnNb
UTF8 = {
    encode: function(s){
        for(var c, i = -1, l = (s = s.split("")).length, o = String.fromCharCode; ++i < l; s[i] = (c = s[i].charCodeAt(0)) >= 127 ? o(0xc0 | (c >>> 6)) + o(0x80 | (c & 0x3f)) : s[i] );
        return s.join("");
    },
    decode: function(s){
        for(var a, b, i = -1, l = (s = s.split("")).length, o = String.fromCharCode, c = "charCodeAt"; ++i < l; ((a = s[i][c](0)) & 0x80) && (s[i] = (a & 0xfc) == 0xc0 && ((b = s[i + 1][c](0)) & 0xc0) == 0x80 ? o(((a & 0x03) << 6) + (b & 0x3f)) : o(128), s[++i] = "") );
		return s.join("");
	}
};

function raya_from_str_to_slug( string ){
	string = string.toLowerCase().replace(/^\s+|\s+$/g, '')
	.replace(/(á|à|â|ä)/g, 'a').replace(/(é|è|ê|ë)/g, 'e')
	.replace(/(í|ì|î|ï)/g, 'i').replace(/(ó|ò|ô|ö)/g, 'o')
	.replace(/(ú|ù|û|ü)/g, 'u');
	
	string = string.replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
	
	return string;
}

// Consulta que llena el select de /tiendas/
if( window.location.pathname.search('tiendas') != -1 ){
    /*(function($) {
        nivel_var =  'all';
        jQuery.get(window.template_path +"/ajax_categorias.php", {nivel : nivel_var}, function(data){
            jQuery("#categories").html(data);
            if( getQueryVariable('cat') ){
                // IE devuelve el string ya descodificado
                cat_opcion = (navigator.appName == 'Microsoft Internet Explorer') ? getQueryVariable('cat') : UTF8.decode( unescape(getQueryVariable('cat')) );
                jQuery('#categories option[value="'+ cat_opcion +'"]').attr('selected', 'selected');
            }
        });
    })(jQuery); */
    
	// Tooltips + Autocompletar
	jQuery(function($) {
		$('#listadoLogosMarcas li').tipsy( {gravity: 's', live: true, title: function() { return this.getAttribute('data-tienda')}, opacity: 1.0 });
		
		$( ".buscador-tiendas" ).autocomplete({
			minLength: 2,
			delay: 200,
			source: function(request, response) {
				$('.buscador-tiendas').addClass('cargando');
				$.post('/wp-admin/admin-ajax.php', { 'action': 'tiendas_autocomplete', 'td': request.term.toLowerCase() }, function(data) {
					if( data.error ){ response( [{ label: 'No hay tiendas con ese nombre', value: null}] ) } else {
					response($.map(data, function(item) {
							return {
								label: item.nombre.replace('\\',''), value: item.id
							}
						}));
					}
					$('.buscador-tiendas').removeClass('cargando');
				}, 'json');
			},
			focus: function( event, ui ) {
				$( ".buscador-tiendas" ).val( ui.item.label );
				return false;  
			},  
			open : function (event, ui){
				$(this).autocomplete('widget').css('z-index', 10000);
				return false;
			},
			select: function( event, ui ) {
				if ( ui.item.value != null ){
					window.location.href = '/tiendas/'+ raya_from_str_to_slug(ui.item.label)+ '/'+ parseInt(ui.item.value) + '/';
				}
				return false;
			}
		});
	});
	
	var asa_buscar = function asa_buscar( txt ){
		
		$.post(
			'/wp-admin/admin-ajax.php',
			{ 'action': 'tiendas_alphabetic', 'td': txt.toLowerCase() },
			function (data){
                if( data.error ){ if(console) console.log( 'error tiendas:' + data.error); }
                else {
					relleno = '';
                    
					jQuery.each( data, function(i, t){
						nombretienda = typeof raya_from_str_to_slug == 'function' ? raya_from_str_to_slug( t.nombre ) : 'tda';
						relleno = relleno + '<li data-tienda="'+ t.nombre.replace('\\', '') +'"><a href="/tiendas/'+ nombretienda +'/'+ t.id +'/"><img src="'+ t.logo +'" /></a></li>'; });
                        $("#nombreTienda").html('');
                        $("#listadoLogosMarcas").css({left:0}).empty().append(relleno);
                    }
            },
			'json'
        );
	}
	
    jQuery(document).ready(function($){
		$('#btn_az a').toggle(
			function(){ $('.alfabeto').slideDown().removeClass('oculto').addClass('visible'); },
			function(){ $('.alfabeto').removeClass('visible').addClass('oculto').slideUp(); }
		);
		$("body").delegate("#posicion a", "click", function(event){
			$('#posicion a').removeClass('activo'); asa_buscar( $(this).text().toLowerCase() ); $(this).addClass('activo');
			event.stopPropagation(); if(event.preventDefault){ event.preventDefault(); } else { event.returnValue = false; } return false;
		});
	});
}

// Función general para agregar tooltips a todas las tiendas
jQuery(document).ready(function($){
	if( $('#listadoLogosMarcas li').length > 0 ){
		$('#listadoLogosMarcas li').tipsy( {gravity: 's', live: true, title: function() { return this.getAttribute('data-tienda')}, opacity: 1.0 });
	}
});

function filtroPorCategorias(val)
{
    window.location.href = '/tiendas/?cat='+val;
}

function cargaCategoriasNivel(num)
{
    if( typeof getQueryVariable('cat') != 'undefined' ){
        window.location.href = '/tiendas/?cat='+ getQueryVariable('cat');
    } else {
		window.location.pathname; // sólo piso
    }
    
}

function flechaIzquierda()
{
    ir_izq = jQuery("#listadoLogosMarcas").css('left');
    
    if( ir_izq.replace('px', '') != '0' && parseFloat( ir_izq.replace('px', '') ) < 0 && ir_izq != "auto" ){
        jQuery("#listadoLogosMarcas").stop().animate({left: '+=333'}, 500);
    }
    if( parseFloat( ir_izq.replace('px', '') ) > 0 ) jQuery("#listadoLogosMarcas").stop().animate({left: '0px'}, 100);
    
}

function flechaDerecha()
{
    ir_izq = jQuery("#listadoLogosMarcas").css('left');
    tiendas_ahora = jQuery("#listadoLogosMarcas").children().size();
    
    if( ir_izq.replace("px", "") > (Math.round((tiendas_ahora) * -111) + 888) || ( parseInt(tiendas_ahora) > 8 && ir_izq == "auto" ) ){
        jQuery("#listadoLogosMarcas").stop().animate({left: '-=333'}, 500);
    }
}

function raya_tooltip( speed ){
    return true;
}

function mueve_carrusel_tiendas( position ){
    if( typeof position != 'number' ){ console.log(typeof position); return;}
    if ( position > 1){
        a_mover = ( position - 1) * -111;
        inicio = parseFloat(a_mover + 600) > 0 ? 0 : parseFloat(a_mover + 600);
        $("#listadoLogosMarcas").css({left: inicio +'px'}).stop().animate({left: a_mover +'px'}, 2500, 'easeOutQuart');
    }
}

// Nah que ver, pero bueh
jQuery(document).ready( function($){
	if( $('.submenu-slide').size() > 0 ){
		$('.submenu-slide').hide().delay(500).slideDown(800);
	}
});