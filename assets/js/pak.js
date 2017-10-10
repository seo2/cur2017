var loc  	= window.location.pathname;
var dir 	= loc.substring(0, loc.lastIndexOf('/'));
//var urlpak  = document.location.origin+dir;
var urlpak 			= $('body').data('url');
var templateurlpak 	= $('body').data('template');
var placeholder 	= $('.search_home').data('placeholder');

$(document).ready(function() {


/*animacion cerrar mobile*/
   $('#nav_mobile button.navbar-toggle').click(function() {
        $('button.navbar-toggle').toggleClass('collapsed');
    });
/*animacion cerrar mobile*/


                  
            $(window).scroll(function() {
                     if ($(this).scrollTop() < 480) {
                        $(".search_home").addClass("fixed");
                        $(".main_content").css("margin-top", "60px");
                      } else {
                        $(".search_home").removeClass("fixed");
                         $(".main_content").css("margin-top", "0px");
                      }
              });

            $(window).scroll(function() {
                     if ($(this).scrollTop() > 480) {
                        $(".search_home").addClass("fixed");
                         $(".main_content").css("margin-top", "70px");
                      } else {
                         $(".search_home").removeClass("fixed");
                         $(".main_content").css("margin-top", "0px");
                      }
              });
// slider home

$('#slider_piso_diseno').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
   // video: true,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }
});




$('.slider_home').owlCarousel({
    loop: false,
    margin:10,
    nav:false,
    dots: true,
    autoplay: true,
    video: true,
    center: true,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }

});

$('.slider_destacado_home').owlCarousel({
    loop: false,
    margin:10,
    nav:false,
    dots: true,
    autoplay: true,
    video: true,
    center: true,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }

});



$('.slider_servicios_generales').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
    video: false,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }
});




$('.slider_tag').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
    rewind: true,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1024:{
            items:1
        }
    }
});


$('.slider_servicios_cliente').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
    rewind: true,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1024:{
            items:1
        }
    }
});

$('.slider_entrentencion').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dots: false,
    autoplay: false,
    rewind: true,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1024:{
            items:1
        }
    }
});


