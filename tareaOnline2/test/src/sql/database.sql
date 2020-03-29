DROP DATABASE IF EXISTS examenbd;
CREATE DATABASE examenbd;
USE examenbd;
DROP TABLE IF EXISTS students;
CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT,
    nombre VARCHAR(25) NOT NULL,
    apellidos VARCHAR(25) NOT NULL,
    usuario VARCHAR(25) NOT NULL,
    password VARCHAR(100) NOT NULL,
    role VARCHAR(100) NOT NULL,
    intentos INT DEFAULT 0,
    nota decimal(5, 2),
    PRIMARY KEY (id_usuario)
);

CREATE TABLE examenes (
    id_examen  INT AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    intento INT,
    nota decimal(5, 2),
    r1   VARCHAR(2),
    r2   VARCHAR(2),
    r3   VARCHAR(2),
    r4   VARCHAR(2),
    r5   VARCHAR(2),
    r6   VARCHAR(2),
    r7   VARCHAR(2),
    r8   VARCHAR(2),
    r9   VARCHAR(2),
    r10   VARCHAR(2),
    r11   VARCHAR(2),
    
    PRIMARY KEY (id_examen)
);
CREATE INDEX idx_usu_idUsuario ON usuarios(id_usuario);
CREATE INDEX idx_exs_idCliente ON examenes(id_usuario);
ALTER TABLE examenes ADD CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario);

INSERT INTO usuarios(intentos,nombre,apellidos,usuario,nota,password,role) VALUES (1,'admin','admin','admin','10',"1111","admin");
INSERT INTO usuarios(nombre,apellidos,usuario,nota,password,role) VALUES ('Pablo','Sánchez','pablo','7',"pablo","alumno");

INSERT INTO examenes(id_usuario,intento,nota,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11) values ('1','1','10','a','a','c','b','c','c','a','c','c','b','c');

