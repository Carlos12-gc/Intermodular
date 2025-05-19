-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2025 a las 20:20:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intermodular`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboraciones`
--

CREATE TABLE `colaboraciones` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `famosos`
--

CREATE TABLE `famosos` (
  `id` int(20) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `tipo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `correoElectronico` varchar(100) DEFAULT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`nombre`, `apellido`, `correoElectronico`, `password`) VALUES
('lucia', 'sahkur', '', ''),
('alvaro', 'sahkur', '', ''),
('alvaro', 'sahkur', '', ''),
('alvaro', 'dadad', '', ''),
('nene', 'aaaa', '', ''),
('alvaro', 'AFAFAF', '', ''),
('nene', 'sahkur', 'gfgf@hfdf.com', ''),
('', '', 'administracion@bvgestion.es', ''),
('', '', 'JuanEscobar@gmail.com', ''),
('Juan', 'Escobar', 'JuanEscobar@gmail.com', ''),
('Juan', 'Escobar', 'JuanEscobar@gmail.com', ''),
('BV', 'S.L.', 'administracion@bvgestion.es', '12345678'),
('Tiago', 'Silva', 'TiagoSilva@gmail.com', 'ttggv'),
('Tiago', 'Silva', 'TiagoSilva@gmail.com', 'ttggv'),
('Tiago', 'Silva', 'TiagoSilva@gmail.com', 'ttggv'),
('Jose', 'Silva', 'JoseSilva@gmail.com', '1234'),
('bienve ', 'calbo sanchis', 'bienve.calbo@hotmail.com', '123'),
('Carlos', 'Garcia Calbo', 'carlosgarciacalbo7@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialdecolaboraciones`
--

CREATE TABLE `historialdecolaboraciones` (
  `id_Colaboracion` int(20) NOT NULL,
  `id_Famoso` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialdecompras`
--

CREATE TABLE `historialdecompras` (
  `id` int(20) NOT NULL,
  `id_Cliente` int(20) DEFAULT NULL,
  `id_Producto` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `Precio` float NOT NULL,
  `Imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `tipo`, `categoria`, `Precio`, `Imagen`) VALUES
(1, 'AirJordanLOWSE', 'LOWSE', 'Streetwear', 80, '../ProyectoIntermodular/Images/AIRJORDAN LOWSE.PNG'),
(2, 'AdidasCampus', 'Campues', 'Streetwear', 90, '../ProyectoIntermodular/Images/campuesjfif.jfif'),
(3, 'Pantalones Cargoss O', 'Cargos', 'Streetwear', 50, '../ProyectoIntermodular/Images/Cargo.jpg'),
(4, 'Pantalones Cargos Ca', 'Cargos', 'Streetwear', 200, '../ProyectoIntermodular/Images/Cargos.webp'),
(5, 'Nike AlphaFly', 'AlphaFly', 'Deporte', 150, '../ProyectoIntermodular/Images/AlphaFly.png'),
(6, 'Adidas SupernovaRise', 'SupernovaRise', 'Deporte', 80, '../ProyectoIntermodular/Images/supernovarise.jpg'),
(7, 'Pikolinos de Ingenie', 'Pikolinos', 'Formal', 90, '../ProyectoIntermodular/Images/Pikolinos.jpg'),
(8, 'Jersey Massimo Dutti', 'Massimo Dutti', 'Formal', 100, '../ProyectoIntermodular/Images/MasimoDutti.jpg'),
(9, 'Pantalon RelaxedFit', 'Massimo Dutti', 'Formal', 90, '../ProyectoIntermodular/Images/PantalonRelaxedFit.jpg'),
(10, 'Jersey con cremeller', 'TommyHilfiger', 'Formal', 100, '../ProyectoIntermodular/Images/JerseyTexturizadoConCremellera.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `procedencia` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tener`
--

CREATE TABLE `tener` (
  `id_proveedores` int(20) DEFAULT NULL,
  `id_marcas` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colaboraciones`
--
ALTER TABLE `colaboraciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `famosos`
--
ALTER TABLE `famosos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historialdecolaboraciones`
--
ALTER TABLE `historialdecolaboraciones`
  ADD PRIMARY KEY (`id_Colaboracion`),
  ADD UNIQUE KEY `id_Famoso` (`id_Famoso`);

--
-- Indices de la tabla `historialdecompras`
--
ALTER TABLE `historialdecompras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_Cliente` (`id_Cliente`,`id_Producto`),
  ADD KEY `fk_idProducto` (`id_Producto`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tener`
--
ALTER TABLE `tener`
  ADD UNIQUE KEY `id_proveedores` (`id_proveedores`,`id_marcas`),
  ADD KEY `fk_idMarcas` (`id_marcas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historialdecompras`
--
ALTER TABLE `historialdecompras`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historialdecolaboraciones`
--
ALTER TABLE `historialdecolaboraciones`
  ADD CONSTRAINT `fk_idColaboracion` FOREIGN KEY (`id_Colaboracion`) REFERENCES `colaboraciones` (`id`),
  ADD CONSTRAINT `fk_idFamoso` FOREIGN KEY (`id_Famoso`) REFERENCES `famosos` (`id`);

--
-- Filtros para la tabla `historialdecompras`
--
ALTER TABLE `historialdecompras`
  ADD CONSTRAINT `fk_idCliente` FOREIGN KEY (`id_Cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_idProducto` FOREIGN KEY (`id_Producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `tener`
--
ALTER TABLE `tener`
  ADD CONSTRAINT `fk_idMarcas` FOREIGN KEY (`id_marcas`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `fk_idProveedores` FOREIGN KEY (`id_proveedores`) REFERENCES `proveedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
