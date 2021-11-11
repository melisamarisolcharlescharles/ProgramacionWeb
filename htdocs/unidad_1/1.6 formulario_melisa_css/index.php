<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Formulario</title>

</head>
<body>
    <form action="formulario.php">
    <fieldset class ="orangeF"></fieldset>
    <fieldset>
        <h1>Survey for Product X</h1>
        <p>Tu correo se registrará cuando envíes este formulario</p>
        <p>¿No es tuya la dirección 1830401@upv.edu.mx? Cambiar de cuenta</p>
        <p style="color:red">*Obligatorio</p>
    
    </fieldset>


    <br>
    <form action="index.php" method="POST">
        <fieldset>
            <label for="nombre">Name: * </label><br><br>
            <input class="inputTxt" type="text" name="nombre" id="nombre" required minlength="7">
        </fieldset>

        <br>
        <fieldset>
            <label for="cars">What car do you prefer * </label><br><br>

            <img src="img/carroblanco.jpg" alt="carroblanco"> 
            <img align="right" src="img/carrogris.jpg" alt="carrogris"> <br>

            <input required text-align="left" type="radio" name="carro" id="carro" value="carroblanco">
            <label for="carro">Mini car </label>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="radio" name="cars" id="cars" value="CarroNegro">
            <label for="cars">Opción 2</label>
            
            <br><br>
            <img src="img/carroazul.jpg" alt="carroazul"> <br>
            <input type="radio" name="cars" id="carroazul" value="carroazul">
            <label for="carroazul">Opción 3</label>
            <br>
            

    

                <input class="boton" type="submit" value="siguiente">

        </fieldset>
    </form>
</body>
</html>
