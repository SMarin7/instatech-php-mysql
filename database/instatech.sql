-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2026 a las 08:51:13
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
-- Base de datos: `instatech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `contrasena`) VALUES
(1, 'Admin', '121212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `cedula` int(15) NOT NULL,
  `edad` int(3) NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `usuario`, `contrasena`, `cedula`, `edad`, `cliente_id`) VALUES
(2, 'Samuel123', '1234', 1011395874, 19, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(100) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `descripcion`, `imagen`, `precio`, `marca`, `cantidad`, `productos_id`) VALUES
(44, 'Iphone 18', 'Iphone 18 pro max', '833350.png', 1000, 'Apple', 53, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedores`
--

CREATE TABLE `provedores` (
  `idUsuario` int(20) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Contrasena` varchar(30) NOT NULL,
  `CorreoDeEmpresa` varchar(100) NOT NULL,
  `provedores_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `provedores`
--

INSERT INTO `provedores` (`idUsuario`, `Usuario`, `Contrasena`, `CorreoDeEmpresa`, `provedores_id`) VALUES
(20, 'SamuelMarin', '1234567890', 'samuelandresmarinalvares@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaadmin`
--

CREATE TABLE `tablaadmin` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `IdTecnico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `IdTecnico` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombrecompleto` varchar(40) NOT NULL,
  `cedula` int(10) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `edad` int(3) NOT NULL,
  `celular` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `archivo` blob NOT NULL,
  `tecnico_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`IdTecnico`, `usuario`, `nombrecompleto`, `cedula`, `contrasena`, `edad`, `celular`, `email`, `archivo`, `tecnico_id`) VALUES
(1, 'Samuel123', 'Samuel Andrés', 1011395874, '1234567890', 19, 2147483647, 'samuelmarin1147627@correo.itm.edu.co', 0x4775c3ad612061636164c3a96d6963612e706466, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `productos_id` (`productos_id`);

--
-- Indices de la tabla `provedores`
--
ALTER TABLE `provedores`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `provedores_id` (`provedores_id`);

--
-- Indices de la tabla `tablaadmin`
--
ALTER TABLE `tablaadmin`
  ADD KEY `id_cliente` (`id_cliente`,`idProducto`,`idUsuario`,`IdTecnico`),
  ADD KEY `IdTecnico` (`IdTecnico`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`IdTecnico`),
  ADD KEY `tecnico_id` (`tecnico_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `provedores`
--
ALTER TABLE `provedores`
  MODIFY `idUsuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `IdTecnico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tablaadmin`
--
ALTER TABLE `tablaadmin`
  ADD CONSTRAINT `tablaadmin_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `tablaadmin_ibfk_2` FOREIGN KEY (`IdTecnico`) REFERENCES `tecnico` (`IdTecnico`),
  ADD CONSTRAINT `tablaadmin_ibfk_3` FOREIGN KEY (`idUsuario`) REFERENCES `provedores` (`idUsuario`),
  ADD CONSTRAINT `tablaadmin_ibfk_4` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`),
  ADD CONSTRAINT `tablaadmin_ibfk_5` FOREIGN KEY (`id`) REFERENCES `administrador` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
