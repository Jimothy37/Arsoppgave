CREATE databse forum;

CREATE USER 'abdullahi'@'localhost' IDENTIFIED BY 'Abdullahi123';
GRANT ALL PRIVILEGES ON forum.* TO 'abdullahi'@'localhost';
FLUSH PRIVILEGES;
