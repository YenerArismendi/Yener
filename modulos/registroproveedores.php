    <?php

include 'conexion.php';

//Registro de proveedores
//Verificacion de campos de formulario

if(!empty($_POST["guardarProveedores"])){
    if(empty($_POST["nombre-proveedor"]) or empty($_POST["identificacion-proveedor"]) or empty($_POST["telefono-celular"]) or empty($_POST["telefono-fijo"]) or empty($_POST["correo-proveedor"]) or empty($_POST["ciudad-proveedor"]) or empty($_POST["direccion-proveedor"]) or empty($_POST["barrio-proveedor"]) or empty($_POST["descripcion-proveedor"])){
        echo'<script>Swal.fire({
            icon: "error",
            title: "Error",
            text: "Ingrese todos los datos solicitados!",
            });</script>';

    }else{

        //Guardar datos del formulario de proveedores 

        $NombreProveedores = $_POST["nombre-proveedor"];
        $IdentificacionProveedores = $_POST["identificacion-proveedor"];
        $TelefonoCelular = $_POST["telefono-celular"];
        $TelefonoFijo = $_POST["telefono-fijo"];
        $CorreoProveedores = $_POST["correo-proveedor"];
        $CiudadProveedores = $_POST["ciudad-proveedor"];
        $DireccionProveedor = $_POST["direccion-proveedor"];
        $BarrioProveedor = $_POST["barrio-proveedor"];
        $DescripcionProveedor = $_POST["descripcion-proveedor"];

        //almacenar datos en bd 

        $Sql=$conexionsql->query("INSERT INTO proveedor (nombre, Identificacion, telefonoCelular, telefonoFijo, CorreoElectronico, Ciudad, Direccion, Barrio, Descripcion) VALUES 
        ('$NombreProveedores', '$IdentificacionProveedores', '$TelefonoCelular', '$TelefonoFijo', '$CorreoProveedores', '$CiudadProveedores', '$DireccionProveedor','$BarrioProveedor', '$DescripcionProveedor')");

        if($Sql){
            echo'<script>Swal.fire("Proveedor guardado <br> exitosamente!");</script>';
            }else{
                echo'<script>Swal.fire({
                    icon: "error",
                    text: "Proveedor no registrado",
                });</script>'; 
            }
        }
}
?>