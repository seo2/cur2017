(function($) {

    function reset_video_size(video_width){
          //better use jquery selectors: owl.items() and $(owl.items()) give problems, don't know why
          var items = $('.owl-item:not([data-video])');
          var videos = $('.owl-video-wrapper');
          var v_height = 0;

          //user-defined width ELSE, width from inline css (when owl.autoWidth == false), 
          //ELSE, computed innerwidth of the first element.
          var v_width = (video_width) ? video_width : ((items.css('width') != 'auto') ? items.css('width') : items.innerWidth());

          items.each(function(){
            var h = $(this).innerHeight();
            if(h > v_height) v_height = h;
          });

        //  set both width and height
          videos.css({ 'height':v_height, 'width':v_width });
        };

// slider principal

$('.slider_home').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    autoplay: false,
    video: true,
    lazyLoad:true,
    onInitialized: function(){ reset_video_size(); },
    onResized: function(){ reset_video_size(); },
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

//slider logos mall xs

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
                // $('.overlay').toggle('fast');    
                 //$('.overlay').fadeToggle( "fast", "linear" );    
                      $('body').toggleClass('menu_open');
  
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

})( jQuery ); //no conflict




