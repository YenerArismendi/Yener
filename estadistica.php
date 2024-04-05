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
    
   <?php
 include 'modulos/conexion.php';

   ?>
    <div class="auto">

   <!--  <div class="container" id="container">
            <h2>no hay ningun movimientos en esto momentos.</h2>
            <p>Desea hacer un movimiento ahora?</p>
            <button id="add" onclick="mostrarModal()">Movimientos</button>
          </div>   
-->
<?php
    // Configuración de la conexión a la base de datos
    $servername = "localhost"; // Cambia esto si tu servidor de base de datos está en otro lugar
    $username = "root"; // Nombre de usuario de la base de datos (por defecto es 'root' en muchos sistemas)
    $password = ""; // Contraseña de la base de datos (deja esto en blanco si no tiene contraseña)
    $dbname = "formulario_estadistica"; // Nombre de la base de datos creada

    // Conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar si se ha enviado el formulario y procesar los datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $id_producto = $_POST['id_producto'];
        $nombre_producto = $_POST['nombre_producto'];
        $precio_unidad = $_POST['precio_unidad'];
        $stock = $_POST['stock'];
        $id_comprador = $_POST['id_comprador'];
        $nombre_comprador = $_POST['nombre_comprador'];
        $cantidad = $_POST['cantidad'];
        $fecha_venta = $_POST['fecha_venta'];
        $precio_total = $_POST['precio_total'];
        $stock_total = $_POST['stock_total'];

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO estadisticas (id_producto, nombre_producto, precio_unidad, stock, id_comprador, nombre_comprador, cantidad, fecha_venta, precio_total, stock_total)
        VALUES ('$id_producto', '$nombre_producto', '$precio_unidad', '$stock', '$id_comprador', '$nombre_comprador', '$cantidad', '$fecha_venta', '$precio_total', '$stock_total')";

        if ($conn->query($sql) === TRUE) {
            echo "Datos guardados correctamente.";
        } else {
            echo "Error al guardar los datos: " . $sql . "<br>" . $conn->error;
        }
    }

    // Obtener los datos de la tabla de la base de datos
    $sql_select = "SELECT * FROM estadisticas";
    $result = $conn->query($sql_select);

    // Mostrar los datos en una tabla HTML con estilo
    echo "<table class='styled-table'>";
    echo "<thead><tr><th>ID Producto</th><th>Nombre del Producto</th><th>Precio por Unidad</th><th>Stock</th><th>ID Comprador</th><th>Nombre Comprador</th><th>Cantidad</th><th>Fecha de Venta</th><th>Precio Total</th><th>Stock Total</th></tr></thead>";
    echo "<tbody>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id_producto"]."</td><td>".$row["nombre_producto"]."</td><td>".$row["precio_unidad"]."</td><td>".$row["stock"]."</td><td>".$row["id_comprador"]."</td><td>".$row["nombre_comprador"]."</td><td>".$row["cantidad"]."</td><td>".$row["fecha_venta"]."</td><td>".$row["precio_total"]."</td><td>".$row["stock_total"]."</td></tr>";
        }
    } else {
        echo "<tr><td colspan='10'>0 resultados</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";

    // Cerrar la conexión
    $conn->close();
    ?>
    


    <div class="stock-h2" id="ttable"> 
        <h4>Inventario de stock</h4>
        <div class="stock-left">
        <a id="add" onclick="mostrarModal()">o</a>
        <a id="deleteAllBtn">Eliminar</a>
    </div>
  
    

</div>


   

  
  <!--  <div class="inventory">
        <table id="inventoryTable">
            <thead>
                <tr>
                    <th>ID Producto</th>
                    <th>Nombre del producto</th>
                    <th>Precio por unidad</th>
                    <th>Stock</th>
                    <th>ID comprador</th>
                    <th>Nombre comprador</th>
                    <th>Cantidad</th>
                    <th>Fecha de venta</th>
                    <th>Precio total</th>
                    <th>Stock total</th>
                </tr>
            </thead>
            <tbody>
            
                
          Aquí se agregarán los elementos dinámicamente 
            </tbody>
    
            
        </table>

    </div> 
    <div class="pagination">
            <button id="prevPageBtn">Anterior</button>
            Aquí se agregarán los botones de página 
            <button id="nextPageBtn">Siguiente</button>
        </div>
</div>

-->


<script src="JS/movimiento-y-estadistica.js"></script>



</body>
</html>
