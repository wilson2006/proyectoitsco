<?php

/* 
     Archivo de conexion a la base de datos
 */

$server = "100.100.20.184";
$user = "root";
$password = "";
$db = "itsco";
$conexion = mysql_connect($server,$user,$password);
mysql_select_db($db) or die("No Existe la base de datos ". mysql_error());

/*
if(!$conexion){
    echo "Error en conectar revise las variables de conexion ". mysql_error();
} else {
    echo "Conexion exitosa";
}*/
 




