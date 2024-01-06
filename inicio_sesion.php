<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palm Oil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/inicio_sesion.css">
</head>
<body>

    <?php
    
    include_once "modulos/inicio_sesion.php";
    include_once "modulos/conexion.php"
    
    ?>

    <div class="encabezado">
        <h1>Palm Oil</h1>
    </div>
    <div>
        <img src="IMAGENES/logo.png" class="logo" alt="fondo">
    </div>
    <div class="contenedor">
        <h2 class="subti">Iniciar Sesion</h2>
        <svg class="icono-usuario" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
          </svg>
          <svg class="icono-contraseña" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>
        <form action="" method= "POST">
            <input type="text" name="usuario" class="nombre" placeholder="Usuario"><br>
            <input type="password" name="contraseña" class="contraseña" placeholder="contraseña"><br>
            <input type="submit" name="ingresar" class="bot" id="boton" placeholder="ingresar">
            <div class="recuperacion">
            <div class="recuperar">
            <a href="#">Has olvidado la contraseña</a>
            </div>
        <div class="regis">
            <a class="regis" href="/Registro.html">Registrarse</a>
        </div>
        <div class="regresar">
            <a href="#">Regresar</a>
        </div>
        </form>  
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="comprobacion"></div>
</body>
</html>