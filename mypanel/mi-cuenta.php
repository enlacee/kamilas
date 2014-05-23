<?php require_once "class/class.php"; 

if (isset($_SESSION) && !empty($_SESSION) && $_SESSION["usuario"]) {
	
$registro = $instancia->getInfoEditarUser($_SESSION["usuario"]);

if(array_key_exists("guardar",$_POST)){
	
	$instancia->setInfoEditarUser($_SESSION["usuario"],$_POST["nombre"],$_POST["username"],md5($_POST["clave"]),$_POST["email"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Editar Detalles</title>
    <?php include("head.php"); ?>
</head>

<body>
<?php include "body.php"; ?>

<header>
<?php include "header.php"; ?>
</header>







<!--Menu-->
<div class="menuBG">
<?php include "menu.php"; ?>
</div>
<!--End Menu-->









<div class="container">
	<div class="row clearfix">
    	<div class="col-md-12">
        	<div class="content mgTop20 mgBottom30 pd10">
            	
                

                <div class="col-md-12">
                	<h1>Editar Informaci&oacute;n de mi cuenta</h1>
						
                        <form name="form" id="form" method="post" action="">
                    	<table class="table table-hover table-striped table-condensed table-responsive table-bordered" style="background-image:none !important;">
                            <tbody>
                            
                            
                            
                            	<tr>
                                	<td width="15%" class="text-right tableBGTD fontBold">Nombre:</td>
                                    <td width="85%" class="text-left">
                                    	<span class="pdRight20 center-block">
                                        	<input type="text" name="nombre" id="nombre" class="{required:true,minlength:4,maxlength:25} form-control" value="<?php echo $registro[0]["nombre"] ?>" placeholder="Coloque su nombre">
                                        </span>
                                    </td>
                                </tr>
                                
                                <tr>
                                	<td width="15%" class="text-right tableBGTD fontBold">Usuario:</td>
                                    <td width="85%" class="text-left">
                                    	<span class="pdRight20 center-block">
                                        	<input type="text" name="username" id="username" class="{required:true,minlength:4,maxlength:25} form-control" value="<?php echo $registro[0]["username"] ?>" placeholder="Coloque su nombre de usuario">
                                        </span>
                                    </td>
                                </tr>
                                
                                
                                <tr id="editarClaveTR">
                                	<td width="15%" class="text-right tableBGTD fontBold">Editar Contrase&ntilde;a:</td>
                                    <td width="85%" class="text-left">
                                    	¿Quieres editar tu contrase&ntilde;a? <a href="javascript:voice(0)" class="btn btn-danger btn-xs" id="editarClaveBtn">Clic Aqui</a>
                                    </td>
                                </tr>
                                
                                <tr id="claveUno" class="hide">
                                	<td width="15%" class="text-right tableBGTD fontBold">Contrase&ntilde;a:</td>
                                    <td width="85%" class="text-left">
                                    	<span class="pdRight20 center-block">
                                        	<input type="password" name="clave" id="clave" class="{required:true,minlength:4,maxlength:25} form-control" placeholder="Coloque su contraseña">
                                        </span>
                                    </td>
                                </tr>
                                
                                
                                <tr id="claveDos" class="hide">
                                	<td width="15%" class="text-right tableBGTD fontBold">Repetir&nbsp;Contrase&ntilde;a:</td>
                                    <td width="85%" class="text-left">
                                    	<span class="pdRight20 center-block">
                                        	<input type="password" name="claverepetir" id="claverepetir" class="{required:true,minlength:4,maxlength:25,equalTo:'#clave'} form-control" placeholder="Coloque nuevamente su contraseña">
                                        </span>
                                    </td>
                                </tr>
                                
                                
                                
                                <tr>
                                	<td width="15%" class="text-right tableBGTD fontBold">Su email:</td>
                                    <td width="85%" class="text-left">
                                    	<span class="pdRight20 center-block">
                                        	<input type="text" name="email" id="email" class="{required:true,minlength:4,maxlength:25} form-control" value="<?php echo $registro[0]["email"] ?>" placeholder="Coloque su email">
                                        </span>
                                    </td>
                                </tr>
                                
                                
                                <tr>
                                	<td width="15%" class="text-right tableBGTD fontBold">&nbsp;</td>
                                    <td width="85%" class="text-left">
                                    	<input type="submit" name="guardar" id="guardar" class="btn btn-success" value="Guardar Cambios" />&nbsp;
                                        <input type="button" name="cancelar" id="cancelar" class="btn btn-primary" onClick="javascript:history.back()" value="P&aacute;gina Anterior" />
                                    </td>
                                </tr>
                            </tbody>  
                        </table>
                        </form>
                </div>


				<div class="col-md-12">
                	<a href="javascript:voice(0);" class="btn btn-primary enlaceBlanco" onClick="javascript:history.back();">P&aacute;gina anterior</a>
                </div>
                
                
 
            </div>
        </div>
    </div>
</div>

    
    
    
    
    
    
    
    
    
<footer class="footerBG">
<?php include "footer.php"; ?>
</footer>


<?php include "copy.php"; ?>
    
<?php include "footerLib.php"; ?>

<script type="text/javascript">
	
//Validar campos
$(function(){

	$('#form').validate({
		//Detecta cuando se realiza el submit o se presiona el boton
		submitHandler: function(){
			
			$("#guardar").attr("type","button");
			$( "#form" ).submit();
			return false;
		},
		
		//Detecta los error y abre los span con los posibles errores
		errorPlacement: function(error, element){
		error.insertAfter(element);
		}
	});
	
	
	
	/*Editar contraseña*/
	$("#clave").val("");
	$("#claverepetir").val("");
	
	$("#editarClaveBtn").click(function(){
		$("#editarClaveTR").fadeOut("fast",function(){
		$("#claveUno").slideUp("slow");
		$("#claveUno").removeClass("hide");
		$("#claveDos").slideUp("slow");	
		$("#claveDos").removeClass("hide");	
		$("#clave").val("");
		$("#claverepetir").val("");
		});
	});	

	
	
	
});
	
</script>
<!--Editor-->






</body>
</html>
<?php 
} else{
	header("Location: index.php");
}
?>