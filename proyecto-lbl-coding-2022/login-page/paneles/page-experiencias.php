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
  <title>Experiencias</title>
  <link rel="stylesheet" href="../css-login/styles-icons.css">
  <link rel="stylesheet" href="css/estilos-menutabs.css">
  <link rel="stylesheet" href="css/estilos-post-list.css">
  <link rel="icon" type="image/png" href="images/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/styles-user-menu.css">
  <link rel="stylesheet" href="css/styles-portafolio.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  
  <link rel="stylesheet" href="css/styles-experiencias.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
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
            <li><a class="dropdown-item" href="cerrar-sesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
            </div>
          </li>
          
        </ol>
      </nav>
    </div>
  </header><br><br><br>
  
  <section class="hero2">
    <div class="container">
      <h1>
        Desarrolla <strong>Nuevos Proyectos</strong> <br /> Se <strong>el mejor</strong> cada<br> día con tu
        <strong>perfil profesional</strong>
      </h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/portada-libro.png" alt="Chania">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/portada-libro.png" alt="Chicago">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/portada-libro.png" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </section>
  
  
  
  <!-- images/fondo-login.jpg -->

  <!--     =========================================            -->
  <section id="portafolio" class="portfolio">
    <div class="container-portafolio">
        <div class="card-ports-galery" href="">
          <div class="item level-1">
            <img  class="perfil-card" src="images/images-page-experiencias/perfil1.jpg" alt="">
            <p class="card-ports--paragraph">Eduardo Vasquez Soy desarrollador Backend</p>
            <p class="card-ports--paragraph" style="font-weight: initial;">Trabaje para Microsoft los codigos ahi son complejos <br>
              pero conoces muchas personas tan increibles como tu <br>
              programar siempre sera mi pasion <br>
              esfuerzate y logralo <br>
              Ingeniero de Sowftware <br>
              <p class="card-ports--paragraph" style="color: #026fff; text-decoration-line: overline;">Contact</p>
              </p>
          </div>
</div>
        <a class="card-ports-galery" href="">
            <div class="item level-2">
                <img class="perfil-card"  src="images/images-page-experiencias/perfil2.png" alt=""><br><br>
                <p class="card-ports--paragraph"> Vasquez Richard Brodie ofimatica Microsoft Word</p>
                <p class="card-ports--paragraph" style="font-weight: initial;">El compilador Microsoft (más tarde como Microsoft Access) <br>
                lo llevó a trabajar para Bill Gates como asistente <br>
                técnico a principios de la década de los 80. <br>
              tecnico <br>
              Creación del archiutilizado <br>
              <p class="card-ports--paragraph" style="color: #026fff; text-decoration-line: overline;">Contact</p>
              </p>
            </div>
        </a>
        <a class="card-ports-galery" href="">
          <div class="item level-3">
            <img class="perfil-card"  src="images/images-page-experiencias/perfil3.jpg" alt=""><br><br>
            <p class="card-ports--paragraph"> Ada Lovelace primera programadora</p>
                <p class="card-ports--paragraph" style="font-weight: initial;">Desarrollar la calculadora mecánica de Charles Babbage <br>
                se conocen en la actualidad como el primer <br>
                algoritmo creado para ser reconocido <br>
                por una máquina <br>
                Inventora del Software <br>
              <p class="card-ports--paragraph" style="color: #026fff; text-decoration-line: overline;">Contact</p>
              </p>
          </div>
        </a>
        <a class="card-ports-galery" href="">
          <div class="item level-1">
            <img class="perfil-card"  src="images/images-page-experiencias/perfil4.jpg" alt=""><br><br>
            <p class="card-ports--paragraph"> Guido Van Rossum Programación Python</p>
                <p class="card-ports--paragraph" style="font-weight: initial;">Cuenta con un título que le otorga la potestad supervisando <br>
                perpetuamente el desarrollo de este lenguaje <br>
                algoritmo creado para ser reconocido <br>
                por una máquina <br>
                Programador Holandés <br>
              <p class="card-ports--paragraph" style="color: #026fff; text-decoration-line: overline;">Contact</p>
              </p>
          </div>
        </a>
        <a class="card-ports-galery" href="">
          <div class="item level-2">
            <img class="perfil-card"  src="images/images-page-experiencias/perfil5.jpg" alt=""><br><br>
            <p class="card-ports--paragraph"> Tim Berners-Lee Fundador World Wide Web</p>
                <p class="card-ports--paragraph" style="font-weight: initial;">Fue el responsable del nacimiento de la web tras la creación <br>
                Le corresponde el nacimiento del lenguaje HTML <br>
                robablemente sea el que más influencia <br>
                ha tenido en el mundo <br>
                Fundador del World Wide Web<br>
              <p class="card-ports--paragraph" style="color: #026fff; text-decoration-line: overline;">Contact</p>
              </p>
          </div>
        </a>
        <a class="card-ports-galery" href="">
          <div class="item level-3">
            <img class="perfil-card"  src="images/images-page-experiencias/perfil6.jpg" alt=""><br><br>
            <p class="card-ports--paragraph"> Brian Behlendorf Desarrollo el Apache Web Server</p>
                <p class="card-ports--paragraph" style="font-weight: initial;"> Primer servidor que superó los 100 millones de páginas Web<br>
                que surgió a partir de los problemas  <br>
                servidor más utilizado no era capaz de tolerar <br>
                cantidad de usuarios registrados <br>
                Desarrollar el Apache Web Server <br>
              <p class="card-ports--paragraph" style="color: #026fff; text-decoration-line: overline;">Contact</p>
              </p>
          </div>
        </a>
        
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
                <a href="politicas.php">Politicas de privacidad</a>
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