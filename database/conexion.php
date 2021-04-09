<?php


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
