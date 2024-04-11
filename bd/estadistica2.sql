-- Usar la base de datos creada
USE palmoil;

-- Crear la tabla para almacenar los datos del formulario
CREATE TABLE IF NOT EXISTS estadisticas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_producto INT,
    nombre_producto VARCHAR(100),
    precio_unidad DECIMAL(10,2),
    stock INT,
    id_comprador INT,
    nombre_comprador VARCHAR(100),
    cantidad INT,
    fecha_venta DATE,
    precio_total DECIMAL(10,2),
    stock_total INT,
    editado BOOLEAN DEFAULT TRUE,
    eliminado BOOLEAN DEFAULT TRUE
);
