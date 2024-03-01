    <head>
        <title>Inicio de sesión</title><link rel="shortcut icon" href="Imagenes/logo.png"/>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/sign.css">
        <!--script src="JS/sign.js"></script-->
    </head>
    <body>
        <form action="sign.php" method="POST" name="formulario" class="formulario">
            <h1>Inice sesión</h1>
            <?php require"initdb.php"; ?>
              <? if (isset($_SESSION["mensaje_error"])) { ?>
                <div class="mensaje_error">
                <div class="texto"><?= $_SESSION["mensaje_error"] ?></div>
                </div>
                <? unset($_SESSION["mensaje_error"]); ?>
              <? } ?>
            <label for="email" id="lmail">Correo electrónico*:</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su dirección decorreo eléctronico">

            <label for="psw" id="lpsw">Contraseña*:</label>
            <input type="password" id="psw" name="psw" placeholder="Ingrese su contraseña">

            <br><br>
        
            <button type="submit">Enviar</button>
          </form>
    </body>
</html>