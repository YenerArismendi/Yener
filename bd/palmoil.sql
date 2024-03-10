-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2024 a las 04:22:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `palmoil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenamiento`
--

CREATE TABLE `almacenamiento` (
  `ID_Almacenamiento` int(10) UNSIGNED NOT NULL,
  `capacidad` int(11) NOT NULL,
  `ubicacion` varchar(45) NOT NULL,
  `Fecha_Llenado` time NOT NULL,
  `Temperatura` int(11) NOT NULL,
  `Humedad` int(11) NOT NULL,
  `Trasvases` int(11) NOT NULL,
  `Tipo_Almacenamiento` varchar(45) DEFAULT NULL,
  `Nota` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `ID_Compra` int(10) UNSIGNED NOT NULL,
  `Nombre_Producto` varchar(50) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio_Unitario` int(11) NOT NULL,
  `Descuento` int(11) NOT NULL,
  `Nombre_Proveedor` varchar(50) NOT NULL,
  `Tipo_Compra` varchar(45) NOT NULL,
  `Stock_Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `advertencias` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_Producto`, `Nombre`, `pais`, `fecha`, `advertencias`, `Descripcion`) VALUES
(1, 'sdfsd', 'fsdf', '2024-03-09', 'fsdfsd', 'ghfdghgf'),
(2, 'sdfsd', 'fsdf', '2024-03-09', 'fsdfsd', '<dgaertdgfd'),
(3, 'sdfsd', 'fsdf', '2024-03-09', 'fsdfsd', 'ghfdghgf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_Proveedor` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `Identificacion` int(11) NOT NULL,
  `telefonoCelular` int(11) NOT NULL,
  `telefonoFijo` int(11) NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Barrio` varchar(45) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Ciudad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_Proveedor`, `nombre`, `Identificacion`, `telefonoCelular`, `telefonoFijo`, `CorreoElectronico`, `Direccion`, `Barrio`, `Descripcion`, `Ciudad`) VALUES
(1, 'gdffgsdf', 542354, 3245234, 435234, 'yenerandres2@gmail.com', 'fgsdfg', 'gdfgsdf', 'bfdfgadf', 'rterg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID_registro` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `confirmar_contraseña` varchar(100) NOT NULL,
  `rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID_registro`, `nombre`, `correo`, `usuario`, `contraseña`, `confirmar_contraseña`, `rol`) VALUES
(3, 'Yener Arismendi', 'yenerandres2@gmail.com', 'Yener Arismendi', '$2y$10$ld8YDaNY1iD4PBpPaeXFa.FmIk9UpEXkzj/Wd3q7W0FV7eMQ46TAa', '$2y$10$ld8YDaNY1iD4PBpPaeXFa.FmIk9UpEXkzj/Wd3q7W0FV7eMQ46TAa', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion_inventario`
--

CREATE TABLE `transaccion_inventario` (
  `ID_Transaccion` int(10) UNSIGNED NOT NULL,
  `Tipo_Transaccion` varchar(10) NOT NULL,
  `ubicacion` varchar(45) NOT NULL,
  `Fecha` time NOT NULL,
  `Catidad` int(11) NOT NULL,
  `Factura` varchar(10) DEFAULT NULL,
  `Precion_Total` int(11) NOT NULL,
  `Descripcion_venta` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_medidas`
--

CREATE TABLE `unidades_medidas` (
  `ID_Medidas` int(10) UNSIGNED NOT NULL,
  `Abreviatura` varchar(10) NOT NULL,
  `Descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(10) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `fecha_cumpleaños` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `nombre_usuario`, `fecha_cumpleaños`, `direccion`, `ciudad`, `barrio`, `telefono`, `correo`, `descripcion`, `fecha`) VALUES
(12345, 'cxvxcv', '2024-03-09', 'xvxcvzxc', 'vzcxvzc', 'cvzxcv', 324324, 'yenerandres22@gmail.com', 'sfdvdgfadf', '2024-03-09'),
(412231, 'cxvxcv', '2024-03-09', 'xvxcvzxc', 'vzcxvzc', 'cvzxcv', 324324, 'ddfgdfsg@fsdfsd', 'fddsfadsf', '2024-03-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ID_Pedido` int(10) UNSIGNED NOT NULL,
  `Cliente` varchar(50) NOT NULL,
  `Guia_Seguimiento` int(11) NOT NULL,
  `Metodo_Envio` varchar(50) NOT NULL,
  `Fecha_Envio` time NOT NULL,
  `Direccion_Envio` varchar(50) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `Estado_Pedido` varchar(50) NOT NULL,
  `Metodo_Pago` varchar(50) NOT NULL,
  `Descuento` int(11) NOT NULL,
  `Comentarios` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`ID_Pedido`, `Cliente`, `Guia_Seguimiento`, `Metodo_Envio`, `Fecha_Envio`, `Direccion_Envio`, `Producto`, `Estado_Pedido`, `Metodo_Pago`, `Descuento`, `Comentarios`) VALUES
(454654, 'yener', 1234, 'fisico', '23:10:09', 'asjkfdlaskjdf', 'semilla de palma ', 'pendiente ', 'trasnferencia ', 10, 'su envio llegara en 5 dias ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacenamiento`
--
ALTER TABLE `almacenamiento`
  ADD PRIMARY KEY (`ID_Almacenamiento`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID_Compra`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_Producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_Proveedor`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID_registro`);

--
-- Indices de la tabla `transaccion_inventario`
--
ALTER TABLE `transaccion_inventario`
  ADD PRIMARY KEY (`ID_Transaccion`);

--
-- Indices de la tabla `unidades_medidas`
--
ALTER TABLE `unidades_medidas`
  ADD PRIMARY KEY (`ID_Medidas`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ID_Pedido`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacenamiento`
--
ALTER TABLE `almacenamiento`
  MODIFY `ID_Almacenamiento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `ID_Compra` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_Producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `ID_Proveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `transaccion_inventario`
--
ALTER TABLE `transaccion_inventario`
  MODIFY `ID_Transaccion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidades_medidas`
--
ALTER TABLE `unidades_medidas`
  MODIFY `ID_Medidas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `ID_Pedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454655;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
