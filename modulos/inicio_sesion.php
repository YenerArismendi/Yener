<?php 

session_start();

//Verificación de que el usuario lleno los campos
if(!empty($_POST["ingresar"])){
    if(empty($_POST["usuario"]) or empty($_POST["contraseña"])){
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese todos los datos solicitados!",
            });</script>';
    }else{
        //Alamacenar datos de inicio de sesion

        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        //Validar usuario en bd
        $query= "SELECT * FROM registro WHERE usuario = '$usuario'";
        $result = $conexionsql->query($query);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();   
            $_SESSION["id"]=$row["ID_registro"];
            $_SESSION["nombre"]=$row["nombre"];
            $hasalmacenado = $row["contraseña"];

            //verificacion de contraseña con el has de la bd para redireccionar al home 
            if(password_verify($contraseña, $hasalmacenado)){
                header("location: home.php");
            }else{
                echo '<script>Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "La contraseña ingresada es erronea!",
                    });</script>';
            }
        }else{
            echo '<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "El usuario ingresado no existe!",
                });</script>';
        }

    }
}
?>