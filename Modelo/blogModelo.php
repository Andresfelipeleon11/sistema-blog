<?php
namespace Modelo;

include_once '../Entorno/conexion.php';


class Blog{
    private $mensaje;
    public $con;

    public function __construct(\Entidad\Blog $blogE){
        $this->mensaje = $blogE->getMensaje();
        $this->con = new \Conexion();
    }

    public function Crear(){
        $sql = "INSERT INTO blog Values (NULL,:mensaje)";
        $result = $this->con->conexion->prepare($sql);
        $result ->bindParam(':mensaje',$this->mensaje);
        $result->execute();
        return "Creado con exito";
    }

}

?>