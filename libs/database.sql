CREATE TABLE user
(
id VARCHAR(100) CHARSET utf8  primary key,
pass VARCHAR(100) CHARSET utf8,
name VARCHAR(100) CHARSET utf8,
email VARCHAR(100) CHARSET utf8,
delete_flg VARCHAR(100) CHARSET utf8
);


insert into user values('admin','admin','thang','123@gmail.com','1');


CREATE TABLE category
(
id integer AUTO_INCREMENT primary key,
name VARCHAR(100) CHARSET utf8,
name2 VARCHAR(100) CHARSET utf8
);

insert into category values(null,'test1','test2');
insert into category values(null,'test3','test4');


CREATE TABLE location
(
id integer AUTO_INCREMENT primary key,
name VARCHAR(100) CHARSET utf8,
name2 VARCHAR(100) CHARSET utf8
);

insert into category values(null,'test1','test2');
insert into category values(null,'test3','test4');


Create table product
(
id integer AUTO_INCREMENT primary key,
category_id integer,
location_id integer,
name VARCHAR(100) CHARSET utf8,
namevi VARCHAR(100) CHARSET utf8,
address VARCHAR(100) CHARSET utf8,
datepost date,
image VARCHAR(100) CHARSET utf8,
price integer,
bathroom integer,
bethroom integer,
forsale integer,
hot integer,
square integer,
description VARCHAR(1000) CHARSET utf8,
descriptionvi VARCHAR(1000) CHARSET utf8,
map VARCHAR(1000) CHARSET utf8
);

create table image
(
id integer AUTO_INCREMENT primary key,
product_id integer,
name VARCHAR(100) CHARSET utf8
);