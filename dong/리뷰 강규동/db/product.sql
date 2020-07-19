create table product (
    num int not null auto_increment,
    name CHAR(15) not null,
    product_id char(15) not null,
    price int NOT null,
    regist_day char(20),
    last_day char(20) not null,
    kategorie char(20) not null,
    image_file varchar(100),
    info varchar(100),
    status VARCHAR(10)
    primary key(num)
);
