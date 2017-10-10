<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$form1 = "Name";
	$form2 = "ID Nº";
	$form3 = "Email";
	$form4 = "Telephone";
	$form5 = "nationality";
	$form6 = "data de visita";
	$form7 = "Message";
	$form8 = "I am interested in receiving further information about activities, contests and promotions organized and administered by the website Parque Arauco.";
	$form9 = "Submit";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$form1 = "Nome";
	$form2 = "Identidade";
	$form3 = "Email";
	$form4 = "Telefono";
	$form5 = "nacionalidade";
	$form6 = "date of visit";
	$form7 = "Mensagem";
	$form8 = "Gostaria de receber informações das atividades, dos curso e das programações organizadas e administradas pelo site Parque Arauco.";
	$form9 = "Enviar";
}else{ 
	$form1 = "Nombre completo";
	$form2 = "RUT";
	$form3 = "Email";
	$form4 = "Teléfono";
	$form5 = "nacionalidad";
	$form6 = "fecha de visita";
	$form7 = "MENSAJE";
	$form8 = "Me interesa recibir información de actividades, concursos y promociones organizadas y administradas por el sitio web Parque Arauco";
	$form9 = "enviar";
} ?>  
    <div class="container">
             <div class="row">
                 <form id="form_tarjeta_descuento" class="" >
                      <div class="col-md-4">
                          <div class="form-group">
                          <label for="nombre"><?php echo $form1; ?> <span class="texto_rojo">*</span></label>
                          <input type="text" class="form-control" id="nombre" placeholder="" name="nom" required>
                        </div>

                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                               <label for="nacionalidad"><?php echo $form5; ?> <span class="texto_rojo">*</span></label>
                                <select name="nacionalidad" required class="selectpicker show-menu-arrow "> 
                                   <option selected="selected" value=""> seleccione</option>
                                   <?php
							 		$paises = $db->rawQuery("select * from pak_paises");
									if($paises){
										foreach ($paises as $t) { ?>
                                   <option value="<?php echo $t['nombre']; ?>"><?php echo $t['nombre']; ?></option>
									<?php	}
									}    
									?>                              

                             </select>
                        </div>
                      </div>

                         <div class="col-md-4">
                          <div class="form-group">
                          <label for="rut"><?php echo $form2; ?> <span class="texto_rojo">*</span></label>
                          <input type="text" class="form-control" id="rut" placeholder="pasaporte / rut / cédula / DNI" name="rut" required>
                        </div>

                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email"><?php echo $form4; ?> <span class="texto_rojo">*</span></label>
                          <input type="text" class="form-control" id="email" placeholder="" name="fono" required>
                        </div>
                      </div>
                       <div class="col-md-4">
                          <div class="form-group">
                          <label for="fecha"><?php echo $form6; ?> <span class="texto_rojo">*</span></label>
                          <input type="text" class="form-control datepicker" id="fecha" placeholder="" name="fecha" required>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email"><?php echo $form3; ?> <span class="texto_rojo">*</span></label>
                          <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com" name="mail" required>
                        </div>
                      </div>

                     <!--<div class="col-md-8">
                          <div class="form-group">
                          <label for="exampleInputName2">hospedaje</label>
                          <input type="text" class="form-control" id="exampleInputName2" placeholder="INGRESE HOTEL O DIRECCIÓN DONDE HOSPEDA">
                        </div>
                      </div> -->
                    
                       <div class="col-md-12">
                          <div class="form-group">
                          <label for="mensaje"><?php echo $form7; ?> <span class="texto_rojo">*</span></label>
                          <textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
                        </div>
                      </div>
                  
                        <div class="col-sm-8">
                           <div class="form-group">
                            <div class="checkbox">
                                <label class="subscribe">
                                  <input type="checkbox" name="optIn" value="1"><?php echo $form8; ?>
                                
                                </label>
                              </div>
                              </div>
                        </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                             <button type="submit" class="btn btn-default btn_rojo" id="btnEnviar"><?php echo $form9; ?></button>
                          </div>
                        </div>
                    
                 
                      </form>
                 </div>
               
              </div>