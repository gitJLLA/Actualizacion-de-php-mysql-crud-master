CREATE DATABASE cinecabo_peliculas;

use cinecabo_peliculas;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(255) NOT NULL,
  genero ENUM('Accion', 'Drama', 'Comedia', 'Animacion'),
  duracion TIME
  clasificacion ENUM('B', 'A', 'R', 'AA'),
  director VARCHAR(100) NOT NULL,
);

DESCRIBE task;
