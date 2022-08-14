<?php
namespace Modelo;

use PDO;

include_once '../Entorno/conexion.php';

class Usuario{
    private $usuario;
    private $password;
    private $nombre;
    private $apellido;
    public $con;

    public function __construct(\Entidad\Usuario $usuarioE)
    {
        $this->usuario = $usuarioE->getUsuario();
        $this->password = $usuarioE->getContrasena();
        $this->nombre = $usuarioE->getNombre();
        $this->apellido = $usuarioE->getApellido();
        $this->con = new \Conexion();
    }
    public function Crear(){
        $sql = "SELECT * FROM usuario WHERE usuario=:usuario AND contrasena=:contrasena";
        $result = $this->con->conexion->prepare($sql);
        $result->bindParam(':usuario', $this->usuario);
        $result->bindParam(':contrasena', $this->password);
        $result->execute();

        $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
            if(isset($resultado)&& !empty($resultado)){
                session_start();
                $_SESSION['usuario'] = $this->usuario;
                $_SESSION['id'] = $resultado[0] ['idUsuario'];
            }else{
                $resultado = 0;
            }
            return $resultado;
    }

    public function registrarUsuario(){
    $sql = "INSERT INTO usuario VALUES (NULL, :usuario, :contrasena, :nombre, :apellido);";
    $result = $this->con->conexion->prepare($sql);
    $result->bindParam(':usuario', $this->usuario);
    $result->bindParam(':contrasena', $this->password);
    $result->bindParam(':nombre', $this->nombre);
    $result->bindParam(':apellido', $this->apellido);
    $result->execute();
    return "Creado con exito";
    }
}

?>