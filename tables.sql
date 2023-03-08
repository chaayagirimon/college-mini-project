CREATE DATABASE demo;
USE demo;

CREATE TABLE loginform(user varchar(25), pass varchar(500));

INSERT INTO loginform(user , password) values("chaaya","qwerty123");

CREATE TABLE top(id int primary key, name varchar(25), won int, lost int, total int);

INSERT INTO top(id,name,won,lost,total) values(1, "Irene",10,0,10);
INSERT INTO top(id,name,won,lost,total) values (2, "Wendy",9,1,10);
INSERT INTO top(id,name,won,lost,total) values (3, "Joy",9,1,10);
INSERT INTO top(id,name,won,lost,total) values(4, "Seulgi",8,2,10);
INSERT INTO top(id,name,won,lost,total) values(5, "Yeri",7,3,10);

CREATE TABLE register(username varchar(50), email varchar(50), mobile int(10));