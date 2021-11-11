<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("Location: ../index/index.php");
    }else{
        require('../externosEncaPie/encabezadoLogeado.php');
        require('../sql/consulta.php');
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/roux_academy/css/tableStyle.css">
    <title>Document</title>
    
</head>
<body>
    <br>
<center>
    <table id="mitabla">

        <thead class="cabecera">
            <tr class>
                <td class="bajo"> Id </td>
                <td class="medio"> Nombre </td>
                <td class="alto"> Empresa </td>
                <td class="alto"> Email </td>
                <td class="alto"> Comentario </td>
            </tr>
        </thead>
        
    <?php
    foreach ($consultaTabla as $dato){?>
    
        <tbody class="cuerpo">
            <tr>
                <td style="text-align: center;"><?php echo $dato['id'];?></td>
                <td><?php echo $dato['nombre'];?></td>
                <td><?php echo $dato['empresa'];?></td>
                <td><?php echo $dato['email'];?></td>
                <td><?php echo $dato['comentario'] . "<br><br>"?></td>
            </tr>

        </tbody>
       
        <?php
        }
    ?>
    </table>
    </center>
    <br>
</body>
</html>

<?php
  include('../externosEncaPie/piePagina.php');
?>