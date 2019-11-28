-- Arquivo de Definição do Banco de Dados da Loja --
-- Criacao do database --
create database loja;

-- Selecionando o database criado --
use loja;

-- Criação das Tabelas --
-- Tabela Venda --
create table venda(
    idVenda integer NOT NULL,
    idCliente integer NOT NULL,
    precoTotal double precision NOT NULL,
    formaPagamento integer NOT NULL
);

alter table venda
add constraint pk_venda primary key (idVenda);

-- Tabela Item --
create table item(
    idVenda integer NOT NULL,
    idProduto integer NOT NULL,
    quantidade integer NOT NULL,
    precoParcial double precision NOT NULL
);

alter table item
add constraint pk_item primary key (idVenda, idProduto);

alter table item
add constraint fk_venda foreign key (idVenda) references venda(idVenda);

-- Tabelas Criadas para Fins de Testes --
-- Tabela Produto --
create table produto(
    idProduto integer NOT NULL,
    Nome varchar(256) NOT NULL,
	quantidadeEstoque integer NOT NULL,
    precoUnitario double precision NOT NULL
);

alter table produto
add constraint pk_produto primary key (idProduto);

-- Tabela Usuario --
create table usuario(
    idUsuario integer NOT NULL,
    login varchar(25) NOT NULL UNIQUE,
    senha varchar(256) NOT NULL,
	tipo varchar(10) NOT NULL
);

alter table usuario
add constraint pk_usuario primary key(idUsuario);

alter table usuario
add constraint accepted_types check (tipo = 'Client' or tipo = 'Admin');

-- Cadastrando Produtos Ficticios --
insert into  produto values (000001, 'Camiseta Corvinal', 2, 58.65);
insert into  produto values (000002, 'Camiseta Sonserina', 5, 58.65);
insert into  produto values (000003, 'Camiseta Grifinória', 4, 58.65);
insert into  produto values (000004, 'Camiseta Lufa Lufa', 8, 58.65);
-- Cadastrando Usuários Ficticios --
insert into  usuario values (000001, 'admin', 'admin1234', 'Admin');
insert into  usuario values (000002, 'client', 'client1234', 'Client');