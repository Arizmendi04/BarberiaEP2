-- Eliminar la base de datos si existe
DROP DATABASE IF EXISTS bar7A;
CREATE DATABASE bar7A;
USE bar7A;

-- Tabla de Servicios
CREATE TABLE servicios (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(60) NOT NULL,
    precio DECIMAL(6,2) NOT NULL,
    PRIMARY KEY (id)
);

-- Tabla de Usuarios
CREATE TABLE usuarios (
    id INT(11) NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(15) NOT NULL,
    contrasena VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);

-- Tabla de Horarios
-- Esta tabla almacena los horarios que serán gestionados por el administrador.
CREATE TABLE horarios (
    id INT(11) NOT NULL AUTO_INCREMENT,
    fecha DATE NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,
    PRIMARY KEY (id)
);

-- Tabla de Citas
-- Esta tabla relaciona usuarios, servicios y horarios, para registrar las citas.
CREATE TABLE citas (
    id INT(11) NOT NULL AUTO_INCREMENT,
    id_usuario INT(11) NOT NULL,
    id_servicio INT(11) NOT NULL,
    id_horario INT(11) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_servicio) REFERENCES servicios(id),
    FOREIGN KEY (id_horario) REFERENCES horarios(id)
);

-- Insertar algunos datos de ejemplo en la tabla de servicios
INSERT INTO servicios (nombre, precio) VALUES
    ('Corte de Cabello Niño', 60),
    ('Corte de Cabello Hombre', 80),
    ('Corte de Barba', 60),
    ('Peinado Mujer', 80),
    ('Peinado Hombre', 60),
    ('Tinte', 300),
    ('Uñas', 400),
    ('Lavado de Cabello', 50),
    ('Tratamiento Capilar', 150);

-- Insertar algunos datos de ejemplo en la tabla de usuarios
INSERT INTO usuarios (usuario, contrasena) VALUES 
    ('admin1', '123qaz'),
    ('admin2', '123qaz'),
    ("Jesus","123");

-- Insertar algunos horarios de ejemplo
INSERT INTO horarios (fecha, hora_inicio, hora_fin) VALUES
    ('2024-10-07', '09:00:00', '10:00:00'),
    ('2024-10-07', '10:00:00', '11:00:00'),
    ('2024-10-07', '11:00:00', '12:00:00'),
    ('2024-10-08', '09:00:00', '10:00:00'),
    ('2024-10-08', '10:00:00', '11:00:00');

-- Consulta para verificar los servicios
SELECT * FROM servicios;

-- Consulta para verificar los usuarios
SELECT * FROM usuarios;

-- Consulta para verificar los horarios
SELECT * FROM horarios;
