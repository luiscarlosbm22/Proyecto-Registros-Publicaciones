<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> <br> <br>
        <form action="proceso-guardar.php" method="POST" enctype="multipart/form-data">
            <input type="text" required name="nombre" placeholder="Nombre" value=""/><br> <br>
            <input type="file" required name="Imagen"/><br> <br>
            <input type="submit" name="Aceptar"/>
        </form>


    </center>
</body>
</html>