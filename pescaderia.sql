create database pescaderia;

use pescaderia;

CREATE TABLE usuarios (
  nom varchar(50) NOT NULL,
  correo varchar(50) NOT NULL,
  pass varchar(50) NOT NULL,
  PRIMARY KEY (correo)
);

INSERT INTO usuarios (nom, correo, pass) VALUES
('Julian David Almanza Sasa', 'julian@gmail.com', 'julian123');

SELECT * FROM usuarios;

CREATE TABLE categoria_productos (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ;

CREATE TABLE productos (
  id int NOT NULL AUTO_INCREMENT,
  nombre varchar(50) DEFAULT NULL,
  descripcion varchar(255) DEFAULT NULL,
  precio decimal(10,2) DEFAULT NULL,
  categoria_id int DEFAULT NULL,
  PRIMARY KEY (id),
  KEY categoria_id (categoria_id)
);
