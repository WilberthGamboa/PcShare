-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2022 a las 03:55:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `newusuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `tarjetaVideo` varchar(25) NOT NULL,
  `marca` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`tarjetaVideo`, `marca`) VALUES
('gtx1650', 'nvidia'),
('gtx1660', 'nvidia'),
('rtx2060', 'asus'),
('rx570', 'amd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadoras`
--

CREATE TABLE `computadoras` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `placaMadre` varchar(255) NOT NULL,
  `procesador` varchar(255) NOT NULL,
  `tarjetaDeVideo` varchar(25) NOT NULL,
  `fuenteDePoder` varchar(255) NOT NULL,
  `almacenamiento` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `gabinete` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `computadoras`
--

INSERT INTO `computadoras` (`id`, `nombre`, `placaMadre`, `procesador`, `tarjetaDeVideo`, `fuenteDePoder`, `almacenamiento`, `ram`, `gabinete`, `imagen`) VALUES
(1, 'wPc1', '1', '1', 'gtx1650', '1', '1', '1', '1', 'bonding-with-the-fairies-5k-lc-3840x2160.jpg'),
(3, 'w3', '3', '3', 'gtx1650', '3', '3', '3', '3', 'emilia-in-re-zero-f5-3840x2160.jpg'),
(4, 'a1', '1', '1', 'gtx1650', '1', '1', '1', '1', 'bonding-with-the-fairies-5k-lc-3840x2160.jpg'),
(6, 'a3', 'a3', 'a3', 'gtx1650', 'a3', 'a3', 'a3', 'a3', 'emilia-in-re-zero-f5-3840x2160.jpg'),
(7, 'constanza pc', 'k', 'k', 'gtx1650', 'c', 'c', 'c', 'c', 'bonding-with-the-fairies-5k-lc-3840x2160.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

CREATE TABLE `propiedad` (
  `idUsuario` int(11) NOT NULL,
  `idPc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propiedad`
--

INSERT INTO `propiedad` (`idUsuario`, `idPc`) VALUES
(1, 1),
(1, 3),
(2, 4),
(2, 6),
(3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `pass`) VALUES
(1, 'wilberth', '$2y$10$CduhUIifRfH0TthER/yzEuN2X.mFfJFW0FujVd6iAyijQ9/o40K9K'),
(2, 'ariel', '$2y$10$ReksTGzm.fn36kyVGBr0Nen85/4YAj1.HWpSk5QFatHcfPeVSGfyG'),
(3, 'coni', '$2y$10$qujWNblo0ItmGoqoDqOKeelf3WVR0BbiiV0n2JZ4auV9BDETvBbeq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`tarjetaVideo`);

--
-- Indices de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarjetaDeVideo` (`tarjetaDeVideo`);

--
-- Indices de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD KEY `idUsuario_2` (`idUsuario`),
  ADD KEY `idPc_2` (`idPc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD CONSTRAINT `computadoras_ibfk_1` FOREIGN KEY (`tarjetaDeVideo`) REFERENCES `componentes` (`tarjetaVideo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD CONSTRAINT `propiedad_ibfk_1` FOREIGN KEY (`idPc`) REFERENCES `computadoras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propiedad_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
