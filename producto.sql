-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2017 a las 19:05:24
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pymes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` varchar(15) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Existencias` int(11) NOT NULL,
  `Precio_venta` decimal(7,0) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Nombre`, `Descripcion`, `Existencias`, `Precio_venta`, `url`) VALUES
('01', 'Aceite Z', 'Aceite vegetal 800ml', 20, '3990', ''),
('02', 'Arroz Diana', 'arroz diana 1 kg', 80, '2900', ''),
('03', 'Salchicha Frankfurt', 'salchicha en lata 8 uniades', 10, '4900', ''),
('04', 'refisal', '1kg', 46, '1200', ''),
('05', 'salchicha', '18 unidades', 9, '6800', ''),
('07', 'azucar morena', 'azucar morena 1kg', 30, '4500', ''),
('08', 'van camps ', 'atun enlatado van camps', 17, '3400', ''),
('09', 'cafe sello rojo', 'cafe sello rojo 1kg', 39, '7550', ''),
('11', 'colgate', 'crema dental colgate protecion 24 horas, 100ml', 20, '4500', ''),
('12', 'literine', 'listerine frescura bucal 500ml', 8, '11450', ''),
('13', 'Seda dental', 'seda dental oral B', 12, '3900', ''),
('14', 'aromatel', 'aromatel 1000ml', 18, '7900', ''),
('15', 'blancox', 'límpido blancox 100ml', 22, '1200', ''),
('16', 'cloro ropacolor', 'cloro ropacolor blancox 100ml', 27, '2700', ''),
('17', 'vanish', 'vanish limpieza profunda 200ml', 5, '5990', ''),
('18', 'scoott', 'papel higienico scoott', 40, '6990', ''),
('19', 'cepillo dental', 'cepillo dental oral b', 20, '2700', ''),
('20', 'leche la mejor', 'leche entera 1000ml', 50, '2200', ''),
('21', 'yogurt griego', 'yogur griego 100ml', 15, '2100', ''),
('22', 'tampico', 'jugo citrico de naranja', 100, '1000', ''),
('23', 'alpinette', 'sabor de mora con yogurt', 10, '2500', ''),
('24', 'Galletas festival', 'paqueta de galletas 12 unidades', 20, '5200', ''),
('25', 'galletas saltin', 'cautro tacos de galleta saltin', 20, '3000', ''),
('26', 'galletas ducales', 'galles ducales 3 tacos', 20, '4000', ''),
('27', 'gelatina Fruti?o', 'parque de tres gelatinas frutino, sabor a fresa, naranja y limon', 25, '3000', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
