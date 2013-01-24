CREATE DATABASE mukti13 CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `registered_users` (
    `id` int NOT NULL auto_increment,
    `email_id` varchar(30) NOT NULL,
    `name` varchar(30) NOT NULL,
    `confirmation_code` varchar(50) NOT NULL,
    `college` varchar(50) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `password` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
    );
