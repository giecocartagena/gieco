-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2015 a las 21:27:29
-- Versión del servidor: 5.6.19-0ubuntu0.14.04.1
-- Versión de PHP: 5.6.10-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `giecocartagena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Tratamientos', '0000-00-00 00:00:00', '2015-07-05 12:27:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_noticias`
--

CREATE TABLE IF NOT EXISTS `cms_noticias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `encabezado` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `detalle` longtext COLLATE utf8_unicode_ci,
  `seccion_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `cms_noticias_seccion_id_foreign` (`seccion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_noticias`
--

INSERT INTO `cms_noticias` (`id`, `titulo`, `encabezado`, `detalle`, `seccion_id`, `created_at`, `updated_at`) VALUES
(1, 'Presentación', '', '<p><strong>Grupo de Investigaci&oacute;n Epidemiol&oacute;gica y Cl&iacute;nica en Oncolog&iacute;a</strong> (GIECO) - Universidad de Cartagena</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>OBJETIVOS&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Objetivo general&nbsp;</strong><br />\r\nDescribir las caracter&iacute;sticas, cl&iacute;nicas, histol&oacute;gicas y &nbsp;sociodemogr&aacute;ficas de los casos nuevos de c&aacute;ncer diagnosticados en &nbsp;Cartagena Colombia, as&iacute; como tambi&eacute;n &nbsp;conformar una base de datos que permita realizar an&aacute;lisis comparativos en cuanto al comportamiento del c&aacute;ncer en el &aacute;mbito nacional y a la vez medir el impacto de las pol&iacute;ticas sociales en cuanto a Programas de Promoci&oacute;n y Prevenci&oacute;n en c&aacute;ncer en nuestra Ciudad.</p>\r\n\r\n<p><strong>Objetivos Espec&iacute;ficos</strong><br />\r\n&bull;&nbsp;&nbsp; &nbsp;Determinar los tipos histol&oacute;gicos m&aacute;s frecuentes, localizaciones, estadios cl&iacute;nicos, &nbsp;y tratamiento de los pacientes con diagn&oacute;stico de c&aacute;ncer.<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Determinar las causas m&aacute;s frecuentes de mortalidad por c&aacute;ncer en nuestro medio<br />\r\n&bull;&nbsp;&nbsp; &nbsp;Analizar la calidad de la informaci&oacute;n en los registros cl&iacute;nicos de las instituciones que manejan pacientes con c&aacute;ncer, con el fin de realizar aportaciones que faciliten el seguimiento de estos pacientes</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 2, '2015-06-07 20:05:30', '2015-07-07 12:33:03'),
(2, 'Indice', '', '<p>Grupo de Investigaci&oacute;n Epidemiol&oacute;gica y Cl&iacute;nica en Oncolog&iacute;a (<strong>GIECO</strong>) - Universidad de Cartagena</p>\r\n', 1, '2015-06-07 20:32:21', '2015-07-07 12:33:50'),
(3, 'Info de contacto', '', '<script src="http://maps.google.com/maps/api/js?sensor=false&callback=iniciar">\r\n</script>\r\n\r\n<script>\r\nfunction iniciar() {\r\nvar mapOptions = {\r\ncenter: new google.maps.LatLng(25.80, -80.30),\r\nzoom: 10,\r\nmapTypeId: google.maps.MapTypeId.ROADMAP};\r\nvar map = new google.maps.Map(document.getElementById("map"),mapOptions);}              \r\n</script>\r\n\r\n<div id="map"></div>', 3, '2015-06-08 20:28:21', '2015-06-08 20:28:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_secciones`
--

CREATE TABLE IF NOT EXISTS `cms_secciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cms_secciones`
--

INSERT INTO `cms_secciones` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'INICIO', '2015-06-07 12:17:51', '2015-06-07 18:59:27'),
(2, 'NOSOTROS', '2015-06-07 12:23:02', '2015-06-07 18:59:34'),
(3, 'CONTACTENOS', '2015-06-08 20:27:33', '2015-06-08 20:27:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datostratamiento`
--

CREATE TABLE IF NOT EXISTS `datostratamiento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE IF NOT EXISTS `eps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadiostumor`
--

CREATE TABLE IF NOT EXISTS `estadiostumor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagen` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `producto_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fotos_producto_id_foreign` (`producto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_05_21_020909_crear_tabla_categorias', 1),
('2015_05_21_021845_crear_tabla_productos', 1),
('2015_05_21_024444_crear_tabla_fotos', 1),
('2015_06_04_205354_crear_tabla_cms_secciones', 2),
('2015_06_04_210310_crear_tabla_cms_noticias', 2),
('2015_07_05_120258_crear_tabla_eps', 3),
('2015_07_05_120447_crear_tabla_estadiostumor', 3),
('2015_07_05_120646_crear_tabla_datostratamiento', 3),
('2015_07_07_023627_crear_tabla_registro_poblacional', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `encabezado` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `detalle` longtext COLLATE utf8_unicode_ci,
  `fotoportada` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `productos_categoria_id_foreign` (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `encabezado`, `detalle`, `fotoportada`, `categoria_id`, `created_at`, `updated_at`) VALUES
(36, 'Quimioterapia', '<p>.</p>\r\n', '<p>.</p>\r\n', NULL, 1, '2015-07-05 12:27:51', '2015-07-05 12:27:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registropoblacional`
--

CREATE TABLE IF NOT EXISTS `registropoblacional` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cedula` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `iniciales` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `fechanacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `residenciahabitual` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lugarnacimiento` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regimenseguridadsocial` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eps` int(10) unsigned NOT NULL,
  `estrato` int(10) unsigned NOT NULL,
  `iniciosintomas` date DEFAULT NULL,
  `fechadiagnostico` date DEFAULT NULL,
  `metododiagnostico` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localizacionprimaria` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `morfologia` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estadio` int(10) unsigned NOT NULL,
  `lugardiganostico` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numerobiopsia` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lugartratamiento` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datostratamiento` int(10) unsigned NOT NULL,
  `certificadodefuncion` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `registropoblacional_cedula_unique` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `registropoblacional`
--

INSERT INTO `registropoblacional` (`id`, `cedula`, `iniciales`, `sexo`, `fechanacimiento`, `edad`, `residenciahabitual`, `lugarnacimiento`, `regimenseguridadsocial`, `eps`, `estrato`, `iniciosintomas`, `fechadiagnostico`, `metododiagnostico`, `localizacionprimaria`, `morfologia`, `estadio`, `lugardiganostico`, `numerobiopsia`, `lugartratamiento`, `datostratamiento`, `certificadodefuncion`, `created_at`, `updated_at`) VALUES
(1, '73587852225', 'gc', 'M', '0000-00-00', 37, 'CARRERA 1, CALLE 2', 'CARTAGENA', 'CONTIBUTIVO', 0, 3, '0000-00-00', NULL, 'MATODO 1', 'DSSD', 'A', 1, 'A', '1', 'C', 0, '', '2015-07-07 10:16:57', '2015-07-07 12:19:53'),
(2, '458552369', 'mo', 'F', '0000-00-00', 36, 'CARTAGENA', 'CICUCO', 'CONTIBUTIVO', 0, 2, '0000-00-00', NULL, 'METODO 2', 'LOCALIZADA', 'TIPO 1', 0, 'CLINICA 1', '525', 'ONCOLOGOS DEL CARIBE', 0, '', '2015-07-07 12:21:59', '2015-07-07 12:22:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `codigo`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Rafael Varela', 'rafa_varela@yahoo.com', '$2y$10$Bs5W1ZNMmgJ9gscP8fK5ae.GdHb2Sv0gKvx4ugQC8c40sRbVbE.r2', 'mXUUE2XxyXQAErB8phvjOZXK5LvZKLEghmhlOA8JnhbisdMPeTPEI6mg9zDF', '0000-00-00 00:00:00', '2015-07-07 13:57:48'),
(10, 'RP100', 'Hospital Universitario', 'rp100@test.com', '$2y$10$LLo/oCBAzr9QL.aoD8/a..4YA5xDxVriU6VUV.4hKZ4XXleoCjESO', NULL, '2015-07-05 16:30:46', '2015-07-05 16:30:46'),
(11, 'RP200', 'RP200', 'rp200@test.com', '$2y$10$v.sv4n/jxANpoo6aH1gaVuNVtjqo4.mWzqWq.Nqvz/ym89FVKQ5rW', NULL, '2015-07-05 16:32:01', '2015-07-05 16:32:01');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cms_noticias`
--
ALTER TABLE `cms_noticias`
  ADD CONSTRAINT `cms_noticias_seccion_id_foreign` FOREIGN KEY (`seccion_id`) REFERENCES `cms_secciones` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
