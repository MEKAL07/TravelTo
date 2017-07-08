create database BdTo;

use BdTo;

create table tusuario(
	idUsuario int auto_increment not null,
	nombre varchar(50) not null,
	apellidos varchar(70) not null,
	email varchar(255) not null,
	password text not null,
	avantarExtension varchar(255),	
	fechaNacimineto varchar(11) not null,
	pais varchar(100) not null,
	celular varchar(20) not null,
	sexo varchar(10),	
	fechaRegistro datetime not null,
	fechaModificacion datetime not null,
	primary key(idUsuario)
);

create table tfotos(
	idFoto int auto_increment not null,
	nombre varchar(50) not null,
	imagen varchar(250) not null,
	region varchar(50) not null,
	provincia varchar(50) not null,
	distrito varchar(50) not null,
	comunidad varchar(50) not null,	
	fechaRegistro datetime not null,
	fechaModificacion datetime not null,
	primary key(idFoto)
):