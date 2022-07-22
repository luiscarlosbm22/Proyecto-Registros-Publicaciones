<?php   session_start(); ?>

<?php   include("conexion.php"); ?>
<?php 
    
    include '../conexion.php';
    
    ?>
    
 
<?php
$objConexion= new conexion();
    $proyectos=$objConexion->consultar("SELECT  proyectos.nombre,imagen,descripcion,link_descarga_proyect,fecha_public, usuarios.apellidos_nombres FROM 
    proyectos INNER JOIN usuarios on proyectos.id_usuario=usuarios.id ORDER BY fecha_public DESC" );
    

?>
<?php


// $objConexion= new conexion();
//     $pro=$objConexion->consultar("SELECT id, usuario, email, apellidos_nombres, profesion, user_descripcion, imageperfil FROM usuarios WHERE id =id" );

 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
 header("location: ../login.php");
 exit;
 }

 $iduser = $_SESSION["id"];

$sql = "SELECT id, usuario, email, apellidos_nombres, profesion, user_descripcion, imageperfil FROM usuarios WHERE id ='$iduser'";


 $resultado = $link->query($sql);
 $row = $resultado->fetch_assoc();

  //$objConexion= new conexion();
 ///$proyectos=$objConexion->consultar("SELECT proyectos.nombre, usuarios.apellidos_nombres FROM proyectos INNER JOIN usuarios on proyectos.id_usuario=$iduser" );

// $sql = "SELECT count(*) as total  FROM `proyectos` where id_usuario= ".$row['id'] ;
// $result = $link->query($sql);
// $fila = $result->fetch_assoc();

//$sql = "SELECT *  FROM `proyectos` where id_usuario= ".$row['id'] ;
//$resultado2 = $link->query($sql);
//echo $resultado2->fetch_column();


?>
<?php
//$objConexion= new conexion();
//$result=$objConexion->consultar("SELECT proyectos.nombre, usuarios.apellidos_nombres FROM proyectos INNER JOIN usuarios on proyectos.id_usuario=usuarios.id" );

?>
    


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <title>Proyectos|LBM CODING</title>

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


</head>

<body>






  <i class="icon-menu burger-menu" id="burger-menu"></i>
  <header class="header">
    <div class="container">
      <figure class="logo">
        <img src="images/logo1.png" height="50" alt="Logo de http://lbmcoding.com" />
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
            <a class="link" href="page-blog.php">Blog</a>
          </li>
          
            <li>
              <a class="link" href="aprender.php">Aprender</a>
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
            <li><a class="dropdown-item" href="../cerrar-sesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </header><br><br>
  <section class="hero">
    <div class="container">
      <h1>
        Desarrolla <strong>Nuevos Proyectos</strong> <br /> Se <strong>el mejor</strong> cada<br> día con tu
        <strong>perfil profesional</strong>
      </h1>
      <img class="hero-image" src="images/background-page--portafolio.jpg" width="500" height="300" alt="imagen principal del sitio">
    </div>
  </section>

  <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Publica cuando quieras</h1>
            <p class="lead">Publica nuevos proyectos o ejercicios <button onclick="location.href='portafolio.php'  "  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Subir Nuevo Proyecto</button></p>

            <!-- Formulario de ventana Emergente  -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      
                      <!-- <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Angregar Nuevo Proyecto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div> -->
                      <!-- <div class="modal-body"> -->
                              
                        
                         
                        
                        <!-- <button type="submit" name="Aceptar" class="btn btn-primary">Aceptar</button> -->
                          <!-- <form action="page-portafolios.php" method="post" enctype="multipart/form-data" >
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Titulo:</label>
                            <input  required placeholder="Ingrese titulo o nombre del proyecto" type="text" class="form-control" name="nombre" id="">
                          </div>
                          
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Descripción:</label>
                            <textarea  placeholder="Ingrese descripción del proyecto" class="form-control" name="descripcion"  id="message-text"></textarea>
                          </div> 
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Imagen:</label><br>
                            <input type="file" required name="archivo" id=""/>
                          </div>

                        </form>
                      </div> -->
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input required class="btn btn-success" type="submit" value="Enviar Proyecto">
                      </div> -->
                    </div>
                  </div>
              </div>
               <!-- Cierre Formulario de ventana Emergente  -->
            
            <hr class="my-2">
            <p>Publicados por Usuarios</p>
            
        </div>
    </div>
    <?php foreach ($proyectos as $proyecto){?>
    <?php } ?>



  <section id="portafolio" class="portfolio">

    <div class="container-portafolio">
    <?php foreach ($proyectos as $proyecto){?>
        <div class="card-ports-galery" href="">
          <div class="item level-1">
            <img class="image-proyecto" src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top2" alt="..."><br><br>
            <h5 class="text-muted"><?php echo $proyecto['nombre']; ?></h5>
                <p class="text-muted"><?php echo $proyecto['descripcion']; ?></p>
                <p class="text-info"><span class="text-muted">Por:</span> <?php echo $proyecto['apellidos_nombres']; ?></p>
                <p class="text-info"><span class="text-muted">Publicado:</span> <?php echo $proyecto['fecha_public']; ?></p>
                <a data-title="Mira más información" href="<?php echo $proyecto['link_descarga_proyect'];  ?>" target="_blank" class="badge badge-primary">Ver Info</a> 
                <a data-title="Comunicate con el creador de este proyecto" href="imagenes/<?php echo $proyecto['imagen']; ?>" class="badge badge-success">Contacto</a> 
                <a data-title="Comparte en tus redes sociales" href="#" class="badge badge-warning">Compartir</a>
          </div>
    </div>
       
        
       <?php } ?>
    </div>

  </section>
  <div class="p-5 bg-light">
        <div class="container">
            
            <hr class="my-2">
            
            <p>Publicados por Admins o Team</p>
        </div>
    </div>

  <!--     =========================================            -->
  
  <section id="portafolio" class="portfolio">
    <div class="container-portafolio">
        <div class="card-ports-galery" href="">
          <div class="item level-1">
            <img class="image-proyecto" src="images/port1.png" alt="">
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
            <div class="item level-2">
                <img class="image-proyecto" src="images/port2.png" alt=""><br><br>
                <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado </p>
                <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
            </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-3">
            <img class="image-proyecto" src="images/port3.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-1">
            <img class="image-proyecto" src="images/port4.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-2">
            <img class="image-proyecto" src="images/port5.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-3">
            <img class="image-proyecto" src="images/port6.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-1">
            <img class="image-proyecto" src="images/port7.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-2">
            <img class="image-proyecto" src="images/port8.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-3">
            <img class="image-proyecto" src="images/port9.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-1">
            <img class="image-proyecto" src="images/port10.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-2">
            <img class="image-proyecto" src="images/port11.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-3">
            <img class="image-proyecto" src="images/port12.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-1">
            <img class="image-proyecto" src="images/port13.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-2">
            <img class="image-proyecto" src="images/port14.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
        <div class="card-ports-galery" href="">
          <div class="item level-3">
            <img class="image-proyecto" src="images/port15.png" alt=""><br><br>
            <p class="card-ports--paragraph">Plantilla para portafolio desing blue certificado</p>
            <a href="#" class="badge badge-primary">Ver Info</a> <a href="#" class="badge badge-dark">Descargar</a>
          </div>
        </div>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>