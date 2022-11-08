<?php
session_start();
require_once "../modelos/cliente.php";

$cliente2 = new cliente;

//Actualizacion de cliente
if (empty($_POST['actualizar'])) {
    header("location: ../actualizar_cliente.php");
}else {
    $cliente = $cliente2->updateCliente($_REQUEST);
    header("location: ../validacion_clientes.php?msg=Cliente Actualizado Correctamente!");   
}
