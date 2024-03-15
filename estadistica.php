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
    <link rel="stylesheet" href="CSS/estadistica.css">
    <link rel="icon" type="image/png" href="IMAGENES/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"></script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="JS/ocultarmodulos.js"></script>
    <script src="JS/cambiopaginas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
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
                <div class="contenedor-home"  onclick="window.location.href='Principal.php'">
                    <li><img src="bootstrap/iconos/house-fill.svg" alt="home"><a href="#">Inicio</a></li>
                </div><br>
                <div class="contenedor-movimientos" onclick="window.location.href='movimientos.php'">
                    <li><img src="bootstrap/iconos/clipboard-data-fill.svg" alt="movimientos"><a href="#">Movimientos</a></li>
                </div><br>    
                <div class="contenedor-registro" onclick="window.location.href='registrousuario.php'">
                    <li><img src="bootstrap/iconos/journal-plus.svg" alt="registro"><a href="#">Registro</a></li>
                </div><br>
                <div class="contenedor-estadisticas">
                    <li><img src="bootstrap/iconos/graph-up-arrow.svg" alt="estadisticas"><a href="#">Estadisticas</a></li>
                </div><br>
                <div class="contenedor-stock">
                    <li><img src="bootstrap/iconos/box-seam-fill.svg" alt="stock"><a href="#">Stock</a></li>
                </div><br>
                <div class="contenedor-usuarios">
                    <li><img src="bootstrap/iconos/person-square.svg" alt="usuarios"><a href="#">Usuarios</a></li>
                </div>
            </ul>
        </nav>
    </div>
    <body>  
    <?php
        include 'modulos/conexion.php';
        include 'modulos/ventaprocuto.php';
    ?>
    <!--Codigo para formulario de venta producto--> 
    
    <button id="entradadeproductos" onclick="mostrar();">Entrada de productos</button>
    <div id="contenedor-padre-ingreso-productos">
        <div class="contenedor-hijo-ingreso-productos">
            <form method="POST">
                <div class="container">
                    <div class="chart-container">
                        <canvas id="graficoProductos1" width="500" height="400"></canvas>
                    </div>
                    <div class="chart-container">
                        <canvas id="graficoProductos2"width="500" height="400"></canvas>
                    </div>
                </div>
                
            </form> 
        </div>    
    </div>  

    <!--Codigo para formulario para entrada de productos -->

    <button id="salidadeproductos" onclick="ocultar();">Salida de productos</button>
    <div id="contenedor-padre-salida-productos">
        <div class="contenedor-hijo-salida-productos    ">
            <form method="POST">
              
            </form>
        </div>
    </div>    

    <script>
           // Datos de ejemplo (puedes reemplazarlos con tus propios datos)
   var productos = ['Producto 1', 'Producto 2', 'Producto 3'];
   var cantidades = [10, 15, 20];

   // Configuración del gráfico
   var ctx = document.getElementById('graficoProductos1').getContext('2d');
   var myChart = new Chart(ctx, {
       type: 'bar',
       data: {
           labels: productos,
           datasets: [{
               label: 'Cantidad',
               data: cantidades,
               backgroundColor: [
                   'rgba(255, 0, 0, 0.6)',
                   'rgba(0, 152, 70, 0.6)',
                   'rgba(00, 0, 255, 0.6)'
               ],
               borderColor: [
                   'rgba(255, 99, 132, 1)',
                   'rgba(54, 162, 235, 1)',
                   'rgba(255, 206, 86, 1)'
               ],
               borderWidth: 1
           }]
       },
       options: {
           responsive: false,
           legend: {
               position: 'right',
           }
       }
       
   });

    // Datos de ejemplo (puedes reemplazarlos con tus propios datos)
    var productos = ['Producto 1', 'Producto 2', 'Producto 3'];
   var cantidades = [10, 15, 20];

   // Configuración del gráfico
   var ctx = document.getElementById('graficoProductos2').getContext('2d');
   var myChart = new Chart(ctx, {
       type: 'pie',
       data: {
           labels: productos,
           datasets: [{
               label: 'Cantidad',
               data: cantidades,
               backgroundColor: [
                   'rgba(255, 0, 0, 0.6)',
                   'rgba(0, 152, 70, 0.6)',
                   'rgba(00, 0, 255, 0.6)'
               ],
               borderColor: [
                   'rgba(255, 99, 132, 1)',
                   'rgba(54, 162, 235, 1)',
                   'rgba(255, 206, 86, 1)'
               ],
               borderWidth: 1
           }]
       },
       options: {
           responsive: false,
           legend: {
               position: 'left',
           }
       }
       
   });
    </script>

</body>
</html>