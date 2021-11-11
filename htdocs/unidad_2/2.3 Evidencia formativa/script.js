//Función Suma
function suma(){
    
    //Primera caja
    let caja = document.createElement("input");
    caja.type="number";
    document.getElementsByTagName("body")[0].appendChild(caja);

    //Segunda caja
    let caja2 = document.createElement("input");
    caja2.type="number";
    document.getElementsByTagName("body")[0].appendChild(caja2);

    //Botón Calcular
    let boton2 = document.createElement("button");
    boton2.textContent = "Calcular";
    document.getElementsByTagName("body")[0].appendChild(boton2);

    //Función de Botón Calcular
    boton2.onclick = function(){

        //Conversión y operación de la función
        var s = parseInt(caja.value) + parseInt(caja2.value);

        //Mostrar resultado
        let resultado = document.createElement("h2");
        resultado.textContent=s;
        document.getElementsByTagName("body")[0].appendChild(resultado);
    }
    main.appendChild(boton2);
}

//____________________________________________________________________


//Función Resta
function resta(){
    //Primera caja
    let caja = document.createElement("input");
    caja.type="number";
    document.getElementsByTagName("body")[0].appendChild(caja);

    //Segunda caja
    let caja2 = document.createElement("input");
    caja2.type="number";
    document.getElementsByTagName("body")[0].appendChild(caja2);

    //Botón Calcular
    let boton2 = document.createElement("button");
    boton2.textContent = "Calcular";
    document.getElementsByTagName("body")[0].appendChild(boton2);

    //Función de Botón Calcular
    boton2.onclick = function(){

        //Conversión y operación de la función
        var s = parseInt(caja.value) - parseInt(caja2.value);

        //Mostrar resultado
        let resultado = document.createElement("h2");
        resultado.textContent=s;
        document.getElementsByTagName("body")[0].appendChild(resultado);
    }
    main.appendChild(boton2);
}

//____________________________________________________________________

//Función Multiplicación
function multiplicacion(){
    //Primera caja
    let caja = document.createElement("input");
    caja.type="number";
    document.getElementsByTagName("body")[0].appendChild(caja);

    //Segunda caja
    let caja2 = document.createElement("input");
    caja2.type="number";
    document.getElementsByTagName("body")[0].appendChild(caja2);

    //Botón Calcular
    let boton2 = document.createElement("button");
    boton2.textContent = "Calcular";
    document.getElementsByTagName("body")[0].appendChild(boton2);

    //Función de Botón Calcular
    boton2.onclick = function(){

        //Conversión y operación de la función
        var s = parseInt(caja.value) * parseInt(caja2.value);

        //Mostrar resultado
        let resultado = document.createElement("h2");
        resultado.textContent=s;
        document.getElementsByTagName("body")[0].appendChild(resultado);
    }
    main.appendChild(boton2);
}


//____________________________________________________________________

//Función División
function division(){
    //Primera caja
    let caja = document.createElement("input");
    caja.type="number";
    document.getElementsByTagName("body")[0].appendChild(caja);

    //Segunda caja
    let caja2 = document.createElement("input");
    caja2.type="number";
    document.getElementsByTagName("body")[0].appendChild(caja2);

    //Botón Calcular
    let boton2 = document.createElement("button");
    boton2.textContent = "Calcular";
    document.getElementsByTagName("body")[0].appendChild(boton2);

    //Función de Botón Calcular
    boton2.onclick = function(){

        //Conversión y operación de la función
        if(parseFloat(caja.value) == 0 || parseFloat(caja2.value) == 0){
            alert('El 0 no está permitido, ERROR');
        }else{
        var s = parseFloat(caja.value) / parseFloat(caja2.value);
        //Mostrar resultado
        let resultado = document.createElement("h2");
        resultado.textContent=s;
        document.getElementsByTagName("body")[0].appendChild(resultado);
        }
    }
    main.appendChild(boton2);
}


//____________________________________________________________________

//Función Promedio
function promedio(){
    //Pide la cantidad de valores
    var valores = parseInt(prompt("Introduce cantidad de valores"));
    var s = 0;
    crearCaja ="";
    //Crea la caja
    for (let i = 0; i < valores; i++) {
        crearCaja += "<input type='number' id = 'caja" + i + "'><br>";
    }
    document.getElementById('resultado').innerHTML = crearCaja;

    //Botón Calcular
    let boton2 = document.createElement("button");
    boton2.textContent = "Calcular";
    document.getElementsByTagName("body")[0].appendChild(boton2);
    
    //Función de Botón Calcular
    boton2.onclick = function(){
        for (let i = 0; i < valores; i++) {
            s += parseInt(document.getElementById("caja" + i).value);
        }
            let resultado = document.createElement("h2");
            resultado.textContent=s/valores;
            document.getElementsByTagName("body")[0].appendChild(resultado);
    }
    main.appendChild(boton2);
    
}


//____________________________________________________________________


//Función Desviación Estándar
function de(){
    //Pide la cantidad de valores
    var valores = parseInt(prompt("Introduce cantidad de valores"));
    var s = 0;
    var sumatoria = 0;
    crearCaja ="";
    //Crea la caja
    for (let i = 0; i < valores; i++) {
        crearCaja += "<label>Num " + (i+1) + "</label><input type='number' id = 'caja" + i + "'><br>";
    }
    document.getElementById('resultado').innerHTML = crearCaja;

    //Botón Calcular
    let boton2 = document.createElement("button");
    boton2.textContent = "Calcular";
    document.getElementsByTagName("body")[0].appendChild(boton2);
    
    //Función de Botón Calcular
    boton2.onclick = function(){
        //Se saca la media
        for (let i = 0; i < valores; i++) {
            s += parseInt(document.getElementById("caja" + i).value);
        }
        s = s/valores;
        //Se saca la sumatoria
        for (let i = 0; i < valores; i++) {
            sumatoria += Math.pow(parseInt(document.getElementById("caja" + i).value)-s,2)  ;
        }
        sumatoria = sumatoria/valores;
        //Se saca la varianza
        var varianza = sumatoria;
        
            let resultado = document.createElement("h2");
            resultado.textContent=Math.sqrt(varianza);
            document.getElementsByTagName("body")[0].appendChild(resultado);
    }
    main.appendChild(boton2);
    
}