<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm Oil</title>
    <link rel="stylesheet" href="CSS/inicio-sesion.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"></script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/mostrar-contraseña.js"></script>
    
</head>
<body>
<?php
    include_once ('modulos/conexion.php');
    include_once ('modulos/inicio_sesion.php');
    ?>
    <div class="encabezado">
        <h1>Palm Oil</h1>
    </div>
    <div>
        <img src="IMAGENES/logo.png" class="logo" alt="fondo">
    </div>

    <h2 class="inicio">Iniciar Sesion</h2>
    <div class="contenedor">
        <form class="formulario" method= "POST">
        <svg class="icono-usuario" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
        </svg><br>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16" onclick="togglePasswordVisibility()">
            <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/>
            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
        </svg>
        </svg>
            <input type="text" name="usuario" class="nombre" placeholder="Usuario"><br>
            <input type="password" name="contraseña" class="contraseña" id="pass" placeholder="contraseña"><br>
            <input class="btn btn-success" type="submit"  name="ingresar"  id="boton" value="ingresar">
            <div class="recuperacion">
            <div class="recuperar">
            <a class="btn btn-danger" href="#" id="recuperar">Has olvidado la contraseña</a>
            </div>
        <div class="regis">
            <a class="btn btn-info" href="Registro.php" id="registro">Registrarse</a>
        </div>
        <!--<div class="regresar">
            <a href="#">Regresar</a>
        </div>-->
        </form>  
        
    </div>
    <div class="comprobacion"></div>
</body>
</html> 