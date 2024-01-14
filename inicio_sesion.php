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
          <svg class="icono-contraseña" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
        </svg>
            <input type="text" name="usuario" class="nombre" placeholder="Usuario"><br>
            <input type="password" name="contraseña" class="contraseña" placeholder="contraseña"><br>
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