ALTER DATABASE commerce CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE test CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE test DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

create table Category
(
    id int PRIMARY Key AUTO_INCREMENT,
    name varchar(20),
    description text
)

create table Product
(
    reference varchar(30),
    label varchar(25),
    price double,
    amount int,
    picture BINARY,
    description text,
    idCat int
);

alter table Product add CONSTRAINT fk1 FOREIGN key (idCat) REFERENCES Category(id);
