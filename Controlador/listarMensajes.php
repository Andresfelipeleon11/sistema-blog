<?php
include_once '../Entidad/blogEntidad.php';
include_once '../Modelo/blogModelo.php';

$blogE = new \entidad\Blog();
$blogM = new \modelo\Blog($blogE);
$respuesta = $blogM->Listar();
echo json_encode($respuesta);

unset($blogM);
unset($blogE);



?>