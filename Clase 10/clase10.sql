--
-- Estructura de tabla para la tabla `cocineros`
--
CREATE TABLE cocineros (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	  nombre varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	  apellido varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	  created datetime DEFAULT NULL,
	  modified datetime DEFAULT NULL
);


--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE platillos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	  nombre varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	  descripcion text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	  precio float(6,2) NOT NULL,
	  created datetime DEFAULT NULL,
	  modified datetime DEFAULT NULL,
	  categoria_platillo_id int(11) NOT NULL
);

--
-- Estructura de tabla para la tabla `categoria_platillos`
--

CREATE TABLE categoria_platillos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	  categoria varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
);


--
-- Estructura de tabla para la tabla `cocineros_platillos`
--

CREATE TABLE cocineros_platillos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	  cocinero_id int(11) NOT NULL,
	  platillo_id int(11) NOT NULL
);