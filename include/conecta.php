<?php
$server = "localhost";
$UserHost = "root";
$Database = "proyecto";
$Password = "";
$conecta = mysqli_connect($server,$UserHost,$Password,$Database);
if($conecta->connect_errno){
    die("Error al conectar la base de datos".$conecta->connect_errno);
}
?>