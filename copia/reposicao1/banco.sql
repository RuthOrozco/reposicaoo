create database reposicao1;

use reposicao1;

create table aluno(
    idaluno int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    telefone varchar(50) not null,
    datacadastro date
);
insert into aluno values(null,'aline','aline@senac','2222-3333','2023-01-10');
select * from aluno;