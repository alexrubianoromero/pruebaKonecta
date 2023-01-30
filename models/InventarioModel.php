<?php

namespace models;
use conexion\Conexion;
class InventarioModel extends Conexion
{
    public $conexion;
    
        public function __construct()
        {
           
            $this->conexion = new Conexion();
			$this->conexion = $this->conexion->connect();
        }

        public function getListCode()
        {
            $sql = "select * from codigos";
            echo $sql;
        }
}


?>