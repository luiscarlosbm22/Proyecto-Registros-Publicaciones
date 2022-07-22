<?php

// require "code-login.php";

?>
<?php
    include('msjs.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Recuperar Password - LBM</title>
    <link rel="stylesheet" href="css-login/estilos.css">
    <link rel="icon" type="image/png" href="paneles/images/favicon1.png" />
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="paneles/css/estilos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

   
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
            <a class="link" href="../project.html">Proyectos</a>
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
  </header><br><br>

    <div class="container-all">

        <div class="ctn-form">
            <img src="../images/logo1.png" alt="" class="logo">
            <h1 class="title">Recupera tu Contraseña</h1>

            <form action="recuperarClaveConLink.php" method="post">

                <label for="">Ingresa Email</label>
                <input type="text" name="email"  required autocomplete="off">
                <input type="submit" value="Recuperar Password">

            </form>
            

            <span class="text-footer">¿Aún no te has regsitrado?
                <a href="register.php">Registrate</a><br><br>
                <a href="login.php">Iniciar Sesión</a>
            </span>
        </div>

        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">Inicia y descarga códigos gratis.</h1>
            <p class="text-description">Podrás ver los ejercicios completos y descargar sus códigos fuente de cada uno,
                todos los lenguajes de programación disponibles para usuarios registrados en nuestra página web. Podrás pedir ayuda 
                a expertos en tus tareas. <br> <br> <br>
                
            </p>
            <p class="text-description">Gana puntos realizando tareas diarias y gana premios exclusivos, acumula tus puntos y obten 20 dólares.
                
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