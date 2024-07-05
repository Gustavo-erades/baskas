create database bd_baskas;
use bd_baskas;
create table jogadores(
	id int auto_increment not null primary key,
    nome varchar(30) not null,
    elo int not null,
    passe int not null,
    rebot int not null,
    shot int not null,
    shot3 int not null,
    infilt int not null,
    bandj int not null,
    contr int not null,
    toco int not null,
    roubo int not null,
    forca int not null,
    velo int not null,
    def int not null,
    visao int not null,
    clutch int not null,
    decisao int not null
);
alter table bd_baskas.jogadores modify historico double;
alter table bd_baskas.historico modify id int  not null auto_increment;
create table users(
	id int not null auto_increment primary key,
    nome varchar(20) not null,
    senha varchar(32) not null
);
create table historico(
	id int not null primary key,
    jogador varchar(30) not null,
    dia datetime not null,
    elo int not null,
    historico double
);

insert into bd_baskas.users values(1,"adm","39d5fe4486aba8ee4de086f326c70de9");

alter table bd_baskas.jogadores add historico int;
insert into bd_baskas.jogadores values(1,"Gugu",78,78,85,83,60,85,79,74,80,82,70,90,80,73,83,73,0);
insert into bd_baskas.jogadores values(2,"China",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);

insert into bd_baskas.jogadores values(3,"Coreia",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(4,"Kevin",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(5,"João",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(6,"Miguel",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(7,"Daniel",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(8,"Tatu",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);

insert into bd_baskas.jogadores values(9,"Rafa",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(10,"Cris",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(11,"Alejandro",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(12,"Douglas",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
insert into bd_baskas.jogadores values(13,"Victor",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);

insert into bd_baskas.jogadores values(14,"Mateus",50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,0);
INSERT INTO bd_baskas.historico VALUES( 'teste', '2024-07-05', 10, 10);
