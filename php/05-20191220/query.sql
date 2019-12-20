CREATE DATABASE aptech_php_22_5;

CREATE TABLE aptech_php_22_5.users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255) UNIQUE
);

SELECT * FROM aptech_php_22_5.users;

INSERT INTO aptech_php_22_5.users (name, email)
VALUES ('Nam', 'nam@gmail.com'),
('Quoc', 'quoc@gmail.com');

SELECT * FROM aptech_php_22_5.users;