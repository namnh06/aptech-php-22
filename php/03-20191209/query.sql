CREATE DATABASE aptech_php_22_3;

CREATE TABLE aptech_php_22_3.users (
	id INT,
	name VARCHAR(255),
    age INT
);

INSERT INTO aptech_php_22_3.users (id, name, age)
VALUES (1, "Nam", 19), (2, "Hiep", 20);




SELECT * FROM aptech_php_22_4.users 
WHERE email = 'a@gmail.com '
AND password = '123456fasdf';

SELECT * FROM aptech_php_22_4.users 
WHERE email = 'a@gmail.com' 
AND password = '123456fasdf'


