-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2014 a las 23:43:51
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cakephp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_platillos`
--

CREATE TABLE IF NOT EXISTS `categoria_platillos` (
`id` int(11) NOT NULL,
  `categoria` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `categoria_platillos`
--

INSERT INTO `categoria_platillos` (`id`, `categoria`) VALUES
(1, 'Entrantes calientes'),
(2, 'Entrantes frios'),
(3, 'Sopas y cremas'),
(4, 'Pastas'),
(5, 'Pescados y mariscos'),
(6, 'Aves y carnes'),
(7, 'Postres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocineros`
--

CREATE TABLE IF NOT EXISTS `cocineros` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cocineros`
--

INSERT INTO `cocineros` (`id`, `nombre`, `apellido`, `created`, `modified`) VALUES
(1, 'Lucas', 'Peres', '2014-11-17 12:19:06', '2014-11-17 12:19:06'),
(2, 'Pedro', 'Masiel', '2014-11-17 12:19:32', '2014-11-17 16:13:40'),
(3, 'Juan', 'Toledo', '2014-11-17 17:31:36', '2014-11-17 17:33:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocineros_platillos`
--

CREATE TABLE IF NOT EXISTS `cocineros_platillos` (
`id` int(11) NOT NULL,
  `cocinero_id` int(11) NOT NULL,
  `platillo_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `cocineros_platillos`
--

INSERT INTO `cocineros_platillos` (`id`, `cocinero_id`, `platillo_id`) VALUES
(4, 2, 1),
(2, 2, 2),
(5, 3, 2),
(6, 3, 1),
(7, 1, 5),
(8, 3, 5),
(10, 2, 7),
(11, 2, 8),
(12, 3, 8),
(13, 2, 9),
(14, 2, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE IF NOT EXISTS `mesas` (
`id` int(11) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `puestos` varchar(20) NOT NULL,
  `posicion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `mesero_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`id`, `serie`, `puestos`, `posicion`, `created`, `modified`, `mesero_id`) VALUES
(1, '001', '8', 'Lado superior izquierdo', '2014-10-20 15:01:13', '2014-10-20 15:01:13', 2),
(2, '002', '12', 'Lado superior derecho', '2014-10-20 15:02:03', '2014-10-20 15:02:03', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meseros`
--

CREATE TABLE IF NOT EXISTS `meseros` (
`id` int(11) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `meseros`
--

INSERT INTO `meseros` (`id`, `dni`, `nombre`, `apellido`, `telefono`, `created`, `modified`) VALUES
(1, '425875', 'Luchito', 'Saravia', '8455', '2014-10-20 14:59:51', '2014-10-20 14:59:51'),
(2, '85425', 'Rosita', 'Gonzales', '4521854', '2014-10-20 15:00:15', '2014-10-20 15:00:15'),
(3, '23423', 'Lucas', 'Sambrana', '2342342', '2014-11-17 17:53:42', '2014-11-17 17:53:42'),
(4, '45345', 'Pepita', 'Nogales', '343534', '2014-11-17 17:54:08', '2014-11-17 17:54:08'),
(5, '4535', 'Chicho', 'Morales', '34534', '2014-11-17 17:55:12', '2014-11-17 17:55:12'),
(6, '543534', 'Sofia', 'Machado', '54345', '2014-11-17 17:55:24', '2014-11-17 17:55:24'),
(7, '45345', 'Maria', 'Delgado', '433434', '2014-11-17 17:55:35', '2014-11-17 17:55:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE IF NOT EXISTS `platillos` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(6,2) NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `foto_dir` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `categoria_platillo_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`id`, `nombre`, `descripcion`, `precio`, `foto`, `foto_dir`, `created`, `modified`, `categoria_platillo_id`) VALUES
(7, 'Carbonara', 'Carbonara', 15.00, 'pastas3.jpg', '7', '2014-11-25 21:40:01', '2014-11-25 21:49:06', 4),
(8, 'Sopa de pollo', 'Sopa de pollo', 25.00, 'sopas1.jpg', '8', '2014-11-25 21:43:47', '2014-11-25 21:43:47', 3),
(9, 'Cuatro quesos', 'Cuatro quesos', 50.00, 'pastas2.jpg', '9', '2014-11-25 21:44:08', '2014-11-25 21:44:08', 4),
(10, 'Pie de limÃ³n con almendras', 'Pie de limÃ³n con almendras', 20.00, 'postres5.jpg', '10', '2014-11-25 21:44:40', '2014-11-25 21:44:40', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_platillos`
--
ALTER TABLE `categoria_platillos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cocineros`
--
ALTER TABLE `cocineros`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cocineros_platillos`
--
ALTER TABLE `cocineros_platillos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `meseros`
--
ALTER TABLE `meseros`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_platillos`
--
ALTER TABLE `categoria_platillos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `cocineros`
--
ALTER TABLE `cocineros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cocineros_platillos`
--
ALTER TABLE `cocineros_platillos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `meseros`
--
ALTER TABLE `meseros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
