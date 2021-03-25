CREATE USER 'tuto'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'tuto'@'localhost';
FLUSH PRIVILEGES;