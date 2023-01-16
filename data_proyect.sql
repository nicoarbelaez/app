-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2023 a las 20:21:18
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `data_proyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dp_operations`
--

CREATE TABLE `dp_operations` (
  `id` int NOT NULL,
  `document_user` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `value_net` decimal(10,0) NOT NULL,
  `value_total` decimal(10,0) NOT NULL,
  `method_pay` enum('transfer','cash') COLLATE utf8mb4_general_ci DEFAULT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dp_operations`
--

INSERT INTO `dp_operations` (`id`, `document_user`, `value_net`, `value_total`, `method_pay`, `completed`, `date`) VALUES
(1, '1107840350', '10900', '15000', 'transfer', 1, '2023-01-10 01:15:02'),
(3, '12345', '10900', '15000', 'cash', 1, '2023-01-10 01:16:15'),
(7, '1107840350', '10900', '15000', 'cash', 1, '2023-01-10 01:16:15'),
(9, '1107840350', '10900', '15000', 'transfer', 1, '2023-01-10 01:16:15'),
(10, '1107840350', '10900', '15000', 'transfer', 1, '2023-01-10 01:16:15'),
(12, '12345', '10900', '1000', 'transfer', 1, '2023-01-10 23:39:44'),
(13, '1107840350', '10900', '15000', 'transfer', 1, '2023-01-11 19:21:22'),
(20, '123456', '51350', '25675', 'cash', 1, '2023-01-11 23:15:19'),
(24, '123456', '1000', '500', 'cash', 1, '2023-01-12 22:02:13'),
(27, '123456', '9999999999', '9999999999', 'transfer', 1, '2023-01-12 22:41:59'),
(28, '123456', '5057500', '2528750', 'transfer', 1, '2023-01-13 02:54:31'),
(29, '123456', '1000000', '500000', 'cash', 1, '2023-01-13 13:45:39'),
(31, '123456', '1219550', '609775', 'cash', 1, '2023-01-16 16:46:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dp_users`
--

CREATE TABLE `dp_users` (
  `id` binary(16) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `document` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `type_document` enum('cc','ti') COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dp_users`
--

INSERT INTO `dp_users` (`id`, `email`, `document`, `type_document`, `phone`, `name`, `lastname`, `role`, `password`, `time_stamp`) VALUES
(0x05ba1add908411ed9a4e28d244c93422, 'test@test.com', '12345', 'cc', '3226784229', 'Nicolas', 'Cortes Gomez', 'user', '$2y$12$fZQwD6kK8t/PGd1BTS73DujtbJSI3ctVN0HoDTTQfBXYRiH1MnubC', '2023-01-10 01:13:42'),
(0x7c241c9d908811ed9a4e28d244c93422, 'juandi@gmail.com', '1107840352', 'cc', '322675487', 'Juan Diego', 'Campo Suarez', 'user', '$2y$12$jGAX3kt8FM7q8/9DLEta3uT0IRCe6LED8vQ8OYZ04T4JQW8Xe6Up2', '2023-01-10 01:45:39'),
(0x88dfbc73908311ed9a4e28d244c93422, 'isabella@usc.co', '123456', 'ti', '1234567', 'Isabella', 'Bartolomea', 'user', '$2y$12$fZQwD6kK8t/PGd1BTS73DujtbJSI3ctVN0HoDTTQfBXYRiH1MnubC', '2023-01-10 01:10:12'),
(0x88ef2e4a908311ed9a4e28d244c93422, 'test@test.comm', '1107840350', 'cc', '3176660310', 'Nicolas', 'Arbelaez Tapias', 'admin', '$2y$12$2yaruAt1IjY9TbrIrlkC/usq3ZofvjWwD52WPwf6k8wVYSMX3BPb2', '2023-01-10 01:10:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dp_operations`
--
ALTER TABLE `dp_operations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_document_user` (`document_user`);

--
-- Indices de la tabla `dp_users`
--
ALTER TABLE `dp_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ik_document` (`document`),
  ADD UNIQUE KEY `ik_email` (`email`),
  ADD UNIQUE KEY `ik_phone` (`phone`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dp_operations`
--
ALTER TABLE `dp_operations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dp_operations`
--
ALTER TABLE `dp_operations`
  ADD CONSTRAINT `dp_operations_ibfk_1` FOREIGN KEY (`document_user`) REFERENCES `dp_users` (`document`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
