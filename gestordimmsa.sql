# Host: localhost  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2019-11-26 00:59:07
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "carrusel"
#

CREATE TABLE `carrusel` (
  `Id` int(11) NOT NULL,
  `IMG_REFERENCIA` varchar(50) DEFAULT 'no-image.jpg',
  `OPC` int(1) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "carrusel"
#

INSERT INTO `carrusel` VALUES (1,'Banner.png',1),(2,'Antecomedor Renata.jpg',1),(3,'sirva-caminar-en-futuro-brillante-38670030.jpg',1),(4,'no-image.jpg',0),(5,'no-image.jpg',0),(6,'no-image.jpg',0),(7,'no-image.jpg',0),(8,'no-image.jpg',0),(9,'no-image.jpg',0),(10,'no-image.jpg',0);

#
# Structure for table "categoria"
#

CREATE TABLE `categoria` (
  `CATEGORIA` varchar(25) NOT NULL,
  PRIMARY KEY (`CATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "categoria"
#

INSERT INTO `categoria` VALUES ('Bancos'),('Camas'),('Comedores'),('Lámparas'),('Mesas de Centro'),('Percheros'),('Sillas y Sillones');

#
# Structure for table "producto"
#

CREATE TABLE `producto` (
  `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` text NOT NULL,
  `ImgReferencia` varchar(50) NOT NULL DEFAULT 'Dimmsa',
  `Materiales` text NOT NULL,
  `Colores` text NOT NULL,
  `Medidas` text NOT NULL,
  `CATEGORIA` varchar(25) NOT NULL,
  PRIMARY KEY (`ID_PRODUCTO`),
  KEY `CATEGORIA` (`CATEGORIA`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`CATEGORIA`) REFERENCES `categoria` (`CATEGORIA`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

#
# Data for table "producto"
#

INSERT INTO `producto` VALUES (1,'Comedor Pierre','ejemplo1','•Cubierta de melamina\r\n•Acero con acabado en pintura electrostática horneada en estructura de sillas y mesa\r\n','(cubierta)\r\n•Cubierta de melamina\r\n•Acero con acabado en pintura  electrostática horneada en estructura de sillas y mesa\r\n(estructura mesa y sillas)\r\n•Negro\r\n•Gris Oxford','0.90mts. x 1.60mts.','Comedores'),(2,'Comedor Valencia Túnez','Dimmsa','Sin descripción','Sin descripción','Sin descripción','Comedores'),(3,'Comedor Romina','Dimmsa','','','','Comedores'),(4,'Comedor Ximena','Dimmsa','','','','Comedores'),(5,'Comedor Dior','Dimmsa','','','','Comedores'),(6,'Mesa Palermo con Banca y Silla Mirage','Dimmsa','','','','Comedores'),(7,'Mesa Palermo con Silla Pamela Blanco','Dimmsa','','','','Comedores'),(8,'Comedor Savona','Dimmsa','','','','Comedores'),(9,'Mesa Amadeus y Silla Savona','Dimmsa','','','','Comedores'),(10,'Comedor Rioja','Dimmsa','','','','Comedores'),(11,'Comedor Aranza','Dimmsa','','','','Comedores'),(12,'Antecomedor Fiona','Dimmsa','','','','Comedores'),(13,'Antecomedor Hermes Completo','Dimmsa','','','','Comedores'),(14,'Antecomedor Karla','Dimmsa','','','','Comedores'),(15,'Antecomedor Renata','Dimmsa','','','','Comedores'),(16,'Antecomedor Sonia','Dimmsa','','','','Comedores'),(17,'Consola Palermo','Dimmsa','','','','Mesas de Centro'),(18,'Mesa de Centro Palermo','Dimmsa','','','','Mesas de Centro'),(19,'Juego de Mesa Fiona','Dimmsa','','','','Mesas de Centro'),(20,'Lateral y Centro Túnez','Dimmsa','','','','Mesas de Centro'),(21,'Juego de Mesas Savona','Dimmsa','','','','Mesas de Centro'),(22,'Juego de Mesas Amadeus','Dimmsa','','','','Mesas de Centro'),(23,'Mesa de centro Channel','Dimmsa','','','','Mesas de Centro'),(24,'Mesa Periquera y Banco Bar Hermes','Dimmsa','Sin descripción','Sin descripción','Sin descripción','Bancos'),(25,'Periquera Fiona','Dimmsa','','','','Bancos'),(26,'Periquera Napoli y Banco Bar Vanecia','Dimmsa','','','','Bancos'),(27,'Banco Bar Hermes y Banco Bar Jordan','Dimmsa','','','','Bancos'),(28,'Bancos Bosnia','Dimmsa','','','','Bancos'),(29,'Bancos Para Bar','Dimmsa','','','','Bancos'),(30,'Sillas Mirage, Tampa, Hermes, Savona','Dimmsa','','','','Sillas y Sillones'),(31,'Sillón Georgia','Dimmsa','','','','Sillas y Sillones'),(32,'Sillón Madrid','Dimmsa','','','','Sillas y Sillones'),(33,'Perchero Vallet','Dimmsa','','','','Percheros'),(34,'Percheros para Bolso','Dimmsa','','','','Percheros'),(35,'Revistero Michelle','Dimmsa','','','','Percheros');
