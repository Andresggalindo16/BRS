<?php
require_once "modelos/solicitudes.php";
$objetocuentas = new solicitudes;


if (isset($_GET['Listar'])) {

    $solicitud = $objetocuentas->getsolicitudes();
    require_once("validacion_solicitud.php");
}

if (isset($_GET['verSolicitud'])) {
    $solicitud = $objetocuentas->getSolicitudesId($_GET['verSolicitud']);
    require_once("actualizar_solicitud.php");
}

if (isset($_POST['addSolicitud'])) {
    $solicitud = $objetocuentas->insertSolicitud($_POST);
    header("Location: validacion_solicitud.php?Listar ");
}

if (isset($_POST['actualizar_solicitud'])) {
    $solicitud = $objetocuentas->updateSolicitud($_POST);
    header("Location: validacion_solicitud.php?Listar ");
}

if (isset($_GET['ListarFinalizadas'])) {
    $solicitud = $objetocuentas->getsolicitudesFinalizadas();
    require_once("validacion_solicitud.php");
}
