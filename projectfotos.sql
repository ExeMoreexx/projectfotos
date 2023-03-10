-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2023 a las 23:32:11
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projectfotos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo_electronico`, `created_at`, `updated_at`) VALUES
(1, 'Ex ea aut omnis ab n', 'Cum proident consec', 'Aliquip eius nesciun', '+1 (826) 693-1786', 'qykibuba@mailinator.com', '2022-12-30 21:14:48', '2022-12-30 21:14:48'),
(2, 'Ad aliquip et sed la', 'Temporibus illo dele', 'Optio ullamco animi', '+1 (861) 323-7045', 'lawoqusap@mailinator.com', '2022-12-30 21:23:04', '2022-12-30 21:23:04'),
(3, 'Incididunt quia ea c', 'Odio est commodi ip', 'Voluptatem Enim sin', '+1 (379) 868-4263', 'vilyki@mailinator.com', '2022-12-30 21:24:25', '2022-12-30 21:24:25'),
(4, 'miguel', 'angel', 'Totam vel hic porro', '+1 (578) 565-4416', 'lataxeca@mailinator.com', '2023-01-05 01:59:17', '2023-01-05 01:59:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `precio` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `client_id`, `image`, `precio`, `created_at`, `updated_at`) VALUES
(1, 3, 'folder_fotos/FFihZfvTmZJlOpuJz6AeUGT6LpaBX2YcOvOb7gTv.jpg', '', NULL, NULL),
(2, 3, 'folder_fotos/SUVJHpuXZaoKLUebFIeeyLAE4Jg51KqvPM49gM5p.jpg', '', NULL, NULL),
(3, 3, 'folder_fotos/kallEQ3YkbggtkO05znX34CpJUNlQNYXwIsKceyr.jpg', '', NULL, NULL),
(4, 3, 'public/Eta34BOxS3mcG2FG5D4VHH6hlJ8VoLLUETEGNYj3.jpg', '', NULL, NULL),
(5, 3, 'public/wVktU3E8Tilf5DlS1J98yo0W4LwHtsGdfyX41SMO.jpg', '', NULL, NULL),
(6, 3, 'public/gXAESNIRxUXbBe2Kta6zdMYN48TXzAG12jvXbxg7.jpg', '', NULL, NULL),
(7, 2, 'public/w0HJ6CgPyNOinYae5uQwCWX3mhE2eqTzRakjJiy2.jpg', '', NULL, NULL),
(8, 2, 'public/udpWHiKmfxpklDA5wFsaysrVMILzlpYXjtLSoBxy.jpg', '', NULL, NULL),
(9, 2, 'public/9XmMpOKZ6g0jZIUEWkMrizjasKIQyNHrLD8NknVJ.jpg', '75', NULL, NULL),
(10, 4, 'public/uoUAsmfgT8FEflAOIMDMdPt4weOlh23ds6nhvk0q.jpg', '$ 75', NULL, NULL),
(11, 4, 'public/wzlt3MP3ubMHz2NuyWuNNLjzEQolI5oy4gQcAy5r.jpg', '$ 75', NULL, NULL),
(12, 3, 'public/BeBG3AvFUoBI4HcBtsdb40rtf3o3P2c1y7cpj0l3.jpg', '$ 75', NULL, NULL),
(13, 3, 'public/hmSmSwGQPDFtKJZkHGeL3fJP9Q1D7UDdGBCJwzBB.jpg', '$ 75', NULL, NULL),
(14, 3, 'public/vowziMKQWQKbMWDODtRKqKhR8dNYs5UIXKK3Hdqo.jpg', '$ 75', NULL, NULL),
(15, 3, 'public/N6jWNvwmlRDIJi9NgV3QTrJhQJvnetBf3wCy99ZK.jpg', '$ 75', NULL, NULL),
(16, 3, 'public/O4kSgYqcfUwuROf5KgENkrMJemo2ZTVvb17sf6nD.jpg', '$ 75', NULL, NULL),
(17, 3, 'public/OZJtl2rB44dLltZAnjQlItfqLu8dDWptwGTRmvw1.jpg', '$ 75', NULL, NULL),
(18, 3, 'public/fVI8tZ14wtKsfH1lkm85wKCfvHmLduwAWqkmBmJx.jpg', '$ 75', NULL, NULL),
(19, 3, 'public/96XKx5ewlmsMK0tJXkIi8zcpCplX6axzAfHceTFd.jpg', '$ 75', NULL, NULL),
(20, 3, 'public/fz5dkA3okOjcszQJE0PNq0KFFbTLHkxmWTmvzPCW.jpg', '$ 75', NULL, NULL),
(21, 3, 'public/V0sW5MtsOtTTjvnWFoWe18wJr8h9qseaQWKRudta.jpg', '$ 75', NULL, NULL),
(22, 3, 'public/4fePbAzDs78mAmiZ8XH5NcMhquQDHMo98sZEkE4n.jpg', '$ 75', NULL, NULL),
(23, 3, 'public/FsTg97XG3uLoBYNxw9qp0pDOhlmnAhEE9WRK82VD.jpg', '$ 75', NULL, NULL),
(24, 3, 'public/nMwOkN7SMtQnCbotwhWR5D0mogvxsIP4x3CAGgpT.jpg', '$ 75', NULL, NULL),
(25, 3, 'public/347ywhrl3scz5AenoHD0ZHzbGImGazFSXxVfSXup.jpg', '$ 75', NULL, NULL),
(26, 2, 'public/xdFYdvfbxQiIbvsU3VrTiO1VP6h13zCD5SBRTDun.jpg', '$ 75', NULL, NULL),
(27, 2, 'public/HsqzYzxtgyn2w6c9PLPF45wqHHq3S6pTxX9sAlSF.jpg', '$ 75', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_17_104529_create_clients_table', 2),
(6, '2022_12_30_163058_create_table_fotos', 3),
(7, '2023_01_04_193846_add_precio_to_fotos', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$ii5GTvpfSfoGb7bncx4CUeETFVshmD8A0P/9w9LgB10qExZeFvSa.', 'admin', NULL, '2022-12-17 13:28:37', '2022-12-17 13:28:37'),
(2, 'Miguel', 'miguel@gmail.com', NULL, '$2y$10$GR01bq6SAopX7Wzn0J2tg.8Fu/AL.ck3XZGFjgKMeKVpth46xsRwe', 'admin', NULL, '2022-12-30 11:23:44', '2022-12-30 11:23:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_fotos_client_id_foreign` (`client_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `table_fotos_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
