<?php

class cliente
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

    public function set($atributo, $contenido)
    {
        $this->$atributo = $contenido;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function insertCliente($data)
    {
        $sql = "INSERT INTO clientes (nombre, nit, version, url, usuarioRegistro) VALUES ('{$data['cliente']}', '{$data['nit']}', '{$data['version']}', '{$data['url']}', '{$_SESSION['usuario']}')";
        return $this->conn->updateData($sql);
    }

    function updateCliente($data)
    {
        $sql = "UPDATE clientes SET nombre = '{$data['cliente']}', nit = '{$data['nit']}', version = '{$data['version']}', url = '{$data['url']}', estado = '{$data['estado']}'  WHERE idCliente = '{$data['id']}' ";
        
        return $this->conn->updateData($sql);
    }
   
    function getCliente()
    {
        $sql = "SELECT * FROM clientes WHERE estado ='on'";
        return $this->conn->getData($sql);
    }
      
}
