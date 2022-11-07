<?php

class conexion
{

    function __construct()
    {
       $this->conn = new mysqli('localhost', 'root', '', 'proyectobrs');
       $this->conn->connect('localhost', 'root', '', 'proyectobrs');
       $this->conn = mysqli_connect('localhost', 'root', '', 'proyectobrs');

    }


    function closeConnection()
    {
        $this->conn->close();
    }

    function dir($file){
        if (is_file("$file")){
            require_once "$file";
         } elseif(is_file("../$file")) {        
             require_once "../$file";
         }else{
            require_once "../../$file";
         }
    }


    //Mediante el método connect
    public function getData($sql){  
        try{  
            if( $this->conn === false ) {
                 die( print_r( mysqli_error($this->conn), true));
            }
            $res_array = array();
            $stmt = mysqli_query($this->conn, $sql);

            if( $stmt === false) {
                die( print_r( mysqli_error($this->conn), true) );
            }

            for ($count=0 ; $row = mysqli_fetch_array($stmt); $count++)
            $res_array[$count]=$row;

            return $res_array ;

            $this->closeConnection($stmt);
        }catch(Exception $e){  
            echo($e);  
        }  
    }


    public function updateData($sql){  
        try{  
            if( $this->conn === false ) {
                 die( print_r(mysqli_error($this->conn), true));
            }
            $stmt =  mysqli_query($this->conn, $sql);
            
            if( $stmt === false) {
                die( print_r(mysqli_error($this->conn), true) );
            }

            $this->conn->close();
        }catch(Exception $e){  
            echo($e);  
        }  
    }
 
}