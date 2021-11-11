<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprende las tablas de multiplicar</title>
    <link rel="stylesheet" href="estilo.css">
 
</head>
<body>
    <div class="contenedor">
        <h1>TABLAS DE multiplicar</h1>
        <div class="controles">
            <label for="tabla" class="etiqueta">Tabla</label>
            <input type="number" id="tabla" >
            <label for="" id="error_tabla" class="alerta"></label>
            <br>
            <label for="resultados" class="etiqueta">Resultados</label>
            <input type="number" id="resultados" >
            <label for="" id="error_resultados" class="alerta"></label>
            <br>
            <button onclick="mostrar();">Calcular</button>
        </div>
        <div class="resultados">
            <div class="contenedor">
                <label for="" id="resultadoTabla"></label>
            </div>
        </div>
    </div>

    
    <script src="script.js"></script>
</body>
</html>