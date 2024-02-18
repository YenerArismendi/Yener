<?php

session_start();

include_once ("conexion.php");

if(!empty($_POST["registrarProducto"])){
    if(empty($_POST["nombre"]) or empty($_POST["pais"]) or empty($_POST["fecha"]) or empty($_POST["advertencias"]) or empty($_POST["descripcion"])){
        echo'<script>Swal.fire({    
            icon: "error",
            title: "Error",
            text: "Ingrese todos los datos solicitados!",
            });</script>';
    }else{
            $nombre = $_POST["nombre"];
            $pais = $_POST["pais"];
            $fecha = $_POST["fecha"];
            $advertencias = $_POST["advertencias"];
            $descripcion = $_POST["descripcion"];

            $sql = $conexionsql->query("INSERT INTO producto(Nombre, pais, fecha, advertencias, descripcion) values('$nombre', '$pais', '$fecha', '$advertencias', '$descripcion')");

            if($sql){
                echo '<script>Swal.fire("Poducto guardado <br> exitosamente!");</script>';
            }else{
                echo '<script>Swal.fire({
                    icon: "error",
                    text: "Producto no registrado",
                    });</script>';  
            }
        } 
}
?>