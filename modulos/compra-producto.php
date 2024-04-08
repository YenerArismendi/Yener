<?php

include 'conexion.php';

$idproductocompra = isset($_POST["idProductoCompra"]) ? $_POST["idProductoCompra"] : 0;


$sql = "SELECT * FROM producto WHERE IDProducto = $idproductocompra";
$idpruductoCompra= $conexionsql->query($sql);

if($idpruductoCompra->num_rows > 0){
    $row = $idpruductoCompra->fetch_assoc();       
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


?>