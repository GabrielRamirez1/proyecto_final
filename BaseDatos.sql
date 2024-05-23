CREATE DATABASE gestiontarea;
USE gestiontarea;

CREATE TABLE cliente(
c_id BIGINT NOT NULL AUTO_INCREMENT,
c_identificacion BIGINT NOT NULL,
c_nombres VARCHAR (255) NOT NULL,
c_apellidos VARCHAR (255) NOT NULL,
c_celular INT NOT NULL,
c_correo VARCHAR (255) NOT NULL,
c_contrasena VARCHAR (255) NOT NULL,
c_rol INT NOT NULL, -- ADMINIS y CLIEN
PRIMARY KEY (c_id)
);


INSERT INTO cliente (c_id, c_identificacion, c_nombres, c_apellidos, c_celular, c_correo, c_contrasena, c_rol) VALUES
(1, 123456789, 'ADMINSTRADOR', 'ADMINISTRADOR', '123456789', 'admin@gmail.com', '12345', 1);

CREATE TABLE tarea(
t_id BIGINT NOT NULL AUTO_INCREMENT,
t_clienteFK BIGINT NOT NULL,
t_titulo VARCHAR (200) NOT NULL,
t_descripcion TEXT NOT NULL,
t_fechavencimiento DATE NOT NULL,
t_estado VARCHAR (20) NOT NULL, -- 0 NO realizado - 1 realizado
t_fecha DATE NOT NULL,
t_hora TIME NOT NUlL,
FOREIGN KEY (t_clienteFK) REFERENCES cliente (c_id),
PRIMARY KEY (t_id)
);
