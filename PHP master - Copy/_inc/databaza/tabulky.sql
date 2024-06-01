CREATE DATABASE IF NOT EXISTS `zoo_data`;

USE `zoo_data`;


CREATE TABLE `praca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meno` varchar(40) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `pozicia` varchar(40) DEFAULT NULL,
  `kompetencie` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;


CREATE TABLE `pouzivatel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `heslo` varchar(60) NOT NULL,
  `opravnenia` tinyint(2) NOT NULL DEFAULT 1 COMMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;


CREATE TABLE `qna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `otazka` varchar(255) NOT NULL,
  `odpoved` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;
