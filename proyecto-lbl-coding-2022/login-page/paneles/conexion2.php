<?php 
    class conexion2{
        private $servidor="localhost";
        private $usuario="root";
        private $contrasenia="";
        private $conexion;
        private $charset;
        

        public function __construct() {


            $this->charset  = 'utf8';
            try{
                
                $this->conexion= new PDO("mysql:host=$this->servidor;dbname=login_tuto" ,$this->usuario,$this->contrasenia  );
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                
                

            }catch( PDOException $e){
                return "falla de conexion".$e; 
            }
        }
        public function ejecutar($sql){
            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();
            $sql->set_charset("utf8");
            
        }
        public function consultar($sql){
            $sentencia=$this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();
           
           $sql->set_charset("utf8");
           
           
            
        }
       
       
    }
    
    
    
?>