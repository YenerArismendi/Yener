<?php

include 'modulos/conexion.php';

//para completar campos al ingresar el id del comprador o cliente 

$IDcomprador = isset($_POST["id-comprador"]) ? $_POST["id-comprador"] : 0 ;

$sql = "SELECT * FROM usuario WHERE ID_usuario = $IDcomprador";
$resultado = $conexionsql->query($sql);

if($resultado->num_rows > 0){
    $row = $resultado->fetch_assoc();
    $_SESSION["ID_usuario"] = $row["ID_usuario"];
    $_SESSION["nombre_usuario"] = $row["nombre_usuario"];
}else{
    echo '<script>Swal.fire({
        icon: "error",
        title: "Error",
        text: "Comprador no registrado!",
        });</script>';
}

$IDproducto = isset($_POST["idproducto"]) ? $_POST["idproducto"] : 0 ;


$sql = "SELECT * FROM producto WHERE IDProducto = $IDproducto";
$result = $conexionsql->query($sql);

if($result->num_rows > 0 ){
    $row = $result->fetch_assoc();
    $_SESSION["IDproducto"] = $row["IDProducto"];
    $_SESSION["Nombre"] = $row["Nombre"];
    $_SESSION["stock"] = $row["stock"];   
    $_SESSION["PrecioUnidad"] = $row["PrecioUnidad"];
    $precioproducto = $row["PrecioUnidad"];
    $stocktotal = $row["stock"];
}else{
    echo '<script>Swal.fire({
        icon: "error",
        title: "Error",
        text: "Producto no registrado!",
        });</script>';
}

//almacenar datos para realizar operacion para el precio total 

        $totalcompra = $_POST["cantidad-sale"];

        $precioproductonumber = intval($precioproducto);
        $totalcompranumber = intval($totalcompra);
        $totalstocknumber = intval($stocktotal);

        $totalproducto = $precioproductonumber * $totalcompranumber;

        $totalStock = isset($_POST["stock-total"]) ? $_POST["stock-total"] : 0;

        $totalStockproducto = $totalstocknumber - $totalcompranumber;

?>