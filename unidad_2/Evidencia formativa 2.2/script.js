/*
Escribir un programa en JS que calcule la desviacion estandar de un conjunto de valores. 

¿Como se calcula la desviación estandar? https://www.disfrutalasmatematicas.com/datos/desviacion-estandar.html



Funciones que pueden servirte

parseInt, parseFloat

Array.length

x.length
*/


let pedirD = prompt("Introduce tus valores de grupo separando los datos con guiones");
let separarValores = pedirD.split('-').map(Number);
// Media
let datosG = separarValores.length;
let total = 0;
separarValores.forEach(function(componente){
   total += componente; 
});
let media = total/datosG;
// Varianza
let sumatoria = 0;
separarValores.forEach(function(componente){
    sumatoria += Math.pow(componente-media, 2);
});
let varianza = sumatoria/datosG;
// Desviacion estandar
alert(`Desviacion estandar:\n${Math.sqrt(varianza)}`);