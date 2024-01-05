<?php

//codigo para realizar el registro de los usuarios en la base de datos 

include 'conexion.php';

if(!empty($_POST["registrar"])){
    if(empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["usuario"]) or empty($_POST["contraseña"]) or empty($_POST["contraseña2"])){
        echo '<script>Swal.fire("Éxito", "Usuario registrado correctamente", "success");</script>';
        
    }else{

        $contraseña = ($_POST["contraseña"]);
        $contraseña2 = ($_POST["contraseña2"]);

        if($contraseña === $contraseña2){   
            $nombre=$_POST["nombre"];
            $correo=$_POST["correo"];
            $usuario=$_POST["usuario"];
            $roles=$_POST["roles"];
            $sql=$conexionsql->query("insert into registro(nombre,correo, usuario, contraseña,confirmar_contraseña, rol)values('$nombre', '$correo', '$usuario', '$contraseña', '$contraseña2', '$roles' )");
            if($sql == 1){
                echo '<p class="registro">Usuario registrado correctamente</p>';
            }else{
                echo '<p class="alerta">Usuario no registrado</p>';
            } 
        }else{
            echo '<h4 class="alerta">las contraseñas no coinciden</h4>';    
        }
       
    }

}

?>




