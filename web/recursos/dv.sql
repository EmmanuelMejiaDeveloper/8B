DROP DATABASE IF EXISTS 8B_CI4;

CREATE DATABASE IF NOT EXISTS 8B_CI4 DEFAULT CHARACTER SET UTF8 collate utf8_general_ci;
USE 8B_CI4;

CREATE TABLE usuarios(
   fecha_creacion date,
   fecha_actualizacion date,
   fecha_eliminacion date,
   id_usuarios int not null primary key auto_increment,
   nombre varchar(50) not null,
   paterno varchar(50) not null,
   materno varchar(50) not null,
   correo varchar(100) not null,
   contrasenia varchar(70) not null
);

INSERT INTO usuarios VALUES(now(),now(),now(), NULL, "Emmanuel","Mejía","Morales","armmando45@gmail.com","123");
