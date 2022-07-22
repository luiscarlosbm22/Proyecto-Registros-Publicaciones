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
  <title>Politicas y Privaciadad</title>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles-experiencias.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <i class="icon-menu burger-menu" id="burger-menu"></i>
    <header class="header">
        <div class="container">
            <figure class="logo">
                <img src="images/logo1.png" height="50" alt="Logo de http://leonidasesteban.com" />
            </figure>
            <nav class="menu" id="menu">
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

                    <!-- <img  class="image-user" src="images/user.png" alt=""> -->

                </ol>
            </nav>

        </div>
    </header><br><br><br><br>

    <div class="container">
        <div class="">
            <h1>Políticas de Privacidad</h1>
            <p>
                El presente Política de Privacidad establece los términos en que LBM Coding usa y
                protege la información que es proporcionada por sus usuarios al momento de utilizar
                su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus
                usuarios. Cuando le pedimos llenar los campos de información personal con la cual
                usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo
                con los términos de este documento. Sin embargo esta Política de Privacidad puede
                cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos
                revisar continuamente esta página para asegurarse que está de acuerdo con dichos
                cambios.
            </p>
            <h3>
                Información que es recogida
            </h3>
            <p>
                Nuestro sitio web podrá recoger información personal por ejemplo: Nombre, información
                de contacto como su dirección de correo electrónica e información demográfica.
                Así mismo cuando sea necesario podrá ser requerida información específica para procesar
                algún pedido o realizar una entrega o facturación.
            </p>
            <h3>
                Uso de la información recogida
            </h3>
            <p>
                Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio
                posible, particularmente para mantener un registro de usuarios, de pedidos en caso que
                aplique, y mejorar nuestros productos y servicios. Es posible que sean enviados correos
                electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos
                productos y otra información publicitaria que consideremos relevante para usted o que
                pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección
                que usted proporcione y podrán ser cancelados en cualquier momento.
            </p>
            <p>
                LBM Coding está altamente comprometido para cumplir con el compromiso de mantener su
                información segura. Usamos los sistemas más avanzados y los actualizamos constantemente
                para asegurarnos que no exista ningún acceso no autorizado.
            </p>
            <h3>Cookies</h3>
            <p>
                Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso
                para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve
                entonces para tener información respecto al tráfico web, y también facilita las futuras
                visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las
                web pueden reconocerte individualmente y por tanto brindarte el mejor servicio
                personalizado de su web.
            </p>
            <h3>Enlaces a Terceros</h3>
            <p>
                Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés.
                Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos
                control sobre al sitio al que es redirigido y por lo tanto no somos responsables de
                los términos o privacidad ni de la protección de sus datos en esos otros sitios
                terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por
                lo cual es recomendable que los consulte para confirmar que usted está de acuerdo
                con estas.
            </p>
            <h3>Control de su informacion personal</h3>
            <p>
                En cualquier momento usted puede restringir la recopilación o el uso de la información
                personal que es proporcionada a nuestro sitio web. Cada vez que se le solicite rellenar
                un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir
                información por correo electrónico. En caso de que haya marcado la opción de recibir
                nuestro boletín o publicidad usted puede cancelarla en cualquier momento.
            </p>
            <p>
                Esta compañía no venderá, cederá ni distribuirá la información personal que es
                recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden
                judicial.
            </p>
            <p>
                LBM Coding Se reserva el derecho de cambiar los términos de la presente Política de
                Privacidad en cualquier momento.
            </p>
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
                <p>Desarrolladores y Programadores Unidos 2022 <img src="images/lbm-coding.png" width="80" alt="LBM-CODING"></p>
            </div>
            <div>
                <a href="">Politicas de privacidad</a>
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
    	<script src="https://kit.fontawesome.com/5001642c47.js" ></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script><link rel="stylesheet" href="css/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
</body>

</html>