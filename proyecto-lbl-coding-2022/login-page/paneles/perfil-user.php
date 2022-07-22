<?php 
    
include '../conexion.php';


?>
<?php  include("cod_edit_perfil.php"); ?>


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

// $sql = "SELECT *  FROM `proyectos` where id_usuario= ".$row['id'] ;
// $resultado2 = $link->query($sql);
// echo $resultado2->fetch_column();


?>
<?php 
header('Content-Type: text/html; charset=UTF-8');  
?>
<?php   include("conexion.php"); ?>


<?php 

    // if($_POST){

    // $id_usuario=$_POST['id_usuario'];
    // $nombre=$_POST['nombre'];
    // $descripcion= $_POST['descripcion'];
    // $link_descarga_proyect=$_POST['link_descarga_proyect'];

    // $fecha= new DateTime();
    // $imagen=$fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    
    // $imagen_temporal=$_FILES['archivo']['tmp_name'];

    

    // move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

    // $objConexion= new conexion();
    // $sql="INSERT INTO `proyectos` (`id_proyectos`, `id_usuario`, `nombre`, `imagen`, `link_descarga_proyect`, `descripcion`) VALUES (NULL, '$id_usuario', '$nombre', '$imagen', '$link_descarga_proyect', '$descripcion');";
    
    // $objConexion->ejecutar($sql);
    
    // header("location:portafolio.php");

    // }

    // if($_GET){

    //     $id=$_GET['borrar'];
    //     $objConexion= new conexion();

    //     $imagen=$objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id_proyectos=".$id);
    //     unlink("imagenes/".$imagen[0]['imagen']);

    //     $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id_proyectos` =".$id;
    //      $objConexion->ejecutar($sql);


    // }


    $objConexion= new conexion();
    $proyectos=$objConexion->consultar("SELECT *  FROM `proyectos` where id_usuario= ".$row['id'] );

//     $datos = $objConexion->pdo->consultar("SELECT count(1)  FROM `proyectos` where id_usuario= ".$row['id'] );

// echo $datos->fetchColumn();

    
    // SELECT `id_proyectos`, `nombre`, `imagen`, `descripcion`  FROM `proyectos` WHERE  `id_usuario=21`
    //SELECT count(*) FROM proyectos WHERE id_usuario=23
    
   
?>




