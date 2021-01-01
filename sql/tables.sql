CREATE TABLE users (
       id int NOT NULL primary key AUTO_INCREMENT comment 'primary key',
       name varchar(50) NOT NULL,
       email varchar(50) NOT NULL,
       password varchar(255) NOT NULL
)