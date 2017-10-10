var laurl = $('.modal_overlay').data('url');
var template = $('.modal_overlay').data('template');
var cookie = Cookies.get('formulario');
if(cookie==1){
	$('.modal_overlay').hide();
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

$('#acepto').change(function () {
    if ($('#acepto').is(':checked')) {
		$('#formModal button').prop('disabled', false);
		$('#formModal button').css({'opacity':'1'});
	}else{
		$('#formModal button').prop('disabled', true);
		$('#formModal button').css({'opacity':'0.5'});
	}
});



$("#formModal").submit(function(e) {
	if ($('#acepto').is(':checked')) {
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
	
});