<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil | LBM CODING</title>
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
    <link rel="stylesheet" href="css/styles-perfil-user.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>

    <i class="icon-menu burger-menu" id="burger-menu"></i>

    <!-- Encbezado header -->
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
              <a class="link" href="#contacto">Trabajemos juntos</a>
            </li>
            <li>
            <a class="link" href="page-blog.php">Blog</a>
          </li>
            <li>
               <a class="link" href="#eventos">Aprender</a>
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
            <li><a class="dropdown-item" href="../cerrar-sesion.php">Cerrar Sesion</a></li>
        </ul>
      </div>
            </div>
            </li>
          </ol>
        </nav>
      </div>
    </header><br><br><br><br>
    <!-- Encbezado header END-->

    <div class="card-group">
      <div class="card">
        <div class="card" style="width: 18rem;">
  
            <img class="card-img-top" height="300px" src="data:image/png;base64, <?php echo base64_encode($row['imageperfil']); ?>" alt=""> 
          <div class="card-body">
          
          
          
                <!-- Cambiar Foto:  <a href="new-perfil/index.php">Modificar</a> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPerfil" data-whatever="@mdo">Cambiar Foto</button> <br>  <br>

                
                  <div class="modal fade" id="exampleModalPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Actualizar Foto de Perfil</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">  
                            <form action="new-perfil/proceso-modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                            <img height="70px" src="data:image/png;base64, <?php echo base64_encode($row['imageperfil']); ?>" alt=""/> 
                            <input type="file" required name="Imagen"/><br> <br>
                            <button type="submit" name="Aceptar" class="btn btn-primary">Aceptar</button>

                              <!-- <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div> -->
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Send message</button>
                        </div> -->
                      </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalInformacion" data-whatever="@mdo">Editar Información</button> <br> <br>

                    <div class="modal fade" id="exampleModalInformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edita tus datos personales</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form id="formulario"  method="POST"  >
                              <div class="form-group">
                                  
                                  <input type="hidden" class="form-control" id="txtID_Usuario" name="txtID_Usuario" value="<?php echo ($row['id']); ?>">
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Usuario:</label>
                                  <input type="text" class="form-control" id="txtUser" name="txtUser" value="<?php echo ($row['usuario']); ?>">
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Apellidos y Nombres:</label>
                                  <input type="text" class="form-control" id="txtNomresApellidos" name="txtNomresApellidos" value="<?php echo ($row['apellidos_nombres']); ?>">
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Correo Electrónico:</label>
                                  <input type="text" class="form-control" id="txtEmail"  name="txtEmail" value="<?php echo ($row['email']); ?>">
                                </div>
                                <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Correra Profesional:</label>
                                  <input type="text" class="form-control" id="txtProfesion" name="txtProfesion" value="<?php echo ($row['profesion']); ?>">
                                </div>
                                <div class="form-group">
                                  <label for="message-text" class="col-form-label">Descripción de tu perfil:</label>
                                  <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" ><?php echo ($row['user_descripcion']); ?></textarea>
                                </div>

                                <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  type="submit" name="action"  value="Modificar" class="btn btn-success">Guardar Cambios</button>

                              
                              
                            </div>
                              </form>

                            </div>
                            
                          </div>
                        </div>
                    </div>

                <h5 class="card-title"><?php echo ($row['usuario']); ?></h5>
                <p class="card-text"><?php echo ($row['user_descripcion']); ?></p>
                

          </div>


              <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo ($row['email']); ?></li>
                <li class="list-group-item"><?php echo ($row['profesion']); ?></li>
                <li class="list-group-item"><?php echo ($row['apellidos_nombres']); ?></li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">Redes Sociales</a>
                <br>
                <a href="portafolio.php" class="badge badge-danger">Eliminar un proyecto</a>

               
              </div>
         </div>
    </div>
      <div class="card">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body">
          <h5 class="card-title">Información de tu perfil Profesional</h5>
          <p class="card-text">Todos tu proyectos publicados se mostraran aqui, siempre hay algo nuevo que publicar.</p>
          <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>

          <script src="count_points.js"></script>

                  <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label  class="col-form-label" >Proyectos</label>
          </div>
          <div class="col-auto">
            <input  class="form-control" readonly="readonly" type="text" id="numero_inicial" name="numero_inicial" style=" width: 100px;" value=" <?php echo ($fila['total']);?>">
          </div>
          
          <div class="col-auto">
            <span id="btnPunytos" class="form-text">
            <button onclick="countPoints()" type="button" class="btn btn-success">Ver Puntos</button>
           
            </span>
          </div>
          <div class="col-auto">
            <span id="labelPuntos" class="form-text">
            
            <label  class="col-form-label" >Points</label>
            </span>
          </div>
          <div class="col-auto">
            <span id="labelPuntos" class="form-text">
            
            <input  class="form-control" type="text" id="total" name="total" style=" width: 100px;" readonly="readonly">
            </span>
          </div>
        </div> <br>

            

          <!-- <div class="col-md-6"> -->
                
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>Id</th> -->
                            <th>Nombre</th>
                            
                            <th>Descripcion</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($proyectos as $proyecto){?>
                        <tr>
                            <!-- <td scope="row"> <?php echo $proyecto['id_proyectos']; ?> </td> -->
                            <td><?php echo $proyecto['nombre']; ?></td>
                            
                            <td><?php echo $proyecto['descripcion']; ?></td>
                            
                            
                            <td>
                                <img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="" srcset="">   
                            </td>
                            <!-- <td><a  class="btn btn-danger" href="?borrar=<?php echo $proyecto['id_proyectos']; ?>" >Eliminar</a></td> -->
                            <td><a  class="btn btn-outline-success" href="<?php echo $proyecto['link_descarga_proyect']; ?>" >Descargar</a> </td>
                            
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            <!-- </div> -->

        </div>
      </div>
      
  
</div>
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