CREATE DATABASE NaturalBF_BD;

USE NaturalBF_BD;

CREATE TABLE Usuario(
    ID_Usuario INT(11) NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(70) NOT NULL,
    Correo VARCHAR(20) NOT NULL,
    Pass VARCHAR(20) NOT NULL,
    PRIMARY KEY (ID_Usuario)
);