$('.box_slider').owlCarousel({
  
    loop:false,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
    rewind: true,
    lazyLoad:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1024:{
            items:1
        }
    }

});

    //slider logos malls xs

    $('.slider_logos_mall').owlCarousel({
        loop:true,
        margin:40,
        nav:true,
        dots: false,
        autoplay: false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:4
            },
            1024:{
                items:4
            }
        }
    });


        // tiendas
        
       $('body').on('click', '.overlay_img', function(e) {
	   		tipo = $(this).data('tipo');
	        id_tienda = $(this).data('id');
	   		if(tipo>1){
	   		  if(tipo=='1'){
			      pagina = '/tiendas?tiendaID=';
		      }else if(tipo=='3'){
			      pagina = '/food-court-tiendas?tiendaID=';
			  }else if(tipo=='2'){
			      pagina = '/bazar-central?tiendaID=';
			  }
		      window.location.href = urlpak+pagina+id_tienda;		   		
	   		}else{
		   		logo 		= $(this).data('logo');
		   		desc 		= $(this).data('desc');
		   		img  		= $(this).data('img');
		   		nombre  	= $(this).data('nombre');
		   		fono 		= $(this).data('fono');
		   		piso 		= $(this).data('piso');
		   		local 		= $(this).data('local');
		   		url  		= $(this).data('url');
		   		pindcto 	= $(this).data('pindcto');
		   		pinctodesc  = $(this).data('pinctodesc');   	
		   		
		   		result 	= url.replace(/(^\w+:|^)\/\//, '');
		   		if (result.charAt(result.length - 1) == '/') {
				  result = result.substr(0, result.length - 1);
				}
		   		mapa  = $(this).data('mapa');
		   		
		   		pagina = $('#pages').data('pagina');
		   		
		   		window.history.pushState("object or string", "Parque Arauco | " + nombre, "?tiendaID="+id_tienda);
		   		document.title = "Parque Arauco | " + nombre;
		   		$("#caja_datos_tienda p").html('');
		   		$("#caja_datos_tienda p.descripciontienda").html(desc);
		   		$("#caja_datos_tienda .img_tienda").css({"background":"url("+img+")"});
		   		$("#caja_datos_tienda .logo_tienda img").attr('src',logo);
		   		$("#caja_datos_tienda .telefono").html(fono);
		   		$("#caja_datos_tienda .piso").html(piso);
		   		$("#caja_datos_tienda .local").html(local);
		   		//$("#caja_datos_tienda .url").html(result).attr('href',url);
		   		if(url){
		   			$("#caja_datos_tienda .url").show().attr('href','mailto:'+url);
		   		}else{
			   		$("#caja_datos_tienda .url").hide();
		   		}
		   		$('#mapaTienda img').attr('src',mapa);
	            $(".overlay_img").css("background-color", "transparent");
	            $(this).css("background-color", "rgba(228,4,33,0.5)");
	
	            $("#lang_switcher").removeClass('visible-xs visible-sm').css('display', 'none');
	            $(".lang, .rrss, .search").hide();
	            $("#caja_datos_tienda").css("display", "block");
	            $(".close_tienda").css('display','block').show().data('id',id_tienda);
			
	            $('body').toggleClass('menu_open');
	            $('body,html').animate({
	                scrollTop : 0                   
	            }, 800);
	   		}
                
        });
            
          
        $('.navbar-header').on('click', '.close_tienda', function(e) {    
            $(".overlay_img").css("background-color", "transparent");
            $("#lang_switcher").addClass('visible-xs visible-sm');
            $(".lang, .rrss, .search").show();
            $(".close_tienda").hide();
            $("#caja_datos_tienda").fadeOut();
        
			id_tienda = $(this).data('id');
			console.log(id_tienda);
	   		
	   		pagina = $('#pages').data('pagina');
			
	   		window.history.pushState("object or string", "Parque Arauco | Tiendas", urlpak+'/'+pagina);
	   		document.title = "Parque Arauco | Tiendas";
	   		
			$(window).scrollTo($("#tienda_"+id_tienda).offset().top-150, 1500,'elasout');
        });


//caja search barra nav

            var submitIcon 	= $('.searchbox-icon');
            var inputBox 	= $('.searchbox-input');
            var searchBox 	= $('.searchbox');
            var isOpen 		= false;
             $('.rrss').css('z-index', '1');
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                    $('.rrss').css('z-index', '0');

                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                        $('.rrss').css('z-index', '1');
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
                $(document).mouseup(function(){
                        if(isOpen == true){
                            $('.searchbox-icon').css('display','block');
                            submitIcon.click();

                        }
                    });

            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','block');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }

                // barra busqueda por categoria dektop
                $('#input_search_home').click(function (e) {
                   $('.search_home, #input_search_home').removeAttr('placeholder').addClass('clicked');
                     e.stopPropagation();
                });
                $(document).on('click', function (e) {
                    var input_clicked = $('.search_home, #input_search_home').removeClass('clicked');
                     $('#input_search_home').attr('placeholder' , placeholder);
                });

                // barra busqueda por categoria mobile
                $('#input_search_home_xs').click(function (e) {
                   $('.search_home, #input_search_home_xs').removeAttr('placeholder').addClass('clicked');
                     e.stopPropagation();
                });
                $(document).on('click', function (e) {
                    var input_clicked = $('.search_home, #input_search_home_xs').removeClass('clicked');
                    $('#input_search_home_xs').attr('placeholder' , placeholder);
                });


                $('.navbar-toggle').click(function () {
                     if($('#navbar').attr('aria-expanded') === "false"){
                        // $('.close_tienda').hide();
                        }else if($('#navbar').attr('aria-expanded') === "true" && $('body').hasClass('')){
                           // $('.close_tienda').show();
                        }
                });

                $('.navbar-toggle, .close_tienda').click(function () {
                    var menuOpen = $('body').toggleClass('menu_open');
                    
                });

        // colapsa menu al click en un enlace
        $('.nav a').on('click', function(){
            $('.navbar-toggle').click()

        });

// ===== Scroll to Top ==== 
$(window).scroll(function() {
	if ($(this).scrollTop() >= 560) {        
    	$('#return-to-top').fadeIn(300);    // Fade in the arrow
  	}else{
    	$('#return-to-top').fadeOut(300);   // Else fade out the arrow
  	}
});

$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 500);
});



