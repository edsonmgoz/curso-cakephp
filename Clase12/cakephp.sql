-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2014 a las 18:53:22
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
(7, 'Postres'),
(10, 'mas categoria');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `cocineros_platillos`
--

INSERT INTO `cocineros_platillos` (`id`, `cocinero_id`, `platillo_id`) VALUES
(20, 2, 13),
(18, 3, 12),
(17, 1, 11),
(19, 1, 13),
(16, 1, 10),
(15, 3, 9),
(10, 1, 7),
(11, 2, 7),
(12, 3, 7),
(14, 2, 9),
(21, 3, 13),
(22, 2, 14),
(23, 2, 15),
(24, 2, 16),
(25, 3, 16),
(26, 1, 17),
(27, 3, 17),
(28, 2, 18),
(29, 3, 18),
(30, 1, 19),
(31, 3, 19),
(32, 1, 20),
(33, 1, 21),
(34, 3, 21),
(35, 1, 22),
(36, 2, 22),
(37, 1, 23),
(38, 2, 23),
(39, 3, 23),
(40, 1, 24),
(41, 2, 24),
(42, 2, 25),
(43, 2, 26),
(44, 3, 27),
(45, 1, 28),
(46, 2, 28),
(47, 3, 28);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`id`, `nombre`, `descripcion`, `precio`, `foto`, `foto_dir`, `created`, `modified`, `categoria_platillo_id`) VALUES
(11, 'Crepes de espinacas', 'Crepes de espinacas con farsa de atÃºn, pisto de vegetales con salsa de champiÃ±ones y remolacha', 8.00, 'entrada3.jpg', '11', '2014-11-25 16:08:05', '2014-11-25 16:08:05', 1),
(10, 'Pastel de berenjena', 'Pastel de berenjena a los tres toques con pimientos, cebolla, tomate con yogurt y queso gratinado', 7.00, 'entrada2.jpg', '10', '2014-11-25 16:07:44', '2014-11-25 16:07:44', 1),
(7, 'Coco glasÃ©', 'Coco glasÃ©', 14.00, 'postres6.jpg', '7', '2014-11-25 11:21:30', '2014-11-25 16:56:21', 7),
(9, 'Ensalada verde', 'Ensalada verde templada con tostadas de queso, tomate, cebolla y jamÃ³n', 15.00, 'entrada1.jpg', '9', '2014-11-25 16:06:20', '2014-11-25 16:06:20', 1),
(12, 'Piquillo pimiento', 'Piquillo pimiento relleno con farsa de atÃºn', 8.00, 'entrada4.jpg', '12', '2014-11-25 16:08:34', '2014-11-25 16:08:34', 2),
(13, 'Tostones rellenos', 'atÃºn, jamÃ³n y queso', 9.00, 'entrada5.jpg', '13', '2014-11-25 16:08:59', '2014-11-25 16:08:59', 2),
(14, 'Sopa de cebolla', 'Sopa de cebolla con tostadas de pan y queso gratinado', 5.00, 'sopas2.jpg', '14', '2014-11-25 16:10:08', '2014-11-25 16:10:08', 3),
(15, 'Cremas', 'jamÃ³n y queso o Aurora', 9.00, 'sopas3.jpg', '15', '2014-11-25 16:10:32', '2014-11-25 16:10:32', 3),
(16, 'Crema de calabaza', 'Crema de calabaza con crudite de queso', 10.00, 'sopas4.jpg', '16', '2014-11-25 16:11:00', '2014-11-25 16:11:00', 3),
(17, 'Crema de espinacas', 'Crema de espinacas', 11.00, 'sopas5.jpg', '17', '2014-11-25 16:11:31', '2014-11-25 16:11:31', 3),
(18, 'Crema de pollo de la reina', 'Crema de pollo de la reina', 8.00, 'sopas1.jpg', '18', '2014-11-25 16:12:55', '2014-11-25 16:12:55', 3),
(19, 'Carbonara', 'Carbonara', 20.00, 'pastas1.jpg', '19', '2014-11-25 16:45:04', '2014-11-25 16:45:04', 4),
(20, 'Salsa pesto', 'Salsa pesto', 25.00, 'pastas2.jpg', '20', '2014-11-25 16:45:59', '2014-11-25 16:45:59', 4),
(21, 'Frutos del mar', 'Frutos del mar', 18.00, 'pastas3.jpg', '21', '2014-11-25 16:46:22', '2014-11-25 16:46:22', 4),
(22, 'Cuatro quesos', 'Cuatro quesos', 21.00, 'pastas4.jpg', '22', '2014-11-25 16:46:50', '2014-11-25 16:46:50', 4),
(23, 'Al salmÃ³n con aroma de Vodka', 'Al salmÃ³n con aroma de Vodka', 30.00, 'pastas5.jpg', '23', '2014-11-25 16:47:15', '2014-11-25 16:47:15', 4),
(24, 'Tarta helada', 'chocolate y almendra', 10.00, 'postres1.jpg', '24', '2014-11-25 16:48:00', '2014-11-25 16:48:00', 7),
(25, 'Pie de limÃ³n con almendras', 'Pie de limÃ³n con almendras', 12.00, 'postres2.jpg', '25', '2014-11-25 16:48:20', '2014-11-25 16:48:20', 7),
(26, 'SoufflÃ© de chocolate', 'SoufflÃ© de chocolate', 22.00, 'postres3.jpg', '26', '2014-11-25 16:48:44', '2014-11-25 18:44:42', 7),
(27, 'Flan de caramelo', 'Flan de caramelo', 9.00, 'postres4.jpg', '27', '2014-11-25 16:49:03', '2014-11-25 16:49:03', 7),
(28, 'PiÃ±a glasÃ©', 'PiÃ±a glasÃ©', 13.00, 'postres5.jpg', '28', '2014-11-25 16:49:26', '2014-11-25 16:49:26', 7);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `cocineros`
--
ALTER TABLE `cocineros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cocineros_platillos`
--
ALTER TABLE `cocineros_platillos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
