//Slider
function radio_1(){
document.getElementById('slider_item_2').style.display="none";
document.getElementById('slider_item_3').style.display="none";

document.getElementById('slider_item_1').style.display="flex";
}
function radio_2(){ 
document.getElementById('slider_item_1').style.display="none";
document.getElementById('slider_item_3').style.display="none";

document.getElementById('slider_item_2').style.display="flex";
}
function radio_3(){
document.getElementById('slider_item_1').style.display="none";
document.getElementById('slider_item_2').style.display="none";

document.getElementById('slider_item_3').style.display="flex";
}

//Cerrar la botonera al pinchar en un boton
function cerrarBotonera(){
 document.getElementById('hamburguer-input').checked=false
}

/* Scroll lento de las anclas */

$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  }); 
});

function toggleDropdown() {
  var dropdownContent = document.getElementById("myDropdown");
  dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
}