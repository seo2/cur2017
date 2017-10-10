$(document).ready(function() {

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
$('.slider_home').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay: true,
    video: true,
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

$('.slider_dl').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
    video: true,
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


$('.slider_tiendas_dl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
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


$('.slider_single_tiendas_dl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
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

$('.slider_travellers').owlCarousel({
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


$('.slider_travellers_tarjeta').owlCarousel({
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
// slider calugas secciones

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




        // function Time(){
        //         var offset = -70; 
        //          //  Handler for .ready() called.
        //          $('html, body').animate({
        //             scrollTop: $(".search_home").offset().top + offset
        //         }, 1000);
        // }
        //  setTimeout(Time, 1500);


        // The function actually applying the offset
            function offsetAnchor() {
              if (location.hash.length !== 0) {
                window.scrollTo(window.scrollX, window.scrollY - 223);
              }
            }

            // Captures click events of all <a> elements with href starting with #
            $(document).on('click', 'a[href^="#"]', function(event) {
              // Click events are captured before hashchanges. Timeout
              // causes offsetAnchor to be called after the page jump.
              window.setTimeout(function() {
                offsetAnchor();
              }, 0);
            });

            // Set the offset when entering page with hash present in the url
            window.setTimeout(offsetAnchor, 0);

    // tiendas
        var id_tienda;

       $('.grid_tiendas').on('click', '.overlay_img', function(e) {

                    //$(".overlay_img").css("background-color", "transparent");
                    $(this).css("background-color", "rgba(228,4,33,0.5)");
                    var id_tienda = $(this).attr('id');
                    console.log(id_tienda);

                    $("#lang_switcher").removeClass('visible-xs visible-sm').css('display', 'none');
                    $(".lang, .rrss, .search").hide();
                    $("#caja_datos_tienda").css("display", "block");
                    $(".close_tienda").css('display','block').show();
                        $('body').toggleClass('menu_open');
                        $('body,html').animate({
                            scrollTop : 0                   
                        }, 800);
                
        });
            
          
        $('.navbar-header').on('click', '.close_tienda', function(e) {
                     
                    $(".overlay_img").css("background-color", "transparent");
                    $("#lang_switcher").addClass('visible-xs visible-sm');
                    $(".lang, .rrss, .search").show();
                    $(".close_tienda").hide();
                    $("#caja_datos_tienda").css("display", "none");
                
                    $('body , html').animate({
                        scrollTop : 550                  
                    }, 1000);
        });


//caja search barra nav

            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
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
                         $('#input_search_home').attr('placeholder' , "¿QUÉ TIENDA O CATEGORÍA ESTÁS BUSCANDO?");
                });

                // barra busqueda por categoria mobile
                $('#input_search_home_xs').click(function (e) {
                   $('.search_home, #input_search_home_xs').removeAttr('placeholder').addClass('clicked');
                     e.stopPropagation();
                });
                $(document).on('click', function (e) {
                        var input_clicked = $('.search_home, #input_search_home_xs').removeClass('clicked');
                         $('#input_search_home_xs').attr('placeholder' , "¿QUÉ TIENDA O CATEGORÍA ESTÁS BUSCANDO?");
                });


                $('.navbar-toggle').click(function () {
                     if($('#navbar').attr('aria-expanded') === "false"){
                         $('.close_tienda').hide();
                        }else if($('#navbar').attr('aria-expanded') === "true" && $('body').hasClass('')){
                            $('.close_tienda').show();
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
                  } else {
                      $('#return-to-top').fadeOut(300);   // Else fade out the arrow
                  }
              });

              $('#return-to-top').click(function() {      // When arrow is clicked
                  $('body,html').animate({
                      scrollTop : 0                       // Scroll to top of body
                  }, 500);
              });




    //     $(document).click(function (event) {
    //         var clickover = $(event.target);
    //         var _opened = $(".navbar-collapse").hasClass("navbar-collapse in");
    //         var _form_control = $("input").hasClass("form-control");
    //         if (_opened === false && !clickover.hasClass("navbar-toggle") || _form_control === true ) {
    //             $("button.navbar-toggle").click();
    //         }

    //         console.log(_form_control);

    // });

//     $(document).on('click', 'a', function(event){
//     event.preventDefault();

//     $('html, body').animate({
//         scrollTop: $( $.attr(this, 'href') ).offset().top
//     }, 500);
// });

                //SERVICIOS , galerias
                $('.box_servicio a').click(function() {
                    
                    $('.box_servicio a.active').removeClass('active');
                    $(".content_servicio").collapse('hide');
                    $(this).toggleClass('active').collapse('show');
                     window.setTimeout(function() {
                        $(window).scrollTo($(".close_servicio"), 1500,'elasout');
                      }, 500);
            });
             

                $('.box_more_info a').click(function() {
                    $('.box_servicio a.active').removeClass('active');
                    $(".content_servicio").collapse('hide');
                    $(".content_servicio").$(this).collapse('show');
                     
                });

                $('.close_servicio').click(function() {     
                    $(".content_servicio").collapse('hide');
                    $('.box_servicio a').removeClass('active');
                    $(".marker").animate({ bottom : "-10px"}, 500, function(){} );
                });

                /*end servicios*/

                $(".disable-owl-swipe").on("touchstart mousedown", function(e) {
                    // previene swipe
                    e.stopPropagation();
                })

                  
                  $('.box_slider').click(function() {
                        $('.marker').removeClass('active');
                         $(this).addClass('active');
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




