<?php
    require "initdb.php";
    $titulo = "Registro";

// Obtener los datos del formulario
$nombre = $_POST["N"];
$apellidos = $_POST["AP"];
$fecha_nacimiento = $_POST["FN"];
$dni = $_POST["DNI"];
$email = $_POST["email"];
error_log("contra");
$password = password_hash($_POST["psw"], PASSWORD_DEFAULT);
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];

$pk = mysqli_prepare($conn, "SELECT Cliente_Id FROM cliente WHERE Correo= ?");
$pk->bind_param("s", $email);
$pk->execute();

if ($pk->num_rows > 0) {
    $_SESSION["mensaje_error"] = "Existe un usuario con ese correo";
    exit();
}
$pk->free_result();

if (!isset($_POST["N"])) {
    $_SESSION["mensaje_error"] = "El nombre es obligatorio";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["AP"])) {
    $_SESSION["mensaje_error"] = "Los apellidos son obligatorios";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["FN"])) {
    $_SESSION["mensaje_error"] = "La fecha de nacimineto es obligatoria";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["DNI"]) || !preg_match('/^[0-9]{8}[A-Z]$/', $_POST["DNI"])) {
    $_SESSION["mensaje_error"] = "El formato del DNI no es correcto";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["email"]) || !preg_match('/^.{1,30}@[a-zA-Z0-9]+(\.[a-zA-Z]{2,3}){1,2}$/', $_POST["email"])) {
    $_SESSION["mensaje_error"] = "El email es obligatorio";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["psw"]) || !preg_match("/[0-9]{1}[a-z]{8}/", $_POST["psw"])) {
    $_SESSION["mensaje_error"] = "El formato de la contraseña no es correcto";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["telefono"]) || !preg_match('/[0-9]{9}/', $_POST["telefono"])) {
    $_SESSION["mensaje_error"] = "El formato del teléfono no es correcto";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["sexo"])) {
    $_SESSION["mensaje_error"] = "El sexo es obligatorio";
    header('Location: log_in.php');
    exit();
}

//Insert de los datos
    $sql_insertar = mysqli_prepare($conn, "INSERT INTO cliente (Cliente_Id, Nombre, Apellidos, Fech_Nac, Tel, Correo, Contraseña, Sexo) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($sql_insertar, "ssssssss", $dni, $nombre, $apellidos, $fecha_nacimiento, $telefono, $email, $password, $sexo);
    mysqli_stmt_execute($sql_insertar);
//Comprobación de que se ha insertado la filaç
    if (mysqli_stmt_affected_rows($sql_insertar) > 0) {
        $_SESSION["mensaje_ok"] = "Se ha creado correctamente el nuevo usuario";
        header('Location: index.php');
        exit();
    } 
    else { 
        $_SESSION["mensaje_error"] = "Ha habido un error al crear el nuevo usuario";
        header('Location: log_in.php');
    }

mysqli_close($conn);