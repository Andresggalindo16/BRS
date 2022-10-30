<?php
session_start();
require_once "../modelos/login.php";

$usuario    = $_REQUEST['username'];
$contrasena = $_REQUEST['password'];

$_SESSION['usuario']    = $usuario;
$_SESSION['contrasena'] = $contrasena;

$login2 = new login;
$login = $login2->getUsuarios($_SESSION['usuario']);

if ($_SESSION['usuario'] == $login[0]['usuario'] && $_SESSION['contrasena'] == $login[0]['contrasena']) {
    header("location: ../index.php?msg=$msg");
}else{
    $msg = 'El usuario no existe, verifique de nuevo';
    header("location: ../login.php?msg=$msg");
}