$('body').on('click', '.box_servicio a', function() {
    elid = $(this).data('target');
    console.log('El ID: '+elid);
    $('.box_servicio a.active').removeClass('active');
    $(".content_servicio").collapse('hide');
    window.setTimeout(function() {
        $(window).scrollTo($(elid+"ancla"), 1500,'elasout');
    }, 1);
    
	$('.slider_entrentencion').owlCarousel({
	    loop:false,
	    margin:10,
	    nav:true,
	    dots: false,
	    autoplay: false,
	    rewind: true,
	    lazyLoad:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        768:{
	            items:1
	        },
	        1024:{
	            items:1
	        }
	    }
	});  
});

$('.box_slider a').click(function() {
    elid = $(this).data('target');
    $(".content_servicio").collapse('hide');
  
    window.setTimeout(function() {
    	$(window).scrollTo($(elid+"ancla"), 1500,'elasout');
    }, 500);
});           

$('.box_more_info a').click(function() {
     elid = $(this).data('target');
       window.setTimeout(function() {
      $(window).scrollTo($(elid+"ancla"), 1500,'elasout');
    }, 500);
    
    $('.box_servicio a.active').removeClass('active');
    $(".content_servicio").collapse('hide');
    $(".content_servicio").$(this).collapse('show');
     
});

$('body').on('click', '.close_servicio', function() { 
    elid = $(this).data('target');
    $(".content_servicio").collapse('hide');
    $('.box_servicio a').removeClass('active');
    $(".marker").animate({ bottom : "-10px"}, 500, function(){} );
     window.setTimeout(function() {
        $(window).scrollTo($(elid+"box").offset().top-223, 1500,'elasout');
      }, 1);
});

                /*end servicios*/

                $(".disable-owl-swipe").on("touchstart mousedown", function(e) {
                    // previene swipe
                    e.stopPropagation();
                })

                  
                  $('.box_slider').click(function() {
                      // $('.marker').removeClass('active');
                       // $(this).addClass('active');
                  });

                               
                  //      $(".video")[0].src += "&autoplay=0";
                    //play video

                 
                    $('.box_video').on('click', function(ev) {
	                    $('.videito ').attr('src','');
						video 		= $(this).data('video');
						cajaid 		= $(this).attr('id');
						urlvideo 	= 'http://www.youtube.com/embed/'+video+'?rel=0&enablejsapi=1&autoplay=1'
						
						console.log(video);
						
                                $(".cap_video").show();
                                $(".lente_video").show();
                                $(".btn_play_video").show();
//                                 $('iframe').attr('src', $('iframe').attr('src'));
                             
                                $(".cap_video", this).hide();
                                $(".lente_video", this).hide();
                                $(".btn_play_video", this).hide();
								
                              
						$('.'+cajaid).attr('src',urlvideo);
                
                              ev.preventDefault();
                  });

            //          function scrollToElement($('.search_home')) {
            //     $(window).scrollTop($('.search_home').offset().top).scrollLeft($('.search_home').offset().left);
            // }

          



});



/*
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'ws/search.php?key=%QUERY',
        limit : 10
    });
*/
$(function() {
    $( "#input_search_home" ).autocomplete({
        source: 'ws/search.php'
    });
});

