CREATE DATABASE ForMyLatter_db;
USE DATABASE ForMyLatter_db;
CREATE TABLE ciclo(
    idCiclo int AUTO_INCREMENT PRIMARY KEY,
    nm_ciclo VARCHAR(255) NOT NULL,
    ds_ciclo VARCHAR(500) NULL,
    dt_create DATETIME NULL,
    stat int NOT NULL,
    progss float NULL,
)

CREATE TABLE matia(
    idMatia int AUTO_INCREMENT PRIMARY KEY,
    nm_matia VARCHAR(255) NOT NULL,
    in_cont int NULL,
    in_difi int NULL,
    in_peso int NULL,
    in_hors int NULL,
    progss float NULL,
    stat int NULL,
    idCiclo int NOT NULL,
    FOREIGN KEY idCiclo REFERENCES ciclos(idCiclo);
)
