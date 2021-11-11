<?php
    require('conexion.php');
    session_start();
    if (!isset($_SESSION['usuario'])) {
        require('../externosEncaPie/encabezado.php');
    }else{
        require('../externosEncaPie/encabezadoLogeado.php');
    }
?>