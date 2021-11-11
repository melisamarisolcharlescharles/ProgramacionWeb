<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/estilos.css">
    <title>Calculadora IMC</title>
</head>
<body>
    <header class="tituloCabecera">
        <h1>Calcule su Índice de Masa Corporal (IMC)</h1>
    </header>  
    <main class = "calculadora">
        <form action="#" method = "GET">
            <div class="diseñoValores">
                <label>Peso: </label>
                <input type="number" name="peso" step="0.01">
                <label>Altura: </label>
                <input type="number" name="altura" step="0.01"><br><br>
                <button class = "boton" name = "aceptar">Calcular</button><br><br>
            </div>
        </form>
    </main> 
</body>
</html>

<?php
    if(isset($_GET['aceptar'])){
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        $imc = $peso / ($altura * $altura);
        
        if($imc < 18.5){//peso bajo
            echo '<br>';
            echo '
                <div class = "diseñoR">
                    <div class="resultados">
                    <h1 id="etiquetaResultado">Su IMC es: ' . $imc . '</h1>
                    <h1 id="indicador">Su peso es bajo</h1>
                    </div>
                </div>
            ';
            
        }else if($imc >= 18.5 && $imc <= 24.9){//Peso ideal
            echo '<br>';
            echo '
                <div class = "diseñoR">
                    <div class="resultados">
                    <h1 id="etiquetaResultado">Su IMC es: ' . $imc . '</h1>
                    <h1 id="indicador">Su peso es ideal</h1>
                    </div>
                </div>
            ';
        }else if($imc >= 25 && $imc <= 29.9){//Sobrepeso
            echo '<br>';
            echo '
                <div class = "diseñoR">
                    <div class="resultados">
                    <h1 id="etiquetaResultado">Su IMC es: ' . $imc . '</h1>
                    <h1 id="indicador">Usted tiene sobrepeso</h1>
                    </div>
                </div>
            ';
        }else if($imc >= 30 && $imc <= 34.9){//Obesidad
            echo '<br>';
            echo '
                <div class = "diseñoR">
                    <div class="resultados">
                    <h1 id="etiquetaResultado">Su IMC es: ' . $imc . '</h1>
                    <h1 id="indicador">Usted tiene obesidad</h1>
                    </div>
                </div>
            ';
        }else if($imc >= 35){//Obesidad mórbida
            echo '<br>';
            echo '
                <div class = "diseñoR">
                    <div class="resultados">
                    <h1 id="etiquetaResultado">Su IMC es: ' . $imc . '</h1>
                    <h1 id="indicador">Usted tiene obesidad mórbida</h1>
                    </div>
                </div>
            ';
        }
    }
?>