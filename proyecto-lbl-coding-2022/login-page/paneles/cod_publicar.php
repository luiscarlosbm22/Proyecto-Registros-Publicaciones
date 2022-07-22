

<?php  

$txtID_Proyects=(isset($_POST['txtID_Proyects']))?$_POST['txtID_Proyects']:"";
$txtID_Usuario=(isset($_POST['txtID_Usuario']))?$_POST['txtID_Usuario']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";


$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$txtLink_Descarga_Proyect=(isset($_POST['txtLink_Descarga_Proyect']))?$_POST['txtLink_Descarga_Proyect']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtfecha=(isset($_POST['txtfecha']))?$_POST['txtfecha']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../db/conexion_proyects.php");



switch($accion){

            case "Agregar":
                //INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES (NULL, 'libro de php', 'imagen.jpg');
                $sentenciaSQL= $conexion->prepare("INSERT INTO proyectos ( id_usuario, nombre, imagen, link_descarga_proyect, descripcion, fecha_public) 
                VALUES (:id_usuario, :nombre, :imagen, :link_descarga_proyect, :descripcion, :fecha_public);");
                $sentenciaSQL->bindParam(':id_usuario',$txtID_Usuario);
                $sentenciaSQL->bindParam(':nombre',$txtNombre);
                $sentenciaSQL->bindParam(':link_descarga_proyect',$txtLink_Descarga_Proyect);
                $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
                $sentenciaSQL->bindParam(':fecha_public',$txtfecha);

                $fecha= new DateTime();
                $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

                $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

                if($tmpImagen!=""){

                    move_uploaded_file($tmpImagen,"imagenes/".$nombreArchivo);
                }

                $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
                $sentenciaSQL->execute();
               
                print "<script>
                window.setTimeout(function() { window.location = 'portafolio.php' }, 200);
                
                </script>";
                
                
                break;
            case "Modificar":

                $sentenciaSQL= $conexion->prepare("UPDATE  proyectos SET nombre=:nombre, link_descarga_proyect=:link_descarga_proyect, descripcion=:descripcion WHERE id_proyectos=:id_proyectos");
                $sentenciaSQL->bindParam(':nombre',$txtNombre);
                $sentenciaSQL->bindParam(':link_descarga_proyect',$txtLink_Descarga_Proyect);
                $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
                $sentenciaSQL->bindParam(':id_proyectos',$txtID_Proyects);
                $sentenciaSQL->execute();

                if($txtImagen!=""){


                    $fecha= new DateTime();
                    $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

                    $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

                    move_uploaded_file($tmpImagen,"imagenes/".$nombreArchivo);

                $sentenciaSQL= $conexion->prepare("SELECT imagen FROM proyectos WHERE id_proyectos=:id_proyectos");
                $sentenciaSQL->bindParam(':id_proyectos',$txtID_Proyects);
                $sentenciaSQL->execute();
                $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

                if(isset($libro["imagen"])&&($libro["imagen"]!="imagen.jgp")){

                    if(file_exists("imagenes/".$libro["imagen"])){

                        unlink("imagenes/".$libro["imagen"]);
                    }


                }

                $sentenciaSQL= $conexion->prepare("UPDATE  proyectos SET imagen=:imagen WHERE id_proyectos=:id_proyectos");
                $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
                $sentenciaSQL->bindParam(':id_proyectos',$txtID_Proyects);
                $sentenciaSQL->execute();
                
                }
                print "<script>window.setTimeout(function() { window.location = 'portafolio.php' }, 200);</script>";
                
                
                break;

                case "Cancelar":
                    print "<script>window.setTimeout(function() { window.location = 'portafolio.php' }, 200);</script>";
                    
                    break;
            case "Seleccionar":
                //
                $sentenciaSQL= $conexion->prepare("SELECT * FROM proyectos WHERE id_proyectos=:id_proyectos");
                $sentenciaSQL->bindParam(':id_proyectos',$txtID_Proyects);
                $sentenciaSQL->execute();
                $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

                $txtNombre=$libro['nombre'];
                $txtLink_Descarga_Proyect=$libro['link_descarga_proyect'];
                $txtDescripcion=$libro['descripcion'];
                $txtImagen=$libro['imagen'];

                break;
            case "Borrar":

                $sentenciaSQL= $conexion->prepare("SELECT imagen FROM proyectos WHERE id_proyectos=:id_proyectos");
                $sentenciaSQL->bindParam(':id_proyectos',$txtID_Proyects);
                $sentenciaSQL->execute();
                $libro=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

                if(isset($libro["imagen"])&&($libro["imagen"]!="imagen.jgp")){

                    if(file_exists("imagenes/".$libro["imagen"])){

                        unlink("imagenes/".$libro["imagen"]);
                    }


                }

                    $sentenciaSQL= $conexion->prepare("DELETE  FROM proyectos WHERE id_proyectos=:id_proyectos");
                     $sentenciaSQL->bindParam(':id_proyectos',$txtID_Proyects);
                     $sentenciaSQL->execute();
                     
                     print "<script>window.setTimeout(function() { window.location = 'portafolio.php' }, 200);</script>";
                     
                //echo "Presionado el boton Borrar";
                break;

}



$sentenciaSQL= $conexion->prepare("SELECT *  FROM `proyectos` where  id_usuario=".$row['id'] );
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);




// $objConexion= new conexion();
// $proyectos=$objConexion->consultar("SELECT *  FROM `proyectos` where id_usuario= ".$row['id'] );

?>

<!-- <script language= javascript type= text/javascript>

function alertDelete(){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })
}
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->