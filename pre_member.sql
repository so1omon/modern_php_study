create table pre_member (
    id mediumint unsigned not null auto_increment,
    userEmail varchar(50),
    password varchar(128),
    userName varchar(50),
    birthday char(8),
    pre_member smallint,
    link_passwod varchar(128),
    reg_date datetime,
    primary key(id)
);