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
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="content mgTop20 mgBottom30 pd10">                            
                            <div class="col-md-12">
                                <h1>Noticias : <a href="adm_newsadd.php" class="btn btn-primary">Add</a></h1>

                                <table class="table table-hover table-striped table-condensed table-responsive table-bordered">
                                    <thead>    
                                        <tr>
                                            <th width="3%" class="text-center">ID</th>
                                            <th width="30%">Title</th>
                                            <th width="47%">Description</th>
                                            <th width="10%">Image</th>
                                            <th width="10%" class="text-center">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>                            	
                                        <tr>
                                            <td class="text-center">9</td>
                                            <td>baner 01 cl</td>
                                            <td>baner 01 </td>
                                            <td><img src="http://localhost/sites/colombia/mediastart/public/images/banner/1400786534-100x150.png" class="img-responsive" width="100" height="150"></td>
                                            <td class="text-center">
                                                <a href="http://localhost/sites/colombia/mediastart/admin_banner/edit/9"><img src="http://localhost/sites/colombia/mediastart/public/images/actualizar.png" width="20" height="20"></a>
                                                &nbsp;
                                                <a href="http://localhost/sites/colombia/mediastart/admin_banner/del/9"><img src="http://localhost/sites/colombia/mediastart/public/images/borrar.png" width="20" height="20"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">8</td>
                                            <td>ñaño</td>
                                            <td>ñaño</td>
                                            <td><img src="http://localhost/sites/colombia/mediastart/public/images/banner/image-100x150.jpg" class="img-responsive" width="100" height="150"></td>
                                            <td class="text-center">
                                                <a href="http://localhost/sites/colombia/mediastart/admin_banner/edit/8"><img src="http://localhost/sites/colombia/mediastart/public/images/actualizar.png" width="20" height="20"></a>
                                                &nbsp;
                                                <a href="http://localhost/sites/colombia/mediastart/admin_banner/del/8"><img src="http://localhost/sites/colombia/mediastart/public/images/borrar.png" width="20" height="20"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                                <div class="text-center pdTop10" id="paginador">                                    
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#">« Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="next"><a href="#">Next »</a></li>                                        
                                    </ul>
                                </div>


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
}

header("Location: index.php");
?>
