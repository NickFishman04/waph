-- database-account.sql
CREATE DATABASE waph_lab3;
CREATE USER 'fishmane'@'localhost' IDENTIFIED BY 'password1!';
GRANT ALL PRIVILEGES ON waph_lab3.* TO 'fishmane'@'localhost';
FLUSH PRIVILEGES;
