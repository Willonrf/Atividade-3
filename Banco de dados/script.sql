CREATE DATABASE escola;

USE escola;
CREATE TABLE alunos(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    anoCursado int NOT NULL,
    nascimento DATE NOT NULL,
    materia VARCHAR(100) NOT NULL
);