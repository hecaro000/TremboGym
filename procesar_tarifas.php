<?php
require "initdb.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["tipo"]) && isset($_POST["categoria"])) {

        $tipo = $_POST["tipo"];
        $categoria = $_POST["categoria"];


        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $sql = "INSERT INTO tarifas (Tipo, Categoria) VALUES ('$tipo', '$categoria')";


        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente en la base de datos.";
        } else {
            echo "Error al insertar datos: " . $conn->error;
        }


        $conn->close();
    } else {
        echo "Error: Por favor, completa todos los campos del formulario.";
    }
} else {
    echo "Error: Esta página solo puede ser accedida mediante un formulario POST.";
}
?>
