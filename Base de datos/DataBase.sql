CREATE DATABASE NaturalBF_BD;

USE NaturalBF_BD;
--Tabla del Usuario--
CREATE TABLE Usuario(
    ID_Usuario INT(11) NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(70) NOT NULL,
    Correo VARCHAR(20) NOT NULL,
    Pass VARCHAR(20) NOT NULL,
    PRIMARY KEY (ID_Usuario)
);
--Tabla del producto--
CREATE TABLE Producto ( 
    ID_Producto INT(11) NOT NULL AUTO_INCREMENT ,  
    Nombre VARCHAR(70) NOT NULL ,  
    Precio DECIMAL(20,2) NOT NULL ,  
    Imagen LONGBLOB NOT NULL ,
    Descripcion TEXT NULL ,
    PRIMARY KEY  (`ID_Producto`)
);