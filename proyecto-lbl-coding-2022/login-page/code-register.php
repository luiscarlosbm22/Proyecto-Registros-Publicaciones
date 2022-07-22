<?php 
header('Content-Type: text/html; charset=UTF-8');  
?>
<?php
    
    // Incluir archivo de conexion a la base de datos
    require_once "conexion.php";
    
    // Definir variable e inicializar con valores vacio
    $username = $email = $password = $apellidos_nombres = $profesion = $user_descripcion = "";
    $username_err = $email_err = $password_err = $apellidos_nombres_err = $profesion_err = $user_descripcion_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // VALIDANDO INPUT DE NOMBRE DE USUARIO
        if(empty(trim($_POST["username"]))){
            $username_err = "Por favor, ingrese un nombre de usuario";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM usuarios WHERE usuario = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                $param_username = trim($_POST["username"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "Este nombre de usuario ya está en uso";
                    }else{
                        $username = trim($_POST["username"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }
  
        // VALIDANDO INPUT DE EMAIL
        if(empty(trim($_POST["email"]))){
            $email_err = "Por favor, ingrese un correo";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM usuarios WHERE email = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                
                $param_email = trim($_POST["email"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $email_err = "Este correo ya está en uso";
                    }else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }
        
        
        // VALIDANDO CONTRASEÑA
        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, ingrese una contraseña";
        }elseif(strlen(trim($_POST["password"])) < 4){
            $password_err = "La contraseña debe de tener al menos 4 caracteres";
        } else{
            $password = trim($_POST["password"]);
        }


        // VALIDANDO INPUT DE APELLIDOS Y NOMBRES
        if(empty(trim($_POST["apellidos_nombres"]))){
            $apellidos_nombres_err = "Por favor, ingrese sus nombres y apellidos";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM usuarios WHERE apellidos_nombres = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_apellidos_nombres);
                
                $param_apellidos_nombres = trim($_POST["apellidos_nombres"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $apellidos_nombres_err = "Este nombres ya estan inscritos";
                    }else{
                        $apellidos_nombres = trim($_POST["apellidos_nombres"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }

         // VALIDANDO INPUT DE PROFESION
         if(empty(trim($_POST["profesion"]))){
            $profesion_err = "Por favor, ingrese su Profesion";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM usuarios WHERE profesion = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_profesion);
                
                $param_profesion = trim($_POST["profesion"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 2){
                        $profesion_err = "Debe completar este campo";
                    }else{
                        $profesion = trim($_POST["profesion"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }

        // VALIDANDO INPUT DE  USER_DESCRIPCION
        if(empty(trim($_POST["user_descripcion"]))){
            $$user_descripcion_err = "Por favor, ingrese una descripcion";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT id FROM usuarios WHERE user_descripcion = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_user_descripcion);
                
                $param_user_descripcion = trim($_POST["user_descripcion"]);
                
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 2){
                        $user_descripcion_err = "Debe completar este campo";
                    }else{
                        $user_descripcion = trim($_POST["user_descripcion"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }
        
        
        // COMPROBANDO LOS ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA BASE DE DATOS
        if(empty($username_err) && empty($email_err) && empty($password_err) && empty($apellidos_nombres_err) && empty($profesion_err) && empty($user_descripcion_err)){
            
            $sql = "INSERT INTO usuarios (usuario, email, clave, apellidos_nombres, profesion, user_descripcion) VALUES (?, ?, ?, ?, ?, ?)";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_email, $param_password, $param_apellidos_nombres, $param_profesion, $param_user_descripcion);
                
                // ESTABLECIENDO PARAMETRO
                $param_username = $username;
                $param_email = $email;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // ENCRIPTANDO CONTRASEÑA
                $param_apellidos_nombres = $apellidos_nombres;
                $param_profesion = $profesion;
                $param_user_descripcion = $user_descripcion;
                
                
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: login.php");
                }else{
                    echo "Algo Salio mal, intentalo despues";
                }
            }
        }
        
        mysqli_close($link);
        
    }
    
?>