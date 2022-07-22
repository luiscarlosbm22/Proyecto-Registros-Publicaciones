<?php 
    
    include 'code-register.php';

?>

<?php 
header('Content-Type: text/html; charset=UTF-8');  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register - MagtimusPro</title>
    <link rel="stylesheet" href="css-login/estilos.css">
    <link rel="icon" type="image/png" href="paneles/images/favicon1.png" />
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="paneles/css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>
<i class="icon-menu burger-menu" id="burger-menu"></i>
<header class="header">
    <div class="container">
      <figure class="logo">
        <img src="paneles/images/logo1.png" height="50" alt="" />
      </figure>
      <nav class="menu">
        <ol>
          <li>
            <a class="link" href="../index.html">Inicio</a>
          </li>
          <!-- <li>
            <a class="link" href="paneles/page-portafolios.php">Portafolios</a>
          </li> -->
          <!-- <li>
            <a class="link" href="paneles/page-experiencias.php">Experiencias</a>
          </li> -->
          
          
            <li>
              <a class="link" href="../project.php">Proyectos</a>
            </li>
            
            <li>
              <a class="link" href="login.php">Iniciar Session</a>
            </li>
        
        </ol>
      </nav>
    </div>
  </header><br>

    <div class="container-all">

        <div class="ctn-form">
            <img src="../images/logo1.png" alt="" class="logo">
            <h1 class="title">Registrarse</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               
                <label for="">Nombre de Usuario</label>
                <input type="text" name="username">
                <span class="msg-error"><?php echo $username_err; ?></span>
                <label for="">Apellidos y Nombres Completos</label>
                <input type="text" name="apellidos_nombres">
                <span class="msg-error"><?php echo $apellidos_nombres_err; ?></span>
                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"> <?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"> <?php echo $password_err; ?></span>
                <label for="">Carrera Profesional</label>
                <input type="text" name="profesion">
                <span class="msg-error"><?php echo $profesion_err; ?></span>
                <label for="">Una breve descripcion sobre ti</label>
                <input type="text" name="user_descripcion">
                <span class="msg-error"><?php echo $user_descripcion_err; ?></span>

                <input type="submit" value="Registrarse">

            </form>

            <span class="text-footer">¿Ya te has registrado?
                <a href="login.php">Iniciar Sesión</a>
            </span>
        </div>

        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">Registrate ahora y comienza a ganar puntos y a crecer como programador</h1>
            <p class="text-description">Solo tienes el poder para convertirte en el mejor programador profesional, por eso 
                te ayudamos a conseguir tus objetivos con solo registrate tienes los beneficios gratis, descubre loq ue tenemos para ti.
            </p> <br> <br> <br>
            <p class="text-description">En nuestra comunidad todos compartimos nuestras ideas comparte la tuya ahora!!.
            </p>
        </div>

    </div>

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

</body>

</html>
