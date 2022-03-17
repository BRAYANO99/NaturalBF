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
    PRIMARY KEY  (ID_Producto)
);
--Tabla de Ventas--
CREATE TABLE Ventas ( 
    ID_Venta INT NOT NULL AUTO_INCREMENT,
    ID_Usuario  INT NOT NULL,
    ClaveDeTransaccion VARCHAR(250) NOT NULL,
    PaypalDatos TEXT NOT NULL,  
    Fecha DATETIME NOT NULL,
    Total DECIMAL(60,2) NOT NULL,
    Status VARCHAR(200) NOT NULL,
    PRIMARY KEY  (ID_Venta),
    FOREIGN KEY (ID_Usuario) REFERENCES Usuario (ID_Usuario)
); 