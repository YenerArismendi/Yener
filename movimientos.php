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
    <script src="JS/cambiopaginas.js"></script>
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
        include 'modulos/entradaproducto.php';
        //include 'modulos/registro_compra.php';
    ?>
    <!--Codigo para formulario de venta producto--> 
    
    <button id="entradadeproductos" onclick="mostrar();">Venta de productos</button>
    <div id="contenedor-padre-ingreso-productos">
        <div class="contenedor-hijo-ingreso-productos">
            <form method="POST">
                <div class="id-nombreProducto">
                    <div class="id-producto">
                        <label for="id-producto" >ID producto</label>
                        <input name="idproducto" type="text"  class="form-control"  id="id-producto"  value="<?php echo $_SESSION["IDproducto"] = isset($_POST["idproducto"]) ? $_POST["idproducto"] : 0;?>">
                    </div>
                    <div class="nombre-producto">
                        <label for="nombre-producto">Nombre del producto</label>
                        <input name="nombre-producto" type="text" class="form-control"id="nombre-producto" value="<?php echo $_SESSION["Nombre"]; ?>">
                    </div>
                </div>
                <div class="fecha-cantidadStock">
                    <div class="precio-unidad">
                        <label for="precio-unit">Precio por unidad</label><br> 
                        <input name="precio-unit" type="text" class="form-control" id="precio-unit" value="<?php echo $_SESSION["PrecioUnidad"];?>">
                    </div>
                    <div class="cantidad-stock">
                        <label for="cantidad-stock">Stok</label><br> 
                        <input name="cantidadStock" type="text" class="form-control" id="advertencias-producto" value="<?php echo $_SESSION["stock"]; ?>">
                    </div>  
                </div>
                <div class="id-nombre-comprador">
                    <div class="id-comprador">
                        <label for="id-buyer">ID comprador</label>
                        <input name="id-comprador" type="text" class="form-control" id="id-buyer" value="<?php echo $_SESSION["ID_usuario"] = isset($_POST["id-comprador"]) ? $_POST["id-comprador"] : 0;?>">
                    </div>
                    <div class="nombre-comprador">
                        <label for="nombre-buyer">Nombre comprador</label><br> 
                        <input name="nombre-buyer" type="text" class="form-control" id="nombre-buyer" value="<?php echo $_SESSION["nombre_usuario"];?>">
                    </div>  
                </div>
                <div class="cantidad-preciouni">
                    <div class="cantidad-venta">
                        <label for="cantidad-sale">Cantidad</label>
                        <input name="cantidad-sale" type="number" class="form-control" id="cantidad-sale" value="<?php echo $totalcompra = isset($_POST["cantidad-sale"]) ? $_POST["cantidad-sale"] : 0;?>">
                    </div>
                    <div class="fecha-venta">
                        <label for="date-venta">Fecha de venta</label>
                        <input name="fecha-producto" type="date" class="form-control" id="fecha-creacion">
                    </div>  
                </div>
                <div class="preciototal-stocktotal-botoncalcular">
                    <div class="precio-total">
                        <label for="total-price">Precio total</label>
                        <input name="precioTotal" type="text" class="form-control" id="id-buyer" value="<?php echo $totalproducto; ?>">
                    </div>
                    <!--<<div class="btn-calcular">
                        <input type="submit" class="btn btn-danger" value="Total" name="btncalcular">
                    </div>-->
                    <div class="stock-total">
                        <label for="stock-total">Stock total</label><br> 
                        <input name="stock-total" type="text"   class="form-control" id="stock-total" value="<?php echo $totalStockproducto; ?>">
                    </div>  
                </div>
                <div class="descripcion-movimientos-ingresos">
                    <label for="fecha">Descripcion o recomendaciones</label>
                    <textarea name="descripcion-movimiento-ingreso" class="form-control" id="descripcion-ingresos" cols="50" rows="5"></textarea>
                </div>
                <div class="botones-registro-limpiar">
                    <input class="btn btn-outline-success" type="submit" name="registrarProducto" value="Registrar">   
                    <input type="submit" class="btn btn-outline-info" value="Limpiar" name="limpiar">
                </div>
            </form> 
        </div>    
    </div>  

    <!--Codigo para formulario para entrada de productos -->

    <button id="salidadeproductos" onclick="ocultar();">Salida de productos</button>
    <div id="contenedor-padre-salida-productos">
        <div class="contenedor-hijo-salida-productos    ">
            <form method="POST">
                <div class="nombre-identificacion">
                    <div class="nombre-proveedor">
                        <label for="nombre" >Nombre del producto</label>
                        <input type="text" name="nombre-proveedor" class="form-control" id="nombre-proveedor">
                    </div>
                    <div class="identificacion-numero">
                        <label for="tipo-documento">identificacion</label>
                        <input type="number" name="identificacion-proveedor" class="form-control">
                    </div>
                </div>
                <div class="telefonos">
                    <div class="telefono-celular">
                        <label for="telefono">Telefono</label>
                        <input type="number" name="telefono-celular" class="form-control" id="telefono">
                    </div>
                    <div class="telefono-fijo">
                        <label for="fijo">Telefono fijo</label>
                        <input type="number" name="telefono-fijo" class="form-control" id="telefono-fijo">
                    </div>
                </div>
                <div class="correo-ciudad">
                    <div class="correo">
                        <label for="correo">Correo electronico</label>
                        <input type="email" name="correo-proveedor" class="form-control" id="correo-electronico">
                    </div>
                    <div class="ciudad">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" name="ciudad-proveedor" class="form-control" id="ciudad-residencia">
                    </div>
                </div>
                <div class="direccion-barrio">
                    <div class="direccion">
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion-proveedor" class="form-control" id="direccion">
                    </div>
                    <div class="barrio">
                        <label for="barrio">Barrio</label>
                        <input type="text" name="barrio-proveedor" class="form-control" id="Barrio">
                    </div>
                </div>
                <div class="descripcion-proveedor">
                        <label for="descripcion">Descripción del proveedor</label>
                        <textarea name="descripcion-movimiento-ingreso" class="form-control" id="descripcion-proveedor" cols="30" rows="4"></textarea>
                </div>
                <div class="botones-registro">
                <input type="submit" name="guardarProveedores"  class="btn btn-outline-success" value="Guardar">
                <input type="sumit" name="limpiar" class="btn btn-outline-info" value="Limpiar">
                </div>
            </form>
        </div>
    </div>    
</body>
</html>