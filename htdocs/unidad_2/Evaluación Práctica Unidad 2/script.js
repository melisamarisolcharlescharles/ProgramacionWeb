let cajaTabla = document.getElementById("tabla");
let cajaResultado = document.getElementById("resultado");
let erorR = document.getElementById("error_resultados");
let erorT = document.getElementById("error_tabla");
let resultado=0;

function mostrar(){
    if(parseInt(cajaTabla)<1 || parseInt(cajaResultado.value)>50){
        erorR.textContent="El número no debe de ser menor a 1 o mayor a 50";
    }else if (parseInt(cajaResultado)<1 || parseInt(cajaResultado.value)>20){
        erorT.textContent="El número no debe de ser menor a 1 o mayor a 20";
    }else{
        errorR.textContent="";
        errorT.textContent="";
        for(let i = 1; i<parseInt(cajaResultado.value)+1; i++){
            resultado=parseInt(cajaTabla.value) * i;
            let mostrarResultado =document.createElement("h2");
            mostrarResultado.setAttribute("class", "contenedor");
            mostrarResultado.textContent=cajaTabla.value + "*" + i + "=" +resultado;
            document.getElementById("body")[0].appendChild(mostrarResultado);

        }
    }

}