
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
<html>
	<head>
		<title>Trabaja con nosotros | LBM CODING</title>

		<meta charset="UTF-8" />
		<link rel="stylesheet" href="../css-login/styles-icons.css">
   
  <!-- <link rel="stylesheet" href="css/estilos-menutabs.css"> -->
  <!-- <link rel="stylesheet" href="css/estilos-post-list.css"> -->
  <link rel="icon" type="image/png" href="images/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">





<!-- Latest compiled JavaScript -->

  <!-- <link rel="stylesheet" href="css/styles-user-menu.css"> -->
  <!-- <link rel="stylesheet" href="css/page-blog.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/styles-experiencias.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <link rel="stylesheet" href="css-page-trabaja-nosotros/style.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


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
            <a class="link" href="#contacto">Trabajemos juntos</a>
          </li>
          <li>
            <a class="link" href="../paneles/page-blog.php">Blog</a>
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
  </header><br><br><br><br>








		<div class="container">
    <h4>Hagamos un equipo juntos | LBM CODING esta echo para todos</h4>

    <div class="row">
				<div class="col-md-12" style="margin:0 auto; float:none;">
					<br />
					
                    <hr>
                    <div class="card">
  <h5 class="card-header">Enviar informe</h5>
  <div class="card-body">
	<form action="enviar-mail.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-5">
								
								<div class="mb-3">
									<label>Nombre</label>
									<input type="text" name="nombre" value="<?php echo ($row['apellidos_nombres']); ?>" maxlength="50" placeholder="Ingrese nombre" class="form-control" required>
								</div>
								<div class="mb-3">
									<label>Email</label>
									<input type="email" name="email" class="form-control" value="<?php echo ($row['email']); ?>" maxlength="60" placeholder="Ingrese Email" required />
								</div>
                <div class="mb-3">
									<label>Edad</label>
									<input type="text" name="edad" maxlength="2" placeholder="Ingresa tu edad" class="form-control" required />
								</div>
                <div class="mb-3">
									<label>Universidad</label>
									<input type="text" name="universidad" maxlength="100" placeholder="Nombre de tu Universidad" class="form-control" required />
								</div>
                <div class="mb-3">
									<label>Profesión</label>
									<input type="text" name="profesion" maxlength="60"  placeholder="Ingresa tu profesión"  value="<?php echo ($row['profesion']); ?>" class="form-control" required />
								</div>
								
							</div>
						<div class="col-md-7">
                           <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 files color">
                                <label> Seleccione: Imagen, PDF (para enviar archivos comprimidos .rar, etc SOLO ARRASTRALOS AQUI)  </label>
                                <input type="file" class="form-control" name="resume" accept="image/*, .pdf" required>
                           
                                </div>
                                <div class="mb-3 ">
                                <label> Cuentanos porque quieres trabajar con nosotros &#128522; </label>
                                <textarea name="" id="" cols="80" rows="5" placeholder="Dejanos un comentario..."></textarea>
                           
                                </div>
                            </div>
                            </div>
                        </div>
						</div>
                        <hr>
						<div class="mb-3" align="center">
							<button name="submit" value="" class="btn btn-primary">Enviar informe</button>
						</div>
					</form>
  </div>
</div>
				</div>
			</div><br>
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Únete a nuestra comunidad</h5>
        <p class="card-text">Ivita a tu amigos, comparte nuestra información para que todos sepan de nosotros.
          Todos aprendemos juntos, únete al grupo de Whatsapp  o Facebook.
        </p>
        
        <a href="#" class="btn btn-primary">Facebook <i class="fa-brands fa-facebook"></i></a> <a href="#" class="btn btn-primary2">Whatsapp <i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Únete a nuestra Universidad</h5>
        <div style="position: relative; width: 100%; height: 0; padding-top: 56.3415%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFE6GXogQw&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>
<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFE6GXogQw&#x2F;view?utm_content=DAFE6GXogQw&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener"></a>
        <a href="#" class="btn btn-primary">Ver Universidad</a>
      </div>
    </div>
  </div>
</div>
			
		</div><br>
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
  <script src="https://kit.fontawesome.com/5001642c47.js" ></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script><link rel="stylesheet" href="css/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	</body>
</html>