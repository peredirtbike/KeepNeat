-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-05-2020 a las 11:51:44
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `keepneat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciutats`
--

CREATE TABLE `ciutats` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `paisos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ciutats`
--

INSERT INTO `ciutats` (`id`, `nom`, `paisos_id`) VALUES
(1, 'Barcelona', 1),
(2, 'Madrid', 1),
(5, 'Cusco', 2),
(6, 'Lima', 2),
(7, 'Trujillo', 2),
(8, 'Barcelona (Argentina)', 3),
(9, 'San Francisco', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccions`
--

CREATE TABLE `direccions` (
  `id` int(11) NOT NULL,
  `carrer` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `numero` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `pis` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `ciutats_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `direccions`
--

INSERT INTO `direccions` (`id`, `carrer`, `numero`, `pis`, `ciutats_id`) VALUES
(1, 'DEFAULT', '0', '0', 1),
(2, 'Guatemala', '366', '5', 6),
(3, 'Cal Rubio', '15', '3', 1),
(4, 'Costa Daurada', '5', '1', 1),
(5, 'Mercadona', '5656', '3', 1),
(6, 'Mercadona', '5656', '3', 1),
(7, 'Hacendado', '65', '1', 1),
(8, 'Hacendado', '65', '1', 1),
(9, 'Vilafranca', '99', '3', 1),
(10, 'Vilafranca', '99', '3', 1),
(11, 'Monjus City', '100', '3', 1),
(12, 'LimaLimon', '96', '4', 6),
(13, 'Capuchon', '5', '1', 7),
(14, 'Capuchon', '5', '1', 7),
(15, 'Capuchon', '5', '1', 7),
(16, 'Capuchon', '5', '1', 7),
(17, 'Matanuces', '9', '3', 1),
(18, 'Matanuces', '9', '3', 1),
(19, 'Matanuces', '9', '3', 8),
(20, 'Matanuces', '9', '3', 1),
(21, 'Matanuces', '9', '3', 8),
(22, 'Matanuces', '9', '3', 1),
(23, 'Capuchon', '69', '1', 1),
(24, 'Capuchon', '69', '1', 1),
(25, 'Capuchon', '69', '1', 1),
(26, 'Capuchon', '69', '1', 1),
(27, 'Capuchon', '69', '1', 1),
(28, 'Capuchon', '69', '1', 1),
(29, 'DEFAULT', '0', '0', 1),
(30, 'DEFAULT', '0', '0', 1),
(31, 'DEFAULT', '0', '0', 1),
(32, 'DEFAULT', '0', '0', 1),
(33, 'DEFAULT', '0', '0', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinions`
--

CREATE TABLE `opinions` (
  `id` int(11) NOT NULL,
  `usuari_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `comentari` varchar(500) COLLATE utf8_bin NOT NULL,
  `puntuacio` int(11) NOT NULL,
  `data` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `opinions`
--

INSERT INTO `opinions` (`id`, `usuari_id`, `restaurant_id`, `comentari`, `puntuacio`, `data`) VALUES
(1, 1, 16, 'dsafas', 13, '2009-02-15 15:28:53'),
(2, 1, 16, 'fasdfasg', 3425, '2009-02-15 15:29:02'),
(3, 1, 16, 'ygfcighcvjlg', 890, '2009-02-15 15:29:36'),
(4, 1, 16, 'ygfcighcvjlg', 890, '2009-02-15 15:32:13'),
(5, 1, 16, 'ygfcighcvjlg', 890, '2009-02-15 15:32:23'),
(6, 1, 16, 'ygfcighcvjlg', 890, '2009-02-15 15:39:09'),
(7, 1, 16, 'gadscgafdcv', 51, '2009-02-15 15:39:19'),
(8, 1, 16, 'gadscgafdcv', 51, '2009-02-15 15:42:34'),
(9, 1, 16, 'gadscgafdcv', 51, '2009-02-15 15:42:47'),
(10, 1, 16, 'gadscgafdcv', 51, '2020-05-18 14:43:49'),
(11, 1, 16, 'fdsafasfsaas', 2, '2020-05-18 14:43:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paisos`
--

CREATE TABLE `paisos` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `paisos`
--

INSERT INTO `paisos` (`id`, `nom`) VALUES
(1, 'España'),
(2, 'Peru'),
(3, 'Argentina'),
(4, 'USA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserves`
--

CREATE TABLE `reserves` (
  `usuaris_id` int(11) NOT NULL,
  `restaurants_id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_bin NOT NULL,
  `descripcio` varchar(500) COLLATE utf8_bin NOT NULL,
  `estrelles` int(5) DEFAULT NULL,
  `preu` varchar(11) COLLATE utf8_bin NOT NULL,
  `tipus_cuina` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `adreca` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefon` int(9) NOT NULL,
  `horari` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `restaurants`
--

INSERT INTO `restaurants` (`id`, `nom`, `descripcio`, `estrelles`, `preu`, `tipus_cuina`, `adreca`, `telefon`, `horari`, `user_id`) VALUES
(11, 'El asador argentino xino tambien', 'Asador dedicat al menjar argentí', 100, '100', 'medioxina', 'tarantino', 699696332, 'Dilluns-Diumenge', 1),
(13, 'Tai kwai chi', 'Komila xina para yeba a tu casita', 0, '0', '', '', 0, '', 4),
(14, 'Zagreb armani', 'Ki pasa amego quiere comida buina?', 0, '0', '', '', 0, '', 7),
(16, 'El racó de\'n pere', 'ajajajajaj', 0, '0', '', '', 0, '', 10),
(17, 'La pipa de la pau', 'Fuma\'t els porrilos a gust', 0, '0', '', '', 0, '', 11),
(18, 'daddaads', 'ghvuvcgjuvb', 60, '100', NULL, 'hcvfvgb jn', 699665582, 'Dilluns - Diumenge', 8),
(19, 'Papanatas', 'patatas fritas', 50, '10-58', NULL, 'Avenida callefria', 644145232, 'Dilluns - Diumenge', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nom`) VALUES
(0, 'super'),
(1, 'basic'),
(2, 'empresari');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `direccions_id` int(11) NOT NULL DEFAULT '1',
  `rol_id` int(11) NOT NULL DEFAULT '1',
  `nif` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cognoms` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sexe` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `data_naixement` date DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `direccions_id`, `rol_id`, `nif`, `cognoms`, `sexe`, `data_naixement`, `avatar`) VALUES
(1, 'Gerard', 'gerard@gmail.com', NULL, '$2y$10$OkHzOLAHV0ElWUaSEOuiiubL7w.Mvlfn92pihTWjiPqyVkCh0Iesm', NULL, '2020-04-28 12:40:02', '2020-05-11 14:24:05', 28, 0, '88888856O', 'Bonastre Sivill', NULL, '2063-12-23', '1589214245.png'),
(2, 'Pere', 'pere@gmail.com', NULL, '$2y$10$NAq64.8qgXl3m5aaQDl5AOFY8zz2f9FSsL6zvE2f/hNvo2Bufajtu', NULL, '2020-04-29 13:23:04', '2020-04-29 13:23:04', 3, 1, '21312', NULL, NULL, NULL, 'default.jpg'),
(3, 'Basic', 'basic@gmail.com', NULL, '$2y$10$7EC1zAEKapvTbZSz/5RvHebTbQ8nwIj/HSh3noZraoFncqwdNnVh6', NULL, '2020-04-29 13:28:37', '2020-04-29 13:28:37', 1, 1, '321231', NULL, NULL, NULL, 'default.jpg'),
(5, 'UsuarioBasicoNIF', 'usbasnif@gmail.com', NULL, '$2y$10$nRwuiUzciAbwAIfh8cdeDOHOcD8EnS7SQUdvAH/ehyQCn0/VgITja', NULL, '2020-04-29 14:18:12', '2020-04-29 14:18:12', 1, 1, NULL, NULL, NULL, NULL, 'default.jpg'),
(6, 'usernif2', 'usernif2@gmail.com', NULL, '$2y$10$IuDN9EGf85A97bQV4Y8YVOu5FAtF08CKpuLaQfd49/f4hO8eWhs1C', NULL, '2020-04-29 14:20:14', '2020-04-29 14:20:14', 1, 2, '0000000G', NULL, NULL, NULL, 'default.jpg'),
(8, 'usernif3', 'usernif3@gmail.com', NULL, '$2y$10$mbQ574UhL7VghPberYdvqeRkXa1ti0qyke87CRAsHgs.qcgxH.W2.', NULL, '2020-04-29 14:22:32', '2020-04-29 14:22:32', 1, 2, '0000000L', NULL, NULL, NULL, 'default.jpg'),
(9, 'Maria', 'mariafernanda@gmail.com', NULL, '$2y$10$URcR9dmQrebiOtx8IE5U5.RzdUHcLqWZ8cRLVP86RtqZcA2aGoqvq', NULL, '2020-04-29 14:49:07', '2020-04-29 14:49:07', 1, 1, '56659663A', NULL, NULL, NULL, 'default.jpg'),
(10, 'marga', 'marga@gmail.com', NULL, '$2y$10$Aar3iQGeinmnCOmjGRVfR.fx8N9xoPLkWdjvNvmFx41jjA227Op6G', NULL, '2020-05-12 12:16:04', '2020-05-12 12:16:04', 1, 1, '47744558L', 'marrrra', 'dona', '2020-05-13', 'default.jpg'),
(11, 'Pere', 'peredirtbike@gmail.com', NULL, '$2y$10$l8uP/dJBUQtRChjz5s/34etJWudWfFcQYTBsYIa5jknpvYlsr.LMO', NULL, '2020-05-12 18:27:25', '2020-05-12 18:27:25', 1, 2, '47747322N', 'Garcia', 'home', '1998-11-03', 'default.jpg'),
(12, 'xavi', 'xavi@gmail.com', NULL, '$2y$10$rckpOGfLB5sj019OizXbDeOfGHb6w4RQt9U5r.7S179e5/6qNXEvi', NULL, '2020-05-16 15:21:47', '2020-05-16 15:24:25', 33, 1, '65654995G', 'ciscu', 'home', '2016-05-06', 'default.jpg'),
(13, 'Pepe', 'pepe@gmail.com', NULL, '$2y$10$Dxbof9vfOJyxMOZpQJIUb.LyL6dz3NX7vF.frP3hswzJPitumbkru', NULL, '2020-05-16 15:32:09', '2020-05-16 15:32:09', 1, 1, '46652112F', 'benid', 'home', '2020-05-08', 'default.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciutats`
--
ALTER TABLE `ciutats`
  ADD PRIMARY KEY (`id`,`paisos_id`),
  ADD KEY `fk_ciudades_paises1_idx` (`paisos_id`);

--
-- Indices de la tabla `direccions`
--
ALTER TABLE `direccions`
  ADD PRIMARY KEY (`id`,`ciutats_id`),
  ADD KEY `fk_direcciones_ciudades1_idx` (`ciutats_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paisos`
--
ALTER TABLE `paisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`usuaris_id`,`restaurants_id`),
  ADD KEY `fk_usuaris_has_restaurants_restaurants2_idx` (`restaurants_id`),
  ADD KEY `fk_usuaris_has_restaurants_usuaris2_idx` (`usuaris_id`);

--
-- Indices de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `nif` (`nif`),
  ADD KEY `fk_usuaris_rol1_idx` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciutats`
--
ALTER TABLE `ciutats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `direccions`
--
ALTER TABLE `direccions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `paisos`
--
ALTER TABLE `paisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciutats`
--
ALTER TABLE `ciutats`
  ADD CONSTRAINT `fk_ciutats_paisos1` FOREIGN KEY (`paisos_id`) REFERENCES `paisos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `direccions`
--
ALTER TABLE `direccions`
  ADD CONSTRAINT `fk_direcciones_ciudades1` FOREIGN KEY (`ciutats_id`) REFERENCES `ciutats` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
