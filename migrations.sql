CREATE DATABASE stars;
USE stars;
CREATE TABLE users (
ID INT NOT NULL AUTO_INCREMENT PRIMARY key,
Username VARCHAR(50),
Pass VARCHAR(50));



INSERT INTO users
(Username, Pass)
VALUES
("Admin", "Anno1910");

SELECT * FROM users;


USE stars;
CREATE TABLE images (
ID INT NOT NULL AUTO_INCREMENT PRIMARY key,
Images VARCHAR(255),
User_ID INT
);

INSERT INTO images
(Images, User_ID)
VALUES
("stars1.png", 1);

SELECT * FROM images;