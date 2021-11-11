<?php
    $bd = 'evidencia';
    $servidor = 'localhost';
    $usuario='root';
    $contrasena='';
    
    #Creamos una conexión a la base de datos
    $conexion=mysqli_connect($servidor,$usuario,$contrasena,$bd);

    #Checamos la conexión
    if(!$conexion){
        die('Conexión a la base de datos ' . $bd . ' falló: ' . mysqli_connect_error());
    }
    function valida_usuario_bd($usuario, $contrasena, $conexion){
        $query = "select 1 as user_Valido from administradores where usuario='$usuario' and contrasena=MD5('$contrasena')";
        
        $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
        if (mysqli_num_rows($resultado)==0) {
            return false;
        }else{
            return true;
        }
    }
?>