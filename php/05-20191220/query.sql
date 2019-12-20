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

CREATE TABLE aptech_php_22_5.passports (
	id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(255) UNIQUE,
    ngay_cap date,
    user_id INT
);

SELECT * FROM aptech_php_22_5.passports;

INSERT INTO aptech_php_22_5.passports (code, ngay_cap, user_id)
VALUES ('php22','2019-12-20',2),
('php21','2019-08-03',1);

SELECT * FROM aptech_php_22_5.users
WHERE id = 1;

SELECT * FROM aptech_php_22_5.passports
WHERE user_id = 1;

SELECT * FROM aptech_php_22_5.passports
WHERE user_id = 
(SELECT id FROM aptech_php_22_5.users
WHERE email = 'quoc@gmail.com');

SELECT users.id as user_id,
users.name, users.email, 
passports.id as passport_id,
passports.code, passports.ngay_cap
FROM aptech_php_22_5.users
INNER JOIN aptech_php_22_5.passports
ON users.id = passports.user_id
WHERE passports.user_id = 1;




