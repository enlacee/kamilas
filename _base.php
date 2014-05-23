
<form name="form" id="form" method="post" action="">
    <fieldset id="datosForm">
    
    <legend>Formulario de Contacto</legend>
        
        <p class="font12">Complete su formulario para Reservar una fecha para tocar en tu evento o Solicitar una cotizaci&oacute;n</p>
        
        <div class='row clearfix'>
        
            <div class='col-sm-6'>    
                <div class='form-group'>
                    <label for="nombres">Nombres y Apellidos:</label>
                    <input class="form-control" id="nombres" name="nombres" type="text" placeholder="Coloque sus nombres" />
                </div>
            </div>
            
            
            <div class='col-sm-6'>    
                <div class='form-group'>
                    <label for="email">Email/Correo:</label>
                    <input class="form-control" id="email" name="email" type="text" placeholder="Coloque su email o correo" />
                </div>
            </div>
            
            
            <div class='col-sm-6'>    
                <div class='form-group'>
                    <label for="telefono">Tel&eacute;fono de contacto:</label>
                    <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Coloque su número de teléfono" />
                </div>
            </div>
            
            <div class='col-sm-6'>    
                <div class='form-group'>
                    <label for="telefono">Tel&eacute;fono Celular:</label>
                    <input class="form-control" id="celular" name="celular" type="text" placeholder="Coloque su número de celular" />
                </div>
            </div>
            
            
            
            <div class='col-sm-12'>    
              <div class='form-group'>
                <label for="genero">Genero:</label>
                
                    <select name="genero" id="genero" class="{required:true} form-control">
                      <option value="">Seleccione</option>
                      <option value="Masculino">Masculino</option>
                      <option value="Femenino">Femenino</option>
                    </select>
                </div>
            </div>
            
            
            
            
            
            <div class='col-sm-12'>    
                <div class='form-group'>
                    <label for="fecha">Fecha del evento:</label>
                    <input class="form-control" id="fecha" name="fecha" type="text" placeholder="Coloque la fecha" />
                </div>
            </div>


            
            

           
           <div class='col-sm-12'>    
              <div class='form-group'>
                    <label for="ciudad">Ciudad del evento</label>
                    <input class="form-control" id="ciudad" name="ciudad" type="text" placeholder="Coloque su ciudad" />
              </div>
          </div>



            <div class='col-sm-12'>
                <div class='form-group'>
                  <label for="direccion">Direcci&oacute;n y detalles del evento:</label>
                    <textarea name="direccion" rows="3" class="form-control" id="direccion" placeholder="Coloque la direción del evento"></textarea>
                </div>
            </div>
            

             
            
             <div class='col-sm-12'>    
                <input name="enviar" class="boton btn btn-primary" id="enviar"  type="submit" value="Enviar">
                <input name="volver" class="boton btn btn-default" id="volver"  type="button" value="Volver" onClick="javascript:history.back()">
            </div>  
            
            
        </div><!--End Row-->

        
    </fieldset>
</form>  


<script type="text/javascript">
//Validar campos
$(function(){

	$('#form').validate({
		//Detecta cuando se realiza el submit o se presiona el boton
		submitHandler: function(){
			
			$("#entrar").attr("type","button");
			$( "#acceso" ).submit();
			return false;
		},
		
		//Detecta los error y abre los span con los posibles errores
		errorPlacement: function(error, element){
		error.insertAfter(element);
		}
	});
	
});

</script>