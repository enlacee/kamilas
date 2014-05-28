<?php
require_once "class/class.php";

if ($_SESSION && !empty($_SESSION) && $_SESSION["usuario"]) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Bienvenido al panel de adminsitraci&oacute;n</title>
            <?php include("head.php"); ?>
        </head>

        <body>
            <?php include "body.php"; ?>
            <header>
                <?php include "header.php"; ?>
            </header>
            
            <div class="menuBG">
                <?php include "menu.php"; ?>
            </div><!--End Menu-->
            
            <?php if (isset($_SESSION['message'])) : ?>    
            <div class="container">
                <div class="alert alert-warning fade in">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
                </div>
            </div><!-- message box -->    
            <?php endif; ?>            
            
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="content mgTop20 mgBottom30 pd10">                            
                            <div class="col-md-8">
                                <h1>Contenido</h1>
                                <div class="borderEfecto">
                                    <p>Muy Pronto estaremos agregando funcionalidades a esta secci&oacute;n.</p>
                                </div>
                            </div><!--End Left-->                            
                            <div class="colRight">
                                <?php include "right.php"; ?>
                            </div><!--End Right-->
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
}

header("Location: index.php");
?>
