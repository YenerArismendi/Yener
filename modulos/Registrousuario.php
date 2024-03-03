<?php

include 'conexion.php';

//Regitro de usuario
//Verificacion de que los campos se ingresen

if(!empty($_POST["registrousuario"])){
    if(empty($_POST["id-user"]) or empty($_POST["nombre-user"]) or empty($_POST["fecha-user"]) or empty($_POST["direccion-user"]) 
    or empty($_POST["ciudad-user"]) or empty($_POST["barrio-user"]) or empty($_POST["telefono-user"]) or empty($_POST["correo-user"]) or 
    empty($_POST["descripcion-user"])){
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error", 
            text: "Ingrese todos los datos solicitados!",
            });</script>';
    }else{

        //Almacenar datos ingresados en el formulario 

        $IDusuario = $_POST["id-user"];
        $NombreUsuario = $_POST["nombre-user"];
        $FechaUsuario = $_POST["fecha-user"];
        $DireccionUsuario = $_POST["direccion-user"];
        $CiudadUsuario = $_POST["ciudad-user"];
        $BarrioUsuario = $_POST["barrio-user"];
        $TelefonoUsuario = $_POST["telefono-user"];
        $CorreoUser = $_POST["correo-user"];
        $DescripcionUser = $_POST["descripcion-user"];

        //verificar si el ID ya esta incluida en la bd 

        $consultaIDusuario = $conexionsql->query("SELECT * FROM usuario WHERE ID_usuario = '$IDusuario'");

        if($consultaIDusuario->num_rows > 0){
            echo '<script>Swal.fire({
                icon: "error",
                title: "Error",
                text: "el documento ingresado, ya se encuentra en uso, elija otro!",
                });</script>';
        }else{
            $consultacorreo = $conexionsql->query("SELECT * FROM usuario WHERE correo = '$CorreoUser'");

            if($consultacorreo->num_rows > 0){
                echo '<script>Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "el correo electronico ingresado, ya se encuentra en uso, elija otro!",
                    });</script>';
            }else{
                //Almacenar datos en la bd 

                $sql = $conexionsql->query("INSERT INTO usuario (ID_usuario, nombre_usuario, fecha_cumpleaños, direccion, ciudad, barrio, telefono, correo, descripcion, fecha) VALUES 
                ('$IDusuario', '$NombreUsuario', '$FechaUsuario', '$DireccionUsuario', '$CiudadUsuario', '$BarrioUsuario', '$TelefonoUsuario', '$CorreoUser', '$DescripcionUser', NOW())");

                    if($sql){
                        echo'<script>Swal.fire("Usurio guardado <br> exitosamente!");</script>';
                    }else{
                        echo'<script>Swal.fire({
                            icon: "error",
                            text: "Usuario no registrado",
                        });</script>';
                    }
            }
        }
    }
}


?>