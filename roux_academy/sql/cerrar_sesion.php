<?php
    require 'abre_sesion.php';
    $_SESSION=array();
    session_destroy();
    header('Location: ../index/index.php');
?>
