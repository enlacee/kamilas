<?php require_once("class/class.php"); ?>
<?php

$id = (!empty($_REQUEST['id'])) ? $_REQUEST['id'] : 0;

if ($id > 0) {    
    $instancia->delBanner($id);
    $_SESSION['message'] = "Se elimino correctamente (<b>$id</b>).";
    header("Location: adm_banner.php");    
} else {
    echo "operacion no valida";
}