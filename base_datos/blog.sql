create database blog character set utf8 collate utf8_spanish2_ci;
use blog;

create table categoria(
	idcategoria int not null auto_increment primary key,
	nombre varchar(255)
);

create table usuario(
	idusuario int not null auto_increment primary key,
	nombre varchar(50),
	apellido varchar(50),
	nombreusuario varchar(50),
	email varchar(255),
	clave varchar(60),
	imagen varchar(255),
	estado int default 1,
	tipousuario int default 1, 
	fecha datetime
);

create table post(
	idpost int not null auto_increment primary key,
	titulo varchar(255),
	contenido varchar(511),
	imagen varchar(255),
	fecha_hora datetime,
	estado int default 1,
	idusuario int not null,
	idcategoria int not null,
	foreign key (idusuario) references usuario(idusuario),
	foreign key (idcategoria) references categoria(idcategoria)
);

create table comentario(
	idcoment int not null auto_increment primary key,
	nombre varchar(255),
	comentario varchar(255),
	email varchar(255),
	idpost int not null,
	fecha_hora datetime,
	estado int default 1,
	foreign key (idpost) references post(idpost)
);