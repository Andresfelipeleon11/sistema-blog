<?php
include_once '../Entidad/usuarioEntidad.php';
include_once '../Modelo/usuarioModelo.php';


$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];


$usuarioE = new \Entidad\Usuario();
$usuarioE->setUsuario($usuario);
$usuarioE->setContrasena($password);

$usuarioM = new \Modelo\Usuario($usuarioE);
$respuesta = $usuarioM->Crear();
echo json_encode($respuesta);

unset($usuarioE);
unset($usuarioM);


?>