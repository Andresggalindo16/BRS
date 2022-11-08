<?php

class solicitudes
{

    // Conexión
    private $conn;

    // Metodos
    public function __construct()
    {
        if (is_file('config/config.php')) {
            require_once "config/config.php";
        } else {
            require_once "../config/config.php";
        }
        $this->conn = new Conexion();
    }


    function getsolicitudes()
    {
        $sql = "SELECT s.*, c.nombre as cliente_nombre  from solicitudes s inner join clientes c on s.idCliente = c.idCliente where s.idEstado = '1' ";
        return $this->conn->getData($sql);
    }
    function getsolicitudesFinalizadas()
    {
        $sql = "SELECT s.*, c.nombre as cliente_nombre  from solicitudes s inner join clientes c on s.idCliente = c.idCliente where s.idEstado = '2' ";
        return $this->conn->getData($sql);
    }

    function getSolicitudesId($id){
        $sql = "SELECT s.*, c.nombre as cliente_nombre  from solicitudes s inner join clientes c on s.idCliente = c.idCliente where s.idSolicitud = $id";
        return $this->conn->getData($sql);
    }

    function insertSolicitud($post){
        $sql = "INSERT INTO solicitudes (titulo,solucion,ambiente,idCliente,prioridad,idResponsable,observaciones,idEstado) values('{$post['titulo']}','{$post['solucion']}','{$post['ambiente']}', '{$post['cliente']}', '{$post['prioridad']}','{$post['responsable']}', '{$post['observacion']}', '1')";
        return $this->conn->updateData($sql);
    }

    function updateSolicitud($post){
        $sql = "UPDATE solicitudes set idEstado = '2', comentarioFinal = '{$post['comentarioFinal']}' where idSolicitud = {$post['idSolicitud']} ";
        return $this->conn->updateData($sql);
    }
    function getCliente( ){
        $sql =" SELECT * from clientes where estado='on'";
        return $this->conn->getData($sql);
    }
    function getResponsable( ){
        $sql ="SELECT * from usuarios where estado='on' and idRol= '1' ";
        return $this->conn->getData($sql);
    }
    function getNombreResponsable($id){
        $sql = "SELECT nombre from usuarios where idUsuario='$id'";
        return $this->conn->getData($sql)[0][0];
    }
  
}
