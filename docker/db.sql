 -- drop database enzo;
 create database enzo;
use enzo;
-- drop table wp_contacto_tampico34;
CREATE TABLE wp_contacto_tampico34 (
  id int(11) NOT NULL AUTO_INCREMENT,
  date datetime DEFAULT NULL,
  fullname varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
	email varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  phone varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  message varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE USER 'USUARIO'@'%' IDENTIFIED WITH mysql_native_password BY 'CONTRASEÑA';
GRANT ALL PRIVILEGES ON *.* TO 'USUARIO'@'%' WITH GRANT OPTION;