-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-10-2023 a las 18:23:38
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Gestion.Inmobiliaria.Integral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `GI_Informacion`
--

CREATE TABLE `GI_Informacion` (
  `id` int(100) NOT NULL,
  `Nombre` text NOT NULL,
  `Telefono` int(40) NOT NULL,
  `Correo Electronico` varchar(40) NOT NULL,
  `Mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `GI_Informacion`
--

INSERT INTO `GI_Informacion` (`id`, `Nombre`, `Telefono`, `Correo Electronico`, `Mensaje`) VALUES
(1, 'Raul Francisco', 1124570165, 'onlineweb.proyectos@gmail.com', 'HOLA!! :)'),
(2, 'Raul francisco', 1124570165, 'raulilomonaco@gmail.com', 'Hi!'),
(3, 'Raul francisco', 1124570165, 'raulilomonaco@gmail.com', ' Hola !'),
(4, 'belen', 634945593, 'belenbarrientos.0706@gmail.com', 'hola...!!!!'),
(5, 'roxana', 634945593, 'roxi@gmail.com', 'info'),
(6, 'valeria', 634945593, 'vale@gmail.com', 'Informacion para mi. mcuhas gracias'),
(7, 'virginia', 446768976, 'virgi@gmail.com', 'hola!'),
(8, 'margarita', 234565434, 'marga@hotmail.com', 'hi how are you?'),
(9, 'belu', 345678987, 'belub@gmail.com', 'hola!!!!!!!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `GI_Informacion`
--
ALTER TABLE `GI_Informacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `GI_Informacion`
--
ALTER TABLE `GI_Informacion`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
