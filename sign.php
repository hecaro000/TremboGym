<?php
    require "initidb.php";
    $titulo="Inicion sesión";

    if (isset($_POST["email"])) {
        $_SESSION["mensaje_error"] = "El email es obligatorio";
        header('Location: sign_in.html');
        exit();
    }
    
    if (isset($_POST["password"]) || !preg_match("/[0-9]{1}[a-z]{8}/", $_POST["password"])) {
        $_SESSION["mensaje_error"] = "El formato de la contraseña no es correcto";
        header('Location: sign_in.html');
        exit();
    }

// Obtener los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["psw"];

// Verificar si el usuario ya existe en la base de datos 
    $sql_verificar = mysqli_prepare($conn, "SELECT * FROM cliente WHERE Correo='$email'");
    $resultado_verificar = $conn->query($sql_verificar);

    if ($resultado_verificar->num_rows == 0) {
        echo "No existe un usuario con este Correo. Resgistrese primero";
    } else {
        // Insertar el nuevo usuario en la base de datos
            echo "Inicio de sesión exitoso. ¡Bienvenido de nuevo!";
            header("Location: index.html");
            exit();
    }


