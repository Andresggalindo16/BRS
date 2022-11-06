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
        $sql = "SELECT s.*, c.nombre as cliente_nombre  from solicitudes s inner join clientes c on s.idCliente = c.idCliente ";
        return $this->conn->getData($sql);
    }

    function getSolicitudesId($id){
        $sql = "SELECT s.*, c.nombre as cliente_nombre  from solicitudes s inner join clientes c on s.idCliente = c.idCliente where s.idSolicitud = $id";
        return $this->conn->getData($sql);
    }

    function insertSolicitud($post){
        $sql = "INSERT INTO solicitudes (titulo,solucion,ambiente,idCliente,prioridad,observaciones,idEstado) values('{$post['titulo']}','{$post['solucion']}','{$post['ambiente']}', '{$post['cliente']}', '{$post['prioridad']}', '{$post['observacion']}', '1')";
        return $this->conn->updateData($sql);
    }

    function updateSolicitud($post){
        $sql = "UPDATE solicitudes set comentarioFinal = '{$post['comentarioFinal']}' where idSolicitud = '{$post['idSolicitud']}' ";
        return $this->conn->updateData($sql);
    }
  
}
