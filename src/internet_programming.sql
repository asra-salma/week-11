-- Adminer 4.8.1 MySQL 5.5.5-10.0.17-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `film`;
CREATE TABLE `film` (
  `title` varchar(255) NOT NULL,
  `yearOfRelease` int(11) NOT NULL,
  `director` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `film` (`title`, `yearOfRelease`, `director`, `genre`) VALUES
('nemo',	2021,	'james',	'adventure'),
('avengers',	2020,	'james',	'fiction'),
('thor',	2020,	'james',	'fiction'),
('ironman',	2012,	'harry',	'fiction'),
('harrypotter',	2010,	'rowling',	'science'),
('lordrings',	2010,	'rowling',	'science'),
('pooh',	2000,	'jane',	'animated'),
('mick',	2000,	'jane',	'animated');

DROP TABLE IF EXISTS `person`;
CREATE TABLE `person` (
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `person` (`firstname`, `surname`, `birthday`, `email`) VALUES
('Cardinal',	'Henry',	'2012-04-04 00:00:00',	'cardinal@yahoo.com'),
('kane',	'harry',	'2012-05-04 00:00:00',	'harry@yahoo.com'),
('James',	'Tom',	'2022-05-02 18:39:29',	'james@gmail.com'),
('lopez',	'lauraine',	'2012-04-04 00:00:00',	'laor@yahoo.com');

-- 2022-05-02 15:30:53
