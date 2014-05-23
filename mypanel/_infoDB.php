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
    <title>My Panel</title>
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

                    	<table class="table table-hover table-striped table-condensed table-responsive table-bordered">
                            <thead>    
                                <tr>
                                    <th width="3%" class="text-center">ID</th>
                                    <th width="43%">Titulo</th>
                                    <th width="46%">Comentario</th>
                                    <th width="8%" class="text-center">Acciones</th>
                                </tr>
                            </thead>    
                            
                            <tbody>
                            	<tr>
                                	<td class="text-center">1</td>
                                    <td>Contenido</td>
                                    <td>Contenido</td>
                                    <td class="text-center">
                                    <a href="">
                                    	<img src="images/actualizar.png" width="20" height="20" />
                                    </a>
                                    &nbsp;
                                    <a href="">
                                    	<img src="images/borrar.png" width="20" height="20" />
                                    </a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
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

</body>
</html>
<?php 
} else{
	header("Location: index.php");
}
?>