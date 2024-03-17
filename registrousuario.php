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
    <link rel="stylesheet" href="CSS/registrousuario.css">
    <link rel="icon" type="image/png" href="IMAGENES/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="sweetalert/dist/sweetalert2.all.js"><  /script>
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

    <!--Codigo para formulario de producto--> 
    
    <button id="productos" onclick="mostrar();">Productos</button>
    <div id="contenedor-padre-productos">
        <div class="contenedor-hijo-productos">
            <form method="POST">
                <div class="producto-pais">
                    <div class="producto">
                        <label for="nombre" >Nombre del producto</label>
                        <input name="nombre-producto" type="text" class="form-control" id="nombre">
                    </div>
                    <div class="pais">
                        <label for="origen">Pais de origen</label>
                        <input name="pais-producto" type="text" class="form-control"id="pais">
                    </div>
                </div>
                <div class="fecha-advertencias">
                    <div class="fecha">
                        <label for="fecha">Fecha de fabricación</label>
                        <input name="fecha-producto" type="date" class="form-control" id="fecha-creacion">
                    </div>
                    <div class="advertencias">
                        <label for="advertencias">Advertencias del producto</label><br> 
                        <input name="advertencias-producto" type="text" class="form-control" id="advertencias-producto">
                    </div>  
                </div>
                <div class="precio">
                    <div class="precio-unidad">
                        <label for="precio-unidad-producto">Precio unitario</label>
                        <input type="number" class="form-control" name="precio-unidad">
                    </div>
                </div>
                <div class="descripcion">
                    <label for="descripcion-total">Descipción del producto</label><br>
                    <textarea name="descripcion-producto" class="form-control" id="descripcion-tatal" cols="60" rows="6"></textarea>
                </div>
                <div class="botones-registro-eliminar-modificar">
                    <input class="btn btn-outline-success" type="submit" name="registrarProducto" value="Registrar">   
                    <input type="submit" class="btn btn-outline-info" value="Limpiar" name="limpiar">
                </div>
            </form>
        </div>    
    </div>  

    <!--Codigo para formulario para proveedores -->

    <button id="proveedores" onclick="ocultar();">Proveedores</button>
    <div id="contenedor-padre-proveedores">
        <div class="contenedor-hijo-proveedores">
            <form method="POST">
                <div class="nombre-identificacion">
                <div class="nombre-proveedor">
                    <label for="nombre" >Nombre completo</label>
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
                    <label for="descripcion-total">Descipción del producto</label><br>
                    <textarea name="descripcion-proveedor" class="form-control" id="descripcion-proveedor" cols="50" rows="5"></textarea>
                </div>
                <div class="botones-registro">
                <input type="submit" name="guardarProveedores"  class="btn btn-outline-success" value="Guardar">
                <input type="sumit" name="limpiar" class="btn btn-outline-info" value="Limpiar">
                </div>
            </form>
        </div>
    </div> 

    <!--Codigo para formulario para registro de usuarios -->

    <button id="usuario" onclick="ocultarultimo();">Usuario</button>
    <div id="contenedor-padre-usuario">
        <div class="contenedor-hijo-usuario">
            <form method="POST">
                <div class="id-nombre">
                    <div class="id-usuario">
                        <label for="id-user">Documento de usuario</label>
                        <input type="number" name="id-user" class="form-control" id="id-user">
                    </div>
                    <div class="nombre-usuario-completo">
                        <label for="nombre-user">Nombre de usuario</label>
                        <input type="text" name="nombre-user" class="form-control">
                    </div>
                </div>
                <div class="fecha-direccion">
                    <div class="fecha-usuario">
                        <label for="fecha-user">Fecha de cumpleaños</label>
                        <input type="date" name="fecha-user" class="form-control" id="fecha-user">
                    </div>
                    <div class="direccion-usuario">
                        <label for="direccion-user">Direccion</label>
                        <input type="text" name="direccion-user" class="form-control" id="direccion-user">
                    </div>
                </div>
                <div class="ciudad-barrio">
                    <div class="ciudad-usuario">
                        <label for="ciudad-user">Ciudad</label>
                        <input type="text" name="ciudad-user" class="form-control" id="ciudad-user">
                    </div>
                    <div class="barrio-usuario">
                        <label for="barrio-user">Barrio</label>
                        <input type="text" name="barrio-user" class="form-control" id="barrio-user">
                    </div>
                </div>
                <div class="telefono-correo">
                    <div class="telefono-usuario">
                        <label for="telefono-user">Telefono</label>
                        <input type="number" name="telefono-user" class="form-control" id="telefono-user">
                    </div>
                    <div class="correo-usuario">
                        <label for="correo-user">Correo</label>
                        <input type="email" name="correo-user" class="form-control" id="correo-user">
                    </div>
                </div>
                <div class="descripcion-usuario">
                    <label for="descripcion-user">Descipción del usuario</label><br>
                    <textarea name="descripcion-user" class="form-control" id="descripcion-user" cols="50" rows="4"></textarea>
                </div>
                <div class="botones-registro">
                <input type="submit" name="registrousuario"  class="btn btn-outline-success" value="Guardar">
                <input type="sumit" name="limpiar" class="btn btn-outline-info" value="Limpiar">
                </div>
            </form>
        </div>
    </div> 
    <?php
        include 'modulos/conexion.php';
        include 'modulos/productosProveedores.php';
        include 'modulos/registroproveedores.php';
        include 'modulos/Registrousuario.php';
    ?>
</body>
</html>