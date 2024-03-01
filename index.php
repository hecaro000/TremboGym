<!DOCTYPE html>
<html>
	<head>

	<meta charset="UTF-8"/>

		<title>TremboGym</title><link rel="shortcut icon" href="Imagenes/logo.png"/>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

	<link rel="stylesheet" type="text/css" href="CSS/style2.css"/>

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

		 <a class="boton_superior" href="#quienes_somos" target="_self" onClick="cerrarBotonera()">Quienes somos</a> 

		<a class="boton_superior" href="#que_hacemos" target="_self" onClick="cerrarBotonera()">Que hacemos</a>

		<a class="boton_superior" href="#contacto" target="_self" onClick="cerrarBotonera()">Contacto</a>

		<a class="boton_superior" href="Servicios.html" target="_self" onClick="cerrarBotonera()">Servicios</a>

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
			<? if (!isset($_SESSION['usuario'])) { ?>
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




<header id="cabecera_box">

 <div id="intro_box">

 <h1>Grandes sin Farmacia</h1>
 <h4>¡Bienvenido a TremboGym!</h4>

 <p>En TremboGym nos enorgullece ofrecerte un espacio dedicado a tu bienestar físico y mental. Con un equipo de entrenadores altamente capacitados y una variedad de equipos de última generación, te brindamos el ambiente perfecto para alcanzar tus objetivos de fitness.</p>
 <p>Desde clases grupales energizantes hasta sesiones personalizadas, nuestro enfoque es proporcionarte las herramientas y el apoyo necesarios para que te sientas fuerte, saludable y feliz. Ya sea que estés buscando aumentar tu fuerza, mejorar tu resistencia o simplemente desconectar del estrés diario, en TremboGym encontrarás el acompañamiento que necesitas para alcanzar tus metas.</p> 
 <p>Únete a nuestra comunidad vibrante y descubre cómo podemos ayudarte a transformar tu vida a través del poder del movimiento. ¡Te esperamos en TremboGym, donde el bienestar es nuestro compromiso contigo!</p>
 

</div>

</header>	

	

	

	

<section id="cuerpo_box">

	<article id="" class="cuerpo_item"><a id="quienes_somos"  class="enlace_ancla_oculto"></a>

	<div><img src="Imagenes/moti.jpg"/></div>

	

	<div>

	<h3>Sobre nosotros </h3>

	<p>Somos cruatro compañeros de clase que montamos un gimnasio para un trabajo de clase. Ahora se ha convertido en un proyecto de futuro para nosotros. ¡Esperamos que para vosostros también sea así!</p>

	</div>

	</article>

	

	<article id="" class="cuerpo_item"><a id="que_hacemos"  class="enlace_ancla_oculto"></a>

	<div><img src="Imagenes/sala.jpg"/></div>

	

	<div>

	<h3>Que hacemos</h3>

	<p>Un gimnasio moderno con una gran variedad de servicios. ¡Aquí podrás disfrutar de un espacio por y para el deporte!<br>
	Contamos una variedad increíble de salas donde te podrás ejercitar solo, con compañeros o acompañado de los mejores profesionales.<br> 
	¡¿Te lo vas a perder?!
	</p>

	</div>

	</article>	

<article id="slider" class="">





<div id="slider_text_box">

	<div id="slider_item_1" class="slider_item">

		<h3 class="titulo_slider">Nuestro proyecto</h3>

		<p class="parrafo_slider">Entre los 4 compañeros que somos, empezamos con una pequeña idea sobre lo que montar, y al final hemos tomado la decisión de llevarlo a algo serio y lo mejor y más grande que podamos crear para todos los gustos y personas que acudan a nuestro gimnasio.</p>

	</div>

	<div id="slider_item_2" class="slider_item"  >

		<h3 class="titulo_slider">Nuestras aptitudes</h3>

		<p class="parrafo_slider">¿Qué nos hace destacar? En nuestro caso, somos gente que tiene mucha ambición para poder empezar el negocio, por lo que, somos gente muy trabajadora y comprometida.</p>

	</div>

	<div id="slider_item_3" class="slider_item"  >

		<h3 class="titulo_slider">Nuestra motivación</h3>

		<p class="parrafo_slider">Al ser un hobbie por parte de todos, lo que nos motiva es ver que aprate de nuestro progreso no solo físico ni como empresa, si no que también nos llena personalmente el poder ver que llevamos algo que nos gusta y apasiona a un modo más profesional.</p>

	</div>

</div>



<div id="slider_radio_box">

<input id="radio_1" name="radio_slider" type="radio" onClick="radio_1()" checked />

<input id="radio_2" name="radio_slider" type="radio" onClick="radio_2()"/>

<input id="radio_3" name="radio_slider" type="radio" onClick="radio_3()"/>

</div>

</article>

	

	

</section>

	

	

	<footer id="footer_box" ><a id="contacto" class="enlace_ancla_oculto" ></a>
<div id="form_box" class="border border-dark">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.757722040157!2d-3.6612824250066143!3d40.39206197144357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4225d8ddb8754b%3A0x7f6a09c7778824d8!2sEstadio%20de%20Vallecas!5e0!3m2!1ses!2ses!4v1707842813964!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nuestra Ubicación</iframe>

</div>









<div id="contact_box" class="border border-dark"><a name="ancla_contacto"></a>

	<h2 >Contacto</h2>

	<h4> Email:</h4> 

	<h5><a class="especial" href="mailto: trembogym@gmail.com">trembogym@gmail.com</a></h5>

	<h4>Teléfono: 632697835</h4>


</div>

</footer>

<div id="subfooter">



<div><a href="avisolegal.html" class="cookies_politics">Aviso Legal</a></div>

<div><a href="avisolegal.html" class="cookies_politics">Politica y privacidad</a></div>

<div><a href="avisolegal.html" class="cookies_politics">Configuración de cookies</a></div>





</div>







</body>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="JS/jscript.js"></script>
<script>

</script>

</html>



  
