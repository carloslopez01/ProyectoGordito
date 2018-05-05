<?php

class database{
    protected $hostname, $database, $username, $password;
    public function __construct()
    {
        //Datos de conexión a la base de datos
        $hostname = 'localhost';
        $database = 'gordito';
        $username = 'root';
        $password = '';
    }

        public function __set($nombre, $valor)
        {
            $this->nombre = $valor;
        }
        public function __get($nombre)
        {
            return $this->nombre;
        }
}
?>