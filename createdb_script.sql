CREATE databse forum;


CREATE table threads (
	title VARCHAR(100),
	comment VARCHAR(3000)
);




CREATE USER 'abdullahi'@'localhost' IDENTIFIED BY 'Abdullahi123';
GRANT ALL PRIVILEGES ON forum.* TO 'abdullahi'@'localhost';
FLUSH PRIVILEGES;
