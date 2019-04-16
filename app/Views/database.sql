create database students;

use students;
/*дам структури бази даних*/DO
create table people (
  id  int(11) auto_increment primary key,
  name varchar(30) not null,
  surname varchar(30) not null,
  age int(3) not null,
  sex varchar(30) not null,
  groupa varchar(100) not null,
  faculty varchar(100) not null
);