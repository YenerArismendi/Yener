<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de base de datos está en otro lugar
$username = "root"; // Nombre de usuario de la base de datos (por defecto es 'root' en muchos sistemas)
$password = ""; // Contraseña de la base de datos (deja esto en blanco si no tiene contraseña)
$dbname = "palmoil"; // Nombre de la base de datos creada

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario y procesar los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id_producto = $_POST['id_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $precio_unidad = $_POST['precio_unidad'];
    $stock = $_POST['stock'];
    $id_comprador = $_POST['id_comprador'];
    $nombre_comprador = $_POST['nombre_comprador'];
    $cantidad = $_POST['cantidad'];
    $fecha_venta = $_POST['fecha_venta'];
    $precio_total = $_POST['precio_total'];
    $stock_total = $_POST['stock_total'];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO estadisticas (id_producto, nombre_producto, precio_unidad, stock, id_comprador, nombre_comprador, cantidad, fecha_venta, precio_total, stock_total)
    VALUES ('$id_producto', '$nombre_producto', '$precio_unidad', '$stock', '$id_comprador', '$nombre_comprador', '$cantidad', '$fecha_venta', '$precio_total', '$stock_total')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error al guardar los datos: " . $sql . "<br>" . $conn->error;
    }

    
}


// Cerrar la conexión
$conn->close();
?>

