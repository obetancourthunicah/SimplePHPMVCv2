CREATE SCHEMA `nw202003` ;
-- Mysql < 8
 CREATE USER 'konekochan'@'%' IDENTIFIED BY 'sup3rGat0';
-- Mysql >= 8 or MariaDB
-- CREATE USER 'konekochan'@'%' IDENTIFIED WITH mysql_native_password BY 'sup3rGat0';
GRANT ALL ON nw202003.* TO 'konekochan'@'%';
