CREATE DATABASE IF NOT EXISTS `php_bootstrap` CHARACTER SET utf8 COLLATE utf8_general_ci;

USE php_bootstrap;

CREATE TABLE  `users` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 100 ) NOT NULL ,
`email` VARCHAR( 100 ) NOT NULL ,
`mobile` VARCHAR( 100 ) NOT NULL ,
`password` varchar( 255 ) NOT NULL,
`isBan` BOOLEAN not null default 0,
`isVerified` BOOLEAN not null default 0,
`isAdmin` BOOLEAN not null default 0,
`isModo` BOOLEAN not null default 0
) ENGINE = INNODB;

CREATE TABLE  `articles` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`title` VARCHAR( 20 ) NOT NULL ,
`subtitle` VARCHAR( 100 ) NOT NULL ,
`description` VARCHAR(255) NOT NULL,
`isVerified` BOOLEAN not null default 0,
`isSuspend` BOOLEAN not null default 0
) ENGINE = INNODB;