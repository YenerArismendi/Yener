<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm Oil</title>
    <link rel="stylesheet" href="CSS/sesion-dia.css">
    <link rel="icon" type="image/png" href="IMAGENES/logo.png">
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