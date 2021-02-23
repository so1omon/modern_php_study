create table member(
    id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    last_name VARCHAR(50),
    first_name VARCHAR(50),
    age TINYINT UNSIGNED,
    PRIMARY KEY (id)
);


insert into member(last_name,first_name,age) values('홍','길동','20');
insert into member(last_name,first_name,age) values('서','길동','21');
insert into member(last_name,first_name,age) values('김','길동','23');
insert into member(last_name,first_name,age) values('이','길동','22');