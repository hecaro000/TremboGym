<?php
require "initdb.php";


session_start();
if (!isset($_SESSION["usuario_in"])) {
    
    header("Location: login.php");
    exit();
}

$tipo = $_POST["tipo"];
$cat = $_POST["categoria"];
$user = $_SESSION["usuario_in"];
$precio = 0;

if ($tipo == "Mensual" && $cat == "Estandar") { 
    $precio = 30;
} elseif ($tipo == "Mensual" && $cat == "Premium") {
    $precio = 40;
} elseif ($tipo == "Trimestral" && $cat == "Estandar") {
    $precio = 90;
} elseif ($tipo == "Trimestral" && $cat == "Premium") {
    $precio = 100;
} elseif ($tipo == "Semestral" && $cat == "Estandar") {
    $precio = 180;
} elseif ($tipo == "Semestral" && $cat == "Premium") {
    $precio = 190;
} elseif ($tipo == "Anual" && $cat == "Estandar") {
    $precio = 360;
} elseif ($tipo == "Anual" && $cat == "Premium") {
    $precio = 370;
}

$sql_insertar = mysqli_prepare($conn, "INSERT INTO tarifas (Tipo, Precio, Categoria, Client_ID) VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($sql_insertar, "siss", $tipo, $precio, $cat, $user); 
mysqli_stmt_execute($sql_insertar);

if (mysqli_stmt_affected_rows($sql_insertar) > 0) {
    $_SESSION["mensaje_ok"] = "Se han agregado correctamente las tarifas";
    header("Location: index.php");
    exit();
} else { 
    $_SESSION["mensaje_error"] = "Ha habido un error al agregar las tarifas";
    header("Location: tarifas.php");
    exit();
}
?>
