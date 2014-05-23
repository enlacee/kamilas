<?php require_once "class/class.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("headTop.php"); ?>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Formulario de Contacto</title>
	<?php include("headBottom.php"); ?>
</head>


<body>
<?php include "body.php"; ?>
<div class="container">

    
    <!--Header-->
    <header>
    	<?php include "header.php"; ?>
    </header>
    <!--End Header-->
        
    
    
    <!--Menu-->
    <nav>
        <?php include "menu.php"; ?>
    </nav>
    <!--End Menu-->
    

    
    <!--Eslider-->
    <div class="row clearfix">
        <?php //include "eslider.php"; ?>
    </div> 
    <!--End Eslider--> 


 
</div><!--End Container-->
    
    
  


<!--ContainerBody-->
<div class="containerBody mgTop10 pdTop10 pdBottom10">
<!--Container-->
<div class="container">


<!--BodyTop-->
<?php //include "bodyTop.php"; ?>
<!--End BodyTop-->
    



<!--Section-->
<section>
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="bodyBGyBorder mgTop10 mgBottom10">
        
                <!--Left-->
                <div class="col-md-8">
                
                	<!--Box-->
                    <div class="boxLeft">
                        <h1>Formulario de Contacto</h1>
                       
                            <form name="form" id="form" method="post" action="">
                                <fieldset id="datosForm">
 
                                    <p class="font12">Complete su formulario con mucho cuidado para evitar contratiempos.</p>
                                    
                                    <div class='row clearfix'>
                                    
                                        <div class='col-sm-6'>    
                                            <div class='form-group'>
                                                <label for="nombres">Nombres y Apellidos (*)</label>
                                                <input class="{required:true} form-control" id="nombres" name="nombres" type="text" placeholder="Coloque sus nombres" />
                                            </div>
                                        </div>
                                        
                                        
                                        <div class='col-sm-6'>    
                                            <div class='form-group'>
                                                <label for="email">Email/Correo (*)</label>
                                                <input class="{required:true} form-control" id="email" name="email" type="text" placeholder="Coloque su email o correo" />
                                            </div>
                                        </div>
                                        
                                        
                                        <div class='col-sm-6'>    
                                            <div class='form-group'>
                                                <label for="telefono">Tel&eacute;fono de contacto (*)</label>
                                                <input class="{required:true} form-control" id="telefono" name="telefono" type="text" placeholder="Coloque su número de teléfono" />
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
                                                <label for="asunto">Asunto (*)</label>
                                                <input class="{required:true} form-control" id="asunto" name="asunto" type="text" placeholder="Motivo del contacto" />
                                            </div>
                                        </div>
                            
                            
                                        
      
                            
                            
                                        <div class='col-sm-12'>
                                            <div class='form-group'>
                                              <label for="direccion">Mensaje / Comentario (*)</label>
                                                <textarea name="comentario" rows="3" class="{required:true} form-control" id="comentario" placeholder="Coloque su mensaje"></textarea>
                                            </div>
                                        </div>
                                        
                            
                                         
                                        
                                         <div class='col-sm-12'>    
                                            <input name="enviar" class="boton btn btn-primary" id="enviar"  type="submit" value="Enviar">
                                            <input name="volver" class="boton btn btn-default" id="volver"  type="button" value="Volver" onClick="javascript:history.back()">
                                        </div>  
                                        
                                        
                                    </div><!--End Row-->
                            
                                    
                                </fieldset>
                            </form>  
                    </div>
                    <!--End Box-->
                    
                    
                    
                    
                </div> 
                <!--End Left-->
                
                
                
                
                <!--Right-->
                <div class="col-md-4">
					 <?php include "right.php"; ?>
                </div> 
                <!--End Right-->
                
                 
             </div>
        </div>
    </div>   
</section><!--End Section-->

</div><!--End Container-->

    
   
   
<!--BodyTop-->
<?php include "bodyBottom.php"; ?>
<!--End BodyTop-->
    


</div><!--End ContainerBody-->



    
    

<?php include "copy.php"; ?>
    

<!--BodyBGBottom-->
<div class="bodyButtomBG mg0 pd0"></div>
<!--BodyBGBottom-->


<?php include "footerLib.php"; ?>

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
</body>
</html>