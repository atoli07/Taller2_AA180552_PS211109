-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2022 a las 17:08:21
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gasolinera`
--
CREATE DATABASE IF NOT EXISTS `gasolinera` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gasolinera`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
-- el tipo_combustible 0 es la regular, 1 = especial y 2= diesel

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `tipo_combustible` int(11) NOT NULL,
  `galones` decimal(10,4) NOT NULL,
  `total_dinero` decimal(10,2) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `tipo_combustible`, `galones`, `total_dinero`, `fecha`) VALUES
(1, 0, '3.0000', '9.15', '2022-04-22 18:39:40'),
(2, 1, '2.0000', '6.54', '2022-04-30 06:39:40'),
(3, 2, '5.0000', '14.80', '2022-04-28 17:04:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
