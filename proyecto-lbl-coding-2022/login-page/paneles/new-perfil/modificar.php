<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php
                    include("conexion.php");

                    $id = $_REQUEST['id'];

                    $query = "SELECT * FROM usuarios WHERE id ='$id'";
                    $resultado = $conexion->query($query);
                   $row = $resultado->fetch_assoc();

                ?>
    <center> <br> <br>
        <form action="proceso-modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            
            <img height="70px" src="data:image/png;base64, <?php echo base64_encode($row['imageperfil']); ?>" alt=""/> 
            <input type="file" required name="Imagen"/><br> <br>
            <input type="submit" name="Aceptar"/>
        </form>


    </center>
</body>
</html>