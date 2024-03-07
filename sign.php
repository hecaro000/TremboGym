<?php
    require "initdb.php";
    $titulo="Inicion sesión";

// Obtener los datos del formulario
$email = $_POST["email"];
$password = $_POST["psw"];

    if (!isset($_POST["email"]) || !preg_match('/^.{1,30}@[a-zA-Z0-9]+(\.[a-zA-Z]{2,3}){1,2}$/', $_POST["email"])) {
        $_SESSION["mensaje_error"] = "El email es obligatorio";
        header('Location: sign_in.php');
        exit();
    }
    
    if (!isset($_POST["psw"]) || !preg_match("/[0-9]{1}[a-z]{8}/", $_POST["psw"])) {
        $_SESSION["mensaje_error"] = "El formato de la contraseña no es correcto";
        header('Location: sign_in.php');
        exit();
    }

    $sql_user = mysqli_prepare($conn, "SELECT * FROM Cliente WHERE Correo = ?");
    mysqli_stmt_bind_param($sql_user,"s", $email);
    mysqli_stmt_execute($sql_user);
    $resultado = mysqli_stmt_get_result($sql_user);

    if (($usuario = mysqli_fetch_array($resultado)) && password_verify($password, $usuario["Contraseña"])) {
        $_SESSION["mensaje_ok"] = "Has iniciado sesión como " . $usuario["Nombre"];
        $_SESSION["usuario_in"] = $usuario["Cliente_Id"];
        error_log("Todo va bien");
        header("Location: index.php");
        exit();
    } else {         error_log($password);
        error_log($usuario["Contraseña"]);
        error_log(password_verify($password, $usuario["Contraseña"])); 
        error_log("TE");
        $_SESSION["mensaje_error"] = "No existe un usuario con este correo o la contraseña no coincide";
        header("Location: sign_in.php");
    }
    mysqli_close($conn);

