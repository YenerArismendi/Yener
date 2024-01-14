<?php 

include_once "conexion.php";

//Verificación de que el usuario lleno los campos
if(!empty($_POST["ingresar"])){
    if(empty($_POST["usuario"]) or empty($_POST["contraseña"])){
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese todos los datos solicitados!",
            });</script>';
    }else

    $usuario= $_POST["usuario"];
    $contraseña= $_POST["contraseña"];
    $sql= $conexionsql->query("SELECT * FROM registro WHERE usuario= '$usuario' ");
    $sql->bind_param("s", $usuario);
    $sql->execute();
    $resultado = $sql->get_result();

    if($resultado->num_rows > 0){
        $datos=$resultado->fetch_object();

        if (password_verify($contraseña, $datos->contraseña)){
            header("location: ../home.php");
        } else{
            echo'<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "La contraseña es incorrecta!",
                });</script>';
        }   
    }
    } else {
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "El usuario ingresado no existe!",
            });</script>'; 
    }
?>