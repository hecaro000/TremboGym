<html>
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<?php require "Funciones_Servicios.php"; ?>
<?echo "me cago en dios"?>
<?error_log("Patata");?>



	<head>
	<meta charset="UTF-8"/>
		<title>Trembogym</title><link rel="shortcut icon" href="Imagenes/logo.png"/>
		<link rel="stylesheet" type="text/css" href="CSS/Servicios.css"/>
	</head>

	<body>

		<nav id="nav_box">	

	

			<input type="checkbox" id="hamburguer-input" name="hamburguer"/>		
			
					<label id="label-hamburguer"  for="hamburguer-input" >
			
				  <div class="hamburline top"></div>
			
				  <div class="hamburline "></div>
			
				  <div class="hamburline bottom"></div>	
			
					</label> <h1>TremboGym</h1>
			
			 
			
				<div id="boton_box" >
			
					 <a class="boton_superior" href="index.php#quienes_somos" target="_self" onClick="cerrarBotonera()">Quienes somos</a> 
			
					<a class="boton_superior" href="index.php#que_hacemos" target="_self" onClick="cerrarBotonera()">Que hacemos</a>
			
					<a class="boton_superior" href="index.php#contacto" target="_self" onClick="cerrarBotonera()">Contacto</a>
			
					<a class="boton_superior" href="Servicios.php" target="_self" onClick="cerrarBotonera()">Servicios</a>
			
					<a class="boton_superior" href="Tarifas.html" target="_blank" onClick="cerrarBotonera()">Tarifas</a>
			
					<a class="boton_superior" href="Formulario.html" target="_blank" onClick="cerrarBotonera()">Formulario</a>
					<?php require "initdb.php"; ?>
 					 <? if (isset($_SESSION["mensaje_ok"])) { ?>
	  				<div class="mensaje_ok">
					<div class="texto"><?= $_SESSION["mensaje_ok"] ?></div>
	  				</div>
	  				<? unset($_SESSION["mensage_ok"]); ?>
					<? } ?>
			
				<div id="rrss_box" >
				<div class="dropdown" onclick="toggleDropdown()">
				<img src="Imagenes/perfil.png" alt="perfil" style="height: 60px; width: 60px;"/>
				<div class="dropdown-content" id="myDropdown">
				<? if (!isset($_SESSION['usuario_in'])) { ?>
				  <a href="sign_in.php">Iniciar sesión</a>
				  <a href="log_in.php">Registrarse</a>
				<? } else { ?>
				  <br>
				  <a href="log_out.php">Cerrar sesión</a>
				  <br>
				  <a href="editar_perfil.html">Editar perfil</a>
			  	<? } ?>
				</div>
				</div>

			
						<img src="Imagenes/instagram.png" alt="instagram" onClick="window.open('https://www.instagram.com/johan_sk9/');cerrarBotonera();"/>
			
					</div>
			
					 
			
				</div>
			
			</nav>
<div id="all_father">
	<div id="caracteristicas">
		<form action="Funciones_Servicios.php" method="POST" name="formulario" class="formulario">
		<div id="caracteristicas_principales">
			<h2>Servicios de TremboGym</h2>
								<?php $Servicios = getServicios();
					$rows = [];
					while($row = mysqli_fetch_assoc($Servicios)) {
						$rows[] = $row;
					?> 

			<div class="caracteristica_item" id="<?php echo $row['Servicio_Id'] ?>">
				<img src="<?php echo $row['Foto'] ?>" alt="Sala de máquinas">
				<div class="caracteristica_item_definicion">
				  	<h3><?php echo $row['Nombre'] ?></h3>
				  		<div class="ampliar_caracteristicas" id="ampliar_Sala_maquinas" onclick="abrir_span(this)"></div>
				  	<p><?php echo $row['Descripcion'] ?><input type="checkbox" name="<?php echo $row['Servicio_Id'] ?>" id="<?php echo $row['Servicio_Id'] ?>">Precio:<?php echo $row['Precio'] ?>€ <span class="texto_oculto">Estas maquinas son las más recientes en el mercado, además de que hay una gran diversidad de máquinas para poder hacer cualquier ejercicio si otra está ocupada.</span></p>
				</div>
			</div>
					<?php
					}
					?>
		</div>
			<button type="submit" id="enviar">Enviar Servicios</button>
		</form>
</div>

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 	<script type="text/javascript" src="JS/Servicios.js"></script>
</body>
</html>
