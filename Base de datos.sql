
CREATE DATABASE GESTORDIMMSA;
USE GESTORDIMMSA;

CREATE TABLE PRODUCTO(
ID_PRODUCTO INT AUTO_INCREMENT NOT NULL,
NOMBRE TEXT NOT NULL,
DESCRIPCION TEXT NOT NULL,
CATEGORIA VARCHAR(25) NOT NULL,
PRIMARY KEY(ID_PRODUCTO));

CREATE TABLE CATEGORIA(
CATEGORIA VARCHAR(25) NOT NULL,
PRIMARY KEY (CATEGORIA));

CREATE TABLE CARRUSEL(
ID INT AUTO_INCREMENT NOT NULL,
IMAGEN_URL TEXT NOT NULL,
PRIMARY KEY(ID)
);

ALTER TABLE PRODUCTO
ADD FOREIGN KEY (CATEGORIA) REFERENCES CATEGORIA(CATEGORIA);

INSERT INTO CATEGORIA VALUES
("Comedores"),
("Mesas de Centro"),
("Bancos"),
("Sillas y Sillones"),
("Percheros");

INSERT INTO PRODUCTO VALUES
(NULL, "Comedor Pierre", "Sin descripción", "Comedores" ),
(NULL, "Comedor Valencia Túnez", "Sin descripción", "Comedores" ),
(NULL, "Comedor Romina", "Sin descripción", "Comedores" ),
(NULL, "Comedor Ximena", "Sin descripción", "Comedores" ),
(NULL, "Comedor Dior", "Sin descripción", "Comedores"),
(NULL, "Mesa Palermo con Banca y Silla Mirage", "Sin descripción", "Comedores" ),
(NULL, "Mesa Palermo con Silla Pamela Blanco", "Sin descripción", "Comedores" ),
(NULL, "Comedor Savona", "Sin descripción",  "Comedores" ),
(NULL, "Mesa Amadeus y Silla Savona", "Sin descripción",  "Comedores" ),
(NULL, "Comedor Rioja", "Sin descripción",  "Comedores" ),
(NULL, "Comedor Aranza", "Sin descripción", "Comedores" ),
(NULL, "Antecomedor Fiona", "Sin descripción", "Comedores" ),
(NULL, "Antecomedor Hermes Completo", "Sin descripción", "Comedores" ),
(NULL, "Antecomedor Karla", "Sin descripción", "Comedores" ),
(NULL, "Antecomedor Renata", "Sin descripción", "Comedores"),
(NULL, "Antecomedor Sonia", "Sin descripción", "Comedores" ),
(NULL, "Consola Palermo", "Sin descripción", "Mesas de Centro" ),
(NULL, "Mesa de Centro Palermo", "Sin descripción", "Mesas de Centro" ),
(NULL, "Juego de Mesa Fiona", "Sin descripción", "Mesas de Centro" ),
(NULL, "Lateral y Centro Túnez", "Sin descripción", "Mesas de Centro" ),
(NULL, "Juego de Mesas Savona", "Sin descripción",  "Mesas de Centro" ),
(NULL, "Juego de Mesas Amadeus", "Sin descripción", "Mesas de Centro" ),
(NULL, "Mesa de centro Channel", "Sin descripción", "Mesas de Centro" ),
(NULL, "Mesa Periquera y Banco Bar Hermes", "Sin descripción",  "Bancos" ),
(NULL, "Periquera Fiona", "Sin descripción", "Bancos" ),
(NULL, "Periquera Napoli y Banco Bar Vanecia", "Sin descripción",  "Bancos" ),
(NULL, "Banco Bar Hermes y Banco Bar Jordan", "Sin descripción",  "Bancos" ),
(NULL, "Bancos Bosnia", "Sin descripción", "Bancos" ),
(NULL, "Bancos Para Bar", "Sin descripción",  "Bancos" ),
(NULL, "Sillas Mirage, Tampa, Hermes, Savona", "Sin descripción",  "Sillas y Sillones" ),
(NULL, "Sillón Georgia", "Sin descripción",  "Sillas y Sillones" ),
(NULL, "Sillón Madrid", "Sin descripción",  "Sillas y Sillones" ),
(NULL, "Perchero Vallet", "Sin descripción", "Percheros" ),
(NULL, "Percheros para Bolso", "Sin descripción", "Percheros" ),
(NULL, "Revistero Michelle", "Sin descripción",  "Percheros");

