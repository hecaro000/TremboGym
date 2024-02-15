    function seleccionarOpcion(tipo, idDescripcion) {
      var opciones = document.getElementsByClassName("opcion");
      for (var i = 0; i < opciones.length; i++) {
          opciones[i].classList.remove("seleccionada");
      }
      event.currentTarget.classList.add("seleccionada");

      var descripcion = document.getElementById(idDescripcion).innerText;
      document.getElementById("descripcionSeleccionada").innerText = "Descripción de " + tipo + ": " + descripcion;
    }

    function mostrarDescripcion(idDescripcion) {
      var descripcion = document.getElementById(idDescripcion).innerText;
      document.getElementById("descripcionSeleccionada").innerText = descripcion;
    }

    function limpiarDescripcion() {
      document.getElementById("descripcionSeleccionada").innerText = "";
    }