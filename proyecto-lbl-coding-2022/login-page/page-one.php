
<?php 
    
include 'conexion.php';

?>

<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: login.php");
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
  <title>Inicio | LBM CODING</title>
  <link rel="stylesheet" href="css-login/styles-icons.css">
  <link rel="stylesheet" href="paneles/css/estilos-menutabs.css">
  <link rel="stylesheet" href="paneles/css/estilos-post-list.css">
  
  <link rel="icon" type="image/png" href="images/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="paneles/css/estilos.css">
  <script src="https://kit.fontawesome.com/5de3bdc251.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="paneles/css/styles-user-menu.css">
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
</head>

<body>
  <i class="icon-menu burger-menu" id="burger-menu"></i>
  <header class="header">
    <div class="container">
      <figure class="logo">
        <img src="paneles/images/logo1.png" height="50" alt="Logo de http://lbmcoding.com" />
      </figure>
      <nav class="menu"  id="menu">
        <ol>
          <li>
            <a class="link" href="page-one.php">Inicio</a>
          </li>
          <li>
            <a class="link" href="paneles/page-portafolios.php" >Proyectos</a>
          </li>
          <li>
            <a class="link" href="paneles/page-experiencias.php">Experiencias</a>
          </li>
          <li>
            <a class="link" href="paneles/page-trabaja-con-nosotros.php">Trabajemos juntos</a>
            
          </li>
          <li>
            <a class="link" href="paneles/aprender.php">Aprender</a>
          </li>
          <li>
            <a class="link" href="paneles/page-blog.php">Blog</a>
          </li>
          <li>
            <div class="link">
            <div class="btn-group">
              <form action="paneles/perfil-user.php">
                <button class="btn btn-secondary btn-sm" type="submit">
                  <img class="card-img-top" height="25px" src="
                  data:image/png;base64, <?php echo base64_encode($row['imageperfil']); ?>" alt="">
                  <?php echo utf8_decode($row['usuario']); ?>
                </button>
              </form>
        
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="paneles/perfil-user.php">Mi Perfil</a></li>
            <li><a class="dropdown-item" href="paneles/portafolio.php">Publicar</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cerrar-sesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
            </div>
          
          </li>
          
         
            <!-- <a class="link" href="paneles/perfil-user.php"><?php echo utf8_decode($row['usuario']); ?> <i class="icon-arrow_drop_down"></i>  </a> -->

            <!-- <ul class="submenu">
              <li><a href="paneles/perfil-user.php">Perfil </a></li>
              <li><a href="#">Config</a></li>
              <li><a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a></li>
            </ul> -->
          

              <!-- <img  class="image-user" src="images/user.png" alt=""> -->
              
        </ol>
      </nav>
      
    </div>
  </header><br><br>
  <section class="hero">
    <div class="container">
      <h1>
        Descargas gratis <strong>ilimitadas</strong> <br /> Desarrolla <strong>tareas</strong> con <br> todos
        <strong>los programadores</strong>
      </h1>
      <img class="hero-image" src="paneles/images/portada.jpg" width="500" height="300" alt="imagen principal del sitio">
    </div>
  </section>

  <!--     =========================================            -->
  <div class="container-menutabs">
    <!-- <a href="https://drive.google.com/uc?id=1QBEPXIJapO0utXMbChGWIxG88xW3RJAI&export=download"  class="btn" download="clases.zip">Descargar</a> -->
    <div class="lbl-menu">
      <label for="radio1" >Ejercicios Java NB</label>
      <label for="radio2" >Programación Web Frontend</label>
      <label for="radio3" >Bases de Datos Backend</label>
      <label for="radio4" >Contacto y Redes Sociales</label>
    </div>

    <div class="content">

      <input type="radio" name="radio" id="radio1" checked>
      <div class="tab1">
        <h2>Ejercicios Resueltos Java</h2>
        <section class="post-list">
          <span href="" class="post">
            <figure class="post-image">

              <img src="paneles/images/pilas.png" alt="">
            </figure>
            <span class="post-overlay">
             
                  <a class="post-title">Pilas constructoras  </a> 
                <!-- <span class="post-likes">Una orgía de sangre</span>  -->
                <a class="post-comments" href="ver-codigo/pilas-constructoras.php">Ver </a> <a class="post-comments2">|</a>
                <a class="post-comments" href="https://drive.google.com/uc?id=1WJTXw6EY6MRDhWuZWrD3Yhoyu2FBgNEZ&export=download">Descargar</a><a class="post-comments2">|</a>
                <a class="post-comments" href="https://www.google.com">Compartir</a>
              
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/consultorioDr.png" alt="">
            </figure>
            <span class="post-overlay">
              
              <a class="post-title">Consultorio, totales, descuentos </a> 
              <a class="post-comments" href="ver-codigo/totales-descuentos.php">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://drive.google.com/uc?id=1PYrSLjyCjg0RawFhTSb-kGrNkwPe97z0&export=download">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
              
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/creacion-fabricas.png" alt="">
            </figure>
            <span class="post-overlay">
              
              <a class="post-title">Gastos de fabricación, precios </a> 
              <a class="post-comments" href="ver-codigo/fabrica-precios.php">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://drive.google.com/uc?export=download&id=17tXIBnUJvSMjDca0WFGlAiHRfhlaUC52">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
              
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/bono-mensual.png" alt="">
            </figure>
            <span class="post-overlay">
              
              <a class="post-title">Bono por antiguedad, mensual, sueldo</a><br><br><br>
               
              <a class="post-comments" href="ver-codigo/bono-mensual-sueldo.php">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://drive.google.com/uc?export=download&id=1CjFW-WX1DiUJa8mS_Q8Ig2-wqV_czJht">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
              
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/compra-paquetes.png" alt="">
            </figure>
            <span class="post-overlay">
              
              <a class="post-title">Compra de paquetes</a> 
              <a class="post-comments" href="ver-codigo/compra-paquetes.php">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://drive.google.com/uc?export=download&id=1Hb2DG35S6BJRy3XbOn0w6q0BvH2ExEjj">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
              
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/ahorro-mensual.jpg" alt="">
            </figure>
            <span class="post-overlay">
              
              <a class="post-title">Ahorro mensual y total</a> 
              <a class="post-comments" href="ver-codigo/ahorro-mensual.php">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://drive.google.com/uc?export=download&id=1baWrmK-R1S0NuLJDxkUJxjDSvjpWbdrG">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
              
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/ahorro-mensual.jpg" alt="">
            </figure>
            <span class="post-overlay">
              
              <a class="post-title">Ahorro mensual y total</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
              
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/ahorro-mensual.jpg" alt="">
            </figure>
            <span class="post-overlay">
              
              <a class="post-title">Ahorro mensual y total</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
              
            </span>
          </span>


        </section>
      </div>

      <input type="radio" name="radio" id="radio2">
      <div class="tab2">
        <h2>Ejercicios Resueltos Destacados HTML Y CSS</h2>
        <section class="post-list">
          <span href="" class="post">
            <figure class="post-image">

              <img src="paneles/images/tienda-online.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Tienda online html y css </a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/clon-wikipedia.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Clon Wikipedia</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/clon-instagram.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Css grid layount Instagram</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/clon-falabella.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Clon Saga Falabella</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/css-funciones.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Css basico, funciones</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/css-pinterest.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Css estilo Pinterest</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/clon-netflix.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Html y Css clon Netflix</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>


        </section>
      </div>

      <input type="radio" name="radio" id="radio3">
      <div class="tab3">
        <h2>Backend Ejercicios Resueltos</h2>
        <section class="post-list">
          <span href="" class="post">
            <figure class="post-image">

              <img src="paneles/images/tienda-efe-reportes-pdf.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Tienda Efe reportes en PDF</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/bd-farmacia.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Base de Datos Farmacia SQLServer</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/login-registro.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Login y Registro MYSQL</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/conexion-bd-java-mysql.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Conexión BD Java y Mysql</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/conexion-con-xamp.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Conexión BD con Xampp</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/consultas-sql-server.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Consultas en SQL Server</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/CRUD-Java.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">CRUD con BD en Java Netbeans</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Descargar</a><a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Compartir</a>
            </span>
          </span>


        </section>
      </div>

      <input type="radio" name="radio" id="radio4">
      <div class="tab4">
        <h2>Contactos y Redes Sociales</h2>
        <section class="post-list">
          <span href="" class="post">
            <figure class="post-image">

              <img src="paneles/images/logo-youtube.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Canal de Youtube</a> 
              <a class="post-comments" href="https://www.google.com">Ver </a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Suscribete</a>
              
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/logo-githup.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">GitHub</a> 
              <a class="post-comments" href="https://www.google.com">Seguir</a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Proyectos</a>
              
            </span>
          </span>
          
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/logo-facebook.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Facebook</a> 
              <a class="post-comments" href="https://www.google.com">Seguir</a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Contactar</a>

            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/logo-instagram.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Instagram</a> 
              <a class="post-comments" href="https://www.google.com">Seguir</a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Contactar</a>
             
            </span>
          </span>
          <span href="" class="post">
            <figure class="post-image">
              <img src="paneles/images/logo-linkedin.png" alt="">
            </figure>
            <span class="post-overlay">
              <a class="post-title">Linkedin</a> 
              <a class="post-comments" href="https://www.google.com">Seguir</a> <a class="post-comments2">|</a>
              <a class="post-comments" href="https://www.google.com">Contactar</a>
              
            </span>
          </span>
         
         


        </section>
      </div>
    </div>
  </div>

  <!--     =========================================            -->


  <section id="portafolio" class="portfolio">
    <div class="container">
      <h2>Gana Puntos y conviertelos en premios (Publica y Gana)</h2>
      <article class="project">
        <div class="project-details">
          <h3 class="project-title">LBM Puntos</h3>
          <h6 class="project-course">Resuelve Problemas / Comparte tu ejercicios</h6>
          <p class="project-date"><small><strong>Acomula puntos</strong> 100/1000/100000+</small></p>
          <p class="project-url"><small><strong>Puedes verlo en:</strong> www.lbmtecnology.com/puntos</small></p>
          <p class="project-description">Una forma de dar valor a tu creatividad e inteligencia, resolviendo y haciendo tus propias tareas
            ganando puntos por cada tarea desarrollada LBM te otorgara puntos para que tu los conviertas en dinero. Tu esfuerzo lo valoramos 
            desde principiante, experto, etc. 
          </p>
        </div>
        <figure class="project-imageContainer">
          <img class="project-image" width="500" src="paneles/images/background-points.png"
            alt="prouyecto del curso de React Native">
        </figure>
      </article>
      <!--<article class="project">
          <div class="project-details">
            <h3 class="project-title">Platzi Video</h3>
            <h6 class="project-course">React Native / React</h6>
            <p class="project-date"><small><strong>Fecha:</strong> 01/07/2018</small></p>
            <p class="project-url"><small><strong>Puedes verlo en:</strong> www.platzi.com/native</small></p>
            <p class="project-description">Platzi Video fue el resultado de 3 meses de trabajo
                para crear la mejor app para enseñar el funcionamiento
                de React y React Native. Desde crear un vista-detalle, hasta patrones avanzados de nevegación, este proyecto ha sido el ejemplo de futuros creadores de aplicaciones multiplataforma</p>
          </div>
          <figure class="project-imageContainer">
            <img class="project-image" width="500" src="images/platzi-video-react-native.png" alt="prouyecto del curso de React Native">
          </figure>
        </article>-->
    </div>

  </section>
  <div class="container">
    <h2 class="event-list-title">Videos tutoriales destacados</h2>
  </div>
  <section id="eventos" class="event-list">
    <div class="container">
      <article class="event">
        <figure class="event-imageContainer">
          <div class="video-container">
            <iframe class="video-src" width="560" height="315" src="https://www.youtube.com/embed/wyddnTU2978"
              frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <!-- <img class="event-image" src="images/platzi-conf.jpg" width="500" /> -->
        </figure>
        <div class="event-detail">
          <h3 class="event-title">Proyecto Farmacia Java Netbeans</h3>
          <p class="event-description">Realizado por Luis Bautista y un grupo de compañeros en la universidad, desde entonces 
            a recivido muchas vistas por estudiantes de varios paises.
          </p><br>
          <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver Mas</a>
        </div>
      </article>
      <article class="event">
        <figure class="event-imageContainer">
          <div class="video-container">
            <iframe class="video-src" width="560" height="315" src="https://www.youtube.com/embed/Gcw5m1xkOJc"
              frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
          <!-- <img class="event-image" src="images/platzi-conf.jpg" width="500" /> -->
        </figure>
        <div class="event-detail">
          <h3 class="event-title">Clon Tienda Online SagaFalabella</h3>
          <p class="event-description">Clon de una tienda online reconicida a nivel nacional, estructurada con HTML y CSS
            por un estudiante de primer ciclo, hoy en dia tiene muchas descargas
          </p><br>
          <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver Mas</a>
        </div>
      </article>
      <article class="event">
        <figure class="event-imageContainer">
          <img class="event-image" src="paneles/images/wikipedia-clon.jpg" width="500" />
        </figure>
        <div class="event-detail">
          <h3 class="event-title">Wikipedia Clon</h3>
          <p class="event-description">El clon de wikipedia realizado por un estudiante de Platzi, mediante un reto. Estructurado
            con HTML5 Y CSS3 muy parecido al real muy atractivo en todo los idiomas.
          </p><br>
          <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver Mas</a>
        </div>
      </article>
      <article class="event">
        <figure class="event-imageContainer">
          <img class="event-image" src="paneles/images/platzi-conf.jpg" width="500" />
        </figure>
        <div class="event-detail">
          <h3 class="event-title">PlatziConf México 2018</h3>
          <p class="event-description">El evento más grande sobre gente que quiere aprender más de internet. En esté
            evento te comparto como tener una vida de constante aprendizaje.</p><br>
          <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver Mas</a>
        </div>
      </article>
    </div>
  </section>
  <section id="contacto" class="contact">
    <div class="container">
      <form action="/suscripcion/" class="form-email">
        <h3>¿Creamos algo juntos?</h3>
        <input type="text" placeholder="Déjame tu email" id="email">
        <button>Enviar</button>
      </form>
      <div class="social">
        <a href="https://twitter.com/leonidasesteban" class="social-link twitter"></a>
        <a href="https://facebook.com/leonidas.esteban" class="social-link facebook"></a>
        <a href="https://github.com/leonidasesteban" class="social-link github"></a>
        <a href="https://instagram.com/leonidasesteban" class="social-link instagram"></a>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div>
        <p>Desarrolladores y Programadores Unidos 2022 <img src="paneles/images/lbm-coding.png" width="80" alt="platzi"></p> 
      </div>
      <div>
                <a href="paneles/politicas.php">Politicas de privacidad</a>
            </div>
      <div>
        <p>
          Todos los Derechos Reservados <a href="https://twitter.com/thespianartist">© Copyright 2022</a>
        </p>
      </div>
    </div>
  </footer>
  <script>
    const $burgerMenu = document.querySelector('#burger-menu');
    const $menu = document.querySelector('.menu');
    const ipad = window.matchMedia('(max-width: 767px)');
    runBurgerMenu(ipad.matches);
    ipad.addListener((event) => {
      runBurgerMenu(event.matches)
    })
    function hideShow() {
      if ($menu.classList.contains('is-active')) {
        $menu.classList.remove('is-active');
      } else {
        $menu.classList.add('is-active');
      }
    }
    function runBurgerMenu(yes) {
      if (yes) {
        $burgerMenu.addEventListener('click', hideShow);
      } else {
        $burgerMenu.removeEventListener('click', hideShow);
      }
    }
  </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>