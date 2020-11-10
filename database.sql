create database databaseCodeigniter;

use databaseCodeigniter;

create table rol(
id_rol int primary key auto_increment,
nombre varchar(45),
estado int(11)
);

create table usuario(
id int primary key auto_increment,
username varchar(45),
password varchar(250),
salt varchar(250),
nombres varchar(45),
apellidos varchar(45),
direccion varchar(100),
email varchar(80),
estado int,
rol_id int(11),
foreign key(rol_id) references rol(id_rol)
);

insert into rol values(1,"ADMIN",1);
insert into rol values(2,"USER",1);


INSERT INTO usuario values
(1, "admin", sha1("123"),sha1("123"),"Oscar","Flamenco","San Salvador","oscar@gmail.com",1,1),
(2,"edgard",sha1("123456"),sha1("123456"),"Francisco","Hernandez","Santa Tecla","edgard@mail.com",1,2);


