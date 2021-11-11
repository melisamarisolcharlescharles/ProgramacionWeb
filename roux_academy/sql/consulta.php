<?php
    require 'conexion.php';
    $consultar = "SELECT * FROM asistentes";
    $consultaTabla = mysqli_query($conexion,$consultar);
    $array = mysqli_fetch_array($consultaTabla);
?>