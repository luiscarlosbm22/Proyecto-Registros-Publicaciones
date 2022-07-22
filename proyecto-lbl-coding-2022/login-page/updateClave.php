<?php
include('verificarDatos/config.php');
$id 		    = $_REQUEST['id'];
$tokenUser 		= $_REQUEST['tokenUser'];
$password       = $_REQUEST['clave'];

$updateClave    = ("UPDATE usuarios SET clave='$password' WHERE id='".$id."' AND tokenUser='".$tokenUser."' ");
$queryResult    = mysqli_query($con,$updateClave); 

?>

<meta http-equiv="refresh" content="0;url=olvideMipassword.php?email=1"/>