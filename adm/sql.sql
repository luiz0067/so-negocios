create table categorias(
 id_categoria integer primary key AUTO_INCREMENT,
 nome varchar (50)
);
create table produtos(
 id_produto integer primary key AUTO_INCREMENT,
 nome varchar(50) not null,
 id_categoria integer not null,
 valor numeric(15,2) not null,
 descricao varchar(50),
 nome_cliente varchar(50),
 telefone varchar(50),
 email varchar(50)
);
create table uploads (
 id_foto integer primary key AUTO_INCREMENT,
 id_produto integer,
 nome varchar(50),
 endereco varchar(250) not null
);
create table usuarios(
 id integer primary key AUTO_INCREMENT,
 nome varchar(50),
 email varchar(50),
 login varchar(50) not null,
 senha varchar(50) not null
);