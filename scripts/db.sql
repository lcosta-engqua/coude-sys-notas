#exclui o banco de dados caso exista
DROP DATABASE IF EXISTS sys_notas;

#cria o banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS sys_notas;

#seta o banco de dados atual
USE sys_notas;

#cria a tabela de tipo usuário 
CREATE TABLE tipo_usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
	tipo VARCHAR(50) NOT NULL
);

#cria a tabela de usuarios
CREATE TABLE usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	senha VARCHAR(255) NOT NULL,
	tipo_id INT,
	data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
	data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY (tipo_id) REFERENCES tipo_usuario(id)
);

#insere os dados da tabela de tipo usuário
INSERT INTO tipo_usuario(tipo) VALUES('aluno');
INSERT INTO tipo_usuario(tipo) VALUES('professor');

INSERT INTO usuarios(nome, email, senha, tipo_id) VALUES('Pequeno Gafanhoto', 'pequeno@gafanhoto', '1234', 1);
INSERT INTO usuarios(nome, email, senha, tipo_id) VALUES('Sensei', 'sensei@prof', '1234', 2);

SELECT * FROM tipo_usuario;
SELECT * FROM usuarios;