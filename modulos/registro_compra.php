<?php 

include 'conexion.php';
//include 'entradaproducto.php';  

//validación de campos que no esten nullos 

    $idproducto = isset($_POST["idproducto"]) ? $_POST["idproducto"] : 0;
    $NombreProducto = isset($_POST["nombre-producto"]) ? $_POST["nombre-producto"] : 0;
    $PrecioUnidad = isset($_POST["precio-unit"]) ? $_POST["precio-unit"] : 0;
    $StockActual = isset($_POST["cantidadStock"]) ? $_POST["cantidadStock"] : 0;
    $IdComprador = isset($_POST["id-comprador"]) ? $_POST["id-comprador"] : 0;
    $NombreComprador = isset($_POST["nombre-buyer"]) ? $_POST["nombre-buyer"] : 0;
    $CantidadCompra = isset($_POST["cantidad-sale"]) ? $_POST["cantidad-sale"] : 0;
    $PrecioFinal = isset($_POST["precioTotal"]) ? $_POST["precioTotal"] : 0;    
    $StockFinal = isset($_POST["stock-total"]) ? $_POST["stock-total"] : 0;

    //extraer datos de la bd para el autocompletado



    $sql = "SELECT * FROM producto WHERE IDProducto = $idproducto";
    $resultadoproducto = $conexionsql->query($sql);

    if($resultadoproducto->num_rows > 0){
        $row = $resultadoproducto->fetch_assoc();       
        $NombreProducto = $row["Nombre"];
        $PrecioUnidad = $row["PrecioUnidad"];
        $StockActual = $row["stock"];
    }else{
        echo '<script>Swal.fire({
            icon: "error",
                title: "Error",
            text: "Producto no registrado!",
            });</script>';
    }

    $sql = "SELECT * FROM usuario WHERE ID_usuario = $IdComprador";
    $resultadocomprador = $conexionsql->query($sql);

    if($resultadocomprador->num_rows > 0){
        $row = $resultadocomprador->fetch_assoc();
        $NombreComprador = $row["nombre_usuario"];
    }else{
        echo '<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Comprador no registrado!",
            });</script>';
    }

    //calculo para el resultado del costo total y la cantidad total que queda en stock 

    $PrecioFinal = $CantidadCompra * $PrecioUnidad;

    $StockFinal = $StockActual - $CantidadCompra;

    //validacion de que todos los campos esten llenos 

    if(!empty($_POST["registrarProducto"])){
    if(empty($_POST["fecha-producto"]) or empty($_POST["descripcion-movimiento-ingreso"])){
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese todos los datos solicitados!",
            });</script>';
    }else{
        //almacenamiento de datos solicitados 

        $FechaVenta = $_POST["fecha-producto"];
        $DescripcionVenta = $_POST["descripcion-movimiento-ingreso"];

        $Consultasql = $conexionsql->query("insert into venta(NombreProducto, NombreComprador, Cantidad, fechaVenta, PrecioTotal, StockTotal, Descripcion)values('$NombreProducto', '$NombreComprador', '$CantidadCompra', '$FechaVenta', '$PrecioFinal', '$StockFinal', '$DescripcionVenta')");

        if($Consultasql == 1){

            $actualizarsql = "UPDATE producto SET stock = $StockFinal WHERE IDProducto = $idproducto";
            $conexionsql->query($actualizarsql);

            echo '<script>Swal.fire("Compra guardada <br> exitosamente!");</script>';
        }else{
            echo '<script>Swal.fire({
                icon: "error",
                text: "No se guardo la venta",
            });</script>';
        }

        
    }
}

?>