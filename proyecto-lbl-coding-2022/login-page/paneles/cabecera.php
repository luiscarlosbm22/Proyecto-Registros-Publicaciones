

<?php 
    
    include '../conexion.php';
    
    ?>
    
    <?php
    session_start();
    
    
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: ../login.php");
      exit;
     }
    
    $iduser = $_SESSION["id"];
    
    $sql = "SELECT id, usuario, email, apellidos_nombres, profesion, user_descripcion, imageperfil FROM usuarios WHERE id ='$iduser'";
    
    $resultado = $link->query($sql);
    $row = $resultado->fetch_assoc();
     $sql = "SELECT count(*) as total  FROM `proyectos` where id_usuario= ".$row['id'] ;
$result = $link->query($sql);
$fila = $result->fetch_assoc();
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar portafolio | LBM CODING</title>
    <link rel="stylesheet" href="../css-login/styles-icons.css">
  <link rel="stylesheet" href="css/estilos-menutabs.css">
  <link rel="stylesheet" href="css/estilos-post-list.css">
  <link rel="icon" type="image/png" href="images/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <!-- <link rel="stylesheet" href="css/styles-user-menu.css"> -->
  <link rel="stylesheet" href="css/styles-portafolio.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <script src="https://kit.fontawesome.com/5001642c47.js" ></script>

  <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<i class="icon-menu burger-menu" id="burger-menu"></i>
    
        <!-- <a href="index.php">Inicio</a> 
        <a href="portafolio.php">portafolio</a>
        <a href="cerrar.php">Cerrar</a> <br> -->
        
    <header class="header">
      <div class="container">
        <figure class="logo">
          <img src="images/logo1.png" height="50" alt="Logo de http://lbmcoding.com" />
        </figure>
        <nav class="menu">

        <style>
          @media screen and (max-width: 767px) {

ol {
    margin-bottom: 1747px !important;
  }
}
        </style>
          <ol>
            <li>
              <a class="link" href="../page-one.php">Inicio</a>
            </li>
            <li>
              <a class="link" href="page-portafolios.php">Portafolios</a>
            </li>
            <li>
              <a class="link" href="page-experiencias.php">Experiencias</a>
            </li>
            <li>
              <a class="link" href="page-trabaja-con-nosotros.php">Trabajemos juntos</a>
            </li>
            <li>
              <a class="link" href="page-blog.php">Blog</a>
            </li>
            <li>
              <a class="link" href="aprender.php">Aprender</a>
            </li>
            <!-- <li>
              <li>
                <a class="link" href="aprender.php">Aprender</a>
              </li>
              <a class="link" href="#eventos">Contactos</a>
            </li> -->
            
            <div class="link">
            <div class="btn-group">

            <form action="perfil-user.php">
                <button class="btn btn-secondary btn-sm" type="submit">
                  <img class="card-img-top" height="25px" src="data:image/png;base64, <?php echo base64_encode($row['imageperfil']); ?>" alt=""> 
                  <?php echo utf8_decode($row['usuario']); ?>
              </button>
            </form>
        
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="perfil-user.php">Mi Perfil</a></li>
            <li><a class="dropdown-item" href="portafolio.php">Publicar</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../cerrar-sesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
            </div>
            </li>
          </ol>
        </nav>
      </div>
    </header><br><br>
    
