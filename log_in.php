    <head>
        <title>Registrate</title><link rel="shortcut icon" href="Imagenes/logo.png"/>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/incss.css">
        <script src="JS/injs.js"></script>
    </head>
    <body>
        <form action="log.php" method="POST" name="formulario" class="formulario">
            <h1>Registrate</h1>
            <?php
              require "initdb.php"; ?>
                <? if (isset($_SESSION["mensaje_error"])) { ?>
                  <div class="mensaje_error">
                  <div class="texto"><?= $_SESSION["mensaje_error"] ?></div>
                  </div>
                  <? unset($_SESSION["mensaje_error"]); ?>
        <? } ?>
            <label for="nombre" id="lN">Nombre*:</label>
            <input type="text" id="N" name="N" placeholder="Escriba su nombre">

            <label for="apellidos" id="lAP">Apellidos*:</label>
            <input type="text" id="AP" name="AP" placeholder="Escriba sus apellidos">

            <label for="fecha_nacimiento" id="lFN">Fecha de nacimiento*:</label>
            <input type="date" id="FN" name="FN" placeholder="Inserte su fecha de nacimiento">
        
            <label for="DNI" id="ldni">DNI*:</label>
            <input type="text" id="DNI" name="DNI" placeholder="Ingrese su DNI">
        
            <label for="email" id="lmail">Correo electrónico*:</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su dirección de correo eléctronico">

            <label for="psw" id="lpsw">Contraseña*:</label>
            <input type="password" id="psw" name="psw" placeholder="Ingrese su contraseña">
            <input type="password" id="pswd" name="pswd" placeholder="Ingrese la misma contraseña" required>
        
            <label for="telefono" id="ltelefono">Teléfono*:</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Introduce tu número de teléfono">
        
            <br><br>
        
            <label for="sexo">Sexo*:</label>
            <select id="sexo" name="sexo">
              <option value="0">Seleccionar</option>
              <option value="1">Masculino</option>
              <option value="2">Femenino</option>
            </select>
        
            <br><br>
        
            <label for="acepto">Acepto los términos y condiciones:</label>
            <input type="checkbox" id="acepto" name="acepto" onclick="cond()">
        
            <br><br>
        
            <label for="acepto">Acepto las condiciones de privacidad:</label>
            <input type="checkbox" id="priv" name="priv" onclick="priv()">
        
            <br><br>
        
            <button type="submit" id="enviar">Enviar</button>
          </form>
    </body>