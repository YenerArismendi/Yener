<?php
// Establece la conexión a la base de datos (Ajusta los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$database = "palmoil";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verifica si se recibe el ID del producto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id_producto = $_POST['id'];

    // Prepara la consulta SQL de eliminación
    $sql = "DELETE FROM estadisticas WHERE id_producto = ?";

    // Prepara la declaración SQL
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincula los parámetros
        $stmt->bind_param("i", $id_producto);

        // Ejecuta la consulta
        if ($stmt->execute()) {
            // Si la eliminación es exitosa, devuelve 'success'
            echo "success";
        } else {
            // Si hay un error al ejecutar la consulta, muestra el mensaje de error de la base de datos
            echo "error: " . $conn->error;
        }

        // Cierra la declaración
        $stmt->close();
    } else {
        // Si hay un error al preparar la consulta, muestra el mensaje de error de la base de datos
        echo "error: " . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
} else {
    // Si no se proporcionó el ID del producto, devuelve un mensaje de error
    echo "error: No se proporcionó el ID del producto.";
}
?>
