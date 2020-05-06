-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-05-2020 a las 16:56:23
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
(7, 'Trujillo', 2);

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
(17, 'Matanuces', '9', '3', 1);

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
(2, 'Peru');

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
  `imatges` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `restaurants`
--

INSERT INTO `restaurants` (`id`, `nom`, `descripcio`, `imatges`) VALUES
(1, 'Picola', 'grande pero mala', NULL),
(2, 'Picolahhh', 'jgbhklvhlvbhjvb', NULL),
(3, 'kkkkkk', 'lklkijugiu', NULL),
(4, 'gutfyugtvfcgv', 'huibgkhbg', NULL);

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
(2, 'restaurant');

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
(1, 'Gerard', 'gerard@gmail.com', NULL, '$2y$10$OkHzOLAHV0ElWUaSEOuiiubL7w.Mvlfn92pihTWjiPqyVkCh0Iesm', NULL, '2020-04-28 12:40:02', '2020-05-05 14:55:23', 17, 0, '88888856O', 'Bonastre Sivill', NULL, '2063-12-23', '1588694922.png'),
(2, 'Pere', 'pere@gmail.com', NULL, '$2y$10$NAq64.8qgXl3m5aaQDl5AOFY8zz2f9FSsL6zvE2f/hNvo2Bufajtu', NULL, '2020-04-29 13:23:04', '2020-04-29 13:23:04', 3, 1, '21312', NULL, NULL, NULL, 'default.jpg'),
(3, 'Basic', 'basic@gmail.com', NULL, '$2y$10$7EC1zAEKapvTbZSz/5RvHebTbQ8nwIj/HSh3noZraoFncqwdNnVh6', NULL, '2020-04-29 13:28:37', '2020-04-29 13:28:37', 1, 1, '321231', NULL, NULL, NULL, 'default.jpg'),
(4, 'UsuariNIF', 'usuarinif@gmail.com', NULL, '$2y$10$RqP0d4bt8L5n3ihUNRNu8usyOA.236zcdBPD5mMhFSlC4v4vmpRPO', NULL, '2020-04-29 14:11:54', '2020-04-29 14:11:54', 1, 1, '4141', NULL, NULL, NULL, 'default.jpg'),
(5, 'UsuarioBasicoNIF', 'usbasnif@gmail.com', NULL, '$2y$10$nRwuiUzciAbwAIfh8cdeDOHOcD8EnS7SQUdvAH/ehyQCn0/VgITja', NULL, '2020-04-29 14:18:12', '2020-04-29 14:18:12', 1, 1, NULL, NULL, NULL, NULL, 'default.jpg'),
(6, 'usernif2', 'usernif2@gmail.com', NULL, '$2y$10$IuDN9EGf85A97bQV4Y8YVOu5FAtF08CKpuLaQfd49/f4hO8eWhs1C', NULL, '2020-04-29 14:20:14', '2020-04-29 14:20:14', 1, 1, '0000000G', NULL, NULL, NULL, 'default.jpg'),
(8, 'usernif3', 'usernif3@gmail.com', NULL, '$2y$10$mbQ574UhL7VghPberYdvqeRkXa1ti0qyke87CRAsHgs.qcgxH.W2.', NULL, '2020-04-29 14:22:32', '2020-04-29 14:22:32', 1, 1, '0000000L', NULL, NULL, NULL, 'default.jpg'),
(9, 'Maria', 'mariafernanda@gmail.com', NULL, '$2y$10$URcR9dmQrebiOtx8IE5U5.RzdUHcLqWZ8cRLVP86RtqZcA2aGoqvq', NULL, '2020-04-29 14:49:07', '2020-04-29 14:49:07', 1, 1, '56659663A', NULL, NULL, NULL, 'default.jpg'),
(10, 'Fernandina', 'fernamarga@gmail.com', NULL, '$2y$10$Nuqsxqn6SaSIHPKMDy5/4eQhO5ZjKEuseWmYgG1edSAbrhSwR8NsW', NULL, '2020-04-29 14:51:45', '2020-04-29 14:51:45', 1, 1, '46656995A', NULL, NULL, NULL, 'default.jpg'),
(11, 'testl', 'testult@gmail.com', NULL, '$2y$10$A8i1ktpJXtA3Q7MAA7r2aulm254o2cBBpMG4o.Q4H4bmH/5nbWlS.', NULL, '2020-04-29 14:54:19', '2020-04-29 14:54:19', 1, 1, '00000000p', 'ultim', 'home', '1554-09-26', 'default.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracions`
--

CREATE TABLE `valoracions` (
  `usuaris_id` int(11) NOT NULL,
  `restaurants_id` int(11) NOT NULL,
  `data` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `comentaris` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `estrelles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- Indices de la tabla `valoracions`
--
ALTER TABLE `valoracions`
  ADD PRIMARY KEY (`usuaris_id`,`restaurants_id`),
  ADD KEY `fk_usuaris_has_restaurants_restaurants1_idx` (`restaurants_id`),
  ADD KEY `fk_usuaris_has_restaurants_usuaris1_idx` (`usuaris_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciutats`
--
ALTER TABLE `ciutats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `direccions`
--
ALTER TABLE `direccions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- AUTO_INCREMENT de la tabla `paisos`
--
ALTER TABLE `paisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- Filtros para la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_usuaris_has_restaurants_usuaris2` FOREIGN KEY (`usuaris_id`) REFERENCES `usuaris` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);

--
-- Filtros para la tabla `valoracions`
--
ALTER TABLE `valoracions`
  ADD CONSTRAINT `fk_usuaris_has_restaurants_restaurants1` FOREIGN KEY (`restaurants_id`) REFERENCES `restaurants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuaris_has_restaurants_usuaris1` FOREIGN KEY (`usuaris_id`) REFERENCES `usuaris` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;