$('#form_sac_contacto')
    .formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        }
    })
    .on('err.field.fv', function(e, data) {
            data.element
                .data('fv.messages')
                .find('.help-block[data-fv-for="' + data.field + '"]').hide();
    })
    .on('success.form.fv', function(e) {
		e.preventDefault();

		$("#btnEnviar").html('<i class="fa fa fa-spinner fa-spin"></i>');
		$.ajax({
		    type: "POST",
		    url: templateurlpak+"/ws/contacto.php",
		    data: $("#form_sac_contacto").serialize(),
		    success: function(msg) {
		    	console.log(msg);
		    	if(msg=='ok'){
		        	alert("Enviado");
					$('#form_sac_contacto').data('formValidation').resetForm();
					$('#form_sac_contacto')[0].reset();
		    	}else{
		        	alert("ha ocurrido un error");
					$('#btnEnviar').prop('disabled', false);
					$('#btnEnviar').removeClass('disabled');
		    	}
				$("#btnEnviar").html('enviar');
		    },
		    error: function(xhr, status, error) {
				//alert(status);
			}
		});
		 
    });

$('#form_tarjeta_descuento')
    .formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        }
    })
    .on('err.field.fv', function(e, data) {
            data.element
                .data('fv.messages')
                .find('.help-block[data-fv-for="' + data.field + '"]').hide();
    })
    .on('success.form.fv', function(e) {
		e.preventDefault();

		$("#btnEnviar").html('<i class="fa fa fa-spinner fa-spin"></i>');
		$.ajax({
		    type: "POST",
		    url: templateurlpak+"/ws/travellers.php",
		    data: $("#form_tarjeta_descuento").serialize(),
		    success: function(msg) {
		    	console.log(msg);
		    	if(msg=='ok'){
		        	alert("Enviado");
					$('#form_tarjeta_descuento').data('formValidation').resetForm();
					$('#form_tarjeta_descuento')[0].reset();
		    	}else{
		        	alert("ha ocurrido un error");
					$('#btnEnviar').prop('disabled', false);
					$('#btnEnviar').removeClass('disabled');
		    	}
				$("#btnEnviar").html('enviar');
		    },
		    error: function(xhr, status, error) {
				//alert(status);
			}
		});
		 
    });




$('#acepto').change(function () {
    if ($('#acepto').is(':checked')) {
		$('#form_neswsletter button').prop('disabled', false);
		$('#form_neswsletter button').removeClass('disabled');
		$('#form_neswsletter button').css({'opacity':'1'});
	}else{
		$('#form_neswsletter button').prop('disabled', true);
		$('#form_neswsletter button').addClass('disabled');
		$('#form_neswsletter button').css({'opacity':'0.5'});
	}
});

$('#form_neswsletter')
    .formValidation({
        framework: 'bootstrap',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        }
    })
    .on('err.field.fv', function(e, data) {
            data.element
                .data('fv.messages')
                .find('.help-block[data-fv-for="' + data.field + '"]').hide();
    })
    .on('success.form.fv', function(e) {
		e.preventDefault();

	    if ($('#acepto').is(':checked')) {
		    $("#form_datos button").html('<i class="fa fa fa-spinner fa-spin"></i>');
			$("#form_neswsletter button").html('<i class="fa fa-spinner fa-spin"></i>');
			$.ajax({
			    type: "POST",
			    url: templateurlpak+"/ws/suscribirse.php",
			    data: $("#form_neswsletter").serialize(),
			    success: function(msg) {
			    	console.log(msg);
			    	if(msg=='ok'){
			        	alert("Gracias por suscribirse");
						$('#form_neswsletter').data('formValidation').resetForm();
						$('#form_neswsletter')[0].reset();
			    	}else{
			        	alert("ha ocurrido un error");
						$('#form_neswsletter button').prop('disabled', false);
						$('#form_neswsletter button').removeClass('disabled');
			    	}
					$("#form_neswsletter button").html('<i class="fa fa-envelope" aria-hidden="true"></i>');
			    },
			    error: function(xhr, status, error) {
					//alert(status);
				}
			}); 
		}else{
			alert('Debes aceptar los términos y condiciones.');
		}
		 
    });


