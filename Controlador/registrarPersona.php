<?php
include_once '../entidad/usuarioEntidad.php';
include_once '../modelo/usuarioModelo.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$usuarioE = new Entidad\Usuario();
$usuarioE ->setNombre($nombre);
$usuarioE ->setApellido($apellido);
$usuarioE ->setUsuario($usuario);
$usuarioE ->setContrasena($contrasena);
 
$usuarioM = new Modelo\Usuario($usuarioE);
$respuesta = $usuarioM->registrarUsuario();
echo json_encode($respuesta);
unset($usuarioE);
unset($usuarioM);
