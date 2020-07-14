create table orederlist (
    num int not null auto_increment,
    name CHAR(15) not null,
    product_id char(15) ,
    price int NOT null,
    ordercount int NOT null,
    selphone char(20) not null,
    regist_day char(20),
    kategorie char(20) not null,
    addr VARCHAR(100) not null,
    userid CHAR(15) not null,
    email char(80) not null,
    selphone char(20) not null,
    status char(20) not null,
    primary key(num)
);
