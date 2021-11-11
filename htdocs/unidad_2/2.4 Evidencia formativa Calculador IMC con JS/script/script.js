
function funcionIMC(){
    let peso = parseFloat(Number(document.getElementById("pesoDato").value));
    let altura = parseFloat(Number(document.getElementById("alturaDato").value));
    let imc = parseFloat(Math.round(peso / Math.pow(altura,2)));

    if(imc < 18.5){
        document.getElementById("etiquetaResultado").innerText = "Su IMC es: " + imc;
        document.getElementById("indicador").innerText = "Usted tiene un peso bajo";
    }else if(imc >= 18.5 && imc <= 24.9){
        document.getElementById("etiquetaResultado").innerText = "Su IMC es: " + imc;
        document.getElementById("indicador").innerText = "Su peso ideal";
    }else if(imc >= 25 && imc <= 29.9){
        document.getElementById("etiquetaResultado").innerText = "Su IMC es: " + imc;
        document.getElementById("indicador").innerText = "Usted tiene sobrepeso";
    }else if(imc >= 30 && imc <= 34.9){
        document.getElementById("etiquetaResultado").innerText = "Su IMC es: " + imc;
        document.getElementById("indicador").innerText = "Usted tiene obesidad";
    }else if(imc >= 35){
        document.getElementById("etiquetaResultado").innerText = "Su IMC es: " + imc;
        document.getElementById("indicador").innerText = "Usted tiene obesidad mórbida";
    }
}