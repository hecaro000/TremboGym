<?php
// Configuración de la conexión a la base de datos
$servername = "httrembogym";
$username = "dani";
$password = "1234";
$dbname = "trembogym";

// Crear conexión
$conn = mysqli_connect ($servername, $username, $password);

mysqli_select_db ($conn, $dbname);

mysqli_close ($conn);

