DROP DATABASE IF EXISTS shop;
CREATE DATABASE shop;
USE shop;

CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT UNIQUE,
  first_name VARCHAR(25) NOT NULL,
  last_name VARCHAR(25) NOT NULL,
  username VARCHAR(100) NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  birthdate DATE NOT NULL,
  gender VARCHAR(2) NOT NULL,
  privilege_level INT NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO users VALUES
(1, 'Test', 'Ting',  'coba', 'test@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2000-04-07', 'M',2);
