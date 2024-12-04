CREATE DATABASE `swoole`;

USE `swoole`;

create table `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `role` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

insert into `users` (`id`, `name`, `password`, `role`) values (1, 'admin', 'admin', 'admin');
insert into `users` (`id`, `name`, `password`, `role`) values (2, 'user', 'user', 'user');