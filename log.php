<?php
    require "initdb.php";
    $titulo = "Registro";

$pk = mysqli_prepare($conn, "SELECT Cliente_Id FROM cliente WHERE Correo= '?'");
$pk->bind_param("s", $email);
$pk->execute();

if ($pk->num_rows > 0) {
    echo"No existe un usuario con ese correo";
    exit();
}
else {
    $pk == $_SESSION["usuario"];
}

if (!isset($_POST["nombre"])) {
    $_SESSION["mensaje_error"] = "El nombre es obligatorio";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["apellidos"])) {
    $_SESSION["mensaje_error"] = "Los apellidos son obligatorios";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["fecha_nacimiento"])) {
    $_SESSION["mensaje_error"] = "La fecha de nacimineto es obligatoria";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["dni"]) || !preg_match('/^[0-9]{8}[A-Z]$/', $_POST["dni"])) {
    $_SESSION["mensaje_error"] = "El formato del DNI no es correcto";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["email"]) || !preg_match('/^.{1,30}@[a-zA-Z0-9]+(\.[a-zA-Z]{2,3}){1,2}$/', $_POST["email"])) {
    $_SESSION["mensaje_error"] = "El email es obligatorio";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["password"]) || !preg_match("/[0-9]{1}[a-z]{8}/", $_POST["password"])) {
    $_SESSION["mensaje_error"] = "El formato de la contraseña no es correcto";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["telefono"]) || !preg_match("/[0-9]{9}/", $_POST["telefono"])) {
    $_SESSION["mensaje_error"] = "El formato del teléfono no es correcto";
    header('Location: log_in.php');
    exit();
}

if (!isset($_POST["sexo"])) {
    $_SESSION["mensaje_error"] = "El sexo es obligatorio";
    header('Location: log_in.php');
    exit();
}
// Obtener los datos del formulario
    $nombre = $_POST["N"];
    $apellidos = $_POST["AP"];
    $fecha_nacimiento = $_POST["FN"];
    $fecha_nacimiento = $date;
    $date= date("d/m/y");
    $dni = $_POST["DNI"];
    $email = $_POST["email"];
    $password = password_hash($_POST["psw"], PASSWORD_DEFAULT);
    $telefono = $_POST["telefono"];
    $sexo = $_POST["sexo"];
//Insert de los datos
    $sql_insertar = mysqli_prepare($conn, "INSERT INTO cliente (Cliente_Id, Nombre, Apellidos, Fech_Nac, Tel, Correo, Sexo) 
    VALUES ('?', '?', '?', '?', '?', '?', '?'");
    mysqli_stmt_bind_param($sql_insertar, "ssssiss", $dni, $nombre, $apellidos, $date, $telefono, $email, $sexo);
    mysqli_stmt_execute($sql_insertar);
//Comprobación de que se ha insertado la filaç
    if (mysqli_stmt_affected_rows($sql_insertar)=== true) {
        $_SESSION["mensaje_ok"] = "Se ha creado correctamente el nuevo usuario";
        header('Location: index.php');
        exit();
    } 
    else {
        $_SESSION["mensaje_error"] = "Ha habido un error al crear el nuevo usuario";
        header('Location: log.php');
    }

mysqli_close($conn);