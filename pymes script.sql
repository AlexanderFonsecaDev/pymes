-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2017 a las 00:56:03
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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Cedula` varchar(15) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Nick` varchar(30) NOT NULL,
  `Contraseña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Cedula`, `Nombre`, `Apellido`, `Correo`, `Nick`, `Contraseña`) VALUES
('17456874', 'Pablo alexander', 'Rodriguez Mendez', 'MendezElito14@gmail.com', '', ''),
('60345479', 'Eliana Maria', 'Sanchez Torrez', 'elianahtorres@gmail.com', 'ElianaTorresS', 'elitosan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Cedula` varchar(15) NOT NULL,
  `Nick` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(25) NOT NULL,
  `Telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Cedula`, `Nick`, `Nombre`, `Apellido`, `Correo`, `Contraseña`, `Telefono`) VALUES
('1000255445', 'damirami147', 'Damaris Beatriz', 'Petra Murcia', 'damarismurcii@gmail.com', 'petramurcia423', '5478574'),
('101004577', 'rose147estrella', 'Rosa Estrella', 'Guzman Melara', 'rosaestrellamelara@gmail.com', 'mela45estre', '3125478524'),
('1090515271', 'crjaz', 'Crisel Jazmin', 'Ayala Llanes', 'criselayala98@gmail.com', '145874', '3118558353'),
('1090515369', 'gategisse010', 'Zoila Gisella', 'Bustamante Paredez', 'zoliaestrellapered@gmail.com', '15457847d', '3125478541'),
('1095245478', 'lobohdan', 'Jose Javier', 'Lobo Hernandez', 'josehernandezlo@gmail.com', '5451588yy', '3112547277'),
('1098545244', 'albafran876', 'Monica Alina', 'Orellana Paz', 'monicaorellana@hotmail.com', '5477d7a7', '8025478741'),
('13463853', 'Cristo14784', 'Cristobal', 'Arboleda Murcia', 'cristobalarboledam@hotmail.es', '45551659j4', '3107177303'),
('14555233', 'hedimonteel4', 'Heidi Elizabeth', 'Luiz Monte', 'heidielimonte@gmail.com', 'hertj655634', '36563969'),
('32568974', 'tata1478', 'Tatiana', 'Velez Suarez', 'tatasuarezv@yahoo.es', 'tatre145', '5478745'),
('333548125', 'MartaPerezg', 'Marta Celmira', 'Perez Garcia', 'martaperezg@gmail.com', '35mpg125', '3025879852'),
('333786354', 'b10orgeAlm', 'Gesus Almicar', 'Borge Castro', 'gesusborgesal@hotmail.com', '25585jswe', '3145878784'),
('36565787', 'alexlorca23', 'Alexandro', 'Lorca', 'alexandrolorca@gmail.com', 'alexlorca44', '5742158'),
('36587417', 'luluibe098', 'Luis', 'Aguilar', 'luisaguilar@yahoo.com', 'luisagular1', '04571254785'),
('44554777', 'pedro14gutierrez', 'Pedro', 'Gutierrez', 'pedrogutierrez@gmail.com', 'pedrojkuyrf4', '3154678625'),
('44567874', 'tonicorem21', 'Armando', 'Tinoco', 'armandotinoco@gmail.com', 'tinde432', '325478541'),
('44758567', 'alfrefide49', 'Fidel Alfredo', 'Sosa Franco', 'sosafranco@yahoo.es', 'alfresos4354', '01457475487'),
('45221548', 'cruz28figue', 'Henry Raul', 'Cruz Figueroa', 'henryfigueroa@gmail.com', 'wfeedff55', '3214578695'),
('45487743', 'ErsCastro', 'Ernesto Raul', 'Castro', 'castriraulers@hotmail.com', 'ersfre', '3108541222'),
('45487885', 'rocomauro433', 'Mauro ', 'Venegas Denicio', 'maurovenegas@hotmail.com', 'denegas14', '3587452145'),
('474122355', 'henes45ghy', 'Hernesto', 'Merida', 'hernestomerida@gmail.com', 'he564nme', '3154585854'),
('47745566', 'marycepeda3', 'Laura Maria', 'Cepeda Duran', 'lauracepedaduran@gmail.com', 'poiduran778', '3236588897'),
('54456656', 'carlosrene14', 'Carlos Rene ', 'Angarita Sanguino', 'carlosangaritas@gmail.com', '14cra144', '5874522'),
('548745125', 'magalymartinez', 'Brendy Magaly ', 'Arqueta Martinez', 'brendymartunez@gmail.com', 'brendy78maga', '3154789652'),
('56567877', 'miguesantos17', 'Miguel', 'Santos', 'miguelsantos@gmail.es', 'dansantosr432', '547896655'),
('5686358', 'luna56tata', 'Petra Luna', 'Parada Herrero', 'petralunaph@gmail.com', 'petraherre23', '5748521'),
('642222877', '', '', '', '', '', ''),
('65486846', 'santos14154', 'German Isaac ', 'Santos Luna', 'santosisaacluna@hotmail.com', 'isa1454luna', '3155487775'),
('662542575', '', '', '', '', '', ''),
('68989689', '', '', '', '', '', ''),
('69696697', '', '', '', '', '', ''),
('784521548', 'PoxRodriguez', 'Maira Alejandra', 'Portillo Rodriguez', 'martarodriguezc@gmail.com', 'reemarta14rodrigez', '7584214'),
('785421785', '', '', '', '', '', ''),
('81254477', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_producto`
--

CREATE TABLE `compra_producto` (
  `Id_Compra` varchar(10) NOT NULL,
  `Id_Producto` varchar(10) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Cedula_Administrador` varchar(10) NOT NULL,
  `Id_Proveedor` varchar(10) NOT NULL,
  `Precio_Unidad` decimal(7,0) NOT NULL,
  `Total_Compra` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Volcado de datos para la tabla `compra_producto`
--

INSERT INTO `compra_producto` (`Id_Compra`, `Id_Producto`, `Cantidad`, `Fecha`, `Cedula_Administrador`, `Id_Proveedor`, `Precio_Unidad`, `Total_Compra`) VALUES
('C101', '02', 15, '2017-05-04 06:40:26', '60345479', '457895', '50000', '100000'),
('C102', '10', 10, '2017-05-01 11:15:48', '60345479', '256547', '5000', '5000'),
('C103', '07', 14, '2017-05-04 09:39:00', '17456874', '698547', '20000', '280000'),
('C104', '01', 12, '2017-05-03 06:26:59', '17456874', '256547', '55000', '660000'),
('C105', '02', 10, '2017-05-20 08:32:14', '17456874', '457895', '15000', '150000'),
('C106', '05', 10, '2017-05-18 07:49:30', '60345479', '365897', '5000', '50000'),
('C107', '04', 9, '2017-05-19 10:12:45', '60345479', '365897', '7000', '63000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Id_Pedido` varchar(10) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Id_Producto` varchar(10) NOT NULL,
  `Cantidad_Producto` int(11) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `cedula_Cliente` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`Id_Pedido`, `Fecha`, `Id_Producto`, `Cantidad_Producto`, `Estado`, `cedula_Cliente`) VALUES
('101A', '2017-05-20 22:39:33', '01', 1, 'Pendiente', '44554777'),
('102A', '2017-05-20 23:37:49', '08', 2, 'Pendiente', '14555233'),
('103A', '2017-05-20 12:52:30', '04', 1, 'Facturado', '45221548'),
('104A', '2017-05-12 13:07:36', '07', 5, 'Facturado', '65486846'),
('105A', '2017-05-02 00:00:00', '06', 1, 'Facturado', '45487885');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` varchar(15) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Existencias` int(11) NOT NULL,
  `Precio_venta` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Nombre`, `Descripcion`, `Existencias`, `Precio_venta`) VALUES
('01', 'zapatos Adidas', 'zapatos de variado proveedor', 25, '75000'),
('02', 'mochilas Toto', 'mochilas', 14, '65000'),
('03', 'Camisa Lacoste', '', 14, '75000'),
('04', 'camisa Polo', '', 7, '85000'),
('05', 'pantalon ', '', 27, '90000'),
('06', 'zapatos Nike', '', 28, '90000'),
('07', 'Medias Punto Blanco', '', 25, '10000'),
('08', 'Franelas Punto Blanco', '', 13, '20000'),
('09', 'Bolsos Outlet', '', 9, '70000'),
('10', 'Medias Gef', '', 29, '15000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_Proveedor` varchar(15) NOT NULL,
  `Nombre_Proveedor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id_Proveedor`, `Nombre_Proveedor`) VALUES
