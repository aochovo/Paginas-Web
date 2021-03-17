-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2020 a las 11:30:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mail` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `metros` int(4) NOT NULL,
  `habitaciones` int(1) NOT NULL,
  `baños` int(1) NOT NULL,
  `precio` int(7) NOT NULL,
  `localidad` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`id`, `nombre`, `metros`, `habitaciones`, `baños`, `precio`, `localidad`, `tipo`, `foto`) VALUES
(1, 'Piso en Paseo de la Estación', 70, 2, 1, 750, 'mostoles', 'alquiler', 'mostoles1.jpg'),
(2, 'Piso en venta en Alfonso XII', 98, 3, 2, 191000, 'mostoles', 'venta', 'mostoles2.jpg'),
(3, 'Piso en venta en Ricardo de la vega', 95, 3, 1, 850, 'mostoles', 'alquiler', 'mostoles3.jpg'),
(4, 'Piso en Avenida Europa Pozuelo', 117, 2, 1, 420000, 'mostoles', 'venta', 'mostoles4.jpg'),
(5, 'Local en Alquiler en Móstoles', 45, 2, 1, 500, 'mostoles', 'alquiler', 'mostoles5.jpg'),
(6, 'Piso en venta en Móstoles sur', 65, 2, 1, 150000, 'mostoles', 'venta', 'mostoles6.jpg'),
(7, 'Espectacular piso en Arroyomolinos', 70, 2, 1, 139000, 'arroyomolinos', 'venta', 'arroyomolinos1.jpg'),
(8, 'Bajo con Jardín en Arroyomolinos.', 84, 2, 1, 190000, 'arroyomolinos', 'venta', 'arroyomolinos2.jpg'),
(9, 'Fantástico Chalet Adosado en dos alturas', 243, 5, 2, 319000, 'arroyomolinos', 'venta', 'arroyomolinos3.jpg\r\n'),
(10, 'Fantástico Ático', 113, 1, 1, 800, 'arroyomolinos', 'alquiler', 'arroyomolinos4.jpg'),
(11, 'Piso en urbanización privada con piscina', 75, 2, 1, 700, 'arroyomolinos', 'alquiler', 'arroyomolinos5.jpg'),
(12, 'Fabuloso Ático', 100, 3, 3, 750, 'arroyomolinos', 'alquiler', 'arroyomolinos6.jpg'),
(13, 'Piso en venta en Alcorcón', 126, 2, 2, 300000, 'alcorcon', 'venta', 'alcorcon1.jpg'),
(14, 'Piso reformado en Alcorcón', 75, 2, 1, 219000, 'alcorcon', 'venta', 'alcorcon2.jpg'),
(15, 'Chalet adosado en Alcorcón', 227, 6, 2, 450000, 'alcorcon', 'venta', 'alcorcon3.jpg'),
(16, 'PISO PUERTA BONITA Alcorcon', 75, 3, 1, 650, 'alcorcon', 'alquiler', 'alcorcon4.jpg'),
(17, 'Duplex Alcorcon', 105, 2, 2, 900, 'alcorcon', 'alquiler', 'alcorcon5.jpg'),
(18, 'Piso en venta en Alcorcon', 132, 4, 2, 945, 'alcorcon', 'alquiler', 'alcorcon6.jpg'),
(19, 'Piso en venta en Calle Ávila', 30, 2, 1, 650, 'madrid', 'alquiler', 'madrid1.jpg'),
(20, 'Piso en Calle Lérida Madrid', 61, 2, 1, 210000, 'madrid', 'venta', 'madrid2.jpg'),
(21, 'Piso en venta en Calle Valdevarnes', 119, 3, 2, 355000, 'madrid', 'venta', 'madrid3.jpg'),
(22, 'Estupendo piso en venta en Carabelos', 59, 2, 1, 119000, 'madrid', 'venta', 'madrid4.jpg'),
(23, 'Montejurra', 51, 2, 1, 675, 'madrid', 'alquiler', 'madrid5.jpg'),
(24, 'Piso en Calle Sánchez Preciado', 70, 3, 1, 775, 'madrid', 'alquiler', 'madrid6.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
