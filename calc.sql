-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2024 a las 00:57:27
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_ingresos`
--

CREATE TABLE `tabla_ingresos` (
  `id` int(11) NOT NULL,
  `salario` decimal(10,2) NOT NULL,
  `horas` int(11) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla_ingresos`
--

INSERT INTO `tabla_ingresos` (`id`, `salario`, `horas`, `fecha_ingreso`) VALUES
(1, '0.00', 0, '2024-03-23 23:48:49'),
(2, '0.00', 0, '2024-03-23 23:51:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_ingresos`
--
ALTER TABLE `tabla_ingresos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_ingresos`
--
ALTER TABLE `tabla_ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
