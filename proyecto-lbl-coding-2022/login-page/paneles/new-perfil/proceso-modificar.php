<?php

include("conexion.php");

$id = $_REQUEST['id'];

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));


$query = "UPDATE usuarios SET  imageperfil='$imagen' WHERE id ='$id'";
$resultado = $conexion->query($query);

if($resultado){
    // header("Location: mostrar.php");
    header("Location: ../perfil-user.php");
}else{
    echo "no se inserto";
}


?>