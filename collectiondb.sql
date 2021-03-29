# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: exercise2
# Generation Time: 2021-03-29 11:27:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table collectionapp
# ------------------------------------------------------------

DROP TABLE IF EXISTS `collectionapp`;

CREATE TABLE `collectionapp` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Brand` varchar(11) DEFAULT NULL,
  `Model` varchar(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `collectionapp` WRITE;
/*!40000 ALTER TABLE `collectionapp` DISABLE KEYS */;

INSERT INTO `collectionapp` (`id`, `Brand`, `Model`, `Year`)
VALUES
	(1,'Audi','RS3',2015),
	(2,'Mercedes','A45',2018),
	(3,'BMW','140i',2020),
	(4,'Volkswagen','Golf R',2021),
	(5,'Mercedes','C63',2015),
	(6,'BMW','M3',2021),
	(7,'Audi','RS6',2019),
	(8,'BMW','M4',2021),
	(9,'Audi','RS5',2019),
	(10,'Bentley','Continental',2018);

/*!40000 ALTER TABLE `collectionapp` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
