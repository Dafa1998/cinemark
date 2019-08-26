-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-06-2018 a las 20:31:16
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cinemark`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_asientos`
--

CREATE TABLE `tbl_asientos` (
  `IdAsiento` int(10) UNSIGNED NOT NULL,
  `Id_Sala` int(10) UNSIGNED NOT NULL,
  `LetraFila` varchar(1) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `N_Asiento` varchar(2) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_asientos`
--

INSERT INTO `tbl_asientos` (`IdAsiento`, `Id_Sala`, `LetraFila`, `N_Asiento`) VALUES
(1, 1, 'A', '1'),
(2, 1, 'A', '2'),
(3, 1, 'A', '2'),
(4, 1, 'A', '3'),
(5, 1, 'A', '4'),
(6, 1, 'A', '5'),
(7, 1, 'A', '6'),
(8, 1, 'A', '7'),
(9, 1, 'A', '8'),
(10, 1, 'A', '9'),
(11, 1, 'A', '10'),
(12, 1, 'A', '11'),
(13, 1, 'A', '12'),
(14, 1, 'A', '13'),
(15, 1, 'A', '14'),
(16, 1, 'A', '15'),
(17, 1, 'A', '16'),
(18, 1, 'B', '1'),
(19, 1, 'B', '2'),
(20, 1, 'B', '3'),
(21, 1, 'B', '4'),
(22, 1, 'B', '5'),
(23, 1, 'B', '6'),
(24, 1, 'B', '7'),
(25, 1, 'B', '8'),
(26, 1, 'B', '9'),
(27, 1, 'B', '10'),
(28, 1, 'B', '11'),
(29, 1, 'B', '12'),
(30, 1, 'B', '13'),
(31, 1, 'B', '14'),
(32, 1, 'C', '1'),
(33, 1, 'C', '2'),
(34, 1, 'C', '3'),
(35, 1, 'C', '4'),
(36, 1, 'C', '5'),
(37, 1, 'C', '6'),
(38, 1, 'C', '7'),
(39, 1, 'C', '8'),
(40, 1, 'C', '9'),
(41, 1, 'C', '10'),
(42, 1, 'C', '11'),
(43, 1, 'C', '12'),
(44, 1, 'C', '13'),
(45, 1, 'C', '14'),
(46, 1, 'C', '15'),
(47, 1, 'D', '1'),
(48, 1, 'D', '2'),
(49, 1, 'D', '3'),
(50, 1, 'D', '4'),
(51, 1, 'D', '5'),
(52, 1, 'D', '6'),
(53, 1, 'D', '7'),
(54, 1, 'D', '8'),
(55, 1, 'D', '9'),
(56, 1, 'D', '10'),
(57, 1, 'D', '11'),
(58, 1, 'D', '12'),
(59, 1, 'D', '13'),
(60, 1, 'D', '14'),
(61, 1, 'D', '15'),
(62, 1, 'E', '1'),
(63, 1, 'E', '2'),
(64, 1, 'E', '3'),
(65, 1, 'E', '4'),
(66, 1, 'E', '5'),
(67, 1, 'E', '6'),
(68, 1, 'E', '7'),
(69, 1, 'E', '8'),
(70, 1, 'E', '9'),
(71, 1, 'E', '10'),
(72, 1, 'E', '11'),
(73, 1, 'E', '12'),
(74, 1, 'E', '13'),
(75, 1, 'E', '14'),
(76, 1, 'E', '15'),
(77, 1, 'F', '1'),
(78, 1, 'F', '2'),
(79, 1, 'F', '3'),
(80, 1, 'F', '4'),
(81, 1, 'F', '5'),
(82, 1, 'F', '6'),
(83, 1, 'F', '7'),
(84, 1, 'F', '8'),
(85, 1, 'F', '9'),
(86, 1, 'F', '10'),
(87, 1, 'f', '11'),
(88, 1, 'F', '12'),
(89, 1, 'F', '13'),
(90, 1, 'F', '14'),
(91, 1, 'F', '15'),
(92, 1, 'G', '1'),
(93, 1, 'G', '2'),
(94, 1, 'G', '3'),
(95, 1, 'G', '4'),
(96, 1, 'G', '5'),
(97, 1, 'G', '6'),
(98, 1, 'G', '7'),
(99, 1, 'G', '8'),
(100, 1, 'G', '9'),
(101, 1, 'G', '10'),
(102, 1, 'G', '11'),
(103, 1, 'G', '12'),
(104, 1, 'G', '13'),
(105, 1, 'G', '14'),
(106, 1, 'G', '15'),
(107, 1, 'G', '16'),
(108, 1, 'G', '17'),
(109, 1, 'H', '1'),
(110, 1, 'H', '2'),
(111, 1, 'H', '3'),
(112, 1, 'H', '4'),
(113, 1, 'H', '5'),
(114, 1, 'H', '6'),
(115, 1, 'H', '7'),
(116, 1, 'H', '8'),
(117, 1, 'H', '9'),
(118, 1, 'H', '10'),
(119, 1, 'H', '11'),
(120, 1, 'H', '12'),
(121, 1, 'H', '13'),
(122, 1, 'H', '14'),
(123, 1, 'H', '15'),
(124, 1, 'H', '16'),
(125, 1, 'H', '17'),
(126, 1, 'I', '1'),
(127, 1, 'I', '2'),
(128, 1, 'I', '3'),
(129, 1, 'I', '4'),
(130, 1, 'I', '5'),
(131, 1, 'I', '6'),
(132, 1, 'I', '7'),
(133, 1, 'I', '8'),
(134, 1, 'I', '9'),
(135, 1, 'I', '10'),
(136, 1, 'I', '11'),
(137, 1, 'I', '12'),
(138, 1, 'I', '13'),
(139, 1, 'I', '14'),
(140, 1, 'I', '15'),
(141, 1, 'I', '16'),
(142, 1, 'I', '17'),
(143, 1, 'I', '18'),
(144, 1, 'I', '19'),
(145, 1, 'I', '20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_carteleras`
--

CREATE TABLE `tbl_carteleras` (
  `Id_Cartelera` int(10) UNSIGNED NOT NULL,
  `Id_Proyeccion` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horarios`
--

CREATE TABLE `tbl_horarios` (
  `Id_Horario` int(10) UNSIGNED NOT NULL,
  `Hora_Inicio` time DEFAULT NULL,
  `Hora_Finalizacion` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_horarios`
--

INSERT INTO `tbl_horarios` (`Id_Horario`, `Hora_Inicio`, `Hora_Finalizacion`) VALUES
(1, '11:05:00', '14:05:00'),
(2, '10:20:00', '13:20:00'),
(3, '12:40:00', '16:00:00'),
(4, '13:00:00', '15:00:00'),
(5, '14:25:00', '17:25:00'),
(6, '15:50:00', '19:00:00'),
(7, '18:15:00', '21:15:00'),
(8, '17:25:00', '20:25:00'),
(9, '18:15:00', '21:15:00'),
(10, '21:00:00', '24:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_peliculas`
--

CREATE TABLE `tbl_peliculas` (
  `Id_Pelicula` int(10) UNSIGNED NOT NULL,
  `Nombre_Pelicula` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Duracion` int(20) UNSIGNED DEFAULT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Url_Foto` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Eliminado` varchar(1) COLLATE utf8mb4_spanish2_ci DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_peliculas`
--

INSERT INTO `tbl_peliculas` (`Id_Pelicula`, `Nombre_Pelicula`, `Duracion`, `Descripcion`, `Url_Foto`, `Eliminado`) VALUES
(1, 'Blade Runner 2049', 163, 'Tras la rebelión de los replicantes -humanos creados por bioingeniería para ser utilizados como mano', 'img-1.jpg', 'N'),
(2, 'Vengadores: Infinity War', 148, 'Un nuevo peligro acecha procedente de las sombras del cosmos. Thanos, el infame tirano intergaláctico, tiene como objetivo reunir las seis Gemas del Infinito, artefactos de poder inimaginable, y usarlas para imponer su perversa voluntad a toda la existenc', 'img-5.jpg', 'N'),
(3, 'vkjcjfvkjlvkj', 123, 'kjhfkjhfvljvlv', '../../pic/peliculas/fotoest_180604034943.jpg', 'S'),
(4, 'deadpool', 120, 'comedia', '../../pic/peliculas/fotoest_180611055229.jpg', 'N'),
(5, 'Thor', 120, 'El Dios', '../../pic/peliculas/fotoest_180611062342.jpg', 'N'),
(6, 'Venom', 120, 'venom', '../../pic/peliculas/fotoest_180611062622.jpg', 'N'),
(7, 'los increibles', 120, '', '../../pic/peliculas/fotoest_180611062751.jpg', 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proyecciones`
--

CREATE TABLE `tbl_proyecciones` (
  `Id_Proyeccion` int(10) UNSIGNED NOT NULL,
  `Id_Pelicula` int(10) UNSIGNED NOT NULL,
  `Id_Horario` int(10) UNSIGNED NOT NULL,
  `Id_Sala` int(10) UNSIGNED NOT NULL,
  `Fecha_Proyeccion` date NOT NULL,
  `PTicket` double UNSIGNED DEFAULT NULL,
  `Eliminado` varchar(1) COLLATE utf8mb4_spanish2_ci DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_proyecciones`
--

INSERT INTO `tbl_proyecciones` (`Id_Proyeccion`, `Id_Pelicula`, `Id_Horario`, `Id_Sala`, `Fecha_Proyeccion`, `PTicket`, `Eliminado`) VALUES
(1, 1, 2, 1, '2018-06-02', 2.75, 'N'),
(2, 2, 1, 3, '2018-06-02', 2.75, 'N'),
(3, 2, 7, 2, '2018-06-02', 2.75, 'N'),
(4, 1, 1, 1, '2018-06-03', 2.75, 'N'),
(5, 1, 2, 1, '2018-06-03', 2.75, 'N'),
(6, 1, 2, 1, '2018-06-03', 2.75, 'N'),
(7, 1, 2, 2, '2018-06-03', 0, 'S'),
(8, 1, 2, 1, '2018-06-03', 2.75, 'N'),
(9, 2, 2, 1, '2018-06-03', 2.75, 'N'),
(10, 2, 2, 1, '2018-06-03', 2.75, 'N'),
(11, 2, 2, 1, '2018-06-03', 2.75, 'N'),
(12, 2, 1, 2, '2018-06-05', 0, 'N'),
(13, 2, 2, 3, '2018-06-05', 0, 'N'),
(14, 2, 2, 2, '2018-06-05', 0, 'S'),
(15, 1, 2, 2, '2018-06-05', 0, 'S'),
(16, 1, 2, 2, '2018-06-05', 0, 'S'),
(17, 1, 5, 2, '2018-06-05', 0, 'S'),
(18, 1, 2, 2, '2018-06-05', 0, 'S'),
(19, 1, 2, 2, '2018-06-05', 0, 'N'),
(20, 1, 1, 1, '2018-06-10', 2.75, 'N'),
(21, 1, 1, 1, '2018-06-11', 2.75, 'N'),
(22, 1, 5, 1, '2018-06-11', 2.75, 'N'),
(23, 4, 5, 3, '0000-00-00', 3.75, 'S'),
(24, 4, 1, 3, '2018-06-11', 3.75, 'N'),
(25, 5, 8, 2, '2018-06-11', 3.75, 'N'),
(27, 7, 10, 3, '2018-06-11', 3.75, 'N'),
(28, 2, 4, 2, '2018-06-11', 3.75, 'N'),
(29, 6, 10, 1, '0000-00-00', 3.75, 'S'),
(30, 6, 10, 2, '2018-06-11', 3.75, 'S'),
(31, 6, 10, 2, '2018-06-11', 3.75, 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_salas`
--

CREATE TABLE `tbl_salas` (
  `Id_Sala` int(10) UNSIGNED NOT NULL,
  `N_Sala` varchar(1) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Cantidad_Asientos` varchar(2) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_salas`
--

INSERT INTO `tbl_salas` (`Id_Sala`, `N_Sala`, `Cantidad_Asientos`) VALUES
(1, '1', '30'),
(2, '2', '45'),
(3, '3', '60');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tickets`
--

CREATE TABLE `tbl_tickets` (
  `IdTicket` int(11) UNSIGNED NOT NULL,
  `IdAsiento` int(10) UNSIGNED NOT NULL,
  `Id_Venta` int(10) UNSIGNED NOT NULL,
  `Eliminado` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `Id_Usuario` int(10) UNSIGNED NOT NULL,
  `Privilegio` varchar(25) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `NombreUsuario` varchar(25) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `NombreCompleto` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `VisibleEnAplicacion` varchar(1) COLLATE utf8mb4_spanish2_ci DEFAULT 'S',
  `Eliminado` varchar(1) COLLATE utf8mb4_spanish2_ci DEFAULT 'N',
  `EsEliminable` varchar(1) COLLATE utf8mb4_spanish2_ci DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`Id_Usuario`, `Privilegio`, `NombreUsuario`, `Password`, `NombreCompleto`, `VisibleEnAplicacion`, `Eliminado`, `EsEliminable`) VALUES
(1, 'admin', 'newland', '63a9f0ea7bb98050796b649e85481845', 'Administrador Root', 'N', 'N', 'N'),
(2, 'Administrador', 'varela', 'ce7fd142dcbf3de2738b2e140b2a4ff5', 'varela', 'S', 'N', 'N'),
(3, 'Usuario', 'diego', '93b9f9e761f6aabbdc2f50a60c374880', 'diego flores', 'S', 'S', 'S'),
(15, 'Usuario', 'rem', '5cadb523cb6909f92350f70f124adfb8', 'rem', 'S', 'S', 'S'),
(16, 'Usuario', 'rem', '5cadb523cb6909f92350f70f124adfb8', 'rem', 'S', 'N', 'S'),
(17, 'Usuario', 'wilber', 'bf8f0f16316c8225bb1d7348a0763d2b', 'wilber', 'S', 'N', 'S'),
(18, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 'S', 'N', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ventas`
--

CREATE TABLE `tbl_ventas` (
  `Id_Venta` int(10) UNSIGNED NOT NULL,
  `Id_Proyeccion` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_listar_cartelera`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vta_listar_cartelera` (
`Id_Proyeccion` int(10) unsigned
,`Id_Pelicula` int(10) unsigned
,`Nombre_Pelicula` varchar(50)
,`Url_Foto` varchar(255)
,`N_Sala` varchar(1)
,`Hora_Inicio` time
,`Fecha_Proyeccion` date
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vta_listar_tickets`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vta_listar_tickets` (
`IdTicket` int(11) unsigned
,`IdAsiento` int(10) unsigned
,`Id_Venta` int(10) unsigned
,`Id_Sala` int(10) unsigned
,`LetraFila` varchar(1)
,`N_Asiento` varchar(2)
,`Id_Proyeccion` int(10) unsigned
,`Id_Pelicula` int(10) unsigned
,`PTicket` double unsigned
,`Id_Horario` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_listar_cartelera`
--
DROP TABLE IF EXISTS `vta_listar_cartelera`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_listar_cartelera`  AS  select `tbl_proyecciones`.`Id_Proyeccion` AS `Id_Proyeccion`,`tbl_proyecciones`.`Id_Pelicula` AS `Id_Pelicula`,`tbl_peliculas`.`Nombre_Pelicula` AS `Nombre_Pelicula`,`tbl_peliculas`.`Url_Foto` AS `Url_Foto`,`tbl_salas`.`N_Sala` AS `N_Sala`,`tbl_horarios`.`Hora_Inicio` AS `Hora_Inicio`,`tbl_proyecciones`.`Fecha_Proyeccion` AS `Fecha_Proyeccion` from (((`tbl_proyecciones` join `tbl_peliculas` on((`tbl_proyecciones`.`Id_Pelicula` = `tbl_peliculas`.`Id_Pelicula`))) join `tbl_horarios` on((`tbl_proyecciones`.`Id_Horario` = `tbl_horarios`.`Id_Horario`))) join `tbl_salas` on((`tbl_proyecciones`.`Id_Sala` = `tbl_salas`.`Id_Sala`))) where (`tbl_proyecciones`.`Eliminado` = 'N') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vta_listar_tickets`
--
DROP TABLE IF EXISTS `vta_listar_tickets`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vta_listar_tickets`  AS  select `tbl_tickets`.`IdTicket` AS `IdTicket`,`tbl_tickets`.`IdAsiento` AS `IdAsiento`,`tbl_ventas`.`Id_Venta` AS `Id_Venta`,`tbl_asientos`.`Id_Sala` AS `Id_Sala`,`tbl_asientos`.`LetraFila` AS `LetraFila`,`tbl_asientos`.`N_Asiento` AS `N_Asiento`,`tbl_ventas`.`Id_Proyeccion` AS `Id_Proyeccion`,`tbl_proyecciones`.`Id_Pelicula` AS `Id_Pelicula`,`tbl_proyecciones`.`PTicket` AS `PTicket`,`tbl_proyecciones`.`Id_Horario` AS `Id_Horario` from (((`tbl_tickets` join `tbl_asientos` on((`tbl_tickets`.`IdAsiento` = `tbl_asientos`.`IdAsiento`))) join `tbl_ventas` on((`tbl_tickets`.`Id_Venta` = `tbl_ventas`.`Id_Venta`))) join `tbl_proyecciones` on((`tbl_proyecciones`.`Id_Proyeccion` = `tbl_ventas`.`Id_Proyeccion`))) where (`tbl_tickets`.`Eliminado` = 'N') ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_asientos`
--
ALTER TABLE `tbl_asientos`
  ADD PRIMARY KEY (`IdAsiento`),
  ADD KEY `Id_Sala` (`Id_Sala`);

--
-- Indices de la tabla `tbl_carteleras`
--
ALTER TABLE `tbl_carteleras`
  ADD PRIMARY KEY (`Id_Cartelera`),
  ADD KEY `Id_Proyeccion` (`Id_Proyeccion`);

--
-- Indices de la tabla `tbl_horarios`
--
ALTER TABLE `tbl_horarios`
  ADD PRIMARY KEY (`Id_Horario`);

--
-- Indices de la tabla `tbl_peliculas`
--
ALTER TABLE `tbl_peliculas`
  ADD PRIMARY KEY (`Id_Pelicula`);

--
-- Indices de la tabla `tbl_proyecciones`
--
ALTER TABLE `tbl_proyecciones`
  ADD PRIMARY KEY (`Id_Proyeccion`),
  ADD KEY `Id_Horario` (`Id_Horario`),
  ADD KEY `Id_Pelicula` (`Id_Pelicula`),
  ADD KEY `Id_Sala` (`Id_Sala`);

--
-- Indices de la tabla `tbl_salas`
--
ALTER TABLE `tbl_salas`
  ADD PRIMARY KEY (`Id_Sala`);

--
-- Indices de la tabla `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  ADD PRIMARY KEY (`IdTicket`),
  ADD KEY `IdAsiento` (`IdAsiento`),
  ADD KEY `Id_Venta` (`Id_Venta`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- Indices de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD PRIMARY KEY (`Id_Venta`),
  ADD KEY `Id_Proyeccion` (`Id_Proyeccion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_asientos`
--
ALTER TABLE `tbl_asientos`
  MODIFY `IdAsiento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT de la tabla `tbl_carteleras`
--
ALTER TABLE `tbl_carteleras`
  MODIFY `Id_Cartelera` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_horarios`
--
ALTER TABLE `tbl_horarios`
  MODIFY `Id_Horario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_peliculas`
--
ALTER TABLE `tbl_peliculas`
  MODIFY `Id_Pelicula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_proyecciones`
--
ALTER TABLE `tbl_proyecciones`
  MODIFY `Id_Proyeccion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `tbl_salas`
--
ALTER TABLE `tbl_salas`
  MODIFY `Id_Sala` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  MODIFY `IdTicket` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `Id_Usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  MODIFY `Id_Venta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_asientos`
--
ALTER TABLE `tbl_asientos`
  ADD CONSTRAINT `tbl_asientos_ibfk_1` FOREIGN KEY (`Id_Sala`) REFERENCES `tbl_salas` (`Id_Sala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_carteleras`
--
ALTER TABLE `tbl_carteleras`
  ADD CONSTRAINT `tbl_carteleras_ibfk_1` FOREIGN KEY (`Id_Proyeccion`) REFERENCES `tbl_proyecciones` (`Id_Proyeccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_proyecciones`
--
ALTER TABLE `tbl_proyecciones`
  ADD CONSTRAINT `tbl_proyecciones_ibfk_1` FOREIGN KEY (`Id_Horario`) REFERENCES `tbl_horarios` (`Id_Horario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_proyecciones_ibfk_2` FOREIGN KEY (`Id_Pelicula`) REFERENCES `tbl_peliculas` (`Id_Pelicula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_proyecciones_ibfk_3` FOREIGN KEY (`Id_Sala`) REFERENCES `tbl_salas` (`Id_Sala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  ADD CONSTRAINT `tbl_tickets_ibfk_2` FOREIGN KEY (`IdAsiento`) REFERENCES `tbl_asientos` (`IdAsiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_tickets_ibfk_3` FOREIGN KEY (`Id_Venta`) REFERENCES `tbl_ventas` (`Id_Venta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD CONSTRAINT `tbl_ventas_ibfk_1` FOREIGN KEY (`Id_Proyeccion`) REFERENCES `tbl_proyecciones` (`Id_Proyeccion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
