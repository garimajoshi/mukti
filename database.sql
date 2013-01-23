CREATE DATABASE mukti CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS `registered_users` (
    `email_id` varchar(30) NOT NULL,
    `name` varchar(30) NOT NULL,
    `college` varchar(50) NOT NULL,
    `phone` varchar(20) NOT NULL,
    `password` varchar(30) NOT NULL,
    PRIMARY KEY (`email_id`)
    );
