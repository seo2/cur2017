<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$form1 = "Name";
	$form2 = "ID Nº";
	$form3 = "Email";
	$form4 = "Telephone";
	$form5 = "Reason for contact";
	$form6 = "Type of service";
	$form7 = "Message";
	$form8 = "I am interested in receiving further information about activities, contests and promotions organized and administered by the website Parque Arauco.";
	$form9 = "Submit";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$form1 = "Nome";
	$form2 = "Identidade";
	$form3 = "Email";
	$form4 = "Telefono";
	$form5 = "Motivo do contato";
	$form6 = "Tipo de serviço";
	$form7 = "Mensagem";
	$form8 = "Gostaria de receber informações das atividades, dos curso e das programações organizadas e administradas pelo site Parque Arauco.";
	$form9 = "Enviar";
}else{ 
	$form1 = "Nombre completo";
	$form2 = "RUT";
	$form3 = "Email";
	$form4 = "Teléfono";
	$form5 = "motivo del contacto";
	$form6 = "tipo de servicio";
	$form7 = "MENSAJE";
	$form8 = "Me interesa recibir información de actividades, concursos y promociones organizadas y administradas por el sitio web Parque Arauco";
	$form9 = "enviar";
} ?>  
    <div class="container">
        <div class="row">
        	<form id="form_sac_contacto" class="">
            	<div class="col-md-4">
                    <div class="form-group">
                    	<label for="exampleInputName2"><?php echo $form1; ?> <span class="texto_rojo">*</span></label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="" name="nombre" required>
                    </div>
				</div>
                <div class="col-md-4">
                    <div class="form-group">
                    	<label for="exampleInputName2"><?php echo $form2; ?></label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="pasaporte / rut / cédula / DNI" name="rut">
                    </div>
				</div>
                <div class="col-md-4">
                    <div class="form-group">
                    	<label for="email"><?php echo $form3; ?> <span class="texto_rojo">*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com" name="mail" required>
                    </div>
            	</div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputName2"><?php echo $form4; ?></label>
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="" name="fono">
                	</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputName2"><?php echo $form5; ?> <span class="texto_rojo">*</span></label>
						<select class="selectpicker show-menu-arrow" name="motivo" required> 
							<option selected="selected" value=""> seleccione</option>
							<option value="Consulta">Consulta</option>
							<option value="Sugerencia">Sugerencia</option>
							<option value="Felicitaciones">Felicitaciones</option>
							<option value="Reclamo">Reclamo</option>
						</select>
					</div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputName2"><?php echo $form6; ?> <span class="texto_rojo">*</span></label>
                        <select class="selectpicker show-menu-arrow" name="tipo" required> 
                            <option selected="selected" value="" > seleccione</option>
                            <option value="1">Servicio al Cliente</option>
                            <option value="2" >Estacionamientos</option>
                            <option value="3" >Actividades del mall</option>
                            <option value="4" >Arriendo espacios y locales</option>
                            <option value="5" >Arriendo Plazas, Activaciones y Medios</option>
                            <option value="6" >Arriendo Módulos</option>
                            <option value="7" >Sitio web y redes sociales</option>
                        </select>
                    </div>
                </div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="mensaje"><?php echo $form7; ?>  <span class="texto_rojo">*</span></label>
						<textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
					</div>
                </div>
				<div class="col-md-8">
					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox" value="1" name="optIn"> <?php echo $form8; ?>
							</label>
						</div>
					</div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    	<button type="submit" class="btn btn-default btn_rojo pull-right" id="btnEnviar"><?php echo $form9; ?></button>
                    </div>
                </div> 
			</form>
		</div>
	</div>