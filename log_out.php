<?php

	require "initdb.php";
	if (isset($_SESSION["usuario_in"]))
	{
		unset($_SESSION["usuario_in"]);

		$_SESSION["mensaje_ok"] = "Se ha cerrado sesión correctamente";
		header('Location: index.php');
	}
	else
	{ 
		$_SESSION["mensaje_error"] = "Ha habido un error al cerrar sesión";
		header('Location: index.php');
	}

?>