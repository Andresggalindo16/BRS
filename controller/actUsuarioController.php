<?php
session_start();
require_once "../modelos/usuario.php";

$usuario2 = new usuario;

//Creacion de cliente
if (empty($_POST)) {
    header("location: ../crear_usuario.php");
}else {
    $usuario = $usuario2->updateUsuario($_POST);
    header("location: ../validacion_usuario.php?msg=Usuario Actualizado Correctamente!");   
}