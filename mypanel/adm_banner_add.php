<?php
require_once "class/class.php";

// extra
function getPathImage($idPosition)
{
    // Position (central, top, footer, etc)
    $position= array(
        array ('id' => 1, 'name' => 'central', 'directory' => 'images/bannerCentral/'),
        array ('id' => 2, 'name' => 'otro1', 'directory' => 'images/bannerOtro/')              
    );
    
    $path = realpath(dirname(__FILE__));    
    $path =  str_replace('mypanel', '', $path);
    
    if ($idPosition != '' && $idPosition > 0) {
        foreach ($position as $array) {
            if ( $idPosition == $array['id']) {
                $path = $path . $array['directory'];
                break;
            }
        }        
    }
    return $path;
}


// Get nombre de de file in session.
function imageNameSession()
{
    $rs = '';
    if (isset($_SESSION['banners']) && count($_POST) == 0) { unset($_SESSION['banners']); }    
    if (isset($_SESSION['banners']['img_tmp'])) {
        $array = $_SESSION['banners']['img_tmp'];
        //01
        $idPosition = 1;
        $targetFile = realpath(getPathImage($idPosition)) .'/'. $array['name'];
        // 01 thumbnail
        $thum = new MyThumbnail(1040, 392);
        $updir = str_replace($array['name'], '', $array['path']);
        $file = $array['name'];
        $saveDir = str_replace($array['name'], '', $targetFile);
        $thum->makeThumbnail($updir, $file, $saveDir);

        //if (!copy($array['path'], $targetFile)) { echo "failed to copy image"; exit; }        
        //02        
       $rs = $array['name'];
       
       // 03 limpiar imagenes en session
        if (isset($_SESSION['banners'])) { unset($_SESSION['banners']); } 
    }
    return $rs;
}
// extra

if (isset($_SESSION) && !empty($_SESSION) && $_SESSION["usuario"]) {
    
    $data['image'] = imageNameSession();
    if (count($_POST) > 0 ) {
        $data['title'] = $_POST['title'];        
        $data['created_at'] = date("Y-m-d h:i:s");
        $data['position'] = 1;
        $instancia->addBanner($data);
        
        $_SESSION['message'] = "Se registro correctamente.";
        header("Location: adm_banner.php");
    }
    
?><!DOCTYPE html>
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
            
            <div class="menuBG">
                <?php include "menu.php"; ?>
            </div><!--End Menu-->       

            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="content mgTop20 mgBottom30 pd10">
                            <div class="col-md-12">
                                <h1>Banner</h1>
                                <form name="form" id="form" method="post" action="">
                                    <table class="table table-hover table-striped table-condensed table-responsive table-bordered" style="background-image:none !important;">
                                        <tbody>
                                            <tr>
                                                <td width="15%" class="text-right tableBGTD fontBold">Titulo:</td>
                                                <td width="85%" class="text-left">
                                                    <span class="pdRight20 center-block">
                                                        <input type="text" name="title" id="title" class="form-control" placeholder="Coloque el titulo">
                                                    </span>
                                                </td>
                                            </tr>
                                           <tr>
                                                <td width="15%" class="text-right tableBGTD fontBold">Image:</td>
                                                <td width="85%" class="text-left">
                                                    <span class="pdRight20 center-block">
                                                        <input type="file" id="file" name="file" style="display: none;">
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
            
            <!-- add pekeUpload -->
            <link rel="stylesheet" type="text/css" href="css/pekeUpload/custom.css">
            <script type="text/javascript" src="js/pekeUpload/pekeUpload.min.js"></script>            

            <script type="text/javascript">
                $(function() {                    
                    // 01 validacion                    
                    $('#form').validate({
                        rules: {
                            title: {required : true, minlength: 3, maxlength: 50}
                          },

                        //Detecta cuando se realiza el submit o se presiona el boton
                        submitHandler: function(form){
                            form.submit();
                        },

                        //Detecta los error y abre los span con los posibles errores
                        errorPlacement: function(error, element){
                        error.insertAfter(element);
                        }
                    });                    
                    
                    // 03 file
                    $("#file").pekeUpload({
                        btnText : "Browse files...",
                        url : "pekeUpload.php?key=2",                               
                        //theme : 'bootstrap',
                        multi : false,
                        allowedExtensions : "jpeg|jpg|png|gif",
                        onFileError: function(file,error){alert("error on file: "+file.name+" error: "+error+"")},
                        onFileSuccess : function (file, data) {}
                    });                     
                    
                });
            </script><!--Editor-->

        </body>
    </html>
    <?php
} else {
    header("Location: index.php");
}
