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
    <link rel="stylesheet" href="http://localhost/h2/yener-main/CSS/estadistica.css">
    
    <link rel="icon" type="image/png" href="http://localhost/h2/yener-main/IMAGENES/logo.png">
    <link rel="stylesheet" href="http://localhost/h2/yener-main/bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"></script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="encabezado">
        <div class="logo-titulo">
            <img src="http://localhost/proyecto/yener/IMAGENES/logo.png" class="logo" alt="fondo">
            <h1>Palm Oil</h1>
        </div>
        <div class="contenedor-cerrar-sesion">
            <div class="nombre-usuario">
                <b class="negrilla">&nbsp;Bienvenido: <?php echo $_SESSION["nombre"]; ?> &nbsp;</b>
            </div>
            <div class="cerrar-sesion">
                <a class="btn btn-danger" href="cerrarSesion.php">Cerrar sesion</a>
            </div>
        </div>
    </div>
    <div class="lista-principal">
        <nav class="nav-general">
            <ul class="nav-list">
                <div class="contenedor-home">
                    <li><img src="http://localhost/proyecto/yener/bootstrap/iconos/house-fill.svg" alt="home"><a href="#">Inicio</a></li>
                </div><br>
                <div class="contenedor-movimientos">
                    <li><img src="http://localhost/proyecto/yener/bootstrap/iconos/clipboard-data-fill.svg" alt="movimientos"><a href="../movimientos.php">Movimientos</a></li>
                </div><br>    
                <div class="contenedor-registro">
                    <li><img src="http://localhost/proyecto/yener/bootstrap/iconos/journal-plus.svg" alt="registro"><a href="../principal.php">Registro</a></li>
                </div><br>
                <div class="contenedor-estadisticas">
                    <li><img src="http://localhost/proyecto/yener/bootstrap/iconos/graph-up-arrow.svg" alt="estadisticas"><a href="procesar.php">Estadisticas</a></li>
                </div><br>
                <div class="contenedor-stock">
                    <li><img src="http://localhost/proyecto/yener/bootstrap/iconos/box-seam-fill.svg" alt="stock"><a href="#">Stock</a></li>
                </div><br>
                <div class="contenedor-usuarios">
                    <li><img src="http://localhost/proyecto/yener/bootstrap/iconos/person-square.svg" alt="usuarios"><a href="#">Usuarios</a></li>
                </div>
            </ul>
        </nav>
    </div>  
    


    <div class="auto">
     
    <?php
// Aquí estaría tu lógica para obtener los datos de la base de datos y almacenarlos en $result

// vent contenedor
echo "<div class='vent'>
<a class='vent1'>Venta de productos </a>  
<a class='vent1'>Entrada de productos  </a>
</div>";

// Comienzo de la tabla
echo "<table class='styled-table'>";
echo "<thead><tr><th>ID Producto</th>
<th>Nombre del Producto</th><th>Precio por Unidad</th>
<th>Stock</th><th>ID Comprador</th><th>Nombre Comprador</th>
<th>Cantidad</th><th>Fecha de Venta</th>
<th>Precio Total</th>
<th>Stock Total</th>
<th>Descripción</th>
<th>Acciones</th></tr>
</thead>";
echo "<tbody>";

// Lógica para mostrar los datos de la base de datos
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $id = $row["id_producto"]; // Obtener el ID del producto
        echo "<tr id='fila-$id'>"; // Asignar un ID único a la fila
        echo "<td>".$row["id_producto"]."</td>";
        echo "<td>".$row["nombre_producto"]."</td>";
        echo "<td>".$row["precio_unidad"]."</td>";
        echo "<td>".$row["stock"]."</td>";
        echo "<td>".$row["id_comprador"]."</td>";
        echo "<td>".$row["nombre_comprador"]."</td>";
        echo "<td>".$row["cantidad"]."</td>";
        echo "<td>".$row["fecha_venta"]."</td>";
        echo "<td>".$row["precio_total"]."</td>";
        echo "<td>".$row["stock_total"]."</td>";
        echo "<td class='tooltip'>Descripción<span class='tooltiptext'>Esta es la descripción del producto en cursiva.</span></td>";
        echo "<td>
            <div class='acc'>
                <button class='btn-editar' onclick='abrirModalEdicion($id)'>Editar</button>
                <button class='btn-eliminar' onclick='eliminarRegistro($id)'>Eliminar</button>
            </div>
        </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='12'>0 resultados</td></tr>";
}

// Cierre de la tabla
echo "</tbody>";
echo "</table>";
?>

<!-- Scripts JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>





      <!-- Modal para editar -->
      <div id="modalEditar" class="modal">
        <div class="modales">
            <form id="formularioEdicion" method="post" action="modulos/editar_registro.php">

        
            <span class="close" onclick="cerrarModalEdicion()">&times;</span>
            <h2>Editar Fila</h2>
                <input type="hidden" id="idProducto" name="idProducto">
                <label for="nombreProducto">Nombre del Producto:</label>
                <input type="text" id="nombreProducto"class="form-control" id="nombre-producto" name="nombre_producto">
                        <label for="preciounit">Precio por unidad</label>
                        <input name="precio_unidad" type="text" class="form-control" id="precio-unit">
                        <label for="cantidadstock">Stok</label>
                        <input name="stock" type="text" class="form-control" id="advertencias-producto">
                        <label for="idbuyer">ID comprador</label>
                        <input name="id_comprador" type="text" class="form-control" id="id-buyer">
                        <label for="nombrebuyer">Nombre comprador</label>
                        <input name="nombre_comprador" type="text" class="form-control" id="nombre-buyer">
                        <label for="cantidadsale">Cantidad</label>
                        <input name="cantidad" type="number" class="form-control" id="cantidad-sale">
                        <label for="dateventa">Fecha de venta</label>
                        <input name="fecha_venta" type="date" class="form-control" id="fecha-creacion">
                        <label for="totalprice">Precio total</label>
                        <input name="precio_total" type="text" class="form-control" id="id-buyer">
                        <label for="stocktotal">Stock total</label><br> 
                        <input name="stock_total" type="text"   class="form-control" id="stock-total">
            
                <div class="descripcion-movimientos-ingresos">
                    <label for="fecha">Descripcion o recomendaciones</label>
                    <textarea name="descripcion-movimiento-ingreso" class="form-control" id="descripcion-ingresos" cols="50" rows="5"></textarea>
                </div>
                    
                <!-- Agrega más campos de edición aquí -->
                <button type="submit">Guardar Cambios</button>
            </form>
        </div>
    </div>

    




   <!--  <div class="container" id="container">
            <h2>no hay ningun movimientos en esto momentos.</h2>
            <p>Desea hacer un movimiento ahora?</p>
            <button id="add" onclick="mostrarModal()">Movimientos</button>
          </div>   
-->

    
    


  <!--  <div class="stock-h2" id="ttable"> 
        <h4>Inventario de stock</h4>
        <div class="stock-left">
        <a id="add" onclick="mostrarModal()">o</a>
        <a id="deleteAllBtn">Eliminar</a>
    </div>
  
    

</div>

-->
   

  
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


<script src="../JS/estadistica.js"></script>



</body>
</html>