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


INSERT INTO categoria_productos (nombre) VALUES
('Pescado Blanco'),
('Pescado Azul'),
('Mariscos'),
('Crustáceos'),
('Moluscos'),
('Filetes'),
('Ahumados'),
('Congelados'),
('Ceviches'),
('Pulpo y Calamar');

INSERT INTO productos (nombre, descripcion, precio, categoria_id) VALUES
('Merluza', 'Pescado blanco fresco ideal para freír o cocinar al vapor', 18000, 1),
('Tilapia Roja', 'Pescado blanco suave, perfecto para filetear', 15000, 1),
('Atún Fresco', 'Pescado azul rico en omega 3', 28000, 2),
('Salmón Ahumado', 'Lonjas de salmón ahumado premium', 35000, 7),
('Camarón Tigre', 'Camarón grande ideal para parrilla', 42000, 4),
('Mejillones', 'Molusco fresco para sopas y arroces', 16000, 5),
('Filete de Róbalo', 'Filete fresco sin espinas', 30000, 6),
('Pulpo Entero', 'Pulpo fresco listo para cocción', 45000, 10),
('Calamar en Anillos', 'Anillos de calamar limpios y listos para freír', 23000, 10),
('Ceviche Mixto', 'Ceviche elaborado con pescado, camarón y pulpo', 20000, 9);
