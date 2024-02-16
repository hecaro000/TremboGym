// Abrir nav en el responsive

/* Esta funcion sirve para que, dependiendo del tamaño de la pantalla, se ponga una clase u otra a los botones */
var ventana = $(window);
var botones = $("nav button");

function cambioClaseBotones() {
  if (ventana.width() >= 481) {
    botones.removeClass("boton_responsive_open");
    botones.addClass("boton").removeAttr("onClick");
  } else {
    botones.removeClass("boton");
    botones.addClass("boton_responsive_open").attr("onClick", "cerrar_nav();");
  }
}
cambioClaseBotones();
ventana.resize(cambioClaseBotones);


// Caracteristicas

//Abrir span de las caracteristicas

function abrir_span(element) {
  var btnID_crcteristicas = "#" + element.getAttribute("id"); //Coger la id para hacer el efecto del texto
  var parrafoCrcteristicas = $(btnID_crcteristicas + "+ p"); //Selecionar el parrafo para alinearlo
  var textoOculto = $(btnID_crcteristicas + "+ p .texto_oculto"); //Selecionar por css el texto a mostrar

  element.classList.toggle("open"); //Añadimos una clase para hacer el efecto de abrirse y cerrarse al boton

  if (textoOculto.css("display") == "none") {
    //Si el texto esta oculto, muestramelo y alinea justify el parrafo
    textoOculto.toggle("size", function () {
      parrafoCrcteristicas.css("text-align", "justify");
    });
  } else {
    // De lo contrario, ocultalo y dejame el parrafo alineado central
    textoOculto.toggle("size", function () {
      parrafoCrcteristicas.css("text-align", "center");
    });
  }
}

