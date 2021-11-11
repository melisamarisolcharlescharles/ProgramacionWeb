let cajaTabla = document.getElementById("tabla");
let cajaResultado = document.getElementById("resultados");

let errorR = document.getElementById("error_tabla");
let errorT = document.getElementById("error_resultados");

let resultado = 0;

function mostrar(){
    if (parseInt(cajaTabla.value) < 1 || parseInt(cajaTabla.value)>50){
        errorR.textContent="El numero no debe de ser menor a 1 o mayor a 50";
    }
    if(parseInt(cajaResultado.value)< 1 || parseInt(cajaResultado.value)>20){
        errorT.textContent="El numero no debe de ser menor a 1 o mayor a 20";
    }else{
        errorR.textContent="";
        errorT.textContent="";
        let res = document.getElementsByClassName("resultados");
        res[0].innerHTML="";

        for(let i = 1; i < parseInt(cajaResultado.value) + 1; i++){
            let fila = document.createElement("table");
            fila.innerHTML = "<td>" + cajaTabla.value + "</td> <td>" + " * " + "</td>" + "<td>" + i +"</td>" + "<td>=</td>" + "<td>" + cajaTabla.value * i + "</td>";
            res[0].appendChild(fila);
        }
    }
}