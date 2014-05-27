<?php require_once "class/class.php";

/**
* Evita entrar al area de acceso si existe una session
*/
if($_SESSION && !empty($_SESSION) && $_SESSION["usuario"]){

	header("Location: admin.php");	
}


/**
* Inicia Sesion
*/
if (array_key_exists("entrar",$_POST)) {
	
	$instancia->accesoUsuario($_POST["username"],md5($_POST["pass"]));
}


/**
* Resetear Clave
*/
if (array_key_exists("resetearClave",$_POST)) {
	
	$instancia->hasSendResetearClave($_POST["email"]);
}

/**
* Envia Nueva Clave
*/
if($_GET["emailclavegenerada"]){
	$instancia->updateUserResetPass($_GET["emailclavegenerada"]);
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
    <title>Acceso de Administrador My Panel</title>
    <?php include("head.php"); ?>
</head>

<body>
<?php include "body.php"; ?>

<header>
<div class="head-bg">
    <div class="container">
    	<div class="row clearfix">
        	<div class="col-md-12">
                	<div style="text-align:center !important; width:100%; max-width:230px; margin:0 auto;">
                		<img src="images/logo.png" class="img-responsive" width="230" height="61" />
                    </div>
            </div>
        </div>
    </div><!--End Container-->
</div>
</header>



<div class="container mgTop30">
	<div class="row clearfix">
    	<div class="col-md-12">
        
        	<h1 style="color:#0A9CCC; font-size:16px; font-weight:bold !important; text-align:center; width:100%; margin:0 0 20px 0;">Sistema de administración</h1>
            
            <p style="font-size:13px; margin:0 0 20px 0; padding:0; display:block; width:100%; text-align:center;">
              100% Seguro <img width="20" height="20" alt="Sistema de seguridad" src="images/secure.png">
            </p>
        	
        	<div class="content mgTop20 mgBottom30 pd20" style="width:100%; max-width:400px; margin:0 auto !important;">
                
                <!--Left-->
                <div class="col-md-12 text-left">
                
                <div id="mensajes" style="display:none"></div>
                	
                    <form name="acceso" id="acceso" method="post" action="">
                    <fieldset id="datosForm">
                            <legend>Acceso de Usuario</legend>
                           
                           
                            <div class='row'>
                            
                                <div class='col-sm-12'>    
                                    <div class='form-group'>
                                        <label for="nombre">Usuario:</label>
                                        <input class="{required:true,minlength:4,maxlength:25} form-control" id="username" name="username" type="text" placeholder="Coloque su nombre de usuario" />
                                    </div>
                                </div>
                                <div class='col-sm-12'>
                                    <div class='form-group'>
                                        <label for="clave">Contrase&ntilde;a:</label>
                                        <input class="{required:true,minlength:1,maxlength:50} form-control" id="pass" name="pass" type="password" placeholder="Coloque su clave secreta" />
                                    </div>
                                </div>

    
                            </div><!--End Row-->
                            
                            

                            
                            <div class='row'>
                                <div class='col-sm-12 text-left'>
                                	<input type="submit" name="entrar" class="btn btn-primary" id="entrar" value="Iniciar Sesi&oacute;n" />
                                    <input type="button" name="resetear" id="resetear" class="btn btn-danger" value="Recuperar Contrase&ntilde;a! " />
                                </div>
                            </div>
                            
                            
                        </fieldset>
                        <!--END TUS DATOS-->
                    </form>
                    
                    
                    
                    
                    
                    
                    
                    <form name="resetearForm" id="resetearForm" class="hide" method="post" action="">
                    <fieldset id="datosForm">
                            <legend>Recuperar contrase&ntilde;a</legend>
                           
                           
                            <div class='row'>
                            
                                <div class='col-sm-12'>    
                                    <div class='form-group'>
                                        <label for="nombre">Email:</label>
                                        <input class="{required:true,minlength:4,maxlength:25} form-control" id="email" name="email" type="text" placeholder="Coloque email o correo" />
                                    </div>
                                </div>

    
                            </div><!--End Row-->
                            
                            

                            
                            <div class='row'>
                                <div class='col-sm-12 text-left'>
                                	<input type="submit" name="resetearClave" id="resetearClave" class="btn btn-success" value="Enviar Clave" />
                                    <input type="button" name="cancelar" id="cancelar" class="btn btn-primary" value="Cancelar" />
                                </div>
                            </div>
                            
                            
                        </fieldset>
                        <!--END TUS DATOS-->
                    </form>
                    
                    
                    
                    
                    

                </div>
                <!--End Left-->
                
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
$(function () {
	
function getID(url) {
	
	var Marcador = url.lastIndexOf("=");
	if(Marcador>0 && url.length-1!=Marcador) {
		
		return url.substring(Marcador+1);
	}
}

	//Obtiene el ID
if (getID(window.location.href)) {
	 
	 //Si el usuario no es valido
	 if(getID(window.location.href) == 0){
		setTimeout(function () {
			$("#mensajes").slideUp("slow");
		}, 6000);
		$("#mensajes").html('<p class="alert-danger">El usuario no existe en nuestra base de datos.</p>')
		$("#mensajes").slideDown(600);
		$("#mensajes").css("display", "block");	 
	}
	
	//Si la clave no es valida
	if(getID(window.location.href) == 1){
		setTimeout(function () {
			$("#mensajes").slideUp("slow");
		}, 6000);
		$("#mensajes").html('<p class="alert-danger">La contraseña ingresada es incorrecta.</p>')
		$("#mensajes").slideDown(600);
		$("#mensajes").css("display", "block");	 
	}
	
	
	//Si la clave no es valida
	if(getID(window.location.href) == 3){
		setTimeout(function () {
			$("#mensajes").slideUp("slow");
		}, 6000);
		$("#mensajes").html('<p class="alert-danger">La información que ingresó no es correcta.</p>')
		$("#mensajes").slideDown(600);
		$("#mensajes").css("display", "block");	 
	}
	
	
	//Si el email no existe para resetear la contraseña
	if(getID(window.location.href) == 4){
		setTimeout(function () {
			$("#mensajes").slideUp("slow");
		}, 6000);
		$("#mensajes").html('<p class="alert-danger">El email no existe en nuestra base de datos.</p>')
		$("#mensajes").slideDown(600);
		$("#mensajes").css("display", "block");	 
	}
	
	
	
	//Mensaje de email enviado para resetear contraseñaSolicitud 
	if(getID(window.location.href) == 5){
		setTimeout(function () {
			$("#mensajes").slideUp("slow");
		}, 6000);
		$("#mensajes").html('<p class="alert-success">Revise su correo, le hemos enviado todos los pasos a seguir para resetear su contraseña.</p>')
		$("#mensajes").slideDown(600);
		$("#mensajes").css("display", "block");	 
	}
	
	
	// Mensaje cuando el usaurio cambia su contraseña
	if(getID(window.location.href) == 6){
		setTimeout(function () {
			$("#mensajes").slideUp("slow");
		}, 10000);
		$("#mensajes").html('<p class="alert-success">Su clave se reseteo correctamente! Revise su correo, le hemos enviado su nueva clave, una vez que haya ingresado la puede cambiar.</p>')
		$("#mensajes").slideDown(600);
		$("#mensajes").css("display", "block");	 
	}

}
	
	
$(function(){
	
	$('#resetearForm').valid();

	//Recuperar clave
	$("#resetear").click(function(){
		$("#acceso").fadeOut("fast");
		$("#resetearForm").fadeIn("fast",function(){
			$("#resetearForm").removeClass("hide")	
		});
	});
	
	
	//Recuperar clave
	$("#cancelar").click(function(){
		$("#resetearForm").fadeOut("fast",function(){
			$("#acceso").fadeIn("fast",function(){
				$("#acceso").removeClass("hide")	
			});	
		});
	});
	
});
	
	
	
	
//Validar campos
$(function(){

	$('#acceso').validate({
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
	
	

});
</script>



</body>
</html>
