drop database if exists bar7A;
create database bar7A;
    use bar7A;

CREATE TABLE servicios(
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(60) NOT NULL,
    precio DECIMAL(6,2) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE usuarios(
    id INT(11) NOT NULL AUTO_INCREMENT,
    usuario VARCHAR(15) NOT NULL,
    contrasena VARCHAR(10) NOT NULL, 
    PRIMARY KEY (id)
);

INSERT INTO servicios ( nombre, precio ) VALUES
    ('Corte de Cabello Niño', 60),
    ('Corte de Cabello Hombre', 80),
    ('Corte de Barba', 60),
    ('Peinado Mujer', 80),
    ('Peinado Hombre', 60),
    ('Tinte',300),
    ('Uñas', 400),
    ('Lavado de Cabello', 50),
    ('Tratamiento Capilar', 150);

INSERT INTO usuarios ( usuario, contrasena) VALUES 
('admin1', '123qaz’), (‘admin2', '123qaz');

SELECT * FROM servicios;
select * from usuarios;

