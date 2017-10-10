(function($){
  $(function(){

    $('.button-collapse').sideNav({
	    closeOnClick: true
    });
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$('#formContacto').ajaxForm({
    beforeSend: function() {
		console.log('enviando');
		$('#btnEnviar').html('Enviando <i class="fa fa-spinner fa-spin">');
        $('#status').empty();
    },
    uploadProgress: function(event, position, total, percentComplete) {

    },
    success: function() {

    },
    complete: function(xhr) {
		$('#btnEnviar').html('Enviado!');
		
		$('#formContacto')[0].reset();
		
        var respuesta = xhr.responseText;
        console.log(respuesta);
        if(respuesta=='ok'){
				        
        }else if(respuesta=='error1'){
	        //swal("Ha ocurrido un error", "El archivo subido excede el limite de 10mb permitido.", "error");
	    }else{
	        //swal("Ha ocurrido un error", "Por favor vuelve a intentarlo", "error");
        }
        
    }


	  $('.carousel.carousel-slider').carousel({fullWidth: true});

});
  
    