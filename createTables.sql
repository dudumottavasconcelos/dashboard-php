create schema cadastro_dashboard;

create table if not exists cadastro_dashboard (
    id int unsigned not null auto_increment,
    nome varchar(255) not null,
    sobrenome varchar(255) not null,
    nomeUsuario varchar(255) not null,
    email varchar(255) not null,
    senha varchar(255) not null,
    primary key (id)
);

select nomeUsuario, email from cadastro_dashboard where nomeUsuario = 'eduardomotta' or email = 'a';