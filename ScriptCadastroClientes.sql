CREATE DATABASE cadastro_clientes;
USE cadastro_clientes;

CREATE TABLE enderecos(
	id_endereco INT NOT NULL AUTO_INCREMENT,
	cep VARCHAR(255) NOT NULL,
	rua VARCHAR(255) NOT NULL,
	bairro VARCHAR(255) NOT NULL,
	cidade VARCHAR(255) NOT NULL,
	estado VARCHAR(255) NOT NULL,
	ibge VARCHAR(255) NOT NULL,
	PRIMARY KEY (id_endereco)
);

CREATE TABLE clientes(
	id_cliente INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	telefone VARCHAR(255) NOT NULL,
	cpf_cnpj VARCHAR(255) NOT NULL,
	id_endereco INT,
	PRIMARY KEY (id_cliente),
	CONSTRAINT clientes_FK_enderecos FOREIGN KEY (id_endereco) REFERENCES enderecos (id_endereco)
);

SELECT * FROM enderecos;

SELECT * FROM clientes;