$(document).mouseup(function(e) 
{
    var container = $(".menu_container");
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
	    if($('#navbar').hasClass('in')){
        	$('.navbar-toggle').click();
	    }
    }
});

$('#language').on('change', function () {
  var url = $(this).val(); // get selected value
  if (url) { // require a URL
      window.location = url; // redirect
  }
  return false;
});
$('#legales').on('change', function () {
  var url = $(this).val(); // get selected value
  if (url) { // require a URL
      //window.location = url; // redirect
      window.open( url, '_blank' );
  }
  return false;
});
$('#categorias').on('change', function () {
  var url = $(this).val(); // get selected value
  if (url) { // require a URL
      window.location = url; // redirect
  }
  return false;
});

$('.datepicker').datepicker({
	format: "dd/mm/yyyy",
	weekStart: 1,
	language: "es"
});

$('.bigtext').bigtext({
    maxfontsize: 50 // default is 528 (in px)
});


/* MODAL */

var laurl = $('.modal_overlay').data('url');
var template = $('.modal_overlay').data('template');
var cookie = Cookies.get('formulario');
if(cookie==1){
	$('.modal_overlay').hide();
}else{
	$('.modal_overlay').show();
}


$("#modReg").bind("change", function() {
    GetComunas($(this).val());
});	

function GetComunas(regionID) {
  if (regionID > 0) {
        $("#comuna").get(0).options.length = 0;
        $("#comuna").get(0).options[0] = new Option("Cargando Comunas...", "-1"); 
 	    $.ajax({
            type: "POST",
            url: template+"/ajax/comunas.php",
            data: { "regionID": regionID },
            success: function(msg) {
	            console.log(msg);
                $("#comuna").get(0).options.length = 0;
                $("#comuna").get(0).options[0] = new Option("-- Selecciona Ciudad --", ""); 
                
                $.each(msg.comunas, function(index, item) {
                    $("#comuna").get(0).options[$("#comuna").get(0).options.length] = new Option(item.Display, item.Value);
                });
            },
            error: function(xhr, status, error) {
				//alert(status);
        	}
        });
    }
    else {
        $("#comuna").get(0).options.length = 0;
    }
}

$('#acepto2').change(function () {
    if ($('#acepto2').is(':checked')) {
		$('#formModal button').prop('disabled', false);
		$('#formModal button').css({'opacity':'1'});
	}else{
		$('#formModal button').prop('disabled', true);
		$('#formModal button').css({'opacity':'0.5'});
	}
});



$("#formModal").submit(function(e) {
	if ($('#acepto2').is(':checked')) {
		$("#formModal button").html('Enviando...');
	    var postData 	= $(this).serializeArray();
	    var formURL 	= $(this).attr("action");
	    $.ajax(
	    {
	        url : formURL,
	        type: "POST",
	        data : postData,
	        success:function(data, textStatus, jqXHR) 
	        {
			 	console.log(data);
				if(data=='ok'){
			    	alert('Gracias, sus datos han sido guardados.');
			    	Cookies.set('formulario', '1');
			    	$('.modal_overlay').hide();
		        }else{
			    	alert('Ha ocurrido un error.');
					$("#formModal button").html('Enviar');
		        }
	        },
	        error: function(jqXHR, textStatus, errorThrown) 
	        {
	            alert('Ha ocurrido un error.');  
				$("#formModal button").html('Enviar');
	        }
	    });
	}else{
		alert('Debe aceptar los términos y condiciones.');
	}	
    e.preventDefault(); //STOP default action
    e.unbind(); //unbind. to stop multiple form submit.
});

$('.close_modal').on('click',function(){
	$('.modal_overlay').hide();
	//Cookies.set('formulario', '1');
});