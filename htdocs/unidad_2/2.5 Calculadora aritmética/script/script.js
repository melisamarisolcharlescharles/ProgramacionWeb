//Se crea y extrae los valores
var auxiliarUno;
var auxiliarDos;
var simbolo;
var respuesta;
var resultado = document.getElementById("resultado");
var limpiarB = document.getElementById("limpiar");
var suma = document.getElementById("suma");
var resta = document.getElementById("resta");
var multiplicacion = document.getElementById("multiplicacion");
var division = document.getElementById("division");
var igual = document.getElementById("igual");
var uno = document.getElementById("unoN");
var dos = document.getElementById("dosN");
var tres = document.getElementById("tresN");
var cuatro = document.getElementById("cuatroN");
var cinco = document.getElementById("cincoN");
var seis = document.getElementById("seisN");
var siete = document.getElementById("sieteN");
var ocho = document.getElementById("ochoN");
var nueve = document.getElementById("nueveN");
var cero = document.getElementById("ceroN");

//RadioButton Encendido
function on(){
    uno.disabled = false;
    dos.disabled = false;
    tres.disabled = false;
    cuatro.disabled = false;
    cinco.disabled = false;
    seis.disabled = false;
    siete.disabled = false;
    ocho.disabled = false;
    nueve.disabled = false;
    cero.disabled = false;
    suma.disabled = false;
    resta.disabled = false;
    multiplicacion.disabled = false;
    division.disabled = false;
    limpiarB.disabled = false;
    igual.disabled = false;
}

//RadioButton Apagado
function off(){
    uno.disabled = true;
    dos.disabled = true;
    tres.disabled = true;
    cuatro.disabled = true;
    cinco.disabled = true;
    seis.disabled = true;
    siete.disabled = true;
    ocho.disabled = true;
    nueve.disabled = true;
    cero.disabled = true;
    suma.disabled = true;
    resta.disabled = true;
    multiplicacion.disabled = true;
    division.disabled = true;
    limpiarB.disabled = true;
    igual.disabled = true;
}

//Botones numéricos
function unoF(){
  resultado.textContent = resultado.textContent + "1";
}

function dosF(){
  resultado.textContent = resultado.textContent + "2";
}

function tresF(){
  resultado.textContent = resultado.textContent + "3";
}

function cuatroF(){
  resultado.textContent = resultado.textContent + "4";
}

function cincoF(){
  resultado.textContent = resultado.textContent + "5";
}

function seisF(){
  resultado.textContent = resultado.textContent + "6";
}

function sieteF(){
  resultado.textContent = resultado.textContent + "7";
}

function ochoF(){
  resultado.textContent = resultado.textContent + "8";
}

function nueveF(){
  resultado.textContent = resultado.textContent + "9";
}

function ceroF(){
  resultado.textContent = resultado.textContent + "0";
}


//Botones operandos
function sumaF(){
    auxiliarUno = resultado.textContent;
    simbolo = "+";
    resultado.textContent = "";
}

function restaF(){
  auxiliarUno = resultado.textContent;
  simbolo = "-";
  resultado.textContent = "";
}

function multiplicacionF(){
  auxiliarUno = resultado.textContent;
  simbolo = "*";
  resultado.textContent = "";
}

function divisionF(){
  auxiliarUno = resultado.textContent;
  simbolo = "/";
  resultado.textContent = "";
}

//Botones Funcionales
function limpiarF(){
    resultado.textContent = "";
    auxiliarUno = 0;
    auxiliarDos = 0;
    simbolo = "";
  }

  function igualF() {
    auxiliarDos = resultado.textContent;
    switch (simbolo) {
      case "+":
        respuesta = parseFloat(auxiliarUno) + parseFloat(auxiliarDos);
        break;
      case "-":
        respuesta = parseFloat(auxiliarUno) - parseFloat(auxiliarDos);
        break;
      case "*":
        respuesta = parseFloat(auxiliarUno) * parseFloat(auxiliarDos);
        break;
      case "/":
        respuesta = parseFloat(auxiliarUno) / parseFloat(auxiliarDos);
        break;
    }
    resultado.textContent = "";
    auxiliarUno = 0;
    auxiliarDos = 0;
    simbolo = "";
    resultado.textContent = respuesta;
  }