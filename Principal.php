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
    <title>Palm Oil</title>
    <link rel="stylesheet" href="CSS/principal.css">
    <link rel="icon" type="image/png" href="IMAGENES/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"></script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="encabezado">
        <h1>Palm Oil</h1>
        <div class="nombre-usuario">
        <?php
            echo $_SESSION["nombre"];
        ?>
        </div>
        <div class="cerrar-sesion">
            <a class="btn btn-danger" href="modulos/cerrarSesion.php">Cerrar sesion</a>
        </div>
    </div>
    <div>
        <img src="IMAGENES/logo.png" class="logo" alt="fondo">
    </div>
</body>
</html>