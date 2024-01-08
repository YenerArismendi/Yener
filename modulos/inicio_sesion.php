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
        header('location: ../inicio_sesion.php?error=ingrese el usuario!');
        exit();
    }elseif (empty($contraseña)){
        header('location: ../inicio_sesion.php?error=ingrese la contraseña!');
        exit();
    }else{
        $sql = "SELECT * FROM registro WHERE usuario = '$usuario'";
        $query = mysqli_query($conexionsql, $sql);

        if($query->num_rows==1){
            $usuarioq = $query->fetch_assoc();

            $id = $usuarioq['ID_registro'];
            $nombreUsuario = $usuarioq['usuario'];
            $clave = $usuarioq['contraseña'];
            $nombreIngresado = $usuarioq['nombre'];

            if($usuario === $nombreUsuario){
                if(password_verify($contraseña, $clave)){
                    $_SESSION['ID_registro'] = $id;
                    $_SESSION['usuario'] = $nombreUsuario;
                    $_SESSION['nombre'] = $nombreIngresado;

                    echo "<script>Swal.fire('Bienvenido $nombreIngresado');
                        location.href = '../home.php'   
                    </script>";

                }else{
                    header('location:../inicio_sesion.php?error=Usuario o contraseña erronea');
                }
            }else{
                header('location:../inicio_sesion.php?error=Usuario o contraseña erronea');
            }
        }else{
            header('location:../inicio_sesion.php?error=Usuario o contraseña erronea');
        }
    }
}
?>   