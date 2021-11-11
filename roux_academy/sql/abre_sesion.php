<?php
    session_start();#inicia o continua la sesion
    if(!isset($_SESSION['usuario'])){
        header('Location: ../login/login.php');#redirigir a login.php
        exit;
    }

?>