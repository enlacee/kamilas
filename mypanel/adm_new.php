<?php
require_once "class/class.php";

if ($_SESSION && !empty($_SESSION) && $_SESSION["usuario"]) {
    
    // ZEBRA
        // how many records should be displayed on a page?
        $records_per_page = 1;

        // instantiate the pagination object
        $pagination = new Zebra_Pagination();

        // set position of the next/previous page links
        $pagination->navigation_position(isset($_GET['navigation_position']) && in_array($_GET['navigation_position'], array('left', 'right')) ? $_GET['navigation_position'] : 'outside');

        // if query could not be executed
        $offset = (($pagination->get_page() - 1) * $records_per_page); 
        $limit = $records_per_page;
        $result = $instancia->getNews('', 'desc', $limit, $offset);

        // fetch the total number of records in the table
        $rows = $instancia->getNews('', '', '', '', TRUE);
        
        // pass the total number of records to the pagination class
        $pagination->records($rows);

        // records per page
        $pagination->records_per_page($records_per_page);    
    
        //var_dump($result);exit;
        //echo $pagination->render();

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
                                <?php if (is_array($result) && count($result) > 0 ) : ?>                                
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
                                    <?php foreach ($result as $array) : ?>                                        
                                        <tr>
                                            <td class="text-center"><?php echo $array['id'] ?></td>
                                            <td><?php echo $array['title'] ?></td>
                                            <td><?php echo truncate_string($array['content'], 120) ?></td>
                                            <td><img src="images/noticias/banner1.jpg" class="img-responsive" width="100" height="150"></td>
                                            <td class="text-center">
                                                <a href="adm_newedit.php?id=<?php echo $array['id'] ?>"><img src="images/actualizar.png" width="20" height="20"></a>
                                                &nbsp;
                                                <a href="adm_newedel.php?id=<?php echo $array['id'] ?>"><img src="images/borrar.png" width="20" height="20"></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>                                    
                                    </tbody>
                                </table>                                
                                <?php else : ?>
                                <p>No se econtraron datos.</p>
                                <?php endif; ?>

                                <div class="text-center pdTop10" id="paginador">                                    
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#">« Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="next"><a href="#">Next »</a></li>                                        
                                    </ul>
                                </div>
                                
                                <?php echo $pagination->render(true); ?>


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
