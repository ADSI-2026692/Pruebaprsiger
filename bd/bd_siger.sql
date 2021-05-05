-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-01-2015 a las 05:14:59
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_siger`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetos_pruebas`
--

CREATE TABLE IF NOT EXISTS `objetos_pruebas` (
  `cons_verifica` int(11) NOT NULL AUTO_INCREMENT,
  `objeto` varchar(32) NOT NULL,
  PRIMARY KEY (`cons_verifica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `objetos_pruebas`
--

INSERT INTO `objetos_pruebas` (`cons_verifica`, `objeto`) VALUES
(1, 'En este campo se detalla el obje'),
(2, 'En este campo se detalla el obje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto_proyecto`
--

CREATE TABLE IF NOT EXISTS `objeto_proyecto` (
  `cons_pdf` int(11) NOT NULL AUTO_INCREMENT,
  `cons_proyecto` int(11) NOT NULL,
  `objeto` varchar(64) NOT NULL,
  PRIMARY KEY (`cons_pdf`),
  KEY `cons_proyecto` (`cons_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `objeto_proyecto`
--

INSERT INTO `objeto_proyecto` (`cons_pdf`, `cons_proyecto`, `objeto`) VALUES
(1, 1, 'En este campo se detalla el objeto del proyecto.'),
(2, 2, 'En este campo se detalla el objeto del proyecto.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_x_proyecto`
--

CREATE TABLE IF NOT EXISTS `personas_x_proyecto` (
  `doc_id` char(20) NOT NULL,
  `cons_proyecto` int(11) NOT NULL,
  `rol` char(40) NOT NULL,
  PRIMARY KEY (`doc_id`),
  KEY `cons_proyecto` (`cons_proyecto`),
  KEY `cons_proyecto_2` (`cons_proyecto`),
  KEY `cons_proyecto_3` (`cons_proyecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas_x_proyecto`
--

INSERT INTO `personas_x_proyecto` (`doc_id`, `cons_proyecto`, `rol`) VALUES
('1053321008', 1, 'Ingeniero'),
('1053797940', 1, 'Jefe de Area'),
('1054567098', 1, 'Tecnico'),
('23319766', 1, 'Supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_complejidad`
--

CREATE TABLE IF NOT EXISTS `rq_complejidad` (
  `cod_complejidad` int(11) NOT NULL AUTO_INCREMENT,
  `complejidad` char(50) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cod_complejidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rq_complejidad`
--

INSERT INTO `rq_complejidad` (`cod_complejidad`, `complejidad`, `descripcion`) VALUES
(1, 'complejidad 1', 'En este campo va la descripción de la complejidad 1.'),
(2, 'complejidad 2', 'En este campo va la descripción de la complejidad 2.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_estados`
--

CREATE TABLE IF NOT EXISTS `rq_estados` (
  `cod_estado` bigint(20) NOT NULL AUTO_INCREMENT,
  `estado` char(25) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cod_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `rq_estados`
--

INSERT INTO `rq_estados` (`cod_estado`, `estado`, `descripcion`) VALUES
(1, 'Finalizado', 'En este estado nos referimos a la instancia del proyecto en la cual el proyecto ha sido finalizado.'),
(2, 'Cancelado', 'En este estado nos referimos a la instancia del proyecto en la cual el proyecto ha sido cancelado.'),
(3, 'Pendiente', 'En este estado nos referimos a la instancia del proyecto en la cual el proyecto esta pendiente por aprobar.'),
(4, 'Aplazado', 'En este estado nos referimos a la instancia del proyecto en la cual el proyecto ha sido aplazado.'),
(5, 'Aprobado', 'En este estado nos referimos a la instancia del proyecto en la cual el proyecto ha sido aprovado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_gestion`
--

CREATE TABLE IF NOT EXISTS `rq_gestion` (
  `cons_gestionrq` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` char(20) NOT NULL,
  `cons_requisito` int(11) NOT NULL,
  `cod_tipo_gestion` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cons_gestionrq`),
  KEY `doc_id` (`doc_id`),
  KEY `cons_requisito` (`cons_requisito`),
  KEY `cod_tipo_gestion` (`cod_tipo_gestion`),
  KEY `cod_tipo_gestion_2` (`cod_tipo_gestion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `rq_gestion`
--

INSERT INTO `rq_gestion` (`cons_gestionrq`, `doc_id`, `cons_requisito`, `cod_tipo_gestion`, `fecha`, `descripcion`) VALUES
(4, '1053797940', 1, 1, '2015-01-20 09:00:00', 'En este campo se detalla la descripcion de la gestion.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_glosario`
--

CREATE TABLE IF NOT EXISTS `rq_glosario` (
  `cons_termino` int(11) NOT NULL AUTO_INCREMENT,
  `cons_proyecto` int(11) NOT NULL,
  `termino` char(40) NOT NULL,
  `descripcion` text NOT NULL,
  `referencia` varchar(100) NOT NULL,
  PRIMARY KEY (`cons_termino`),
  KEY `cons_proyecto` (`cons_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rq_glosario`
--

INSERT INTO `rq_glosario` (`cons_termino`, `cons_proyecto`, `termino`, `descripcion`, `referencia`) VALUES
(1, 1, 'glosario 1', 'En este campo se refieren a las palabras desconocidas que se manejen dentro de los proyectos.', 'referencia1'),
(2, 2, 'glosario 2', 'En este campo se refieren a las palabras desconocidas que se manejen dentro de los proyectos.', 'referencia2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_personal`
--

CREATE TABLE IF NOT EXISTS `rq_personal` (
  `doc_id` char(20) NOT NULL,
  `cons_tercero` int(11) NOT NULL,
  `nombre` char(60) NOT NULL,
  `estudios` text NOT NULL,
  `cargo` varchar(40) NOT NULL,
  `celular` char(200) NOT NULL,
  `email` char(100) NOT NULL,
  `telefono` char(100) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`doc_id`),
  KEY `cons_tercero` (`cons_tercero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rq_personal`
--

INSERT INTO `rq_personal` (`doc_id`, `cons_tercero`, `nombre`, `estudios`, `cargo`, `celular`, `email`, `telefono`, `descripcion`) VALUES
('1053009456', 2, 'Camilo Torres', 'En este campo se describen los estudios del personal.', 'Ingeniero', '3176540980', 'cam@hotmail.com', '8845670', 'En este campo se describe la descripcion del personal.'),
('1053321008', 2, 'Tatiana Marin Loaiza', 'En este campo se describen los estudios del personal.', 'Ingeniero', '3138764509', 'tat09@gmail.com', '8774500', 'En este campo se describe la descripcion del personal.'),
('1053797940', 1, 'Jonatan Fernando Beltran', 'En este campo se describen los estudios del personal.', 'Jefe de Area', '3148850737', 'jfbeltran0@misena.edu.co', '8872857', 'En este campo se describe la descripcion del personal.'),
('1054029094', 3, 'Laura Camila Aristizabal', 'En este campo se describen los estudios del personal.', 'Supervisor', '3156783409', 'lauraCam@gmail.com', '8779043', 'En este campo se describe la descripcion del personal.'),
('1054567098', 2, 'Juan David Rivera', 'En este campo se describen los estudios del personal.', 'Tecnico', '3117994587', 'juan@hotmail.com', '8786543', 'En este campo se describe la descripcion del personal.'),
('1054678010', 1, 'Luisa Fernanda Aristizabal', 'En este campo se describen los estudios del personal.', 'Jefe de Area', '3100987005', 'lui@gmail.com', '8735702', 'En este campo se describe la descripcion del personal.'),
('1055875092', 2, 'Juan Camilo Trejos', 'En este campo se describen los estudios del personal.', 'Tecnico', '3187650934', 'juancato@hotmail.com', '8753401', 'En este campo se describe la descripcion del personal.'),
('23319766', 3, 'Luis Alfredo Corrales', 'En este campo se describen los estudios del personal.', 'Supervisor', '3120098834', 'luisalf@hotmail.com', '8884567', 'En este campo se describen la descripcion del personal.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_prioridades`
--

CREATE TABLE IF NOT EXISTS `rq_prioridades` (
  `cod_pr` bigint(20) NOT NULL AUTO_INCREMENT,
  `prioridad` char(20) NOT NULL,
  `valor_pr` bigint(20) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cod_pr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rq_prioridades`
--

INSERT INTO `rq_prioridades` (`cod_pr`, `prioridad`, `valor_pr`, `descripcion`) VALUES
(1, 'prioridad 1', 10, 'En este campo va la descripción de la prioridad 1.'),
(2, 'prioridad 2', 10, 'En este campo va la descripción de la prioridad 2.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_proyecto`
--

CREATE TABLE IF NOT EXISTS `rq_proyecto` (
  `cons_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `cod_proyecto` char(15) NOT NULL,
  `proyecto` char(200) NOT NULL,
  `alcance` text NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `justificacion` text NOT NULL,
  `objetivos` text NOT NULL,
  PRIMARY KEY (`cons_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rq_proyecto`
--

INSERT INTO `rq_proyecto` (`cons_proyecto`, `cod_proyecto`, `proyecto`, `alcance`, `fecha_inicio`, `justificacion`, `objetivos`) VALUES
(1, '0001', 'proyecto 1', 'En este campo se describe el alcance del proyecto 1.', '2015-01-20 03:12:00', 'En este campo se describe la justificación del proyecto 1.', 'En este campo se describen los objetivos del proyecto 1.'),
(2, '0002', 'proyecto 2', 'En este campo se describe el alcance del proyecto 2.', '2015-01-20 03:14:00', 'En este campo se describe la justificación del proyecto 2.', 'En este campo se describen los objetivos del proyecto 2.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_requisitos`
--

CREATE TABLE IF NOT EXISTS `rq_requisitos` (
  `cons_requisito` int(11) NOT NULL AUTO_INCREMENT,
  `cons_sub_proyecto` int(11) NOT NULL,
  `sap` char(30) NOT NULL,
  `nsn` char(30) NOT NULL,
  `cod_pr` bigint(20) NOT NULL,
  `doc_usuario` char(20) NOT NULL,
  `doc_elaboro` char(20) NOT NULL,
  `fec_elabora` datetime NOT NULL,
  `doc_revisa` char(20) NOT NULL,
  `fec_rev` datetime NOT NULL,
  `doc_aprueba` char(20) NOT NULL,
  `cod_riesgo` int(11) NOT NULL,
  `cod_estado` bigint(20) NOT NULL,
  `tercero_solicita` int(11) NOT NULL,
  `tercero_asigna` int(11) NOT NULL,
  `cod_complejidad` int(11) NOT NULL,
  `cod_tipo_requisito` bigint(20) NOT NULL,
  `fec_estima_fin` datetime NOT NULL,
  `fec_aprueba` datetime NOT NULL,
  `id_requisito` char(100) NOT NULL,
  `titulo_requisito` char(200) NOT NULL,
  `descripcion` text NOT NULL,
  `req_datos` text NOT NULL,
  `req_intefaz` text NOT NULL,
  `especificacion` text NOT NULL,
  `h_hardware` text NOT NULL,
  `h_software` text NOT NULL,
  `horas_hom_estimado` int(11) NOT NULL,
  `valor_estimado` int(11) NOT NULL,
  `entradas` text NOT NULL,
  `procesos` text NOT NULL,
  `salidas` text NOT NULL,
  `porce_avance` decimal(4,1) NOT NULL,
  `restricciones` text NOT NULL,
  `medidas_respuestas` text NOT NULL,
  `usuarios_requisito` text NOT NULL,
  PRIMARY KEY (`cons_requisito`),
  KEY `cons_sub_proyecto` (`cons_sub_proyecto`),
  KEY `cod_pr` (`cod_pr`),
  KEY `doc_usuario` (`doc_usuario`),
  KEY `doc_usuario_2` (`doc_usuario`),
  KEY `doc_elaboro` (`doc_elaboro`),
  KEY `doc_revisa` (`doc_revisa`),
  KEY `doc_aprueba` (`doc_aprueba`),
  KEY `cod_riesgo` (`cod_riesgo`),
  KEY `cod_estado` (`cod_estado`),
  KEY `tercero_solicita` (`tercero_solicita`),
  KEY `tercero_asigna` (`tercero_asigna`),
  KEY `cod_complejidad` (`cod_complejidad`),
  KEY `cod_tipo_requisito` (`cod_tipo_requisito`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `rq_requisitos`
--

INSERT INTO `rq_requisitos` (`cons_requisito`, `cons_sub_proyecto`, `sap`, `nsn`, `cod_pr`, `doc_usuario`, `doc_elaboro`, `fec_elabora`, `doc_revisa`, `fec_rev`, `doc_aprueba`, `cod_riesgo`, `cod_estado`, `tercero_solicita`, `tercero_asigna`, `cod_complejidad`, `cod_tipo_requisito`, `fec_estima_fin`, `fec_aprueba`, `id_requisito`, `titulo_requisito`, `descripcion`, `req_datos`, `req_intefaz`, `especificacion`, `h_hardware`, `h_software`, `horas_hom_estimado`, `valor_estimado`, `entradas`, `procesos`, `salidas`, `porce_avance`, `restricciones`, `medidas_respuestas`, `usuarios_requisito`) VALUES
(1, 1, 'sap1', 'nsn1', 1, '1053797940', '1053797940', '2015-01-14 09:21:00', '23319766', '2015-01-15 11:00:00', '1053321008', 1, 2, 1, 1, 1, 1, '2015-02-20 09:00:00', '2015-01-22 09:00:00', 'id requisito 1', 'titulo requisito 1', 'En este campo se detalla la descripcion del requisito.', 'En este campo se detalla el rq_datos del requisito.', 'En este campo se detalla el rq_interfaz del requisito.', 'En este campo se detalla la especificacion del requisito.', 'h_hardware1', 'h_software1', 50, 2000000, 'En este campo se detallan las entradas del requisito.', 'En este campo se detallan los procesos del requisito.', 'En este campo se detallan las salidas del requisito.', '75.0', 'restriccion1', 'medida respuesta1', 'usuario requisito1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_riesgos`
--

CREATE TABLE IF NOT EXISTS `rq_riesgos` (
  `cod_riesgo` int(11) NOT NULL AUTO_INCREMENT,
  `riesgo` char(40) NOT NULL,
  `descripcion` varchar(2555) NOT NULL,
  PRIMARY KEY (`cod_riesgo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rq_riesgos`
--

INSERT INTO `rq_riesgos` (`cod_riesgo`, `riesgo`, `descripcion`) VALUES
(1, 'riesgo 1', 'En este campo se refiere todo lo que le concierne al riesgo 1.'),
(2, 'riesgo 2', 'En este campo se refiere todo lo que le concierne al riesgo 2.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_sub_proyecto`
--

CREATE TABLE IF NOT EXISTS `rq_sub_proyecto` (
  `cons_sub_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `cons_proyecto` int(11) NOT NULL,
  `cod_sub_proyecto` char(15) NOT NULL,
  `subproyecto` char(200) NOT NULL,
  `alcance` text NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `justificacion` text NOT NULL,
  PRIMARY KEY (`cons_sub_proyecto`),
  KEY `cons_proyecto` (`cons_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rq_sub_proyecto`
--

INSERT INTO `rq_sub_proyecto` (`cons_sub_proyecto`, `cons_proyecto`, `cod_sub_proyecto`, `subproyecto`, `alcance`, `fecha_inicio`, `justificacion`) VALUES
(1, 1, '0001', 'subproyecto1', 'En este campo se describe el alcance del subproyecto 1.', '2015-01-20 04:00:00', 'En este campo se describe la justificacion del subproyecto 1.'),
(2, 2, '0002', 'subproyecto2', 'En este campo se describe el alcance del subproyecto 2.', '2015-01-20 12:00:00', 'En este campo se describe la justificacion del subproyecto 2.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_tipo_gestion`
--

CREATE TABLE IF NOT EXISTS `rq_tipo_gestion` (
  `cod_tipo_gestion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_gestion` char(50) NOT NULL,
  PRIMARY KEY (`cod_tipo_gestion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `rq_tipo_gestion`
--

INSERT INTO `rq_tipo_gestion` (`cod_tipo_gestion`, `tipo_gestion`) VALUES
(1, 'tipo de gestion 1'),
(2, 'tipo de gestion 2'),
(3, 'tipo de gestion 3'),
(4, 'tipo de gestion 4'),
(5, 'tipo de gestion 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_tipo_requisitos`
--

CREATE TABLE IF NOT EXISTS `rq_tipo_requisitos` (
  `cod_tipo_requisito` bigint(20) NOT NULL AUTO_INCREMENT,
  `tip_requisito` char(30) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cod_tipo_requisito`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rq_tipo_requisitos`
--

INSERT INTO `rq_tipo_requisitos` (`cod_tipo_requisito`, `tip_requisito`, `descripcion`) VALUES
(1, 'Tipo de Requisito 1', 'En este campo va la descripción del tipo de requisito 1.'),
(2, 'Tipo de Requisito 2', 'En este campo va la descripción del tipo de requisito 2.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_tipo_verificacion`
--

CREATE TABLE IF NOT EXISTS `rq_tipo_verificacion` (
  `cod_tipo_verifica` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_verificacion` char(30) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cod_tipo_verifica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `rq_tipo_verificacion`
--

INSERT INTO `rq_tipo_verificacion` (`cod_tipo_verifica`, `tipo_verificacion`, `descripcion`) VALUES
(1, 'tipo de verificacion 1', 'En este campo se describe el tipo de verificacion 1.'),
(2, 'tipo de verificacion 2', 'En este campo se describe el tipo de verificacion 2.'),
(3, 'tipo de verificacion 3', 'En este campo se describe el tipo de verificacion 3.'),
(4, 'tipo de verificacion 4', 'En este campo se describe el tipo de verificacion 4.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rq_verifica_x_requisitos`
--

CREATE TABLE IF NOT EXISTS `rq_verifica_x_requisitos` (
  `cons_verifica` int(11) NOT NULL AUTO_INCREMENT,
  `cons_requisito` int(11) NOT NULL,
  `cod_tipo_verifica` bigint(20) NOT NULL,
  `doc_id` char(20) NOT NULL,
  `estado_sn` char(30) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cons_verifica`),
  KEY `cod_tipo_verifica` (`cod_tipo_verifica`),
  KEY `doc_id` (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `rq_verifica_x_requisitos`
--

INSERT INTO `rq_verifica_x_requisitos` (`cons_verifica`, `cons_requisito`, `cod_tipo_verifica`, `doc_id`, `estado_sn`, `fecha`, `descripcion`) VALUES
(1, 1, 1, '1053797940', 'estado 1', '2015-01-20 06:00:00', 'En este campo se detalla la descripcion de la  verificacion de requisitos.'),
(2, 2, 2, '1053797940', 'estado 2', '2015-01-20 14:00:00', 'En este campo se detalla la descripcion de la  verificacion de requisitos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terceros`
--

CREATE TABLE IF NOT EXISTS `terceros` (
  `cons_tercero` int(11) NOT NULL AUTO_INCREMENT,
  `numero_id` varchar(40) NOT NULL,
  `nombre` char(60) NOT NULL,
  `contacto` char(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(60) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`cons_tercero`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `terceros`
--

INSERT INTO `terceros` (`cons_tercero`, `numero_id`, `nombre`, `contacto`, `direccion`, `telefono`, `email`, `web`, `descripcion`) VALUES
(1, '123', 'jon', 'lalala', 'jdjdjd', 4543, 'jas@hotmail.com', 'ndscpnsdps', 'jsdjcsdf'),
(2, '456', 'laura', 'lol', 'jffj', 4242, 'jadj@hotmail.com', 'fewfkwe', 'csafqwfqw'),
(3, '789', 'hugo', 'jdsjs', 'fewqfdwqe', 3432, 'dsfc@hotmail.com', 'ewfwwfmew', 'wefmewñfmdñnmfs');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `objetos_pruebas`
--
ALTER TABLE `objetos_pruebas`
  ADD CONSTRAINT `objetos_pruebas_ibfk_1` FOREIGN KEY (`cons_verifica`) REFERENCES `rq_verifica_x_requisitos` (`cons_verifica`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `objeto_proyecto`
--
ALTER TABLE `objeto_proyecto`
  ADD CONSTRAINT `objeto_proyecto_ibfk_1` FOREIGN KEY (`cons_proyecto`) REFERENCES `rq_proyecto` (`cons_proyecto`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personas_x_proyecto`
--
ALTER TABLE `personas_x_proyecto`
  ADD CONSTRAINT `personas_x_proyecto_ibfk_2` FOREIGN KEY (`cons_proyecto`) REFERENCES `rq_proyecto` (`cons_proyecto`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `personas_x_proyecto_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `rq_personal` (`doc_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rq_gestion`
--
ALTER TABLE `rq_gestion`
  ADD CONSTRAINT `rq_gestion_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `rq_personal` (`doc_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_gestion_ibfk_2` FOREIGN KEY (`cons_requisito`) REFERENCES `rq_requisitos` (`cons_requisito`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_gestion_ibfk_3` FOREIGN KEY (`cod_tipo_gestion`) REFERENCES `rq_tipo_gestion` (`cod_tipo_gestion`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rq_glosario`
--
ALTER TABLE `rq_glosario`
  ADD CONSTRAINT `rq_glosario_ibfk_1` FOREIGN KEY (`cons_proyecto`) REFERENCES `rq_proyecto` (`cons_proyecto`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rq_personal`
--
ALTER TABLE `rq_personal`
  ADD CONSTRAINT `rq_personal_ibfk_1` FOREIGN KEY (`cons_tercero`) REFERENCES `terceros` (`cons_tercero`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rq_requisitos`
--
ALTER TABLE `rq_requisitos`
  ADD CONSTRAINT `rq_requisitos_ibfk_1` FOREIGN KEY (`cons_sub_proyecto`) REFERENCES `rq_sub_proyecto` (`cons_sub_proyecto`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_10` FOREIGN KEY (`tercero_asigna`) REFERENCES `terceros` (`cons_tercero`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_11` FOREIGN KEY (`cod_complejidad`) REFERENCES `rq_complejidad` (`cod_complejidad`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_12` FOREIGN KEY (`cod_tipo_requisito`) REFERENCES `rq_tipo_requisitos` (`cod_tipo_requisito`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_2` FOREIGN KEY (`cod_pr`) REFERENCES `rq_prioridades` (`cod_pr`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_3` FOREIGN KEY (`doc_usuario`) REFERENCES `rq_personal` (`doc_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_4` FOREIGN KEY (`doc_elaboro`) REFERENCES `rq_personal` (`doc_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_5` FOREIGN KEY (`doc_revisa`) REFERENCES `rq_personal` (`doc_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_6` FOREIGN KEY (`doc_aprueba`) REFERENCES `rq_personal` (`doc_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_7` FOREIGN KEY (`cod_riesgo`) REFERENCES `rq_riesgos` (`cod_riesgo`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_8` FOREIGN KEY (`cod_estado`) REFERENCES `rq_estados` (`cod_estado`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_requisitos_ibfk_9` FOREIGN KEY (`tercero_solicita`) REFERENCES `terceros` (`cons_tercero`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rq_sub_proyecto`
--
ALTER TABLE `rq_sub_proyecto`
  ADD CONSTRAINT `rq_sub_proyecto_ibfk_1` FOREIGN KEY (`cons_proyecto`) REFERENCES `rq_proyecto` (`cons_proyecto`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rq_verifica_x_requisitos`
--
ALTER TABLE `rq_verifica_x_requisitos`
  ADD CONSTRAINT `rq_verifica_x_requisitos_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `rq_personal` (`doc_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rq_verifica_x_requisitos_ibfk_1` FOREIGN KEY (`cod_tipo_verifica`) REFERENCES `rq_tipo_verificacion` (`cod_tipo_verifica`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
