<?php
/**
 * User: Carlos Lopez
 * Date: 5/5/2018
 * Time: 4:38 PM
 */

require_once "modelo/Conexion.php";


 $prueba = new Conexion();

 $prueba->conectar();
 var_dump($prueba);