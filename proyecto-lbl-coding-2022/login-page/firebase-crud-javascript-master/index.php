

<?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: firebase-crud-javascript-master/index.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Firebase CRUD</title>

  <!-- BOOTSWATCH -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/pulse/bootstrap.min.css">

  <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

</head>

<body class="bg-light">

  <!-- ADD TASK -->
  <div class="container p-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">

            <h1 class="h4">Agregar Cliente</h1>
            <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>

            <form id="task-form">
              <div class="form-group">
                <input type="text" id="task-nombres" class="form-control" class="Task Title" placeholder="Nombres y Apellidos"
                  autofocus>
              </div>
              <div class="form-group">
                <textarea id="task-dni" rows="1" class="form-control" placeholder="DNI"></textarea>
              </div>
              <div class="form-group">
                <textarea id="task-direccion" rows="1" class="form-control" placeholder="Dirección de Cliente"></textarea>
              </div>
              <div class="form-group">
                <input type="text" id="task-plan" class="form-control" class="Task Title" placeholder="Plan de Megas Mensuales"
                  autofocus>
              </div>
              <div class="form-group">
                <textarea id="task-ip" rows="1" class="form-control" placeholder="IP Ejm: 192.168.21.30"></textarea>
              </div>
              <div class="form-group">
                <input type="text" id="task-fechainstalacion" class="form-control" class="Task Title" placeholder="Fecha de Instalación"
                  autofocus>
              </div>

              <button class="btn btn-primary" id="btn-task-form">
                Agregar
              </button>

            </form>
          </div>
        </div>
      </div>
      <!-- Tasks List -->
      <div class="col-md-6" id="tasks-container"></div>
    </div>
  </div>

  <!-- FIREBASE -->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
     <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBECfrR1lHtSmr2HuaFI_qx4_eIUUgLB-8",
    authDomain: "multiservis-8df5a.firebaseapp.com",
    projectId: "multiservis-8df5a",
    storageBucket: "multiservis-8df5a.appspot.com",
    messagingSenderId: "678381160805",
    appId: "1:678381160805:web:05d36c4099b70d5d9a398c"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>

  <!-- CUSTOM CODE -->
  <script src="index.js"></script>
</body>

</html>