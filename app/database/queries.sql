ALTER DATABASE commerce CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE test CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE test DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

create table Category
(
    id int PRIMARY Key AUTO_INCREMENT,
    name varchar(20),
    description text
)