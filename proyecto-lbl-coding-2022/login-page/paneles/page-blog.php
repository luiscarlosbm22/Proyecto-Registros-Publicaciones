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


?>



<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>Blog</title>
  <!-- <link rel="stylesheet" href="../css-login/styles-icons.css"> -->
  
  
  <link rel="icon" type="image/png" href="images/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <!-- <link rel="stylesheet" href="css/styles-user-menu.css"> -->
  <link rel="stylesheet" href="css/page-blog.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/styles-experiencias.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body>

<i class="icon-menu burger-menu" id="burger-menu"></i>

  <header class="header">
    <div class="container">
      <figure class="logo">
        <img src="images/logo1.png" height="50" alt="Logo de http://leonidasesteban.com" />
      </figure>
      <nav class="menu">
        <ol>
          <li>
            <a class="link" href="../page-one.php">Inicio</a>
          </li>
          <li>
            <a class="link" href="page-portafolios.php">Proyectos</a>
          </li>
          <li>
            <a class="link" href="page-experiencias.php">Experiencias</a>
          </li>
          <li>
            <a class="link" href="page-trabaja-con-nosotros.php">Trabajemos juntos</a>
          </li>
          <li>
            <a class="link" href="../paneles/page-blog.php">Blog</a>
          </li>          
          
          <li>
          <div class="link">
            <div class="btn-group">
        <button class="btn btn-secondary btn-sm" type="button">
        <img class="card-img-top" height="25px" src="data:image/png;base64, <?php echo base64_encode($row['imageperfil']); ?>" alt=""> 
        <?php echo utf8_decode($row['usuario']); ?>
        </button>
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
          
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="perfil-user.php">Mi Perfil</a></li>
            <li><a class="dropdown-item" href="portafolio.php">Publicar</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="cerrar-sesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
            </div>
          </li>
          
        </ol>
      </nav>
    </div>
  </header><br><br><br>
  
  <section class="hero">
    <div class="container">
      <h1>
        BLOG <strong>ANOTA</strong>TUS <strong>IDEAS <br ></strong> PARA QUE <strong> ESTA COMUNIDAD</strong> <br>
        SEA UN LUGAR<strong> IDEAL</strong>
      </h1>
      <br>
      <img class="hero-image" src="images/page-comentarios.jpg" width="500" height="300" alt="imagen principal del sitio">
    </div>
  </section>

  <!--     =========================================            -->
  <!--Funcion para comentario-->
  <p></p>

  <section id="portafolio" class="portafolio">
    <div class="container">

    
    <div class="ctn-lbl-comentar">
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0" nonce="E0zULFbN">
            </script>
              <div class="card" style="width: 70rem;">
              <!-- Post Imagen -->
              <div style="position: relative; width: 100%; height: 0; padding-top: 38.0488%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 0.0em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFDmq594-Q&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFDmq594-Q&#x2F;view?utm_content=DAFDmq594-Q&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a>
<!-- Termina Post Imagen -->
                  <!-- <img class="card-img-top" src="https://www.canva.com/design/DAFDmeYDOBs/view" alt="Card image cap"> -->
                  <div class="card-body">
                    <h5 class="card-title">Metaverso un Mundo Nuevo</h5>
                    <p class="card-text">Los metaversos son entornos donde los humanos interactúan e intercambian experiencias virtuales mediante uso de avatares, a través de un soporte lógico en un ciberespacio, el cual actúa como una metáfora del mundo real, pero sin tener necesariamente sus limitaciones.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Expositor: Juan Marquina</li>
                    <li class="list-group-item">Add: Facebook</li>
                    <li class="list-group-item">Futuro y Tecnología</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link">Ver Link</a>
                    <a href="#" class="card-link">Saber mas</a> <br>
                    <label style="font-weight: bold" class="lbl-comentario">Añade un Comentario</label>
                  </div>

                  
                  <div class="fb-comments" data-href="http://localhost/comentarios/" data-width="100%" data-numposts="5"></div>
               </div>
            
        </div><br>

        <div class="ctn-lbl-comentar">
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0" nonce="E0zULFbN">
            </script>
              <div class="card" style="width: 70rem;">
              <!-- Post Imagen -->
                <div style="position: relative; width: 100%; height: 0; padding-top: 38.0488%;
                            padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 0.0em; margin-bottom: 0.9em; overflow: hidden;
                            border-radius: 8px; will-change: transform;">
                <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                  src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFDmeYDOBs&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                </iframe>
                </div>
                
<a  class="card-img-top" href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFDmeYDOBs&#x2F;view?utm_content=DAFDmeYDOBs&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a> 
<!-- Termina Post Imagen -->
                  <!-- <img class="card-img-top" src="https://www.canva.com/design/DAFDmeYDOBs/view" alt="Card image cap"> -->
                  <div class="card-body">
                    <h5 class="card-title">Creta del Valle</h5>
                    <p class="card-text">Breve historia del mañana es un libro escrito por el autor israelí Yuval Noah Harari, profesor en la Universidad Hebrea de Jerusalén y publicado por primera vez en hebreo en 2015. Las traducciones al inglés y al español se publicaron en 2016.</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Autor: Yuval Noah Harari</li>
                    <li class="list-group-item">Fecha de publicación original: 2015</li>
                    <li class="list-group-item">Libro anterior: Sapiens: De animales a dioses</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link">Ver Link</a>
                    <a href="#" class="card-link">Saber mas</a> <br>
                    <label style="font-weight: bold" class="lbl-comentario">Añade un Comentario</label>
                  </div>

                  
                  <div class="fb-comments" data-href="http://localhost/comentarios/" data-width="100%" data-numposts="5"></div>
               </div>

               
            
        </div>
    </div>
    <br>

    </div>

  </section>

  

 

  <!--     =========================================            -->
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
        <p>Desarrolladores y Programadores Unidos 2021 <img src="images/lbm-coding.png" width="80" alt="platzi"></p>
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