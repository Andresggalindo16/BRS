<?php

class usuario
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


    function insertUsuario($data)
    {
        $sql = "INSERT INTO usuarios (usuario, contrasena, idRol, usuarioRegistra) VALUES ('{$data['usuario']}', '{$data['contrasena']}', '{$data['rol']}', '{$_SESSION['usuario']}')";
        return $this->conn->updateData($sql);
    }

    function updateUsuario($data)
    {
        $sql = "UPDATE usuarios SET usuario = '{$data['usuario']}', contrasena = '{$data['contrasena']}' WHERE idUsuario = '{$data['id']}'";
        return $this->conn->updateData($sql);
    }
   
    function getUsuario()
    {
        $sql = "SELECT * FROM usuarios WHERE estado ='on'";
        return $this->conn->getData($sql);
    }

    function getRol($rol)
    {
        $sql = "SELECT nombre FROM roles WHERE idRol =$rol AND estado ='on'";
        return $this->conn->getData($sql)[0];
    }

    function getAllRol()
    {
        $sql = "SELECT * FROM roles WHERE estado ='on'";
        return $this->conn->getData($sql);
    }

  
}
