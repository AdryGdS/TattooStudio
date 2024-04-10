create database studio

use studio

create table agendamentos (
numero INT NOT NULL IDENTITY(1,1),
    id_ag VARCHAR(60) PRIMARY KEY,
    nome VARCHAR(60) NOT NULL,
    contato VARCHAR(20) NOT NULL,
    data_ag VARCHAR(20) NOT NULL,
    hora VARCHAR(20) NOT NULL,
    artista VARCHAR(30) NOT NULL,
    tamanho VARCHAR(20) NOT NULL,
    cor VARCHAR(10) NOT NULL,
    preco VARCHAR (10) NOT NULL
);

select * from agendamentos


CREATE DATABASE STUDIOTATTOO

USE STUDIOTATTOO

CREATE TABLE tb cadastro(
numero INT NOT NULL IDENTITY(1,1),
id_ag VARCHAR(60) PRIMARY KEY,
nome VARCHAR(60) NOT NULL,
contato VARCHAR(20) NOT NULL,
data_ag VARCHAR(20) NOT NULL,
hora VARCHAR(20) NOT NULL,
artista VARCHAR(30) NOT NULL,
tamanho VARCHAR(20) NOT NULL,
cor VARCHAR (10) NOT NULL,
preco VARCHAR (10) NOT NULL
);