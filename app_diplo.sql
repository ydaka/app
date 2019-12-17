-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2019 a las 23:57:28
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_diplo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `cod_asesor` int(5) NOT NULL,
  `cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombres` text COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`cod_asesor`, `cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(1, '1151966494', 'Yefer Camilo', 'gracia Coronel', 'calle 88 # 34 -H 9', '318660370', 'yefercoronel@gmail.com', '2019-12-17 14:42:52', '2019-12-17 14:42:52'),
(2, '1234533', 'Aurora', 'Ulloa', 'calle 999 - 33 ooo', '3242465564', 'yy@gmail.com', '2019-12-17 14:42:52', '2019-12-17 15:17:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE `locales` (
  `cod_local` int(5) NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`cod_local`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'Cr 6 # 33 A-99 c', '986231025', '2019-12-17 15:25:06', '2019-12-17 15:28:57');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `cod_movimiento` int(5) NOT NULL,
  `cod_usuario` int(5) NOT NULL,
  `cod_proveedor` int(5) NOT NULL,
  `cod_producto` int(5) NOT NULL,
  `cod_asesor_e` int(5) NOT NULL,
  `cod_local_e` int(5) NOT NULL,
  `fecha_entrada` date NOT NULL,
  `imei` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cod_asesor_s` int(5) DEFAULT NULL,
  `cod_local_s` int(5) DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `observaciones` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`cod_movimiento`, `cod_usuario`, `cod_proveedor`, `cod_producto`, `cod_asesor_e`, `cod_local_e`, `fecha_entrada`, `imei`, `cod_asesor_s`, `cod_local_s`, `fecha_salida`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 4, 2, 1, 2, 1, '2019-12-17', '1230123', 1, 1, '2019-12-31', 'Nada que destacar', '2019-12-18 01:35:18', '2019-12-18 02:45:22');

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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` int(5) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Samsung Galaxy S5', '2019-12-18 00:19:07', '2019-12-18 00:19:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `cod_proveedor` int(5) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `nombres` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`cod_proveedor`, `cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(2, '98798', 'Caren Patata', 'Lunns', 'Av 101 # 55-99', '8975630', 'cpl99@gmail.com', '2019-12-18 01:29:06', '2019-12-18 01:29:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `cod_rol` int(5) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`cod_rol`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', NULL, NULL),
(2, 'Usuario', NULL, NULL),
(3, 'Visitante', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_x_usuarios`
--

CREATE TABLE `roles_x_usuarios` (
  `rol_por_usuario` int(5) NOT NULL,
  `cod_usuario` int(5) NOT NULL,
  `cod_rol` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `cod_usuario` int(5) NOT NULL,
  `cedula` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_por_usuario` int(5) DEFAULT 2,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`cod_usuario`, `cedula`, `nombres`, `apellidos`, `direccion`, `telefono`, `email`, `password`, `rol_por_usuario`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '12345', 'admin', '...', 'calle 99', '887956321', 'admin@gmail.com', '$2y$10$kjlZwIosqMmaSaer9iaBz.tlt0SatYHkYnGksIaXcaDY/SHy66S2y', 1, NULL, NULL, '2019-12-17 12:17:24', '2019-12-17 12:17:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`cod_asesor`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`cod_local`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`cod_movimiento`),
  ADD UNIQUE KEY `cod_proovedor` (`cod_proveedor`,`cod_producto`,`cod_asesor_e`,`cod_local_e`,`cod_asesor_s`,`cod_local_s`),
  ADD KEY `cod_usuario` (`cod_usuario`),
  ADD KEY `cod_usuario_2` (`cod_usuario`,`cod_proveedor`,`cod_producto`,`cod_asesor_e`,`cod_local_e`,`cod_asesor_s`,`cod_local_s`),
  ADD KEY `cod_local_e` (`cod_local_e`),
  ADD KEY `cod_usuario_3` (`cod_usuario`),
  ADD KEY `cod_asesor_e` (`cod_asesor_e`),
  ADD KEY `cod_local_s` (`cod_local_s`),
  ADD KEY `cod_asesor_s` (`cod_asesor_s`),
  ADD KEY `cod_producto` (`cod_producto`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`cod_proveedor`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indices de la tabla `roles_x_usuarios`
--
ALTER TABLE `roles_x_usuarios`
  ADD PRIMARY KEY (`rol_por_usuario`),
  ADD KEY `cod_usuario` (`cod_usuario`,`cod_rol`),
  ADD KEY `cod_rol` (`cod_rol`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `cedula` (`cedula`) USING BTREE,
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`),
  ADD KEY `rol_por_usuario` (`rol_por_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `cod_asesor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `locales`
--
ALTER TABLE `locales`
  MODIFY `cod_local` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `cod_movimiento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `cod_producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `cod_proveedor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `cod_rol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles_x_usuarios`
--
ALTER TABLE `roles_x_usuarios`
  MODIFY `rol_por_usuario` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `cod_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`cod_proveedor`) REFERENCES `proveedores` (`cod_proveedor`),
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`cod_local_e`) REFERENCES `locales` (`cod_local`),
  ADD CONSTRAINT `movimientos_ibfk_3` FOREIGN KEY (`cod_asesor_e`) REFERENCES `asesores` (`cod_asesor`),
  ADD CONSTRAINT `movimientos_ibfk_4` FOREIGN KEY (`cod_local_s`) REFERENCES `locales` (`cod_local`),
  ADD CONSTRAINT `movimientos_ibfk_5` FOREIGN KEY (`cod_asesor_s`) REFERENCES `asesores` (`cod_asesor`),
  ADD CONSTRAINT `movimientos_ibfk_6` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`),
  ADD CONSTRAINT `movimientos_ibfk_7` FOREIGN KEY (`cod_usuario`) REFERENCES `users` (`cod_usuario`);

--
-- Filtros para la tabla `roles_x_usuarios`
--
ALTER TABLE `roles_x_usuarios`
  ADD CONSTRAINT `roles_x_usuarios_ibfk_1` FOREIGN KEY (`cod_rol`) REFERENCES `roles` (`cod_rol`),
  ADD CONSTRAINT `roles_x_usuarios_ibfk_2` FOREIGN KEY (`cod_usuario`) REFERENCES `users` (`cod_usuario`),
  ADD CONSTRAINT `roles_x_usuarios_ibfk_3` FOREIGN KEY (`rol_por_usuario`) REFERENCES `users` (`rol_por_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
