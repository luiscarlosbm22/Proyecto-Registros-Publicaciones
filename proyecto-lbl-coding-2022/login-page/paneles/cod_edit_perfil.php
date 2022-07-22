

<?php  

// $txtID_Proyects=(isset($_POST['txtID_Proyects']))?$_POST['txtID_Proyects']:"";
$txtID_Usuario=(isset($_POST['txtID_Usuario']))?$_POST['txtID_Usuario']:"";
$txtUser=(isset($_POST['txtUser']))?$_POST['txtUser']:"";
$txtNomresApellidos=(isset($_POST['txtNomresApellidos']))?$_POST['txtNomresApellidos']:"";
$txtEmail=(isset($_POST['txtEmail']))?$_POST['txtEmail']:"";
$txtProfesion=(isset($_POST['txtProfesion']))?$_POST['txtProfesion']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";

// $txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
// $txtLink_Descarga_Proyect=(isset($_POST['txtLink_Descarga_Proyect']))?$_POST['txtLink_Descarga_Proyect']:"";

// $txtfecha=(isset($_POST['txtfecha']))?$_POST['txtfecha']:"";

$action=(isset($_POST['action']))?$_POST['action']:"";

include("../db/conexion_proyects.php");



switch($action){

            
            case "Modificar":

                $sentenciaSQL= $conexion->prepare("UPDATE  usuarios SET usuario=:usuario, email=:email, apellidos_nombres=:apellidos_nombres, profesion=:profesion, user_descripcion=:user_descripcion WHERE id=:id");
                $sentenciaSQL->bindParam(':usuario',$txtUser);
                $sentenciaSQL->bindParam(':email',$txtEmail);
                $sentenciaSQL->bindParam(':apellidos_nombres',$txtNomresApellidos);
                $sentenciaSQL->bindParam(':profesion',$txtProfesion);
                $sentenciaSQL->bindParam(':user_descripcion',$txtDescripcion);
                $sentenciaSQL->bindParam(':id',$txtID_Usuario);
                $sentenciaSQL->execute();

                
                 print "<script>window.setTimeout(function() { window.location = 'perfil-user.php' }, 1000);</script>";
                
                
                break;

            case "Cancelar":
                    print "<script>window.setTimeout(function() { window.location = 'perfil-user.php' }, 1000);</script>";
                    
                break;
            // case "Seleccionar":
                
            //     $sentenciaSQL= $conexion->prepare("SELECT * FROM proyectos WHERE id_proyectos=:id_proyectos");
            //     $sentenciaSQL->bindParam(':id_proyectos',$txtID_Proyects);
            //     $sentenciaSQL->execute();
            //     $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            //     $txtNombre=$libro['nombre'];
            //     $txtLink_Descarga_Proyect=$libro['link_descarga_proyect'];
            //     $txtDescripcion=$libro['descripcion'];
            //     $txtImagen=$libro['imagen'];

            //     break;
            

}



// $sentenciaSQL= $conexion->prepare("SELECT *  FROM `proyectos` where id_usuario=".$row['id']  );
// $sentenciaSQL->execute();
// $listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);




// $objConexion= new conexion();
// $proyectos=$objConexion->consultar("SELECT *  FROM `proyectos` where id_usuario= ".$row['id'] );

?>