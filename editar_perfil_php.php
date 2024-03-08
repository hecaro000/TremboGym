<?php
	require "initdb.php";
	$titulo = "Editar Perfil";

	$id = $_SESSION["usuario_in"];
	$nombre = $_POST["N"];
	$apellido = $_POST["AP"];

	if (!isset($_POST["N"]))
	{
		$_SESSION["mensaje_error"] = "El nombre es obligatorio";
		header('Location: editar_perfil.php');
		exit();
	}

	if (!isset($_POST["AP"]))
	{
		$_SESSION["mensaje_error"] = "Los apellidos son obligatorios";
		header('Location: editar_perfil.php');
		exit();
	}

	$sql_update = mysqli_prepare($conn, "UPDATE Cliente SET Nombre=?, Apellidos=? WHERE Cliente_Id=?");

	mysqli_stmt_bind_param($sql_update, "sss", $nombre, $apellido, $id);
	mysqli_stmt_execute($sql_update);
	if (mysqli_stmt_affected_rows($sql_update) > 0) {
        $_SESSION["mensaje_ok"] = "Se han cambiado correctamente los datos del usuario";
        header('Location: index.php');
        exit();
    } 
    else { 
        $_SESSION["mensaje_error"] = "Ha habido un error al cambiar los datos del usuario";
        header('Location: editar_perfil.php');
    }

mysqli_close($conn);