<?php
  

  $conexion = new mysqli("localhost","root","","login_tuto");
  $conexion->set_charset("utf8");

  if($conexion){
      
  }else{
      echo "No conectado";
  }
?>