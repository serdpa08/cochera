DROP DATABASE IF EXISTS cochera;
CREATE DATABASE IF NOT EXISTS cochera;
use cochera;
CREATE TABLE clientes(
    codigo int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(20),
    sexo ENUM('M','H'),
    edad smallint,
    deuda decimal(10,2)
);

