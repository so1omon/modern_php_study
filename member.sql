create table member (
    id mediumint unsigned not null auto_increment,
    userEmail varchar(50),
    password varchar(128),
    userName varchar(50),
    birthday char(8),
    address smallint,
    reg_date datetime,
    out_date datetime,
    primary key(id)
);