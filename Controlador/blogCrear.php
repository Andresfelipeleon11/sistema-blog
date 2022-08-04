<?php
include_once '../Entidad/blogEntidad.php';
include_once '../Modelo/blogModelo.php';


$mensaje = $_POST['mensaje'];


$blogE = new \Entidad\Blog();
$blogE->setMensaje($mensaje);

$blogM = new \Modelo\Blog($blogE);
$respuesta = $blogM->Crear();
echo json_encode($respuesta);
unset($blogE);
unset($blogM);





?>