-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2024 a las 07:54:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad_mexico`
--

CREATE TABLE `ciudad_mexico` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `costo_viaje` decimal(65,0) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad_mexico`
--

INSERT INTO `ciudad_mexico` (`id`, `nombre`, `descripcion`, `ubicacion`, `costo_viaje`, `foto`) VALUES
(1, 'Museo Nacional de Antropología', 'Un museo que alberga artefactos de las culturas precolombinas de México.', 'Av. Paseo de la Reforma & Calzada Gandhi S/N, Chapultepec Polanco, Miguel Hidalgo, 11560 Ciudad de México, CDMX', 800, '../upload/ciudad_mexico/museo_nacional_antropologia.jpg'),
(2, 'Xochimilco', 'Famoso por sus canales y trajineras decoradas. Un lugar ideal para paseos en bote y festividades.', 'Xochimilco, Ciudad de México, CDMX', 1000, '../upload/ciudad_mexico/xochimilco.jpg'),
(3, 'Palacio de Bellas Artes', 'Un majestuoso edificio que alberga eventos culturales y exposiciones artísticas.', 'Av. Juárez, Centro Histórico, 06050 Ciudad de México, CDMX', 1100, '../upload/ciudad_mexico/palacio_bellas_artes.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jalisco`
--

CREATE TABLE `jalisco` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `costo_viaje` decimal(65,0) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jalisco`
--

INSERT INTO `jalisco` (`id`, `nombre`, `descripcion`, `ubicacion`, `costo_viaje`, `foto`) VALUES
(1, 'Guadalajara', 'La segunda ciudad más grande de México, famosa por su cultura mariachi y sus festivales.', 'Guadalajara, Jalisco, México', 2220, '../upload/jalisco/guadalajara.jpg'),
(2, 'Puerto Vallarta', 'Un destino de playa con un encantador centro histórico y una activa vida nocturna.', 'Puerto Vallarta, Jalisco, México', 3300, '../upload/jalisco/puerto_vallarta.jpg'),
(3, 'Tequila', 'Conocida por la producción de la bebida homónima y sus tours por las destilerías.', 'Tequila, Jalisco, México', 1200, '../upload/jalisco/tequila.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quintana_roo`
--

CREATE TABLE `quintana_roo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `costo_viaje` decimal(65,0) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `quintana_roo`
--

INSERT INTO `quintana_roo` (`id`, `nombre`, `descripcion`, `ubicacion`, `costo_viaje`, `foto`) VALUES
(1, 'Cancún', 'Famoso por sus playas de arena blanca y su vibrante vida nocturna.', 'Cancún, Quintana Roo, México', 2200, '../upload/quintana_roo/cancun.jpg'),
(2, 'Playa del Carmen', 'Un destino turístico con un ambiente más relajado, pero con muchas actividades y restaurantes.', 'Playa del Carmen, Quintana Roo, México', 2500, '../upload/quintana_roo/playa_del_carmen.jpg'),
(3, 'Tulum', 'Conocido por sus ruinas mayas frente al mar y sus playas paradisíacas.', 'Tulum, Quintana Roo, México', 1800, '../upload/quintana_roo/tulum.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `yucatan`
--

CREATE TABLE `yucatan` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `costo_viaje` decimal(65,0) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `yucatan`
--

INSERT INTO `yucatan` (`id`, `nombre`, `descripcion`, `ubicacion`, `costo_viaje`, `foto`) VALUES
(1, 'Mérida', 'La capital del estado, conocida por su arquitectura colonial y su vibrante vida cultural.', 'Mérida, Yucatán, México', 900, '../upload/yucatan/merida.jpg'),
(2, 'Chichén Itzá', 'Una de las nuevas siete maravillas del mundo, famosa por su pirámide de Kukulkán.', 'Chichén Itzá, Yucatán, México', 3300, '../upload/yucatan/chichen_itza.jpg'),
(3, 'Uxmal', 'Otra impresionante zona arqueológica maya.', 'Uxmal, Yucatán, México', 4000, '../upload/yucatan/uxmal.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad_mexico`
--
ALTER TABLE `ciudad_mexico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jalisco`
--
ALTER TABLE `jalisco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quintana_roo`
--
ALTER TABLE `quintana_roo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `yucatan`
--
ALTER TABLE `yucatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad_mexico`
--
ALTER TABLE `ciudad_mexico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `jalisco`
--
ALTER TABLE `jalisco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `quintana_roo`
--
ALTER TABLE `quintana_roo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `yucatan`
--
ALTER TABLE `yucatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
