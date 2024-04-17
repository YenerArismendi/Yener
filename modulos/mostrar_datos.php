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

// Obtener los datos de la tabla de la base de datos
$sql_select = "SELECT * FROM estadisticas";
$result = $conn->query($sql_select);

// Mostrar los datos en una tabla HTML con estilo



// Cerrar la conexión
$conn->close();
?>


