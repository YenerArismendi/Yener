<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="CSS/Registrar.css">
    <!--<link rel="stylesheet" href="sweetalert/dist/sweetalert2.css">
    <link rel="stylesheet" href="sweetalert/dist/sweetalert2.nim.css">-->
    <script src="sweetalert/dist/sweetalert2.all.js"></script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="encabezado">
        <h1>Palm Oil</h1>
    </div>
    <div>
        <img src="IMAGENES/logo.png" class="logo" alt="fondo">
    </div>
    <div class="contenedor">
       <h2 class="registro">Registro</h2>
       <?php
    
    include "modulos/conec_registr.php";
    include "modulos/conexion.php";
    
    ?> 
       <div class="formularios">
        <form  action="" method= "POST" class= "formulario">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo"><br>
            <input type="email" name="correo" placeholder="E-mail"><br>
            <input type="text" name="usuario" placeholder="Nombre de usuario"><br>
            <input type="password" name="contraseña" placeholder="Contraseña"><br>
            <input type="password" name="contraseña2" placeholder="Confirmar Contraseña"><br>
            <label for="roles">rol:</label>
            <select name="roles" id="roles" >
                <option value="administrador">Administrador</option>
                <option value="usuario">Usuario</option>
            </select><br>

            <input type="submit" name="registrar" placeholder="Registrar"><br>
           
            <div class="ingresar">
            <p class="cuenta">Ya tienes cuenta?</p>
            <a href="/inicio_sesion.html">Ingresar</a>
        </div>  
        </div>
          
        </form>
     
    </div>
</body>
     
</html> 