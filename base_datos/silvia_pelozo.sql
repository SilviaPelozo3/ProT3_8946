-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2025 a las 01:52:03
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
-- Base de datos: `silvia_pelozo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'asociado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `perfil_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `clave`, `telefono`, `perfil_id`, `created_at`) VALUES
(3, 'silvia', 'Pelozo', 'silviapelozo3@hotmail.com', '$2y$10$r7GzkFLIxJQ5FOfO5HVuS.uyq6ndQooPLII3.pODPO3xO7AmO2lBa', '3794611310', 2, '2025-06-21 16:03:15'),
(4, 'maria', 'perez', 'hola123@hotmail.com', '$2y$10$UF5O0TR4VRQoaHcgOaTls.kdq8zwTQacaMDgNsIY7nm8vS5G/oagK', '3794611310', 2, '2025-06-21 16:44:50'),
(5, 'Juan', 'Paso', 'juanpaso@gmail.com', '$2y$10$BX41.W6MCbqEkSWYt/EVOelF7e1rO.k57/mS5qyDRRglxWGCGuk4G', '1234567', 2, '2025-06-21 17:27:38'),
(6, 'Maria', 'Gomez', 'mariagomez@gmail.com', '$2y$10$oJ4cdPeH/C43tam3aMCRN.DCQm0kAepfvGXZ3gJ7dDSYvPPu4udim', '11111111', 2, '2025-06-21 17:56:26'),
(7, 'pedro', 'gomez', 'pedrogomez@gmail.com', '$2y$10$Q50EVFjYO/yKb/bsVW2FBufBK0hAs7eutUPmg7ScNnQsXkNhUr1rO', '22222222', 2, '2025-06-21 18:19:00'),
(8, 'melina', 'maldonado', 'melina@gmail.com', '$2y$10$k0Fqs5d9jebzF5/HOnXhZ.skYbYn6DPeFVyB3ewOztBlLMpNZxdTW', '33333333', 2, '2025-06-23 15:26:59'),
(10, 'karen', 'salinas', 'karen@gmail.com', '$2y$10$4VhpPRHt0CZjTbqm/uht0OYSvdGVripnQhmSlWt1B0LX6ABvY8nz2', '444444', 2, '2025-06-23 15:44:37'),
(12, 'admin', '123', 'admin123@gmail.com', '$2y$10$sNEiC5DsxaPgHonz7mb.sOdI1z0ZBEgzuIl7BnSFLlFwnwwce3lAW', '11111111', 1, '2025-06-23 16:43:57'),
(13, 'Silvia', 'Pelozo', 'silviapelozo3@gmail.com', '$2y$10$uSyTC6K8W4coeVhRdr8JsOITId9Msi3sUwXv5IPbCA/CKXndnj4Pq', '33333333', 2, '2025-06-23 17:00:14'),
(14, 'Silvia', 'Pelozo', 'silvia@gmail.com', '$2y$10$DStgbzZkO6id2TMJo9NLL.BIs71Nb36LbERsKD6L9VwI8o45WMm0a', '444444', 2, '2025-06-23 19:03:19'),
(15, 'maxi', 'mancuello', 'maxi@gmail.com', '$2y$10$UvUmZtwtLed8Lg2GtN69SezP6StlfQ8NtLFMT2306/ikILHitH15i', '33333333', 2, '2025-06-23 19:08:34'),
(16, 'Ignacio', 'Ncho', 'nacho@gmail.com', '$2y$10$CAYnDBzhcCNrCnOKv6cL8uJpfpMYcxMURAXW5rWTJtegu/v3rZIRC', '1234567', 2, '2025-06-23 19:49:06'),
(17, 'abril', 'salin', 'abril@gmail.com', '$2y$10$5qXJc/5gzkNmaGRBllG9IujUS48a4eOqnKKvERIwUu/suw7MHat56', '1234567', 2, '2025-06-23 20:59:24'),
(18, 'Lara', 'salinas', 'lara@gmail.com', '$2y$10$eHpUqVCKS4Z41dyn/eYlXeZwU6v.b3ufp3Msoun.V7feaVOV2Aj/2', '444444', 2, '2025-06-23 21:36:53'),
(19, 'maria', 'gomez', 'maria@gmail.com', '$2y$10$I8lRuEcbh2pna4z8yKLw7.Lz.iGIgL6EXJWJuIs2ggReW9LXDATay', '11111111', 2, '2025-06-23 23:25:43'),
(20, 'pedro', 'perez', 'pedro@gmail.com', '$2y$10$R2OHYZsFCuxJ0LUJ5GUDDePQxmPJOr7gTQa/CfPtoooXxj8l8niie', '11111111', 2, '2025-06-23 23:37:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
