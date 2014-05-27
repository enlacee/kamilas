<?php require_once "class/class.php"; ?>
<?php

$idNew = !empty($_REQUEST['new']) ? $_REQUEST['new'] : '';
if (!empty($idNew)) {
    $new = $instancia->getNew($idNew);
} else {
    $news = $instancia->getNews();
}

//var_dump($news);exit;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include("headTop.php"); ?>
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inicio</title>
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
                <?php include "eslider.php"; ?>
            </div> 
            <!--End Eslider--> 



        </div><!--End Container-->





        <!--ContainerBody-->
        <div class="containerBody mgTop10 pdTop10 pdBottom10">
            <!--Container-->
            <div class="container">


                <!--BodyTop-->
                <?php include "bodyTop.php"; ?>
                <!--End BodyTop-->

                <!--Section-->
                <section>
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="bodyBGyBorder mgTop10 mgBottom10">
                                
                                <div class="col-md-8">  
                                    <?php if (is_array($news) && count($news) > 0 ) : // NEWS ?>
                                        <?php foreach ($news as $array) : ?>
                                        <div class="boxLeft">
                                            <h1><?php echo $array['title'] ?></h1>
                                            <p><img src="images/noticias/<?php echo $array['image'] ?>" width="662" height="320" class="img-responsive" /></p>
                                            <p><?php echo truncate_string($array['content'], 300) ?></p>
                                            <a href="?new=<?php echo $array['id'] ?>" class="leerMas fuenteCartoon">Leer Mas</a>
                                        </div><!--End Box-->
                                        <hr />
                                        <?php endforeach; ?>
                                    <?php elseif (isset($new) && is_array($new)) : // NEW ?>
                                        <div class="boxLeft">
                                            <h1><?php echo $new['title'] ?></h1>
                                           <p><img src="images/noticias/<?php echo $new['image'] ?>" width="662" height="320" class="img-responsive" /></p>
                                           <p><?php echo $new['content'] ?></p>
                                        </div><!--End Box-->                                        
                                    <?php else : ?>
                                        <div class="boxLeft"><p>No se encontraron datos.</p></div>
                                    <?php endif; ?>
                                </div><!--Left-->


                                <!--Right-->
                                <div class="col-md-4">
                                    <?php include "right.php"; ?>
                                </div> 
                                <!--End Right-->


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
    </body>
</html>