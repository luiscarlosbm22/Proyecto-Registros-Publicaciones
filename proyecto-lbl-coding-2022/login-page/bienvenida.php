
<!-- <?php 
    
//     include 'conexion.php';

// ?>

// <?php

//     session_start();

// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }

// $iduser = $_SESSION["id"];

// $sql = "SELECT id, usuario FROM usuarios WHERE id ='$iduser'";

// $resultado = $link->query($sql);
// $row = $resultado->fetch_assoc();


?> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido - MagtimusPro</title>
    <link rel="stylesheet" href="css/estilos.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
   
   <div class="ctn-welcome">
   
       
       <img src="images/logo-magtimus-small.png" alt="" class="logo-welcome">
       <h1 class="title-welcome">Bienvenido lo has <b>LOGRADOOOOOO!</b></h1>

       <section>
        <h1>Bienvenido <?php echo utf8_decode($row['usuario']); ?></h1>
    </section>
       <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
       
   </div>
   
    
</body>
</html>