<?php
    require('../externosEncaPie/encabezado.php');
    
    require ('../sql/conexion.php');
    session_start();
    if (isset($_SESSION['usuario'])) {
        header("Location: ../index/index.php");
    }
    $valido=false;
    if(isset($_POST['aceptar'])){
        $usuario=$_POST['usuario'];
        $contrasena=$_POST['contrasena'];
    
        if(!valida_usuario_bd($usuario,$contrasena,$conexion)){
            
            $valido=false;
        }else{
            
            session_start();
            $valido=true;
            $_SESSION['usuario']=$usuario;
            header('Location: ../index/index.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/roux_academy/css/loginStyle.css">
    <title>Document</title>
</head>

<body>
    
<div class = "cuerpo">
        <div class="cuerpoLogin">
        <br><br>
            <h1>LOGIN</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" class= "form_ctrl" name="usuario" placeholder="Usuario" require="Introduce el nombre de usuario">
            <input type="password" class="form_ctrl" name="contrasena" placeholder="Contraseña" require>
            <input type="submit" value="Ingresar" name="aceptar">
            <?php
                if (!$valido && isset($_POST['aceptar'])) {
                    echo '<p class="alerta"> Usuario y/o contraseña inválido</p>';
                }
            ?>
            </form>
            <br><br>
        </div>
    </div>
    
</body>

</html>

<?php
  include('../externosEncaPie/piePagina.php');
?>