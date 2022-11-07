<?php
session_start();
require_once "../modelos/cliente.php";

$cliente2 = new cliente;

//Creacion de cliente
if (empty($_POST['crear'])) {
    header("location: ../crear_cliente.php");
}else {
    $cliente = $cliente2->insertCliente($_POST);
    header("location: ../validacion_clientes.php?msg=Cliente Creado Correctamente!");   
}