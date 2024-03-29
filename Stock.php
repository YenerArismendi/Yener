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
    
   <?php
 include 'modulos/conexion.php';

   ?>
    <div class="auto">

     <div class="container" id="container">
            <h2>no hay ningun movimientos en esto momentos.</h2>
            <p>Desea hacer un movimiento ahora?</p>
            <button id="add" onclick="mostrarModal()">Movimientos</button>
          </div>   

 <?php
          
    ?>
    
    <div id="miModal" class="modal">
        <form id="addProductForm">
          <span onclick="cerrarModal()" class="close">&times;</span>
          <p>Guardar inventario.</p>
          <label for="id_producto">ID Producto:</label>
          <input  type="text" id="id_producto" name="id_producto">
      
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre">
      
          <label for="cantidad">Cantidad:</label>
          <input type="number" id="cantidad" name="cantidad">
      
          <label for="precio_unitario">Precio U/N:</label>
          <input type="number" id="precio_unitario" name="precio_unitario">
      
          <label for="almacen">Almacen:</label>
          <input type="text" id="almacen" name="almacen">
      
          <label for="nivel_alerta">Nivel Alerta:</label>
          <input type="number" id="nivel_alerta" name="nivel_alerta">
      
          <input type="submit" id="addProductBtn" onclick="cerrarModal()" value="Guardar">
        </form>
  
      
    </div>


    <div class="stock-h2" id="ttable"> 
        <h4>Inventario de stock</h4>
        <div class="stock-left">
        <a id="add" onclick="mostrarModal()">Agregar Producto</a>
        <a id="deleteAllBtn">Eliminar Todos</a>
    </div>
  
    
  
  <!--  El modal --> 

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
            
                
            <!--   Aquí se agregarán los elementos dinámicamente --> 
            </tbody>
    
            
        </table>

    </div> 
    <div class="pagination">
            <button id="prevPageBtn">Anterior</button>
            <!-- Aquí se agregarán los botones de página -->
            <button id="nextPageBtn">Siguiente</button>
        </div>
</div>

<script>

document.addEventListener("DOMContentLoaded", function () {
    const addProductForm = document.querySelector("#miModal form");
    const inventoryTableBody = document.querySelector("#inventoryTable tbody");
    const pageNumButtonsContainer = document.querySelector(".pagination");

    const productsPerPage = 10;
    let currentPage = 1;

    // Agregar evento submit al formulario
    addProductForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe automáticamente
        
        // Obtener los valores de los campos de entrada
        const productId = document.getElementById("id_producto").value;
        const productName = document.getElementById("nombre").value;
        const productQuantity = document.getElementById("cantidad").value;
        const productPrice = document.getElementById("precio_unitario").value;
        const productShop = document.getElementById("almacen").value;
        const productAlertLevel = document.getElementById("nivel_alerta").value;

        if (
            productId &&
            productName &&
            productQuantity &&
            productPrice &&
            productShop &&
            productAlertLevel
        ) {
            // Crear una nueva fila de tabla con los valores ingresados
            const newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td>${productId}</td>
                <td>${productName}</td>
                <td>${productQuantity}</td>
                <td>$${productPrice}</td>
                <td>${productShop}</td>
                <td>${productAlertLevel}</td>
            `;
        

            // Mostrar la tabla
            var ttable = document.getElementById("ttable");
            ttable.style.display = "flex";
            
            var table = document.getElementById("inventoryTable");
            table.style.display = "table";


              // Ocultar contenedor principal
              var container = document.getElementById("container");
            container.style.display = "none";

            // Ocultar contenedor modal
            var modalContainer = document.getElementById("miModal");
            modalContainer.style.display = "none";

        } else {
            alert("Por favor, complete todos los campos.");
        }
    });

   
    });



    // Delete all rows
var deleteAllBtn = document.getElementById("deleteAllBtn");
deleteAllBtn.onclick = function() {
  // Eliminar todas las filas de la tabla
  var table = document.getElementById("inventoryTable").getElementsByTagName('tbody')[0];
  table.innerHTML = '';

  // oculta la fila de la tabla //
  var table = document.getElementById("inventoryTable");
  table.style.display = "none";
      

  // Mostrar el mensaje "Aún no has agregado ningún producto" y el botón "Agregar Producto"
  var container = document.getElementById("container");
  container.style.display = "block";

  // Ocultar la tabla
  var inventoryTable = document.getElementById("ttable");
  inventoryTable.style.display = "none";

  // Scroll hasta la parte superior del contenedor principal
  container.scrollIntoView({ behavior: 'smooth' });
};


function updatePagination() {
                const totalProducts = inventoryTableBody.children.length;
                const totalPages = Math.ceil(totalProducts / productsPerPage);

                pageNumButtonsContainer.innerHTML = "";

                for (let i = 1; i <= totalPages; i++) {
                    const pageNumBtn = document.createElement("button");
                    pageNumBtn.textContent = i;
                    pageNumBtn.classList.add("pageNumBtn");
                    pageNumBtn.addEventListener("click", function () {
                        currentPage = i;
                        updatePage();
                    });
                    pageNumButtonsContainer.appendChild(pageNumBtn);
                }

                updatePage();
            }

            function updatePage() {
                const startIdx = (currentPage - 1) * productsPerPage;
                const endIdx = startIdx + productsPerPage;
                const rows = Array.from(inventoryTableBody.children);

                rows.forEach((row, index) => {
                    if (index >= startIdx && index < endIdx) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            }

            document.getElementById("prevPageBtn").addEventListener("click", function () {
                if (currentPage > 1) {
                    currentPage--;
                    updatePage();
                }
            });

            document.getElementById("nextPageBtn").addEventListener("click", function () {
                const totalProducts = inventoryTableBody.children.length;
                const totalPages = Math.ceil(totalProducts / productsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    updatePage();
                }
            });

            updatePagination();


</script>
  

<script src="JS/stock.js"></script>

<script>
    // Función para mostrar el modal
    function mostrarModal() {
      document.getElementById("miModal").style.display = "flex";
    }
    
    // Función para cerrar el modal
    function cerrarModal() {
      document.getElementById("miModal").style.display = "none";
    }
    </script>

</body>
</html>