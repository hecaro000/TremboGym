function deshacer()
{
    var cond = document.getElementById("acepto")
    var priv = document.getElementById("priv")
    cond.checked = false
    priv.checked = false
    alert("Las opciones se van a vaciar")
}

function versexo()
{
    var lista = document.getElementById("sexo")
    var indice = lista.selectedIndex
    var opcion = lista.options[indice]
    var textoSeleccionado = opcion.text
    alert("La opción seleccionada es: " + textoSeleccionado)
}

function valida()
{
    var N = document.getElementById("N").value
    var dni = document.getElementById("DNI").value
    var mail = document.getElementById("email").value
    var tel = document.getElementById("telefono").value
    var cond = document.getElementById("acepto") 
    var priv = document.getElementById("priv") 
//Buscamos que no haya números y la primera letra sea mayúscula 
    var ExpRegN = /[A-Z]{1}\D/g
    var resultN = ExpRegN.test(N)
//Creo un bucle while, si resultN es falso entra en el él.
    while (!resultN) {
        var errorDiv = document.createElement("div"); //Se crea un nuevo elemento div en el documento. Este elemento se utilizará para mostrar el mensaje de error.
        errorDiv.innerHTML = "No se ha cumplido con los requisitos del campo Nombre"; // Se establece el contenido interno del elemento div con el mensaje de error.
        errorDiv.style.color = "red";
        errorDiv.style.marginTop = "5px";
        document.getElementById("N").parentNode.appendChild(errorDiv); // Se busca el elemento con el ID "N", se accede a su nodo padre (parentNode) y se agrega el elemento div de error como hijo de ese nodo padre.
        document.getElementById("N").style.borderColor = "red";
        return false;
    }
    var parentDiv = document.getElementById("N").parentNode; // Se obtiene el nodo padre del campo "N" y se almacena en la variable parentDiv.
    var errorDivToRemove = parentDiv.querySelector("div"); // Se utiliza querySelector para buscar un elemento div dentro del nodo padre. Si se encuentra, se almacena en la variable errorDivToRemove.
    
    if (errorDivToRemove) { // Si se encontró un elemento div, se elimina del nodo padre. Esto se hace para limpiar cualquier mensaje de error existente antes de realizar una nueva validación.
        parentDiv.removeChild(errorDivToRemove);
    }
    document.getElementById("N").style.borderColor = "black";
    var arrayD = [N];
    //Buscamos 8 números y una letra
    var ExpRegD = /\d{8}[A-Z]{1}/
    var resultD = ExpRegD.test(dni)
    while (!resultD) {
        var errorDiv1 = document.createElement("div1");
        errorDiv1.innerHTML = "No se ha cumplido con los requisitos del campo DNI";
        errorDiv1.style.color = "red";
        errorDiv1.style.marginTop = "5px";
        document.getElementById("DNI").parentNode.appendChild(errorDiv1);
        document.getElementById("DNI").style.borderColor = "red";
        return false;
    }
    var parentDiv1 = document.getElementById("DNI").parentNode;
    var errorDivToRemove = parentDiv1.querySelector("div1");
    
    if (errorDivToRemove) {
        parentDiv1.removeChild(errorDivToRemove);
    }
    document.getElementById("DNI").style.borderColor = "black";
    var arrayD = [dni];

    //Buscamos que tenga entre 1 y 30 caracteres el nombre, seguido de una @ y acabado en .es o .com
    var ExpRegM = /^.{1,30}@[a-zA-Z0-9]+(\.[a-zA-Z]{2,3}){1,2}$/
    var resultM = ExpRegM.test(mail)
    while (!resultM) {
        var errorDiv2 = document.createElement("div2");
        errorDiv2.innerHTML = "No se ha cumplido con los requisitos del campo Email";
        errorDiv2.style.color = "red";
        errorDiv2.style.marginTop = "5px"; 
        document.getElementById("email").parentNode.appendChild(errorDiv2); 
        document.getElementById("email").style.borderColor = "red";
        return false;
    }
    var parentDiv2 = document.getElementById("email").parentNode;
    var errorDivToRemove = parentDiv2.querySelector("div2");
    
    if (errorDivToRemove) {
        parentDiv2.removeChild(errorDivToRemove);
    }
    document.getElementById("email").style.borderColor = "black";
    var arrayM = [mail];

    //Buscamos que tenga exactamente 9 dígitos
    var ExpRegT = /\d{9}/
    var resultT = ExpRegT.test(tel)
    while (!resultT) {
        var errorDiv3 = document.createElement("div3");
        errorDiv3.innerHTML = "No se ha cumplido con los requisitos del campo Teléfono";
        errorDiv3.style.color = "red";
        errorDiv3.style.marginTop = "5px"; 
        document.getElementById("telefono").parentNode.appendChild(errorDiv3);
        document.getElementById("telefono").style.borderColor = "red";
        return false;
    }
    var parentDiv3 = document.getElementById("telefono").parentNode;
    var errorDivToRemove = parentDiv3.querySelector("div3");
    if (errorDivToRemove) {
        parentDiv3.removeChild(errorDivToRemove);
    }
    document.getElementById("telefono").style.borderColor = "black";
    var arrayT = [tel];
    
    //Validación de casillas
    var info = ""
    info += "He leído y acepto las condiciones " + cond.checked + "\n"
    info += "He leído la política de privacidad " + priv.checked + "\n"
    if (cond.checked || priv.checked == true)
    {
        alert(info)
        cond.checked = false
        priv.checked = false
    }
    else
    {
        alert("Tienes que seleccionar una de las opciones por lo menos")
        return false
    }

    //Creamos un array concatenando todos los arrays
    var arrayGeneral = arrayN.concat(arrayD, arrayM, arrayT)

    //Convertimos el anterior array en un string
    //document.write("Los datos obligatorios de nuestro usuario son los siguientes: " + arrayGeneral.join(", "))
}

//Función para actualizar el mensaje de el número máximo de caracteres
function actualizaMensaje(maximoCaract)
{
    var elemento = document.getElementById("mensaje")
    var info =document.getElementById("parra")

    info.innerHTML = "Información adicional (puede insertar un máximo de " + (maximoCaract - elemento.value.length) + " carácteres)."
}

//Función para limitar el número de carácteres
function limita(maximoCaract)
{
    var elemento = document.getElementById("mensaje")
    if(elemento.value.length>=maximoCaract)
    {
        document.getElementById("mensaje").style.color="red"
        return false        
    }
    else
    {
        document.getElementById("mensaje").style.color="black"
        return true
    }
}