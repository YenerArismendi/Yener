
<?php

session_start();

include_once('conexion.php');

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;   
    }

    $usuario = validar($_POST['usuario']);
    $contraseña = validar($_POST['contraseña']);

    if (empty($usuario)){
        header('location: ../inicio_sesion.php');
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese el usuario!",
          });</script>';
        exit();
    }elseif (empty($contraseña)){
         echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "El usuario ingresado ya esta en uso, ingrese otro usurio",
          });</script>';
          header('location: ../inicio_sesion.php');
          exit();
    }
}


?>

 
           
       