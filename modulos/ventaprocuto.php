<?php

include 'conexion.php';

//para completar campos al ingresar el id del producto

$IDproducto = isset($_POST["id-producto"]) ? $_POST["id-producto"] : 0;

$sql = "SELECT * FROM producto WHERE ID_Producto = $IDproducto";
$result = $conexionsql->query($sql);

if($result->num_rows > 0 ){
    $row = $result->fetch_assoc();
    $_SESSION["ID_producto"] = $row["ID_Producto"];
    $_SESSION["Nombre"] = $row["Nombre"];
    $_SESSION["stock"] = $row["stock"];     
}else{
    echo '<script>Swal.fire({
        icon: "error",
        title: "Error",
        text: "Producto no registrado!",
        });</script>';
}

//para completar campos al ingresar el id del comprador o cliente 

$IDcomprador = isset($_POST["id-comprador"]) ? $_POST["id-comprador"] : 0;

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

?>