<?php
session_start();
if(empty($_SESSION["id"]) ){
    header("location: inicio_sesion.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!--<link rel="stylesheet" href="CSS/inicio-sesion.css">-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"></script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/mostrar-contraseña.js"></script>
</head>
<body>

    <h1>Bienvenido a tu sistema de inventario</h1>
    <p>Bienvenido <?php
        echo $_SESSION["nombre"];
    ?></p>
    
    <a class="btn btn-danger" href="modulos/cerrarSesion.php">Cerrar sesion</a>
    
</body>
</html>