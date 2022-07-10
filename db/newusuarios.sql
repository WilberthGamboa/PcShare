-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2022 a las 11:04:01
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
(15, 'b', 'a', 'a', 'gtx1660', 'a', 'a', 'a', 'a', ''),
(16, 'cc', 'c', 'c', 'rtx2060', 'cc', 'cc', 'cc', 'cc', ''),
(30, 'ariel', 'adsda', 'dasdasd', 'gtx1660', 'dsada', 'adsdd', 'addsad', 'asdad', ''),
(33, 'pc mastera', 'dsada', 'dasda', 'gtx1660', 'asdad', 'adsda', 'adsdasd', 'asdadsa', ''),
(34, 'nuevapc', 's', 's', 'gtx1650', 's', 's', 's', 's', ''),
(35, 'la ryzen', 'placa', 'proce', 'rtx2060', 'es', '20', 'rewr', 'mdkfd', ''),
(36, 'k', 'k', 'k', 'gtx1650', 'k', 'k', 'k', 'k', 'Ariel Fernandez.jpg'),
(37, 'LA MAMALONA', 'no c', '5600x', 'rx570', 'corsair', 'ssd', '16gb', 'patito', 'Ariel Fernandez.jpg'),
(38, 'FOTO', 'FOTO', 'FOTO', 'rx570', 'FOTO', 'FOTO', 'FOTO', 'FOTO', 'emilia-in-re-zero-f5-3840x2160.jpg'),
(39, 'albedo', 'rica', 'si', 'gtx1650', 'joder', 'que ', 'rico ', 'mamon', 'c48dfe0a6f4b566384c0f553adec9ec5.jpg');

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
(1, 'wilberth', '$2y$10$mWnDrKWPsacci1tfJOszN.eWnrgrpXTUEd8m0dXk56QP4rwSymoj6'),
(2, 'a', '$2y$10$fC.TGUyu6TY15E0weomq/OJtLtX4L51pc6L3ng8l1d3ZAoDQBNO4O'),
(3, 'w', '$2y$10$gmRrzjW.fOUyHaCTYSXBee.EqRkMRCNy9hG1ZCbSjLsrTCP/kkFhu'),
(4, 'mikasa', '$2y$10$zoX0J3jlkIRcVmgzzrvwleOlQauvJKhkxF9V9kGA6mA2FTrhg71ze'),
(5, 'coni', '$2y$10$kkQlCFSoRBoyFshtY2yv8uF.XquK97uUPZAz5le/IC5rdBEQBqSbu'),
(6, 'mama', '$2y$10$I82QREmBh5MdchmKzRcRZ.PafJjIq0KJxvrDpjP/rKFT7ntQBYnL.'),
(7, 'ariel', '$2y$10$t.nGHgmFQxMs1WF/3tAjSeTei5uFJ3.0FLx3UJyG9m3r6GoQLRFwS'),
(8, 'admin1', '$2y$10$q4LD.nQhrvY7Y1wzaHflQedwSCwrT.HTmfRo2nsLowyfRz1sWS.v.');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD CONSTRAINT `computadoras_ibfk_1` FOREIGN KEY (`tarjetaDeVideo`) REFERENCES `componentes` (`tarjetaVideo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
