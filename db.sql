-- database
CREATE DATABASE stagiaires;

-- stagiaire table
CREATE TABLE stagiaire (
    id INT PRIMARY KEY not null AUTO_INCREMENT,
    firstname VARCHAR(255) NULL,
    lastname VARCHAR(255) NULL,
    age INTEGER
);