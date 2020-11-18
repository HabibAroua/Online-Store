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
alter table Product add CONSTRAINT fk2 PRIMARY KEY(reference);

create table The_User
(
    id int primary key,
    login varchar(50),
    password text,
    first_name varchar(30),
    last_name varchar(30),
    date_of_birth date,
    role int,
    email varchar(40),
    telephone varchar(9),
    address varchar(60),
    nationality varchar(20),
    isActive int,
    registration_date date
);