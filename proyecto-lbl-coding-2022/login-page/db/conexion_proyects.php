<?php 
$host="localhost";
$bd="login_tuto";
$usuario="root";
$contrasenia="";

try {
   $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
   if($conexion){
    
   }
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>