('256547', 'Adrian Delgado'),
('365897', 'Punto Blanco'),
('457895', 'Adidas'),
('698547', 'Nike'),
('785478', 'Bolsos Y MaS Bolsos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `Fecha` datetime NOT NULL,
  `Id_Factura` varchar(10) NOT NULL,
  `Id_Pedido` varchar(10) DEFAULT NULL,
  `Id_Producto` varchar(10) NOT NULL,
  `cedula_Cliente` varchar(15) NOT NULL,
  `Total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`Fecha`, `Id_Factura`, `Id_Pedido`, `Id_Producto`, `cedula_Cliente`, `Total`) VALUES
('2017-05-27 14:20:56', 'V101A', NULL, '05', '36565787', '10000'),
('2017-05-27 02:59:39', 'V102A', '103A', '04', '45221548', '85000'),
('2017-05-26 07:31:26', 'V103A', NULL, '10', '36587417', '15000'),
('2017-05-27 08:42:00', 'V104A', '105A', '06', '45487885', '70000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  ADD PRIMARY KEY (`Id_Compra`,`Id_Producto`,`Cedula_Administrador`,`Id_Proveedor`),
  ADD KEY `Producto_compra` (`Id_Producto`),
  ADD KEY `Admon_Compra` (`Cedula_Administrador`),
  ADD KEY `Proveedor_Compra` (`Id_Proveedor`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Id_Pedido`),
  ADD KEY `Producto_pedido` (`Id_Producto`),
  ADD KEY `Cliente_pedido` (`cedula_Cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_Proveedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Id_Factura`),
  ADD KEY `Pedido_venta` (`Id_Pedido`),
  ADD KEY `Cliente_Venta` (`cedula_Cliente`),
  ADD KEY `Producto_venta` (`Id_Producto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra_producto`
--
ALTER TABLE `compra_producto`
  ADD CONSTRAINT `Admon_Compra` FOREIGN KEY (`Cedula_Administrador`) REFERENCES `administrador` (`Cedula`),
  ADD CONSTRAINT `Producto_compra` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id`),
  ADD CONSTRAINT `Proveedor_Compra` FOREIGN KEY (`Id_Proveedor`) REFERENCES `proveedor` (`Id_Proveedor`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `Cliente_pedido` FOREIGN KEY (`cedula_Cliente`) REFERENCES `cliente` (`Cedula`),
  ADD CONSTRAINT `Producto_pedido` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `Cliente_Venta` FOREIGN KEY (`cedula_Cliente`) REFERENCES `cliente` (`Cedula`),
  ADD CONSTRAINT `Pedido_venta` FOREIGN KEY (`Id_Pedido`) REFERENCES `pedido` (`Id_Pedido`),
  ADD CONSTRAINT `Producto_venta` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
