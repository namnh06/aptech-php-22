CREATE DATABASE aptech_php_22_08;

CREATE TABLE aptech_php_22_08.users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE
);

INSERT INTO aptech_php_22_08.users (name,email)
VALUES
('nam','nam@gmail.com'),
('nam1','nam1@gmail.com'),
('nam2','nam2@gmail.com'),
('nam3','nam3@gmail.com'),
('nam4','nam4@gmail.com');

SELECT * FROM aptech_php_22_08.users;
