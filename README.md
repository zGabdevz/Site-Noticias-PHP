# Sistema-cadastro-pessoas

Pequeno sistema de cadastro e visualização de dados 
em PHP.

*Arquivo para conexão ao banco de dados localiza-se no
diretório /config/conexão.php 

#Tabela do banco de dados utilizado no sistema:

CREATE TABLE pessoas(
    id int PRIMARY KEY AUTO_INCREMENT,
    nome varchar(50) not null,
    telefone varchar(50) not null,
    email varchar(50) not null
);
