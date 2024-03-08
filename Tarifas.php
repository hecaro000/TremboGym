<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/cssAvisoTarifa.css">

  <style>
    body {
      text-align: center;
    }
    #tarifas {
      display: inline-block;
      text-align: left;
    }
    form {
      margin-top: 20px;
    }
  </style>

  <script src="JS/scriptTarifas.js"></script>

  <title>Tarifas</title>
</head>
  <body>
    <header>
      <h1>Planes de Tarifas</h1>
    </header>
    <section id="tarifas">
      <div class="tarifa">
        <h2>Plan Mensual</h2>
        <div class="descripcion" id="mensualEstandar">Estandar: Esta tarifa nos permite la entrada al gimnasio y, en consecuencia, a los servicios básicos del gimnasio, como salas de máquinas, de cardio, etc.</div>
        <div class="descripcion" id="mensualPremium">Premium: Podemos acceder al gimnasio e incluimos todos los servicios extras que disponemos en nuestro gimnasio, como zona de alimentación, sauna, ect.</div>
        <div class="opcion" onclick="seleccionarOpcion('Estandar', 'mensualEstandar')">Estandar: 30€/mes</div>
        <div class="opcion" onclick="seleccionarOpcion('Premium', 'mensualPremium')">Premium: 40€/mes</div>
      </div>

      <div class="tarifa">
        <h2>Plan Trimestral</h2>
        <div class="descripcion" id="trimestralEstandar">Estandar: Esta tarifa nos permite la entrada al gimnasio y, en consecuencia, a los servicios básicos del gimnasio, como salas de máquinas, de cardio, etc.</div>
        <div class="descripcion" id="trimestralPremium">Premium: Podemos acceder al gimnasio e incluimos todos los servicios extras que disponemos en nuestro gimnasio, como zona de alimentación, sauna, ect.</div>
        <div class="opcion" onclick="seleccionarOpcion('Estandar', 'trimestralEstandar')">Estandar: 90€/trimestre</div>
        <div class="opcion" onclick="seleccionarOpcion('Premium', 'trimestralPremium')">Premium: 100€/trimestre</div>
      </div>

      <div class="tarifa">
        <h2>Plan Semestral</h2>
        <div class="descripcion" id="semestralEstandar">Estandar: Esta tarifa nos permite la entrada al gimnasio y, en consecuencia, a los servicios básicos del gimnasio, como salas de máquinas, de cardio, etc.</div>
        <div class="descripcion" id="semestralPremium">Premium: Podemos acceder al gimnasio e incluimos todos los servicios extras que disponemos en nuestro gimnasio, como zona de alimentación, sauna, ect.</div>
        <div class="opcion" onclick="seleccionarOpcion('Estandar', 'semestralEstandar')">Estandar: 180€/semestre</div>
        <div class="opcion" onclick="seleccionarOpcion('Premium', 'semestralPremium')">Premium: 190€/semestre</div>
      </div>

      <div class="tarifa">
        <h2>Plan Anual</h2>
        <div class="descripcion" id="anualEstandar">Estandar: Esta tarifa nos permite la entrada al gimnasio y, en consecuencia, a los servicios básicos del gimnasio, como salas de máquinas, de cardio, etc.</div>
        <div class="descripcion" id="anualPremium">Premium: Podemos acceder al gimnasio e incluimos todos los servicios extras que disponemos en nuestro gimnasio, como zona de alimentación, sauna, ect.</div>
        <div class="opcion" onclick="seleccionarOpcion('Estandar', 'anualEstandar')">Estandar: 360€/año</div>
        <div class="opcion" onclick="seleccionarOpcion('Premium', 'anualPremium')">Premium: 370€/año</div>
      </div>
    </section>

    <form action="procesar_tarifas.php" method="POST" id="formulario-tarifas">

      <label for="tipo">Tipo de tarifa:</label>
      <select id="Tipo" name="Tipo">
        <option value="mensual">Mensual</option>
        <option value="trimestral">Trimestral</option>
        <option value="semestral">Semestral</option>
        <option value="anual">Anual</option>
      </select><br>
  <br>
      <label for="categoria">Categoria de la tarifa:</label>
      <select id="Categoria" name="Categoria">
        <option value="Estandar">Estandar</option>
        <option value="Premium">Premium</option>
      </select><br> <br>
      
      <button type="submit">Enviar</button>
    </form>

    <footer>
      <p id="descripcionSeleccionada"></p>
    </footer>

  </body>
</html>