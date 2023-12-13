<?php

include 'conexion.php';

if(!empty($_POST["registrar"])){
    if(empty($_POST["nombre"]) or empty($_POST["correo"]) or empty($_POST["usuario"]) or empty($_POST["contraseña"]) or empty($_POST["contraseña2"])){
        echo'<h4 class="alerta">Ingrese todos los datos</h4>';
        
    }else{

        $contraseña = ($_POST["contraseña"]);
        $contraseña2 = ($_POST["contraseña2"]);

        if($contraseña === $contraseña2){   
            $nombre=$_POST["nombre"];
            $correo=$_POST["correo"];
            $usuario=$_POST["usuario"];
            $sql=$conexionsql->query("insert into registrarse(nombre,correo, usuario, contraseña,confirmar_contraseña)values('$nombre', '$correo', '$usuario', '$contraseña', '$contraseña2' )");
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


