<?php
    require "initdb.php";
    $titulo="Inicion sesión";

    if (!isset($_POST["email"])) {
        $_SESSION["mensaje_error"] = "El email es obligatorio";
        header('Location: sign_in.php');
        exit();
    }
    
    if (!isset($_POST["password"]) || !preg_match("/[0-9]{1}[a-z]{8}/", $_POST["password"])) {
        $_SESSION["mensaje_error"] = "El formato de la contraseña no es correcto";
        header('Location: sign_in.php');
        exit();
    }

// Obtener los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["psw"];

// Verificar si el usuario ya existe en la base de datos 
    $sql_verificar = mysqli_prepare($conn, "SELECT Correo FROM cliente WHERE Correo= '?'");
    $sql_verificar->bind_param("s", $email);
    $sql_verificar->execute();

    if (mysqli_stmt_affected_rows($sql_insertar)=== false) {
        $_SESSION["mensaje_error"] = "No existe un usuario con este Correo. Resgistrese primero";
        header("Location: sign_in.php");
        exit();
    } else {
        $_SESSION["mensaje_ok"] = "Inicio de sesión exitoso. ¡Bienvenido de nuevo!";
            header("Location: index.php");
    }
mysqli_close($conn);

