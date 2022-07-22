<?php

require "code-login.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - LBM</title>
    <link rel="stylesheet" href="css-login/estilos.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="icon" type="image/png" href="paneles/images/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="paneles/css/estilos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="../css/style.css" rel="stylesheet">
   
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
         
         
          
          <li>
            <a class="link" href="../project.php">Proyectos</a>
          </li>
          <li>
            <a class="link" href="login.php">Inicia sesión</a>
          </li>
          <li>
            <a class="link-registro" href="register.php">Regístrate</a>
          </li>
        </ol>
      </nav>
    </div>
  </header><br>

  <div class="container-xxl py-5 bg-primary hero-header mb-5">

  

        <div class="container-all">

            <div class="ctn-form">
                <img src="../images/logo1.png" alt="" class="logo">
                <h1 class="title">Iniciar Sesión</h1>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <label for="">Email</label>
                    <input type="text" name="email">
                    <span class="msg-error"><?php echo $email_err; ?></span>
                    <label for="">Contraseña</label>
                    <input type="password" name="password">
                    <span class="msg-error"><?php echo $password_err; ?></span>

                    <input type="submit" value="Iniciar">

                </form>
                

                <span class="text-footer">¿Aún no te has regsitrado?
                    <a href="register.php">Registrate</a><br><br>
                    <a href="olvideMipassword.php">Olvide mi contraseña</a>
                </span>
            </div>

            <div class="ctn-text">
                <div class="capa"></div>
                <h1 class="title-description">Inicia y descarga codigos gratis.</h1>
                <p class="text-description">Podrás ver los ejercicios completos y descargar sus códigos fuente de cada uno,
                    todos los lenguajes de programación disponibles para usuarios registrados en nuestra página web. Podrás pedir ayuda 
                    a expertos en tus tareas. <br> <br> <br>
                    
                </p>
                <p class="text-description">Gana puntos realizando tareas diarias y gana premios exclusivos, acumula tus puntos y obten 20 dólares.
                    
                </p>
            </div>

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