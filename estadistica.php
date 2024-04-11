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
            <img src="http://localhost/h2/yener-main/IMAGENES/logo.png" class="logo" alt="fondo">
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
                    <li><img src="http://localhost/h2/yener-main/bootstrap/iconos/house-fill.svg" alt="home"><a href="#">Inicio</a></li>
                </div><br>
                <div class="contenedor-movimientos">
                    <li><img src="http://localhost/h2/yener-main/bootstrap/iconos/clipboard-data-fill.svg" alt="movimientos"><a href="../movimientos.php">Movimientos</a></li>
                </div><br>    
                <div class="contenedor-registro">
                    <li><img src="http://localhost/h2/yener-main/bootstrap/iconos/journal-plus.svg" alt="registro"><a href="../principal.php">Registro</a></li>
                </div><br>
                <div class="contenedor-estadisticas">
                    <li><img src="http://localhost/h2/yener-main/bootstrap/iconos/graph-up-arrow.svg" alt="estadisticas"><a href="procesar.php">Estadisticas</a></li>
                </div><br>
                <div class="contenedor-stock">
                    <li><img src="http://localhost/h2/yener-main/bootstrap/iconos/box-seam-fill.svg" alt="stock"><a href="#">Stock</a></li>
                </div><br>
                <div class="contenedor-usuarios">
                    <li><img src="http://localhost/h2/yener-main/bootstrap/iconos/person-square.svg" alt="usuarios"><a href="#">Usuarios</a></li>
                </div>
            </ul>
        </nav>
    </div>  
    


    <div class="auto">
     
    <?php

  // vent contenedor

echo "<div class='vent'>
<a class='vent1'>Venta de productos </a>  
<a class='vent1'>Entrada de productos  </a>

 </div>";
// comienso los botones de la tabla eliminar y editar


// Comienzo de la tabla
echo "<table class='styled-table'>";
echo "<thead><tr><th>ID Producto</th>
<th>Nombre del Producto</th><th>Precio por Unidad</th>
<th>Stock</th><th>ID Comprador</th><th>Nombre Comprador</th>
<th>Cantidad</th><th>Fecha de Venta</th>
<th>Precio Total</th>
<th>Stock Total</th>
<th>Descripcion</th>
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




      <!-- Modal para editar -->
      <div id="modalEditar" class="modal">
        <div class="modal-content">
            <span class="cerrar" onclick="cerrarModalEdicion()">&times;</span>
            <h2>Editar Registro</h2>
            <form id="formularioEdicion" method="post" action="modulos/editar.php">
                <input type="hidden" id="idProducto" name="idProducto">
                <label for="nombreProducto">Nombre del Producto:</label>
                <input type="text" id="nombreProducto" name="nombre_producto"><br><br>
                <!-- Agrega más campos de edición aquí -->
                <button type="submit">Guardar</button>
            </form>
        </div>
    </div>

    <script>
    var idEditando = null;

    function abrirModalEdicion(id) {
        idEditando = id;
        var modal = document.getElementById('modalEditar');
        modal.style.display = "block";
        // Puedes cargar los datos del producto aquí según su ID
    }

    function cerrarModalEdicion() {
        document.getElementById('modalEditar').style.display = "none";
        idEditando = null;
    }

    function eliminarRegistro(id) {
    if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
        // Enviar solicitud al servidor para eliminar el registro con el ID especificado
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("Registro eliminado correctamente.");
                // Eliminar la fila del DOM
                var fila = document.getElementById("fila-" + id);
                fila.parentNode.removeChild(fila);
            }
        };
        xhttp.open("GET", "eliminar_registro.php?id=" + id, true);
        xhttp.send();
    }
}


    function guardarEdicion() {
        // Aquí puedes obtener los valores editados desde el modal y enviarlos al servidor para actualizar la base de datos
        var id = document.getElementById("idProducto").value;
        var nuevoNombre = document.getElementById("nombreProducto").value;
        // Puedes obtener los demás valores editados de manera similar
        // Luego, envía estos datos al servidor para actualizar el registro
        // Puedes usar una solicitud AJAX o cualquier otro método que prefieras
        // Una vez que los datos se han actualizado en la base de datos, cierra el modal de edición
        cerrarModalEdicion();
    }
</script>




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


<script src="JS/movimiento-y-estadistica.js"></script>



</body>
</html>