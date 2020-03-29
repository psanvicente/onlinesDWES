DROP DATABASE IF EXISTS reservas_bd;
CREATE DATABASE reservas_bd
CHARACTER SET utf8
COLLATE utf8_general_ci;
USE reservas_bd;
DROP TABLE IF EXISTS cliente;
CREATE TABLE cliente(
    id_cliente INT AUTO_INCREMENT,
    dni VARCHAR(9) NOT NULL UNIQUE,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
     active VARCHAR(100) NOT NULL,
  role VARCHAR(100) NOT NULL,
   CONSTRAINT PK_cliente PRIMARY KEY (id_cliente)
    
);
DROP TABLE IF EXISTS coche;
CREATE TABLE coche(
    id_coche INT AUTO_INCREMENT,
    marca VARCHAR(20),
    modelo VARCHAR(20),
    motor VARCHAR(20),    
    INDEX idx_idCoche (id_coche),
    PRIMARY KEY (id_coche)
);

DROP TABLE IF EXISTS reserva;
CREATE TABLE reserva (
    id_reserva SERIAL,
    id_cliente INT NOT NULL,
    id_coche INT NOT NULL,
    inicio DATE,
    fin DATE,
    PRIMARY KEY (id_reserva)
);
CREATE INDEX idx_res_idCliente ON reserva(id_cliente);
CREATE INDEX idx_res_idCoche ON reserva(id_coche);

CREATE INDEX idx_cli_idCliente ON cliente(id_cliente);
CREATE INDEX idx_coc_idCoche ON coche(id_coche);

ALTER TABLE reserva ADD CONSTRAINT fk_id_cliente FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente);
ALTER TABLE reserva ADD CONSTRAINT fk_id_coche FOREIGN KEY (id_coche) REFERENCES coche(id_coche);

INSERT INTO CLIENTE(dni,username,password,active,role) VALUES ('30874587X','admin',"1111","yes","admin");
INSERT INTO CLIENTE(dni,username,password,active,role) VALUES ('31158584D','Pablo',"1234","yes","user");

INSERT INTO COCHE(marca,modelo,motor) VALUES ('Citröen','Saxo','Gasolina');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('Citröen','C4','Diesel');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('Audi','A3','Diesel');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('Audi','Q3','Diesel');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('BMW','Serie 2','Gasolina');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('BMW','X5','Diesel');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('Kia','Carnival','Gasolina');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('Kia','Sorento','Diesel');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('Hyundai','Coupé','Gasolina');
INSERT INTO COCHE(marca,modelo,motor) VALUES ('Hyundai','I30','Diesel');

INSERT INTO RESERVA(id_cliente,id_coche,inicio,fin) VALUES (1,1,'2019/11/05','2019/11/15');