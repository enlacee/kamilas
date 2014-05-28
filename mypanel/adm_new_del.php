<?php require_once("class/class.php"); ?>
<?php

$id = (!empty($_REQUEST['id'])) ? $_REQUEST['id'] : 0;

if ($id > 0) {    
    $instancia->delNew($id);
    $_SESSION['message'] = "Se elimino correctamente (<b>$id</b>).";
    header("Location: adm_new.php");    
} else {
    echo "operacion no valida";
}