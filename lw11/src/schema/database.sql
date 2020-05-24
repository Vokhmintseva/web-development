CREATE DATABASE IF NOT EXISTS `user`;
USE `user`;
CREATE TABLE IF NOT EXISTS `user_data`
    (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `country` VARCHAR(255) NOT NULL,
    `gender` VARCHAR(255) NOT NULL,
    `message` TEXT NOT NULL,
    PRIMARY KEY (`id`)
    ) DEFAULT CHARACTER SET utf8mb4
    COLLATE `utf8mb4_unicode_ci`
    ENGINE = InnoDB
    ;