/*
Escribe un programa en javascript que obtenga lo siguiente
La CFE genera la factura con base en la lectura Kwh consumidos en un bimestre los primeros 300kw
son a la tarifa1 (basica) los siguientes 300 kw son a la tarifa 2(intermedia) de 601 kw hacia arriba son a
la tarifa de alto consumo en Kw y los costos de cada tarifa escribir un pequeño
programa en javascript que obtenga el total a pagar y presente el detalle a pagar de cada tarifa

1000kw t1 $1, t2


    300*$1
    300*$3
    400*$5

  ----------

    T1 $300
    T2 $900
    T3 $2000

  ----------

tot a pag $3200


Algunas funciones que pueden ayudarte al leer mediante la funciojn prompt
parseint, parseFloat

 */

let consumo = prompt("Introduce únicamente el número de tu consumo de kWh.");
let consumoN = parseFloat(consumo);

let t1 = 0,t2 = 0,t3 = 0;

if (consumo > 600){
    t1 = (consumo-600)*5;
    consumo = 600;
}
if (consumo > 300){
    t2 = (consumo-300)*3;
    consumo = 300;
}

t3 = consumo;
let totalP = t1 + t2 + t3;
console.log(totalP);
alert(`Total a pagar:
T1     = $${t3}
T2     = $${t2}
T3     = $${t1}
Total = $${totalP}`);