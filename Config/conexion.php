<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "farmacia";

// Config/conexion.php
mysqli_report(MYSQLI_REPORT_OFF);

$conexion = @mysqli_connect("localhost", "root", "", "farmacia"); 
?>

if(!$conexion){
    die("Error de conexión");
}
