<?php

//codigo para realizar el registro de los usuarios en la base de datos 

include 'conexion.php';

if(!empty($_POST["registrar"])){
    if(empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["usuario"]) or empty($_POST["contraseña"]) or empty($_POST["contraseña2"])){
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese todos los datos solicitados!",
          });</script>';
        
    }else{

        $contraseña = ($_POST["contraseña"]);
        $contraseña2 = ($_POST["contraseña2"]);

        if($contraseña === $contraseña2){   
            $nombre=$_POST["nombre"];
            $correo=$_POST["correo"];
            $usuario=$_POST["usuario"];
            $roles=$_POST["roles"];

            //consulta de usuario para verificar si ya esta en la bd

            $consultacorreo = $conexionsql->query("SELECT * FROM registro WHERE correo = '$correo'");
            
            if($consultacorreo->num_rows > 0){
                echo '<script>Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "el correo electronico ingresado, ya se encuentra en uso, elija otro correo",
                  });</script>';
            }else{
                $consultausuario = $conexionsql->query("SELECT * FROM registro WHERE usuario = '$usuario'");

                if($consultausuario->num_rows > 0){
                    echo '<script>Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "El usuario ingresado ya esta en uso, ingrese otro usurio",
                      });</script>';
                }else{

                    //encriptación de contraseña para mayor seguridad   
                    $has_contraseña= password_hash($contraseña, PASSWORD_BCRYPT);

                    $sql=$conexionsql->query("insert into registro(nombre,correo, usuario, contraseña,confirmar_contraseña, rol)values('$nombre', '$correo', '$usuario', '$has_contraseña', '$has_contraseña', '$roles' )");

                         if($sql == 1){
                         echo '<script>Swal.fire("Usuario guardado <br> exitosamente!");</script>';

                        }else{
                            echo '<script>Swal.fire({
                                icon: "error",
                                text: "Usuario no registrado",
                            });</script>';
                        } 
                }
            }

        }else{
            echo '<script>Swal.fire({
                icon: "error",
                text: "las contraseñas no coinciden",
              });</script>';
        }
       
    }

}

?>




