-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para gestordimmsa
CREATE DATABASE IF NOT EXISTS `gestordimmsa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gestordimmsa`;

-- Volcando estructura para tabla gestordimmsa.carrusel
CREATE TABLE IF NOT EXISTS `carrusel` (
  `Id` int(11) NOT NULL,
  `IMG_REFERENCIA` varchar(50) DEFAULT 'no-image.jpg',
  `OPC` int(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla gestordimmsa.carrusel: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `carrusel` DISABLE KEYS */;
REPLACE INTO `carrusel` (`Id`, `IMG_REFERENCIA`, `OPC`) VALUES
	(1, 'Banner.png', 1),
	(2, 'Antecomedor Fiona.jpg', 1),
	(3, 'Antecomedor Hermes Completo.jpg', 1),
	(4, 'Antecomedor Renata.jpg', 1),
	(5, 'no-image.jpg', 0),
	(6, 'no-image.jpg', 0),
	(7, 'no-image.jpg', 0),
	(8, 'no-image.jpg', 0),
	(9, 'no-image.jpg', 0),
	(10, 'no-image.jpg', 0);
/*!40000 ALTER TABLE `carrusel` ENABLE KEYS */;

-- Volcando estructura para tabla gestordimmsa.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `CATEGORIA` varchar(25) NOT NULL,
  PRIMARY KEY (`CATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla gestordimmsa.categoria: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
REPLACE INTO `categoria` (`CATEGORIA`) VALUES
	('Bancos'),
	('Comedores'),
	('Mesas de Centro'),
	('Percheros'),
	('Sillas y Sillones');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla gestordimmsa.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` text NOT NULL,
  `IMG_REFERENCIA` varchar(50) DEFAULT NULL,
  `MATERIALES` text NOT NULL,
  `COLORES` text NOT NULL,
  `MEDIDAS` text NOT NULL,
  `CATEGORIA` varchar(25) NOT NULL,
  PRIMARY KEY (`ID_PRODUCTO`),
  KEY `CATEGORIA` (`CATEGORIA`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`CATEGORIA`) REFERENCES `categoria` (`CATEGORIA`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla gestordimmsa.producto: ~35 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
REPLACE INTO `producto` (`ID_PRODUCTO`, `NOMBRE`, `IMG_REFERENCIA`, `MATERIALES`, `COLORES`, `MEDIDAS`, `CATEGORIA`) VALUES
	(1, 'Comedor Pierre', NULL, '', '', '', 'Comedores'),
	(2, 'Comedor Valencia Túnez', NULL, '', '', '', 'Comedores'),
	(3, 'Comedor Romina', NULL, '', '', '', 'Comedores'),
	(4, 'Comedor Ximena', NULL, '', '', '', 'Comedores'),
	(5, 'Comedor Dior', NULL, '', '', '', 'Comedores'),
	(6, 'Mesa Palermo con Banca y Silla Mirage', NULL, '', '', '', 'Comedores'),
	(7, 'Mesa Palermo con Silla Pamela Blanco', NULL, '', '', '', 'Comedores'),
	(8, 'Comedor Savona', NULL, '', '', '', 'Comedores'),
	(9, 'Mesa Amadeus y Silla Savona', NULL, '', '', '', 'Comedores'),
	(10, 'Comedor Rioja', NULL, '', '', '', 'Comedores'),
	(11, 'Comedor Aranza', NULL, '', '', '', 'Comedores'),
	(12, 'Antecomedor Fiona', NULL, '', '', '', 'Comedores'),
	(13, 'Antecomedor Hermes Completo', NULL, '', '', '', 'Comedores'),
	(14, 'Antecomedor Karla', NULL, '', '', '', 'Comedores'),
	(15, 'Antecomedor Renata', NULL, '', '', '', 'Comedores'),
	(16, 'Antecomedor Sonia', NULL, '', '', '', 'Comedores'),
	(17, 'Consola Palermo', NULL, '', '', '', 'Mesas de Centro'),
	(18, 'Mesa de Centro Palermo', NULL, '', '', '', 'Mesas de Centro'),
	(19, 'Juego de Mesa Fiona', NULL, '', '', '', 'Mesas de Centro'),
	(20, 'Lateral y Centro Túnez', NULL, '', '', '', 'Mesas de Centro'),
	(21, 'Juego de Mesas Savona', NULL, '', '', '', 'Mesas de Centro'),
	(22, 'Juego de Mesas Amadeus', NULL, '', '', '', 'Mesas de Centro'),
	(23, 'Mesa de centro Channel', NULL, '', '', '', 'Mesas de Centro'),
	(24, 'Mesa Periquera y Banco Bar Hermes', NULL, '', '', '', 'Bancos'),
	(25, 'Periquera Fiona', NULL, '', '', '', 'Bancos'),
	(26, 'Periquera Napoli y Banco Bar Vanecia', NULL, '', '', '', 'Bancos'),
	(27, 'Banco Bar Hermes y Banco Bar Jordan', NULL, '', '', '', 'Bancos'),
	(28, 'Bancos Bosnia', NULL, '', '', '', 'Bancos'),
	(29, 'Bancos Para Bar', NULL, '', '', '', 'Bancos'),
	(30, 'Sillas Mirage, Tampa, Hermes, Savona', NULL, '', '', '', 'Sillas y Sillones'),
	(31, 'Sillón Georgia', NULL, '', '', '', 'Sillas y Sillones'),
	(32, 'Sillón Madrid', NULL, '', '', '', 'Sillas y Sillones'),
	(33, 'Perchero Vallet', NULL, '', '', '', 'Percheros'),
	(34, 'Percheros para Bolso', NULL, '', '', '', 'Percheros'),
	(35, 'Revistero Michelle', NULL, '', '', '', 'Percheros');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
