DROP TABLE IF EXISTS cliente;
CREATE TABLE cliente(
    id_cliente SERIAL,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    dni VARCHAR(9) NOT NULL UNIQUE,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
  role VARCHAR(100) NOT NULL,
  saldo INT DEFAULT 0,
   CONSTRAINT PK_cliente PRIMARY KEY (id_cliente)
    
); 
DROP TABLE IF EXISTS movimiento;
CREATE TABLE movimiento (
    id_movimiento SERIAL,
    tipo varchar(50),
    id_cliente INT NOT NULL,
    concepto VARCHAR(20),
    fecha DATE,
    cantidad INT,
    PRIMARY KEY (id_movimiento)
);
CREATE INDEX idx_mov_idCliente ON movimiento(id_cliente);
CREATE INDEX idx_cli_idCliente ON cliente(id_cliente);

ALTER TABLE movimiento ADD CONSTRAINT fk_id_cliente FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente);
