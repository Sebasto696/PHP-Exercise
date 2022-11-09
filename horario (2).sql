-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 14:05:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `cod_estudiante` int(3) NOT NULL,
  `id` int(12) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`cod_estudiante`, `id`, `nombre`, `apellido`) VALUES
(1, 0, 'Sebastian', 'Carrillo Gomez'),
(124, 1, 'Sebastian', 'Carrillo Gomez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `cod_estudiante` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`cod_estudiante`, `id`, `nombre`, `apellido`) VALUES
(123, 1, 'Sebastian', 'Carrillo'),
(123, 2, 'Franco', 'Cavanna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`titulo`, `descripcion`, `id`) VALUES
('Nueva novedad', 'Se elimina o agrega algo', 0),
('Hola', 'Descripcion', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
