<?php require_once "class/class.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include("headTop.php"); ?>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Galer&iacute;a de Fotos</title>
    <link rel="stylesheet" type="text/css" href="galeriaGooglePlus/css/plusgallery.css">
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
                <div class="col-md-12">
                
                <h1>Galeria de fotos</h1>
                
                <div id="plusgallery" data-userid="112799606020068501993" data-type="google"></div>
                    
                    
                    
                    
                </div> 
                <!--End Left-->
                

                
                 
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

<script src="galeriaGooglePlus/js/jquery-1.7.2.min.js"></script>
<script src="galeriaGooglePlus/js/plusgallery.js"></script>
<script type="text/javascript">
	$('#plusgallery').plusGallery();
</script>
</body>
</html>