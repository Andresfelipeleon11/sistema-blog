<?php

class Conexion extends PDO{
    public $conexion;
    public $ultimoid;

    public function __construct()
    {
      try{
        $this->conexion = new PDO('mysql:host=localhost; dbname=blog', 'root', '');
      }  
      catch (PDOException $e){
        die("Error: No fue posible conectarse a la base de datos".$e->getCode());
      }
    }
    public function ultimoId(){
     $sql = "SELECT LAST_INSERT_ID() AS ultimoId";
     $result = $this->conexion->prepare($sql);
     $result->execute();
     $retorno = $result->fetchAll(PDO::FETCH_ASSOC);
     return $retorno;
    }
}
?>