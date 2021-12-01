-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 01-12-2021 a las 01:33:50
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebasic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `usuario_crea` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `sentencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radicaciones`
--

CREATE TABLE `radicaciones` (
  `id` int(11) NOT NULL,
  `nombre_solicitante` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `texto_solicitud` text NOT NULL,
  `usuario_crea` int(11) NOT NULL,
  `fecha_crea` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Datos de las radicaciones';

--
-- Volcado de datos para la tabla `radicaciones`
--

INSERT INTO `radicaciones` (`id`, `nombre_solicitante`, `fecha`, `asunto`, `texto_solicitud`, `usuario_crea`, `fecha_crea`) VALUES
(1, 'jorge serrano', '2021-12-10 00:00:00', 'asunto de la radicacion xxx', 'texto de la radicacion xxx', 1, '2021-11-29 17:25:33'),
(2, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(3, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(4, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-28 17:25:33'),
(5, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(6, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(7, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(8, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(9, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(10, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(11, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(12, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(13, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(14, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(15, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(16, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(17, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(18, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(19, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(20, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(21, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(22, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(23, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(24, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(25, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(26, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(27, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(28, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(29, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(30, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(31, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(32, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(33, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(34, 'jorge', '2021-11-23 17:15:21', 'asunto de la radicacion', 'texto de la radicacion', 1, '2021-11-30 17:25:33'),
(35, 'javier perez', '2021-11-29 00:00:00', 'carta de prueba', 'carta de prueba de la solicitud', 1, '2021-11-30 18:00:09'),
(36, 'javier perez', '2021-11-29 00:00:00', 'carta de prueba', 'carta de prueba de la solicitud', 1, '2021-11-30 18:00:33'),
(37, 'faber vargas ssss', '2021-12-11 00:00:00', 'asunto de faber ssss', 'texto de faber sssss', 1, '2021-11-30 18:31:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `intentos` tinyint(4) NOT NULL DEFAULT 0,
  `bloqueado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Datos de los usuarios';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre`, `password`, `intentos`, `bloqueado`) VALUES
(1, 'jorge@gmail.com', 'Jorge Serrano', '123456', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `radicaciones`
--
ALTER TABLE `radicaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_crea` (`usuario_crea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `radicaciones`
--
ALTER TABLE `radicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `radicaciones`
--
ALTER TABLE `radicaciones`
  ADD CONSTRAINT `radicaciones_ibfk_1` FOREIGN KEY (`usuario_crea`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
