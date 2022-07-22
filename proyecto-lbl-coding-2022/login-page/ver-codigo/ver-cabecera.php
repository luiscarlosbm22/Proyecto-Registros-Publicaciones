<?php

include '../conexion.php';

?>

<?php

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login.php");
    exit;
}

$iduser = $_SESSION["id"];

$sql = "SELECT id, usuario, email, apellidos_nombres, profesion, user_descripcion, imageperfil FROM usuarios WHERE id ='$iduser'";

$resultado = $link->query($sql);
$row = $resultado->fetch_assoc();


?>


<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8" />
  <title>Ver Codigo</title>
  <link rel="stylesheet" href="../css-login/styles-icons.css">
  <link rel="stylesheet" href="css/estilos-menutabs.css">
  <link rel="stylesheet" href="css/estilos-post-list.css">
  <link rel="stylesheet" href="css/prism.css">
  <link rel="icon" type="../paneles/image/png" href="../paneles/images/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/styles-user-menu.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500&family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles-experiencias.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <i class="icon-menu burger-menu" id="burger-menu"></i>
    <header class="header">
        <div class="container">
            <figure class="logo">
                <img src="../paneles/images/logo1.png" height="50" alt="Logo de http://lbmcoding.com" />
            </figure>
            <nav class="menu" id="menu">
                <ol>
                    <li>
                        <a class="link" href="../page-one.php">Inicio</a>
                    </li>
                    <li>
                        <a class="link" href="../paneles/page-portafolios.php">Proyectos</a>
                    </li>
                    <li>
                        <a class="link" href="../paneles/page-experiencias.php">Experiencias</a>
                    </li>
                    <li>
                        <a class="link" href="../paneles/page-trabaja-con-nosotros.php">Trabajemos juntos</a>

                    </li>
                    <li>
                        <a class="link" href="../paneles/page-blog.php">Blog</a>
                    </li>
                    <li>
                        <a class="link" href="../paneles/aprender.php">Aprender</a>
                    </li>

                    <li>
                    <div class="link">
            <div class="btn-group">

            <form action="../paneles/perfil-user.php">
                <button class="btn btn-secondary btn-sm" type="submit">
                    <img class="card-img-top" height="25px" src="data:image/png;base64, <?php echo base64_encode($row['imageperfil']); ?>" alt=""> 
                    <?php echo utf8_decode($row['usuario']); ?>
                </button>
            </form>
        
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../paneles/perfil-user.php">Mi Perfil</a></li>
            <li><a class="dropdown-item" href="../paneles/portafolio.php">Publicar</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../cerrar-sesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
            </div>
                    </li>

                    <!-- <img  class="image-user" src="images/user.png" alt=""> -->

                </ol>
            </nav>

        </div>
    </header><br><br><br>