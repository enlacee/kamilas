<?php require_once "class/class.php"; 

if (isset($_SESSION) && !empty($_SESSION) && $_SESSION["usuario"]) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Eliminar Registro</title>
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
                	<h1>Titulo</h1>
						
                        <form name="form" id="form" method="post" action="">
                        
                        	<p>Contenido</p>
                        	
                        	<div class="bg-danger pd10">
                                <p class="fontBold mg0">¿Esta Seguro que desea eliminar este registro? Esta opci&oacute;n no se puede deshacer!</p>
                                
                            </div>
                            
                        
                        	<input type="submit" name="aceptar" class="btn btn-danger" id="aceptar" value="Aceptar" />
    						<input type="button" name="cancelar" class="btn btn-primary" id="cancelar" value="Cancelar" onclick="javascript:history.back();" />
                        </form>
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

</body>
</html>
<?php 
} else{
	header("Location: index.php");
}
?>