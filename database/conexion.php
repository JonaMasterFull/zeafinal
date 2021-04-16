<?php

/*
$servername = "us-cdbr-east-03.cleardb.com";//Nombre del Servidor
$username = "bd12d4f4abf1db";//Nombre de Usuario
$password = "fefa0201";//Contraseña de Servidor de base de datos
$dbname = "heroku_c5ea7baf63fa185";//Nombre de Base de datos
*/
$servername = "localhost";//Nombre del Servidor
$username = "root";//Nombre de Usuario
$password = "";//Contraseña de Servidor de base de datos
$dbname = "tmprueba";//Nombre de Base de datos

$conectar = mysqli_connect($servername, $username, $password,$dbname);//Conexion

if(!$conectar){
echo "No se puede Conectar a la base de Datos";
}else{


$base = mysqli_select_db($conectar, $dbname);

if(!$base){
    //echo "No se encontro la base de datos";
}else{
    //echo "Se pudo encontrar base de datos";
}
}

 ?>
