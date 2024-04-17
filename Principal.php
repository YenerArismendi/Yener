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
    <script src="sweetalert/dist/sweetalert2.all.js"><  /script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="encabezado">
        <div class="logo-titulo">
            <img src="IMAGENES/logo.png" class="logo" alt="fondo">
            <h1>Palm Oil</h1>
        </div>
        <div class="contenedor-cerrar-sesion">
            <div class="nombre-usuario">
                <b class="negrilla">&nbsp;Bienvenido: <?php echo $_SESSION["nombre"]; ?> &nbsp;</b>
            </div>
            <div class="cerrar-sesion">
                <a class="btn btn-danger" href="modulos/cerrarSesion.php">Cerrar sesion</a>
            </div>
        </div>
    </div>  
    <div class="lista-principal">
        <nav class="nav-general">
            <ul class="nav-list">
                <div class="contenedor-home" onclick="window.location.href='Principal.php'">
                    <li><img src="bootstrap/iconos/house-fill.svg" alt="home"><a href="#">Inicio</a></li>
                </div><br>
                <div class="contenedor-movimientos"  onclick="window.location.href='movimientos.php'">
                    <li><img src="bootstrap/iconos/clipboard-data-fill.svg" alt="movimientos"><a href="movimientos.php">Movimientos</a></li>
                </div><br>    
                <div class="contenedor-registro" onclick="window.location.href='registrousuario.php'">
                    <li><img src="bootstrap/iconos/journal-plus.svg" alt="registro"><a href="registrousuario.php">Registro</a></li>
                </div><br>
                <div class="contenedor-estadisticas" onclick="windows.location.href='estadistica.php'">
                    <li><img src="bootstrap/iconos/graph-up-arrow.svg" alt="estadisticas"><a href="estadistica.php">Estadisticas</a></li>
                </div><br>
                <div class="contenedor-stock"onclick="window.location.href='Stock.php' ">
                    <li><img src="bootstrap/iconos/box-seam-fill.svg" alt="stock"><a href="Stock.php">Stock</a></li>
                </div><br>
                <div class="contenedor-usuarios"onclick="window.location.href='usuario.php'">
                    <li><img src="bootstrap/iconos/person-square.svg" alt="usuarios"><a href="usuario.php">Usuarios</a></li>
                </div>
            </ul>
        </nav>
    </div>
    <div class="contenedor-padre-vienvenida">
    <img class="fondo-vienvenida" src="IMAGENES/fondo-home.jpg" alt="fondo">
        <h1 class="vienvenido-sistema">Vienvenido a tu sistema de inventario</h1>
        <div class="contenedor-extra">
            <div class="siemprecontigo" >
                <div class="contenedor-texto-contigo">
                    <img class="siemprecontigoimg" src="IMAGENES/siempre-contigo.jpg" alt="siempre contigo">
                    <h4><strong>Siempre contigo</strong></h4>
                    <p>Recuerda que tienes soporte para cualquier problema presenteado con el aplicatico
                    siempre nos tienes a tu servicio en horario laboral</p>
                </div>
            </div>
            <div class="tu-mejor-software">
                <h4><strong>Tu mejor opción</strong></h4>
                <p>Siempre pensando en las pymes para su facil accecibilidad, con funciones de control tanto como productos, usuarios, compradores y proveedores </p>
            </div>
            <div class="controla-tu-inventario">
                <h4><strong>Controla de mejor forma tu inventario</strong></h4>
                <p>Lleva un mejor control de todos tus productos, recuaerda que es tu dinero el que esta en juego!</p>
            </div>
        </div>
    </div>
    
</body>
</html>