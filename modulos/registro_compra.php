<?php 

include 'conexion.php';
include 'entradaproducto.php';  

if(!empty($_POST["registrarProducto"])){
    if(empty($_POST["fecha-producto"]) or empty($_POST["cantidad-sale"]) or empty($_POST["descripcion-movimiento-ingreso"])){
    
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese todos los datos solicitados!",
            });</script>';

    }else{
        //almacenar datos de la compra en la bd

        $FechaCompra = $_POST["fecha-producto"];
        $DescripcionVenta = $_POST["descripcion-movimiento-ingreso"];
        $cantidadVenta = $_POST["cantidad-sale"];

        //$sql = $conexionsql->query("INSERT INTO compra(Nombre_Producto, Cantidad, Precio_Unitario, Nombre_comprador, fecha, Stock_Total, Precio_total, descripcion)VALUES('$_SESSION["Nombre"]', '$cantidadVenta', $_SESSION["PrecioUnidad"]', $_SESSION["nombre_usuario"]','$FechaCompra', '$totalStockproducto', '$totalproducto', '$DescripcionVenta',)");

        if($sql == 1){
            echo '<script>Swal.fire("Compra guardada <br> exitosamente!");</script>';
        }else{
            echo '<script>Swal.fire({
                icon: "error",
                text: "No se guardo la compra",
            });</script>';  
        }
    }

}


?>