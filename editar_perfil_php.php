<?php
	require "initdb.php";
	$titulo = "Registro";

	$id = $_SESSION["usuario_in"];
	$nombre = $_POST["N"];
	$apellido = $_POST["AP"];

	if (!isset($_POST["N"]))
	{
		$_SESSION["mensaje_error"] = "El nombre es obligatorio";
		header('Location: log_in.php');
		exit();
	}

	if (!isset($_POST["AP"]))
	{
		$_SESSION["mensaje_error"] = "Los apellidos son obligatorios";
		header('Location: log_in.php');
		exit();
	}

	$sql_update = mysqli_prepare($conn, "UPDATE cliente SET Nombre=?, Apellido=? WHERE Cliente_Id=?");

	mysqli_stmt_bind_param($sql_update, "sss", $nombre, $apellido, $id);
	mysqli_stmt_execute($sql_insertar);

	error_log("Patata");

mysqli_close($conn);
?>