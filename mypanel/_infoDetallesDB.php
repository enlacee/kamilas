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
    <title>Ver Detalles</title>
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
                    	<table class="table table-hover table-striped table-condensed table-responsive table-bordered" style="background-image:none !important;">
                            <tbody>
                            	<tr>
                                	<td width="15%" class="text-right tableBGTD fontBold">Nombre:</td>
                                    <td width="85%" class="text-left">&nbsp;</td>
                                </tr>
                                <tr>
                                	<td width="15%" class="text-right tableBGTD fontBold">&nbsp;</td>
                                    <td width="85%" class="text-left">
                                    	<a href="editar.php?id=<?php  ?>" class="btn btn-danger">Editar</a>&nbsp;
                                    	<a href="javascript:voice(0);" class="btn btn-primary">P&aacute;gina Anterior</a>
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

</body>
</html>
<?php 
} else{
	header("Location: index.php");
}
?>