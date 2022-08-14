<?php
session_start();
session_unset();
session_destroy();

if (isset($_SESSION['usuario'])AND !empty($_SESSION['usuario'])){
    $resultado= 0;
}else{
    $resultado= 1;
}
echo json_encode($resultado);
?>