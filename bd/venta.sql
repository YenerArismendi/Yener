-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2024 a las 18:37:01
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
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `ID_compra` int(10) UNSIGNED NOT NULL,
  `NombreProducto` varchar(45) NOT NULL,
  `NombreComprador` varchar(45) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `fechaVenta` varchar(45) NOT NULL,
  `precioTotal` int(11) NOT NULL,
  `StockTotal` int(11) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`ID_compra`, `NombreProducto`, `NombreComprador`, `Cantidad`, `fechaVenta`, `precioTotal`, `StockTotal`, `Descripcion`) VALUES
(1, '', '', 0, '', 0, 0, ''),
(454655, 'semilla', 'cxvxcv', 34, '2024-03-29', 680000, 66, 'dsdASDas'),
(454656, 'semilla', 'cxvxcv', 34, '2024-03-29', 680000, 66, 'sdfasdfa'),
(454657, 'semilla', '', 0, '', 0, 100, ''),
(454658, 'semilla', 'cxvxcv', 20, '2024-03-30', 400000, 80, 'dfadsfad'),
(454659, 'semilla', 'cxvxcv', 20, '2024-03-30', 400000, 60, 'dfadsfad'),
(454660, 'semilla', 'cxvxcv', 20, '2024-03-30', 400000, 40, 'dfadsfad'),
(454661, 'semilla', 'cxvxcv', 20, '2024-03-30', 400000, 20, 'fsdaf'),
(454662, 'semilla', 'cxvxcv', 20, '2024-03-30', 400000, 0, 'fsdaf'),
(454663, 'semilla', 'cxvxcv', 24, '2024-04-02', 480000, 999976, 'venta de producto '),
(454664, 'semilla', 'cxvxcv', 12, '2024-04-06', 240000, 999964, 'fadsfsadf'),
(454665, 'semilla', 'cxvxcv', 12345, '2024-04-06', 246900000, 987619, 'sdfdfas'),
(454666, 'semilla', 'cxvxcv', 123, '2024-04-06', 2460000, 987496, 'venta de producto'),
(454667, 'semilla', 'cxvxcv', 123, '2024-04-05', 2460000, 987373, 'venta de producto'),
(454668, 'semilla', 'cxvxcv', 123, '2024-04-05', 2460000, 987250, 'venta de producto'),
(454669, 'semilla', 'cxvxcv', 34, '2024-04-06', 680000, 987216, 'prueba para limpiar formulario '),
(454670, 'semilla', 'cxvxcv', 25, '2024-04-06', 500000, 987191, 'venta de producto'),
(454671, 'semilla', 'cxvxcv', 345, '2024-04-06', 6900000, 986846, 'venta de producto'),
(454672, 'semilla', 'cxvxcv', 345, '2024-04-06', 6900000, 986501, 'venta de producto'),
(454673, 'semilla', 'cxvxcv', 45, '2024-04-06', 900000, 986456, 'venta de producto'),
(454674, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 986411, 'venta de producto\r\n'),
(454675, 'semilla', 'cxvxcv', 56, '2024-04-07', 1120000, 986355, 'venta de producto\r\n'),
(454676, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 986310, 'venta de producto'),
(454677, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 986265, 'ghfgh'),
(454678, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 986220, 'venta de producto'),
(454679, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 986175, 'venta de producto'),
(454680, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 986130, 'ddfgdfg'),
(454681, 'semilla', 'cxvxcv', 46, '2024-04-07', 920000, 986084, 'venta de productos'),
(454682, 'semilla', 'cxvxcv', 46, '2024-04-07', 920000, 986038, 'venta de productos'),
(454683, 'semilla', 'cxvxcv', 56, '2024-04-07', 1120000, 985982, 'envio de compra '),
(454684, 'semilla', 'cxvxcv', 56, '2024-04-07', 1120000, 985926, 'envio de venta'),
(454685, 'semilla', 'cxvxcv', 65, '2024-04-07', 1300000, 985861, 'venta de producto'),
(454686, 'semilla', 'cxvxcv', 65, '2024-04-07', 1300000, 985796, 'venta de producto'),
(454687, 'semilla', 'cxvxcv', 50, '2024-04-07', 1000000, 985746, 'venta de producto'),
(454688, 'semilla', 'cxvxcv', 5, '2024-04-07', 100000, 985741, 'venta de producto'),
(454689, 'semilla', 'cxvxcv', 56, '2024-04-07', 1120000, 985685, 'venta de producto'),
(454690, 'semilla', 'cxvxcv', 56, '2024-04-07', 1120000, 985629, 'venta de producto'),
(454691, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 985584, 'venta de producto\r\n'),
(454692, 'semilla', 'cxvxcv', 4543, '2024-04-07', 90860000, 981041, 'venta de producto'),
(454693, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 980996, 'venta de producto'),
(454694, 'semilla', 'cxvxcv', 45, '2024-04-08', 900000, 980951, 'venta '),
(454695, 'semilla', 'cxvxcv', 56, '2024-04-07', 1120000, 980895, 'venta '),
(454696, 'semilla', 'cxvxcv', 45, '2024-04-07', 900000, 980850, 'venta de producto '),
(454697, 'semilla', 'cxvxcv', 450, '2024-04-11', 9000000, 980400, 'venta hecha '),
(454698, 'semilla', 'cxvxcv', 576, '2024-04-11', 11520000, 979824, 'venta produto'),
(454699, 'semilla', 'cxvxcv', 456, '2024-04-11', 9120000, 979368, 'venta ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`ID_compra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `ID_compra` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454700;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
