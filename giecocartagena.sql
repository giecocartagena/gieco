-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2015 a las 12:24:15
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

DROP TABLE IF EXISTS `categorias`;
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
(1, 'Tratamientos', '0000-00-00 00:00:00', '2015-07-05 12:27:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cms_noticias`
--

DROP TABLE IF EXISTS `cms_noticias`;
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

DROP TABLE IF EXISTS `cms_secciones`;
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

DROP TABLE IF EXISTS `datostratamiento`;
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

DROP TABLE IF EXISTS `eps`;
CREATE TABLE IF NOT EXISTS `eps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'COOMEVA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'CAFESALUD', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadiostumor`
--

DROP TABLE IF EXISTS `estadiostumor`;
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

DROP TABLE IF EXISTS `fotos`;
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
-- Estructura de tabla para la tabla `genero`
--

DROP TABLE IF EXISTS `genero`;
CREATE TABLE IF NOT EXISTS `genero` (
  `codigo` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`codigo`, `nombre`) VALUES
('F', 'FEMENINO'),
('M', 'MACULINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugaresdiagnostico`
--

DROP TABLE IF EXISTS `lugaresdiagnostico`;
CREATE TABLE IF NOT EXISTS `lugaresdiagnostico` (
  `codigo` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lugaresdiagnostico`
--

INSERT INTO `lugaresdiagnostico` (`codigo`, `nombre`) VALUES
('1', 'CENDIPAT'),
('2', 'UNIDAD DE PATOLOGIA CLINICA'),
('3', 'MEDIPAT'),
('4', 'HOSPITAL NAVAL'),
('5', 'FIRE-MARTHA TUÑÓN'),
('6', 'HOSPITAL UNIVERSITARIO DEL CARIBE'),
('7', 'CLÍNICA EL BOSQUE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meses`
--

DROP TABLE IF EXISTS `meses`;
CREATE TABLE IF NOT EXISTS `meses` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `meses`
--

INSERT INTO `meses` (`id`, `nombre`) VALUES
(1, 'ENERO'),
(2, 'FEBRERO'),
(3, 'MARZO'),
(4, 'ABRIL'),
(5, 'MAYO'),
(6, 'JUNIO'),
(7, 'JULIO'),
(8, 'AGOSTO'),
(9, 'SEPTIEMBRE'),
(10, 'OCTUBRE'),
(11, 'NOVIEMBRE'),
(12, 'DICIEMBRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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

DROP TABLE IF EXISTS `password_resets`;
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

DROP TABLE IF EXISTS `productos`;
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
-- Estructura de tabla para la tabla `regimenss`
--

DROP TABLE IF EXISTS `regimenss`;
CREATE TABLE IF NOT EXISTS `regimenss` (
  `codigo` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `regimenss`
--

INSERT INTO `regimenss` (`codigo`, `nombre`) VALUES
('1', 'SUBSIDIADO'),
('2', 'CONTRIBUTIVO'),
('3', 'NO ASEGURADO'),
('4', 'ESPECIAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registropoblacional`
--

DROP TABLE IF EXISTS `registropoblacional`;
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
  `iniciosintomasanio` int(4) DEFAULT NULL,
  `iniciosintomasmes` int(2) NOT NULL,
  `fechadiagnostico` date DEFAULT NULL,
  `metododiagnostico` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otrotipomuestra` varchar(130) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
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

INSERT INTO `registropoblacional` (`id`, `cedula`, `iniciales`, `sexo`, `fechanacimiento`, `edad`, `residenciahabitual`, `lugarnacimiento`, `regimenseguridadsocial`, `eps`, `estrato`, `iniciosintomasanio`, `iniciosintomasmes`, `fechadiagnostico`, `metododiagnostico`, `otrotipomuestra`, `localizacionprimaria`, `morfologia`, `estadio`, `lugardiganostico`, `numerobiopsia`, `lugartratamiento`, `datostratamiento`, `certificadodefuncion`, `created_at`, `updated_at`) VALUES
(1, '73587852225', 'gc', 'M', '0000-00-00', 37, 'CARRERA 1, CALLE 2', 'CARTAGENA', 'CONTIBUTIVO', 1, 3, 2004, 4, NULL, '3', '', 'DSSD', 'A', 1, '1', '1', 'C', 1, '', '2015-07-07 10:16:57', '2015-07-14 02:48:23'),
(2, '458552369', 'mo', 'F', '0000-00-00', 36, 'CARTAGENA', 'CICUCO', 'CONTIBUTIVO', 2, 2, 0, 0, NULL, '4', 'MUESTRA ALEATORIA.. OTROS', 'LOCALIZADA', 'TIPO 1', 0, '4', 'ABC123456', 'ONCOLOGOS DEL CARIBE', 5, '', '2015-07-07 12:21:59', '2015-07-13 22:48:35'),
(3, '45956235', 'MM', 'F', '2015-07-09', 26, 'CARRERA 1, CALLE 2', 'SANTA MARTA', NULL, 1, 1, 1956, 4, NULL, '3', '', 'XXX', 'YYYY', 0, '4', '56545', 'XXXXX', 5, '', '2015-07-14 16:47:20', '2015-07-15 03:37:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposmuestras`
--

DROP TABLE IF EXISTS `tiposmuestras`;
CREATE TABLE IF NOT EXISTS `tiposmuestras` (
  `codigo` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiposmuestras`
--

INSERT INTO `tiposmuestras` (`codigo`, `nombre`) VALUES
('1', 'BIOPSIA INCISIONAL'),
('2', 'BIOPSIA DECISIONAL'),
('3', 'ESPÉCIMEN QUIRÚRGICO'),
('4', 'OTROS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

DROP TABLE IF EXISTS `tratamientos`;
CREATE TABLE IF NOT EXISTS `tratamientos` (
  `codigo` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`codigo`, `nombre`) VALUES
('1', 'QUIMIOTERAPIA'),
('2', 'RADIOTERAPIA'),
('3', 'INMUNOTERAPIA'),
('4', 'TERAPIA BLANCO'),
('5', 'PALIATIVO'),
('6', 'HORMONOTERAPIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
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
(1, 'admin', 'Rafael Varela', 'rafa_varela@yahoo.com', '$2y$10$Bs5W1ZNMmgJ9gscP8fK5ae.GdHb2Sv0gKvx4ugQC8c40sRbVbE.r2', '2kwkop3ayalf125jW1PmxNEOAhAyerSiJKqSWWDgA1yv4pABMJjFxlFWOG2o', '0000-00-00 00:00:00', '2015-07-08 11:15:29'),
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
