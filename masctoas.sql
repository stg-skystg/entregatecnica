-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 03:12:08
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
-- Base de datos: `masctoas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idmascota` int(11) NOT NULL,
  `nombre` varchar(54) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_mascota` int(11) NOT NULL,
  `propietario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idmascota`, `nombre`, `tipo_mascota`, `propietario`) VALUES
(1, 'luna', 1, 1),
(2, 'chofi', 2, 2),
(3, 'loki', 3, NULL),
(4, 'misa', 2, NULL),
(5, 'mina', 1, NULL),
(6, 'pikachu', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `idpropietario` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`idpropietario`, `nombre`, `direccion`, `telefono`, `correo`, `comentarios`) VALUES
(1, 'Jose', 'calle falsa 123', '234234', 'correofalso123@correo.com', 'buena persona'),
(2, 'maria', 'calleverdadera 123', '4342342', 'correoverdadero123', 'prueba'),
(3, 'Jose', 'calle falsa 123', '234234', 'correofalso123@correo.com', 'buena persona'),
(4, 'maria', 'calleverdadera 123', '4342342', 'correoverdadero123', 'prueba'),
(5, 'valir', 'callee123123', '4123123', 'noexiste@123.com', 'buena persona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mascota`
--

CREATE TABLE `tipo_mascota` (
  `idtipo_mascota` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_mascota`
--

INSERT INTO `tipo_mascota` (`idtipo_mascota`, `descripcion`) VALUES
(1, 'perros'),
(2, 'gatos'),
(3, 'pericos'),
(4, 'hasmters');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idmascota`),
  ADD KEY `propietario` (`propietario`),
  ADD KEY `tipo_mascota` (`tipo_mascota`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`idpropietario`);

--
-- Indices de la tabla `tipo_mascota`
--
ALTER TABLE `tipo_mascota`
  ADD PRIMARY KEY (`idtipo_mascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idmascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `idpropietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_mascota`
--
ALTER TABLE `tipo_mascota`
  MODIFY `idtipo_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`propietario`) REFERENCES `propietario` (`idpropietario`),
  ADD CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`tipo_mascota`) REFERENCES `tipo_mascota` (`idtipo_mascota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
