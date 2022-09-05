-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2018 a las 01:40:47
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `busqueda_perros`
--
CREATE DATABASE IF NOT EXISTS `busqueda_perros` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `busqueda_perros`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrio`
--

DROP TABLE IF EXISTS `barrio`;
CREATE TABLE `barrio` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barrio`
--

INSERT INTO `barrio` (`id`, `descripcion`) VALUES
(4, 'Poeta Lugones'),
(5, '20 de Junio'),
(6, 'Alto Palermo'),
(7, 'Arcos I'),
(8, 'Bella Vista'),
(9, 'Chateau Carreras'),
(10, 'Empalme'),
(11, 'Tablada Park'),
(12, 'Almirante Brown '),
(13, 'Primera Junta'),
(14, 'Quebrada de las Rosas'),
(15, 'San Javier'),
(16, 'SMATA'),
(17, 'Otros'),
(18, 'Alto Alberdi'),
(19, 'Centro'),
(20, 'Nueva Cordoba'),
(21, '1 de Mayo'),
(22, 'Bajada de Piedra'),
(23, 'Cofico'),
(24, 'Crisol Sud'),
(25, 'San Martin '),
(26, 'Santa Cecilia'),
(27, 'Tejas del Sur'),
(28, 'Urca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros_adopcion`
--

DROP TABLE IF EXISTS `perros_adopcion`;
CREATE TABLE `perros_adopcion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `edad` varchar(100) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `id_barrio` int(11) NOT NULL,
  `contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perros_adopcion`
--

INSERT INTO `perros_adopcion` (`id`, `id_usuario`, `imagen`, `edad`, `id_raza`, `sexo`, `id_barrio`, `contacto`) VALUES
(7, 8, 'perrito.jpg', '6 meses', 4, 'M', 19, 1172516207),
(10, 6, '../images/pitbull.jpg', '2 aÃ±os', 9, 'H', 10, 2147483647),
(11, 7, '../images/tito.jpg', '4 aÃ±os', 4, 'H', 24, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros_encontrados`
--

DROP TABLE IF EXISTS `perros_encontrados`;
CREATE TABLE `perros_encontrados` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `apodo` varchar(100) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `id_barrio` int(11) NOT NULL,
  `contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perros_encontrados`
--

INSERT INTO `perros_encontrados` (`id`, `id_usuario`, `imagen`, `apodo`, `id_raza`, `sexo`, `id_barrio`, `contacto`) VALUES
(5, 7, '../images/Cacho.jpg', 'Cacho', 13, 'M', 10, 2147483647),
(6, 8, '../images/perrito.jpg', 'Firulais', 4, 'M', 19, 2147483647),
(7, 6, '../images/boxer.jpg', 'Boxer', 6, 'H', 4, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros_perdido`
--

DROP TABLE IF EXISTS `perros_perdido`;
CREATE TABLE `perros_perdido` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `id_barrio` int(11) NOT NULL,
  `contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perros_perdido`
--

INSERT INTO `perros_perdido` (`id`, `id_usuario`, `imagen`, `nombre`, `id_raza`, `sexo`, `id_barrio`, `contacto`) VALUES
(19, 6, '../images/skere.jpg', 'Skere', 11, 'H', 19, 2147483647),
(20, 7, '../images/Astor.jpg', 'Astor', 8, 'H', 20, 2147483647),
(21, 8, '../images/Bruno.jpg', 'Bruno', 23, 'H', 20, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

DROP TABLE IF EXISTS `raza`;
CREATE TABLE `raza` (
  `id` int(11) UNSIGNED NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id`, `descripcion`) VALUES
(4, 'Mestizo'),
(5, 'Akita Inu'),
(6, 'Boxer'),
(7, 'Bull Terrier'),
(8, 'Labrador'),
(9, 'Pitbull'),
(10, 'Yorkshire terrier'),
(11, 'Bulldog'),
(12, 'Caniche'),
(13, 'Pastor belga'),
(14, 'Dogo argentino'),
(15, 'Pointer'),
(16, 'Terranova'),
(17, 'Braco italiano'),
(18, 'Golden retriever'),
(19, 'Galgo'),
(20, 'Fox Terrier'),
(21, 'Dobermann'),
(22, 'Dogo de burdeos'),
(23, 'Beagle'),
(24, 'Basset hound'),
(25, 'Pinscher miniatura'),
(26, 'Samoyedo'),
(27, 'San Bernardo'),
(28, 'Terrier'),
(29, 'Weimaraner');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `password`, `mail`, `telefono`) VALUES
(6, 'Facundo', 'Rubio', '2a7258322a258ac6a1849a38f2c9ad15876993e4', 'facu@gmail.com', 2147483647),
(7, 'Pablo', 'Alvarez', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'pali@gmail.com', 2147483647),
(8, 'Claudia', 'Dominguez de Soto', 'b6a437646b7e39bc70c5549a82d04cfe666dbcd9', 'clau@gmail.com', 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrio`
--
ALTER TABLE `barrio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perros_adopcion`
--
ALTER TABLE `perros_adopcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perros_encontrados`
--
ALTER TABLE `perros_encontrados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perros_perdido`
--
ALTER TABLE `perros_perdido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrio`
--
ALTER TABLE `barrio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `perros_adopcion`
--
ALTER TABLE `perros_adopcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `perros_encontrados`
--
ALTER TABLE `perros_encontrados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `perros_perdido`
--
ALTER TABLE `perros_perdido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perros_perdido`
--
ALTER TABLE `perros_perdido`
  ADD CONSTRAINT `perros_perdido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
