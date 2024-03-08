	<head>
		<title>Registrate</title><link rel="shortcut icon" href="Imagenes/logo.png"/>
		<meta charset="utf-8">
		<link rel="stylesheet" href="CSS/incss.css">
		<script src="JS/injs.js"></script>
	</head>
	<body>
		<form action="editar_perfil_php.php" method="POST" name="formulario" class="formulario">
			<h1>Registrate</h1>
			<?php
			require "initdb.php";
			
			$titulo = "Editar Perfil";
			?>

			<label for="nombre" id="lN">Nombre*:</label>
			<input type="text" id="N" name="N" placeholder="Escriba su nombre">

			<label for="apellidos" id="lAP">Apellidos*:</label>
			<input type="text" id="AP" name="AP" placeholder="Escriba sus apellidos">

			<button type="submit" id="enviar">Enviar</button>
		</form>
	</body>