-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2021 a las 03:35:08
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tareas_carlos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE `coches` (
  `id` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `caballos` int(3) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(6) NOT NULL,
  `pathImage` varchar(200) NOT NULL,
  `fecha-registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`id`, `marca`, `modelo`, `caballos`, `descripcion`, `precio`, `pathImage`, `fecha-registro`) VALUES
(3, 'Opel', 'Opel Corsa 1.6 DCi', 90, 'Lo mismo de ante en verda, solo q ahora no voy a poner nada más.', 0, 'opel-corsa-16.jpg', '2021-02-21 15:53:12'),
(5, 'Opel', 'Opel Vectra 2.0', 85, 'Opel Vectra 5 puertas, todo camino', 12000, 'opel-vectra-20.jpg', '2021-03-14 22:46:49'),
(6, 'BMW', 'BMW 320d', 150, 'BMW 5 puertas', 2500, 'bmw-320d.jpg', '2021-03-14 22:52:22'),
(8, 'Hyundai', 'Hyundai Accent', 85, 'Hyundai Accent 85 caballos, 5 puertas, año 1997', 1500, 'hyundai-accent.jpg', '2021-03-15 23:37:21'),
(11, 'Porsche', 'Porsche Panamera', 389, 'porsche panamera de 3 puertas con muchos caballos', 58000, 'porsche-panamera.jpg', '2021-03-27 02:47:57'),
(12, 'Ford', 'Ford Mustang', 289, 'coche con muchos caballos y un caballo en las llantas', 25000, 'ford-mustang.jpg', '2021-03-29 11:33:05'),
(16, 'Opel', 'Opel Zafira', 85, 'asdfa', 12345, 'opel-zafira.jpg', '2021-03-29 12:53:42'),
(17, 'Seat', 'Seat León', 180, 'Seat León Cupra', 32000, 'seat-leon-cupra.jpg', '2021-04-04 12:05:58'),
(22, 'Seat', 'Seat Altea', 90, 'Coche familiar', 4500, 'seat-altea.jpg', '2021-04-04 12:49:50'),
(23, 'Seat', 'Seat Toledo', 110, '2002', 126818, 'seat-toledo.jpg', '2021-04-04 12:51:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `idUsuario` int(11) NOT NULL,
  `idCoche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`idUsuario`, `idCoche`) VALUES
(1, 5),
(1, 3),
(3, 5),
(5, 3),
(5, 11),
(5, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `fechaNacimiento` varchar(10) NOT NULL,
  `tipo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `usuario`, `contraseña`, `nombre`, `fechaNacimiento`, `tipo`) VALUES
(1, 'carlos.cmf97@gmail.com', 'carlos', 'carlos', 'Carlos', '22-12-1997', 0),
(2, '', 'fran_matias', 'fran', 'Francisco Matías', '01-01-2000', 0),
(3, '', 'steven', 'steven', 'Steven José Figueroa Rincón', '18-09-2000', 1),
(5, 'rocio@gmail.com', 'rocio', 'mama', 'Rocío', '18-10-1963', 1),
(7, 'usuarioNuevo@usuario.com', 'usuarioNuevo', 'usuario', 'Usuario Nuevo Nuevo2', '22-12-1997', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios-coches`
--

CREATE TABLE `usuarios-coches` (
  `idUsuario` int(11) NOT NULL,
  `idCoche` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios-coches`
--

INSERT INTO `usuarios-coches` (`idUsuario`, `idCoche`) VALUES
(1, 3),
(1, 5),
(1, 6),
(1, 16),
(5, 8),
(5, 11),
(5, 12),
(7, 17),
(7, 22),
(7, 23);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coches`
--
ALTER TABLE `coches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios-coches`
--
ALTER TABLE `usuarios-coches`
  ADD PRIMARY KEY (`idUsuario`,`idCoche`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coches`
--
ALTER TABLE `coches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
