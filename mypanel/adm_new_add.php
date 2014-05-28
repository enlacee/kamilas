<?php
require_once "class/class.php";

// extra
function getPathImage()
{
    $path = realpath(dirname(__FILE__));    
    $path =  str_replace('mypanel', '', $path);
    return $path;
}

// Get nombre de de file in session.
function imageNameSession()
{
    $rs = '';
    if (isset($_SESSION['productos']) && count($_POST) == 0) { unset($_SESSION['productos']); }    
    if (isset($_SESSION['productos']['img_tmp'])) {
        $array = $_SESSION['productos']['img_tmp'];
        //01        
        $targetFile = realpath(getPathImage() ."images/noticias/") .'/'. $array['name'];

        if (!copy($array['path'], $targetFile)) { echo "failed to copy image"; exit; }        
        //02        
       $rs = $array['name'];
       
       // 03 limpiar imagenes en session
        if (isset($_SESSION['productos'])) { unset($_SESSION['productos']); } 
    }
    return $rs;
}
// extra

if (isset($_SESSION) && !empty($_SESSION) && $_SESSION["usuario"]) {
    
    $data['image'] = imageNameSession();
    if (count($_POST) > 0 ) {
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['created_at'] = date("Y-m-d h:i:s");
        $data['status'] = 1;
        $instancia->addNew($data);
        
        $_SESSION['message'] = "Se registro correctamente.";
        header("Location: adm_new.php");
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
                                <h1>Noticia</h1>
                                <form name="form" id="form" method="post" action="">
                                    <table class="table table-hover table-striped table-condensed table-responsive table-bordered" style="background-image:none !important;">
                                        <tbody>
                                            <tr>
                                                <td width="15%" class="text-right tableBGTD fontBold">Titulo:</td>
                                                <td width="85%" class="text-left">
                                                    <span class="pdRight20 center-block">
                                                        <input type="text" name="title" id="nombre" class="{required:true,minlength:4,maxlength:25} form-control" placeholder="Coloque el titulo">
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
                                                <td class="text-right tableBGTD fontBold">Descripci&oacute;n:</td>
                                                <td class="text-left"><label for="editor"></label>
                                                    <textarea class="{required:true,minlength:4,maxlength:25}" name="content" id="editor"></textarea></td>
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
                    // 01 editor 
                    $('#editor').liveEdit({
                        height: 350,
                        css: ['editor/bootstrap/css/bootstrap.min.css', 'editor/bootstrap/bootstrap_extend.css'] /* Apply bootstrap css into the editing area */,
                        groups: [
                            ["group1", "", ["Bold", "Italic", "Underline", "ForeColor", "RemoveFormat"]],
                            ["group2", "", ["Bullets", "Numbering", "Indent", "Outdent"]],
                            ["group3", "", ["Paragraph", "FontSize", "FontDialog", "TextDialog"]],
                            ["group4", "", ["LinkDialog", "ImageDialog", "TableDialog", "Emoticons", "Snippets"]],
                            ["group5", "", ["Undo", "Redo", "FullScreen", "SourceDialog"]]
                        ] /* Toolbar configuration */
                    });
                    $('#editor').data('liveEdit').startedit();
                    
                    // 02 validacion                    
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
                        url : "pekeUpload.php",                               
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
