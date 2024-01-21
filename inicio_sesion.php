<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm Oil</title>
    <link rel="stylesheet" href="CSS/sesion-dia.css">
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
    <div class="palma-fondo-contenedor">
        <img class="palma-fondo" src="IMAGENES/palma-fondo.jpg" alt="">
    </div>
    <div class="encabezado">
        <h1>Palm Oil</h1>
    </div>
    <div class="sol" >
        <svg id="estilos-sol" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-low-fill" viewBox="0 0 16 16">
            <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707m-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707m7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707M3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707"/>
        </svg>  
    </div>
    <div>
        <img src="IMAGENES/logo.png" class="logo" alt="fondo">
    </div>

    <h2 class="inicio">Iniciar Sesion</h2>
    <div class="contenedor">
        <form class="formulario" method= "POST">
        <div class="icono-persona">
            <img src="bootstrap/iconos/person-fill.svg" alt="icono de persona">
        </div>
        <div class="icono-ojo">
            <img src="bootstrap/iconos/eye-slash-fill.svg" alt="iconodeojo" id="icono-pass" onclick="pass()">
        </div><br>  
        </svg>
            <input type="text" name="usuario" class="nombre" placeholder="Usuario"><br>
            <input type="password" name="contraseña" class="contraseña" id="contraseña" placeholder="contraseña"><br>
            <input class="btn btn-success" type="submit"  name="ingresar"  id="btn-ingresar" value="ingresar">
            <div class="recuperacion">
            <div class="recuperar">
            <a class="btn btn-danger" href="#" id="recuperar">Has olvidado la contraseña</a>
            </div>
        <div class="regis">
            <a class="btn btn-primary" href="Registro.php" id="registro">Registrarse</a>
        </div>
        <!--<div class="regresar">
            <a href="#">Regresar</a>
        </div>-->
        </form>  
    </div>
</body>
<script src="js/mostrar-contraseña.js"></script>
    
</html> 