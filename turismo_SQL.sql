-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-11-2020 a las 23:54:54
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `DNI` int NOT NULL,
  `NOMBRE` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`DNI`),
  KEY `DNI` (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternativa_aerolinea`
--

DROP TABLE IF EXISTS `alternativa_aerolinea`;
CREATE TABLE IF NOT EXISTS `alternativa_aerolinea` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_AERO` int NOT NULL,
  `NUM_VUELO` int UNSIGNED NOT NULL,
  `NUM_ASIENTOS` int UNSIGNED NOT NULL DEFAULT '1',
  `FECHA_VUELO` date NOT NULL,
  `AEROPUERTO_O` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `AEROPUERTO_D` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `TIPO_PASAJE` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `COSTO` int UNSIGNED NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `ID` (`ID`,`ID_AERO`),
  KEY `ID_AERO` (`ID_AERO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternativa_bus`
--

DROP TABLE IF EXISTS `alternativa_bus`;
CREATE TABLE IF NOT EXISTS `alternativa_bus` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_BUS` int NOT NULL,
  `NUM_ASIENTOS` int NOT NULL DEFAULT '1',
  `FECHA_HORA` datetime NOT NULL,
  `LUGAR_O` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `LUGAR_D` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `COSTO` int NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `ID_BUS` (`ID_BUS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternativa_hotel`
--

DROP TABLE IF EXISTS `alternativa_hotel`;
CREATE TABLE IF NOT EXISTS `alternativa_hotel` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_HOTEL` int NOT NULL,
  `TIPO_HABIT` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_LLEGADA` date NOT NULL,
  `FECHA_SALIDA` date NOT NULL,
  `COSTO` int NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `ID_HOTEL` (`ID_HOTEL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternativa_tour`
--

DROP TABLE IF EXISTS `alternativa_tour`;
CREATE TABLE IF NOT EXISTS `alternativa_tour` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_TOUR` int NOT NULL,
  `FECHA_HORA` datetime NOT NULL,
  `DESCRIPCION` text COLLATE utf8_spanish_ci NOT NULL,
  `COSTO` int NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `ID_TOUR` (`ID_TOUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `DNI` int NOT NULL,
  `NOMBRE` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDO` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ESTADO` int NOT NULL COMMENT '0: Especial\r\n1: Riesgo\r\n2: Normal',
  `AGENTE` int NOT NULL COMMENT '0: Mayorista\r\n1: Minorista',
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`DNI`),
  KEY `DNI` (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comp_aerea`
--

DROP TABLE IF EXISTS `comp_aerea`;
CREATE TABLE IF NOT EXISTS `comp_aerea` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comp_bus`
--

DROP TABLE IF EXISTS `comp_bus`;
CREATE TABLE IF NOT EXISTS `comp_bus` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comp_hotel`
--

DROP TABLE IF EXISTS `comp_hotel`;
CREATE TABLE IF NOT EXISTS `comp_hotel` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comp_tour`
--

DROP TABLE IF EXISTS `comp_tour`;
CREATE TABLE IF NOT EXISTS `comp_tour` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `MAIL` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_admin`
--

DROP TABLE IF EXISTS `login_admin`;
CREATE TABLE IF NOT EXISTS `login_admin` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_ADMIN` int NOT NULL,
  `USER_NAME` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `PASSWORD` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID_ADMIN` (`ID_ADMIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_cliente`
--

DROP TABLE IF EXISTS `login_cliente`;
CREATE TABLE IF NOT EXISTS `login_cliente` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_CLIENTE` int NOT NULL,
  `USER_NAME` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `PASSWORD` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

DROP TABLE IF EXISTS `paquete`;
CREATE TABLE IF NOT EXISTS `paquete` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION` text COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `FECHA_FN` date NOT NULL,
  `COSTO` int NOT NULL,
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_alternativa_aerolinea`
--

DROP TABLE IF EXISTS `paquete_alternativa_aerolinea`;
CREATE TABLE IF NOT EXISTS `paquete_alternativa_aerolinea` (
  `ID_PAQ` int NOT NULL,
  `ID_A_AERO` int NOT NULL,
  PRIMARY KEY (`ID_PAQ`),
  KEY `ID_A_AERO` (`ID_A_AERO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_alternativa_bus`
--

DROP TABLE IF EXISTS `paquete_alternativa_bus`;
CREATE TABLE IF NOT EXISTS `paquete_alternativa_bus` (
  `ID_PAQ` int NOT NULL,
  `ID_A_BUS` int NOT NULL,
  PRIMARY KEY (`ID_PAQ`),
  KEY `ID_A_BUS` (`ID_A_BUS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_alternativa_hotel`
--

DROP TABLE IF EXISTS `paquete_alternativa_hotel`;
CREATE TABLE IF NOT EXISTS `paquete_alternativa_hotel` (
  `ID_PAQ` int NOT NULL,
  `ID_A_HOTEL` int NOT NULL,
  PRIMARY KEY (`ID_PAQ`),
  KEY `ID_A_HOTEL` (`ID_A_HOTEL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_alternativa_tour`
--

DROP TABLE IF EXISTS `paquete_alternativa_tour`;
CREATE TABLE IF NOT EXISTS `paquete_alternativa_tour` (
  `ID_PAQ` int NOT NULL,
  `ID_A_TOUR` int NOT NULL,
  PRIMARY KEY (`ID_PAQ`),
  KEY `ID_A_TOUR` (`ID_A_TOUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `CODIGO_PAQ` int NOT NULL,
  `ID_CLIENTE` int NOT NULL,
  `ESTADO` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: pendiente\r\n1: confirmado',
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CODIGO_PAQ_2` (`CODIGO_PAQ`),
  KEY `CODIGO_PAQ` (`CODIGO_PAQ`,`ID_CLIENTE`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`),
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_paquete`
--

DROP TABLE IF EXISTS `venta_paquete`;
CREATE TABLE IF NOT EXISTS `venta_paquete` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_RESERVA` int NOT NULL,
  `CUOTAS` int NOT NULL,
  `ESTADO` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: pendiente\r\n1: confirmado',
  `ELIMINAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ID_RESERVA` (`ID_RESERVA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alternativa_aerolinea`
--
ALTER TABLE `alternativa_aerolinea`
  ADD CONSTRAINT `alternativa_aerolinea_ibfk_1` FOREIGN KEY (`ID_AERO`) REFERENCES `comp_aerea` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `alternativa_bus`
--
ALTER TABLE `alternativa_bus`
  ADD CONSTRAINT `alternativa_bus_ibfk_1` FOREIGN KEY (`ID_BUS`) REFERENCES `comp_bus` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `alternativa_hotel`
--
ALTER TABLE `alternativa_hotel`
  ADD CONSTRAINT `alternativa_hotel_ibfk_1` FOREIGN KEY (`ID_HOTEL`) REFERENCES `comp_hotel` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `alternativa_tour`
--
ALTER TABLE `alternativa_tour`
  ADD CONSTRAINT `alternativa_tour_ibfk_1` FOREIGN KEY (`ID_TOUR`) REFERENCES `comp_tour` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `login_admin`
--
ALTER TABLE `login_admin`
  ADD CONSTRAINT `login_admin_ibfk_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `administrador` (`DNI`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `login_cliente`
--
ALTER TABLE `login_cliente`
  ADD CONSTRAINT `login_cliente_ibfk_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `cliente` (`DNI`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `paquete_alternativa_aerolinea`
--
ALTER TABLE `paquete_alternativa_aerolinea`
  ADD CONSTRAINT `paquete_alternativa_aerolinea_ibfk_1` FOREIGN KEY (`ID_PAQ`) REFERENCES `paquete` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `paquete_alternativa_aerolinea_ibfk_2` FOREIGN KEY (`ID_A_AERO`) REFERENCES `alternativa_aerolinea` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `paquete_alternativa_bus`
--
ALTER TABLE `paquete_alternativa_bus`
  ADD CONSTRAINT `paquete_alternativa_bus_ibfk_1` FOREIGN KEY (`ID_PAQ`) REFERENCES `paquete` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `paquete_alternativa_bus_ibfk_2` FOREIGN KEY (`ID_A_BUS`) REFERENCES `alternativa_bus` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `paquete_alternativa_hotel`
--
ALTER TABLE `paquete_alternativa_hotel`
  ADD CONSTRAINT `paquete_alternativa_hotel_ibfk_1` FOREIGN KEY (`ID_PAQ`) REFERENCES `paquete` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `paquete_alternativa_hotel_ibfk_2` FOREIGN KEY (`ID_A_HOTEL`) REFERENCES `alternativa_hotel` (`ID_HOTEL`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `paquete_alternativa_tour`
--
ALTER TABLE `paquete_alternativa_tour`
  ADD CONSTRAINT `paquete_alternativa_tour_ibfk_1` FOREIGN KEY (`ID_PAQ`) REFERENCES `paquete` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `paquete_alternativa_tour_ibfk_2` FOREIGN KEY (`ID_A_TOUR`) REFERENCES `alternativa_tour` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`CODIGO_PAQ`) REFERENCES `paquete` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `cliente` (`DNI`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta_paquete`
--
ALTER TABLE `venta_paquete`
  ADD CONSTRAINT `venta_paquete_ibfk_1` FOREIGN KEY (`ID_RESERVA`) REFERENCES `reserva` (`ID`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
