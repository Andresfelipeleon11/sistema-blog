<?php
session_start();
if (isset($_SESSION['usuario']) AND !empty($_SESSION['usuario'])){
    $respuesta = 1;
}else{
    $respuesta = 0;
}
?>