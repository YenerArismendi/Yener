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
    <link rel="stylesheet" href="CSS/stock.css">
    <link rel="icon" type="image/png" href="IMAGENES/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"></script>
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
                <div class="contenedor-home">
                    <li><img src="bootstrap/iconos/house-fill.svg" alt="home"><a href="#">Inicio</a></li>
                </div><br>
                <div class="contenedor-movimientos">
                    <li><img src="bootstrap/iconos/clipboard-data-fill.svg" alt="movimientos"><a href="movimientos.php">Movimientos</a></li>
                </div><br>    
                <div class="contenedor-registro">
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
    
    <div class="auto">

        <div id="myModal" class="modal">
         
            <div class="modal-content">
              <span class="close">&times;</span>
              <input type="text" id="productName" placeholder="Nombre del producto">
              <input type="number" id="productQuantity" placeholder="Cantidad">
              <input type="number" id="productPrice" placeholder="Precio">
              <input type="number" id="productPrice" placeholder="Precio">
              <input type="number" id="productPrice" placeholder="Precio">
              <input type="number" id="productPrice" placeholder="Precio">
              <button id="addProduct">Agregar</button>
            </div>
       
          </div>

        
    
        <div class="stock-h2">
        <h4>Inventario de stock</h4>
        <div class="stock-left">
        <a id="addProductBtn">Agregar Producto</a>
    </div>
</div>
    <div class="inventory">
        <table id="inventoryTable">
            <thead>
                <tr>
                    <th>ID Producto</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio U/N</th>
                    <th>Almacen</th>
                    <th>Nivel alerta</th>
                    
                </tr>
            </thead>
            <tbody>
            
                
                <!-- Aquí se agregarán los elementos dinámicamente -->
            </tbody>
            <tbody>
                <td></td>
                
                <!-- Aquí se agregarán los elementos dinámicamente -->
            </tbody>
            
        </table>
    <!--    <div class="footer-pagination">
            <span>Showing 1 to 10 of 60 entries</span>
            <div class="index-button">
                <button>Previous</button>
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
                <button>6</button>
                <button>Next</button>
            </div>
        </div>
    -->
    </div>
</div>


  

<script src="JS/stock.js"></script>

</body>
</html>