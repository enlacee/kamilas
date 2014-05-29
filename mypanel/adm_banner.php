<?php
require_once "class/class.php";
/*
$thum = new MyThumbnail(1040, 392);
$updir = '/home/anb/Escritorio/sites/colombia/kamilas/images/bannerCentral/';
$file = "prueba.jpg";
$saveDir = '/home/anb/Escritorio/sites/colombia/kamilas/images/bannerCentral/tmp/';
$thum->makeThumbnail($updir, $file, $saveDir);
*/

// extra
function getPathImage($idPosition)
{
    // Position (central, top, footer, etc)
    $position= array(
        array ('id' => 1, 'name' => 'central', 'directory' => 'images/bannerCentral/'),
        array ('id' => 2, 'name' => 'otro1', 'directory' => 'images/bannerOtro/')              
    );
    
    $path = url();
    $nCorte = stripos($path,'mypanel');    
    $path =  substr($path,0, $nCorte);
    
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

function url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['HTTP_HOST'],
    $_SERVER['REQUEST_URI']
  );
}  
// extra

if ($_SESSION && !empty($_SESSION) && $_SESSION["usuario"]) {
    
    // ZEBRA - PAGINATOR
    // how many records should be displayed on a page?
    $records_per_page = 4;

    // instantiate the pagination object
    $pagination = new Zebra_Pagination();

    // set position of the next/previous page links
    $pagination->navigation_position(isset($_GET['navigation_position']) && in_array($_GET['navigation_position'], array('left', 'right')) ? $_GET['navigation_position'] : 'outside');

    // if query could not be executed

    $offset = (($pagination->get_page() - 1) * $records_per_page); 

    $limit = $records_per_page;
    $result = $instancia->getbanners('', '', 'desc', $limit, $offset);

    // fetch the total number of records in the table
    $rows = $instancia->getbanners('', '', '', '', '', TRUE);

    // pass the total number of records to the pagination class
    $pagination->records($rows);

    // records per page
    $pagination->records_per_page($records_per_page);

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
                            <div class="col-md-12">
                                <h1>Banner : <a href="adm_banner_add.php" class="btn btn-primary">Add</a></h1>
                                <?php if (is_array($result) && count($result) > 0 ) : ?>                                
                                <table class="table table-hover table-striped table-condensed table-responsive table-bordered">
                                    <thead>    
                                        <tr>
                                            <th width="3%" class="text-center">ID</th>
                                            <th width="30%">Title</th>
                                            <th width="32%">Position</th>
                                            <th width="25%">Image</th>                                            
                                            <th width="10%" class="text-center">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($result as $array) : ?>                                        
                                        <tr>
                                            <td class="text-center"><?php echo $array['id'] ?></td>
                                            <td><?php echo $array['title'] ?></td>
                                            <td><?php echo $array['position'] ?></td>
                                            <td><img src="<?php echo getPathImage($array['id_position']) .$array['image'] ?>" class="img-responsive" width="100" height="150"></td>
                                           
                                            <td class="text-center">                                                
                                                <a href="javascript:delBanner(<?php echo $array[id] ?>)"><img src="images/borrar.png" width="20" height="20"></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>                                    
                                    </tbody>
                                </table>                                
                                <?php else : ?>
                                <p>No se econtraron datos.</p>
                                <?php endif; ?>

                                <!-- paginator -->
                                <?php echo $pagination->render(); ?>
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
            function delBanner(id) {
                var status = confirm("Seguro de eliminar?");
                if(status) {
                    window.location = "adm_banner_del.php?id="+id;
                }
            }        
        </script>    
        </body>
    </html>
    <?php
}

header("Location: index.php");