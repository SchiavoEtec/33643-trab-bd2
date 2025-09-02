create database Apadrin;
-- drop database apadrin;
use Apadrin;

create table if not exists userPad (
    userID 		int primary key auto_increment,
    name 		varchar(45),
    age			int(2),
    email 		varchar(45),
    country		varchar(25),
    state 		varchar(25),
    cep			varchar(8),
    rg			char(11),
    cpf			char(11),
	senha		varchar(20)
    );
    
create table if not exists animal (
	animalID	int primary key auto_increment,
    name 		varchar(25),
    age			int(2),
    register	text(45),
    race		varchar(20),
    peso		decimal(4,2),
    statusP		char(1),
    color		varchar(15),
    sexo		enum('M','F'),
    rg			char(10)
);

create table if not exists apadri (
	apadriID	int primary key auto_increment,
    userID		int,
    animalID	int,
    dataApadri	date,
    valueByM	decimal(5,2)
);