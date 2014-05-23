<?php 
if (!isset($_SESSION)) {
	session_start();	
}

$_SESSION["usuario"] = NULL;
unset($_SESSION["usuario"]);
header("Location: index.php");

?>