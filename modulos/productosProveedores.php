<?php

include 'conexion.php';
//Registro de producto 
//verificar si los campos estan completos
if(!empty($_POST["registrarProducto"])){
    if(empty($_POST["nombre-producto"]) or empty($_POST["pais-producto"]) or empty($_POST["fecha-producto"]) or empty($_POST["advertencias-producto"]) or empty($_POST["descripcion-producto"])){
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese todos los datos solicitados!",
            });</script>';
    }else{
        //guardar la informacion de los formularios

        $NombreProducto = $_POST["nombre-producto"];
        $PaisProducto = $_POST["pais-producto"];
        $FechaProducto = $_POST["fecha-producto"];
        $Advertencias = $_POST["advertencias-producto"];
        $Descripcion = $_POST["descripcion-producto"];

        //Almacenar datos en la bd 

        $sql=$conexionsql->query("INSERT INTO producto (Nombre, pais, fecha, advertencias, descripcion) VALUES ('$NombreProducto', '$PaisProducto', '$FechaProducto', '$Advertencias', '$Descripcion')");
            if($sql){
                echo'<script>Swal.fire("Producto guardado <br> exitosamente!");</script>';
            }else{
                echo'<script>Swal.fire({
                    icon: "error",
                    text: "Producto no registrado",
                });</script>'; 
            }
    }
}

//Registro de proveedores
//verificar campos de formularios 


?>
