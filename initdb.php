<?php
session_start();
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "dani";
$password = "1234";
$dbname = "trembogym";
$port="3308";

// Crear conexión
$conn = mysqli_connect ($servername, $username, $password, $dbname, $port);
if (mysqli_connect_errno()) {
   echo"Failed to connect to  MySQL: ". mysqli_connect_error();
   exit();
}

mysqli_select_db($conn, $dbname);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);