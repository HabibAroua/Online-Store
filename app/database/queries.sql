ALTER DATABASE commerce CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE test CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE test DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

create table Category
(
    id int PRIMARY Key AUTO_INCREMENT,
    label varchar(20),
    description text
);

create table Sub_Category
(
    id int PRIMARY Key AUTO_INCREMENT,
    label varchar(20),
    description text,
    id_cat int
);

create table Product
(
    id int primary key AUTO_INCREMENT,
    reference varchar(30) UNIQUE,
    label varchar(25),
    price double,
    amount int,
    picture BINARY,
    description text,
    idSub_cat int
);
alter table Sub_Category add CONSTRAINT fk1 FOREIGN key(id_cat) REFERENCES Category(id)
alter table Product add CONSTRAINT fk2 FOREIGN key (idSub_cat) REFERENCES Sub_Category(id);

create table The_User
(
    id int primary key AUTO_INCREMENT,
    login varchar(50),
    password text,
    first_name varchar(30),
    last_name varchar(30),
    date_of_birth date,
    picture BINARY,
    role int,
    email varchar(40),
    telephone varchar(9),
    address varchar(60),
    nationality varchar(20),
    isActive int,
    registration_date date
);