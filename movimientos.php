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
    <link rel="stylesheet" href="CSS/movimientos.css">
    <link rel="icon" type="image/png" href="IMAGENES/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"></script>
    <script src="sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="JS/ocultarmodulos.js"></script>
    <script src="JS/recargar-pagina-compra.js"></script>
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
                <div class="contenedor-estadisticas" onclick="window.location.href='modulos/procesar.php'">
                    <li><img src="bootstrap/iconos/graph-up-arrow.svg" alt="estadisticas"><a href="estadistica.php">Estadisticas</a></li>
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
        include 'modulos/registro_venta.php';
        //include 'modulos/compra-producto.php';
    ?>
    <!--Codigo para formulario de venta producto--> 
    
    <button id="ventaProducto" onclick="ocultarventa();">Venta de productos</button>
    <div id="contenedor-padre-ingreso-productos">
        <div class="contenedor-hijo-ingreso-productos">
            <form method="POST" id="formulario-venta">
                <div class="id-nombreProducto">
                    <div class="id-producto">
                        <label for="id-producto" >ID producto</label>
                        <input name="idproducto" type="text"  class="form-control"  id="id-producto" value="<?php echo $idproducto?>" >
                    </div>
                    <div class="nombre-producto">
                        <label for="nombre-producto">Nombre del producto</label>
                        <input name="nombre-producto" type="text" class="form-control"id="nombre-producto" value="<?php echo $NombreProducto?>" >
                    </div>
                </div>
                <div class="fecha-cantidadStock">
                    <div class="precio-unidad"> 
                        <label for="precio-unit">Precio por unidad</label><br> 
                        <input name="precio-unit" type="text" class="form-control" id="precio-unit" value="<?php echo $PrecioUnidad?>">
                    </div>
                    <div class="cantidad-stock">
                        <label for="cantidad-stock">Stok</label><br> 
                        <input name="cantidadStock" type="text" class="form-control" id="advertencias-producto" value="<?php echo $StockActual?>">
                    </div>  
                </div>
                <div class="id-nombre-comprador">
                    <div class="id-comprador">
                        <label for="id-buyer">ID comprador</label>
                        <input name="id-comprador" type="text" class="form-control" id="id-buyer" value="<?php echo $IdComprador?>">
                    </div>
                    <div class="nombre-comprador">
                        <label for="nombre-buyer">Nombre comprador</label><br> 
                        <input name="nombre-buyer" type="text" class="form-control" id="nombre-buyer" value="<?php echo $NombreComprador?>">
                    </div>  
                </div>
                <div class="cantidad-preciouni">
                    <div class="cantidad-venta">
                        <label for="cantidad-sale">Cantidad</label>
                        <input name="cantidad-sale" type="number" class="form-control" id="cantidad-sale" value="<?php echo $CantidadCompra?>">
                    </div>
                    <div class="fecha-venta">
                        <label for="date-venta">Fecha de venta</label>
                        <input name="fecha-producto" type="date" class="form-control" id="fecha-producto">
                    </div>  
                </div>
                <div class="preciototal-stocktotal-botoncalcular">
                    <div class="precio-total">
                        <label for="total-price">Precio total</label>
                        <input name="precioTotal" type="text" class="form-control" id="id-buyer" value="<?php echo  $PrecioFinal?>">
                    </div>
                    <!--<<div class="btn-calcular">
                        <input type="submit" class="btn btn-danger" value="Total" name="btncalcular">
                    </div>-->
                    <div class="stock-total">
                        <label for="stock-total">Stock total</label><br> 
                        <input name="stock-total" type="text"   class="form-control" id="stock-total" value="<?php echo $StockFinal?>">
                    </div>  
                </div>
                <div class="descripcion-movimientos-ingresos">
                    <label for="fecha">Descripcion o recomendaciones</label>
                    <textarea name="descripcion-movimiento-ingreso" class="form-control" id="descripcion-ingresos" cols="50" rows="5"></textarea>
                </div>
                <div class="botones-registro-limpiar">
                    <input class="btn btn-outline-success" type="submit" name="registrarProducto" value="Registrar" id="recargar-envio">   
                    <input type="button" class="btn btn-outline-info" value="Limpiar" name="limpiar" onclick="limpiarformulario()">
                </div>
            </form> 
        </div>    
    </div>  
    <!--Codigo para formulario para compra de productos -->

    <button id="compraProducto" onclick="ocultarcompra();">Ingreso de producto</button>
    <div id="contenedor-padre-salida-productos">
        <div class="contenedor-hijo-salida-productos">
            <form method="POST">
                <div class="idProducto-nonbreProducto">
                    <div class="idproductoCompra">
                        <label for="id-producto-compra">ID producto</label>
                        <input type="text" name="idProductoCompra" class="form-control" id="idCompraproducto" value="<?php echo $idproductocompra?>">
                    </div>
                    <div class="nombre-producto-compra">
                        <label for="nombre-producto-compra" >Nombre del producto</label>
                        <input type="text" name="nombre-producto-compra" class="form-control" id="nombre-compra">
                    </div>
                </div>
                <div class="stockInicial-proveedorcompra">
                    <div class="Stock-inicial">
                        <label for="stock-inicial">Stock</label>
                        <input type="text" name="stock-inicial" class="form-control">
                    </div>
                    <div class="proveedorcompra">
                        <label for="proveedor">Proveedor</label>
                        <input type="text" name="proveedor" class="form-control" id="proveedor">
                    </div>
                </div>
                <div class="trabajador-cargo">
                    <label for="trabajadorcargo">Trabajador a cargo</label>
                    <input type="text" name="trabajadorcargo" class="form-control" id="trabajadorCargo">
                </div>
                
                <div class="cantidadCompra-stocktotal">
                    <div class="cantidad-compra">
                        <label for="cantidadcompra">Cantidad</label>
                        <input type="text" name="cantidadcompra" class="form-control" id="cantidadcompra">
                    </div>
                    <div class="Stock-total">
                        <label for="stockTotal">Stock final</label>
                        <input type="text" name="stocktotal" class="form-control" id="Stock-total">
                    </div>
                </div>
                <div class="descripcion-compra">
                        <label for="descripcioncomrpa">Descripción de la compra</label>
                        <textarea name="descripcion-compra" class="form-control" id="descripcioncompra" cols="50" rows="4"></textarea>
                </div>
                <div class="botones-registro-compra">
                <input type="submit" name="guardarProveedores"  class="btn btn-outline-success" value="Guardar">
                <input type="sumit" name="limpiar" class="btn btn-outline-info" value="Limpiar">
                </div>
            </form>
        </div>
    </div>    
</body>
</html>