
<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $username;


   

    public function getNombre(){
        return $this->nombre;
    }
}

?>