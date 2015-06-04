/*
SQLyog Community Edition- MySQL GUI v6.15
MySQL - 5.6.17 : Database - booking_tours
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `booking_tours`;

USE `booking_tours`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `booking_info` */

DROP TABLE IF EXISTS `booking_info`;

CREATE TABLE `booking_info` (
  `BookingID` int(11) NOT NULL AUTO_INCREMENT,
  `TourType` varchar(100) DEFAULT NULL,
  `TourPackage` varchar(100) DEFAULT NULL,
  `DateSelected` varchar(100) DEFAULT NULL,
  `NumberOfPeople` varchar(10) DEFAULT NULL,
  `AmountPaid` varchar(100) DEFAULT NULL,
  `BookedBy_Name` text,
  `BookedBy_Email` text,
  `BookedBy_Phone` varchar(100) DEFAULT NULL,
  `PaymentStatus` varchar(50) DEFAULT NULL,
  `Description` text,
  PRIMARY KEY (`BookingID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `booking_info` */

/*Table structure for table `tourspackageinfo` */

DROP TABLE IF EXISTS `tourspackageinfo`;

CREATE TABLE `tourspackageinfo` (
  `TourID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TourType` varchar(100) DEFAULT NULL COMMENT '1: Ninebottours, 2: BikeTours, 3:VespaTours',
  `TourDestination` varchar(255) DEFAULT NULL COMMENT 'Required in ninebottours',
  `StartPoint` varchar(255) DEFAULT NULL COMMENT 'Departure points',
  `Route` text,
  `EndPoint` varchar(255) DEFAULT NULL,
  `TourDescription` text,
  `TourPackagegroupID` int(10) DEFAULT NULL,
  `TourPackageName` varchar(255) DEFAULT NULL,
  `TourPackageFacilities` text,
  `TourPricePerPerson` varchar(100) DEFAULT NULL,
  `TourDifficultyLevel` varchar(255) DEFAULT NULL,
  `Duration` varchar(100) DEFAULT NULL,
  `Additional_Price` varchar(100) DEFAULT NULL,
  `ExclusiveTaxes` varchar(100) DEFAULT NULL COMMENT 'These should be applied only when taxes are not included in Tours where price per person is exclusive of tax',
  PRIMARY KEY (`TourID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tourspackageinfo` */

insert  into `tourspackageinfo`(`TourID`,`TourType`,`TourDestination`,`StartPoint`,`Route`,`EndPoint`,`TourDescription`,`TourPackagegroupID`,`TourPackageName`,`TourPackageFacilities`,`TourPricePerPerson`,`TourDifficultyLevel`,`Duration`,`Additional_Price`,`ExclusiveTaxes`) values (1,'1','Ancient Rome - Colosseum - Capitoline Hill','TORRE ARGENTINA',NULL,NULL,'From the Colosseum to the Capitol in this amazing promenade along the roads of the Roman Empire, among circuses and temples as well as gardens and sunlit terraces.',1,'Standard',NULL,'85',NULL,'3','0',NULL),(2,'1','The city of the pope kings','TORRE ARGENTINA',NULL,NULL,'From beautiful Baroque and Renaissance Navona Square and the mighty Pantheon to majestic St. Peter\'s and the Vatican.',2,'Standard',NULL,'85',NULL,'3','0',NULL),(3,'1','Ghetto, Tiber island and Trastevere','TORRE ARGENTINA',NULL,NULL,'The old streets of the Jewish Ghetto will give you a pretty good idea of what the Ghetto was like hundreds of years ago.\r\nWe then cross the thousand-year bridge on to Tiber Island from where we glide on through Trastevere.',3,'Standard',NULL,'50',NULL,'2','0',NULL),(4,'1','Moonlight tour of Rome','TORRE ARGENTINA',NULL,NULL,'Come out with us tonight!\r\nThe most beautiful and spectacular squares and fountains of Rome by night.',4,'Standard',NULL,'85',NULL,'3','0',NULL),(5,'1','Moonlight tour of Rome','TORRE ARGENTINA',NULL,NULL,'Come out with us tonight!\r\nThe most beautiful and spectacular squares and fountains of Rome by night.',4,'Standard with dinner','With dinner','85',NULL,'3','15',NULL),(6,'1','Villa Borghese','PINCIO – VILLA BORGHESE',NULL,NULL,'The most important villa of Rome with its lake (30 min. boat tour) and amazing views from the Pincio terrace across the city.',5,'Standard',NULL,'50',NULL,'2','0',NULL),(7,'1','Villa Borghese','PINCIO – VILLA BORGHESE',NULL,NULL,'The most important villa of Rome with its lake (30 min. boat tour) and amazing views from the Pincio terrace across the city.',5,'Standard with dinner','With dinner','50',NULL,'3','10',NULL),(8,'1','Best of Rome’s villas, terraces and fountains','PINCIO – VILLA BORGHESE',NULL,NULL,'The wonderful villas, terraces and fountains of Rome (including the Spanish Steps, the Trevi Fountain, etc.).',6,'Standard',NULL,'85',NULL,'3','0',NULL),(9,'1','Best of Rome’s villas, terraces and fountains','PINCIO – VILLA BORGHESE',NULL,NULL,'The wonderful villas, terraces and fountains of Rome (including the Spanish Steps, the Trevi Fountain, etc.).',6,'Standard with dinner','With dinner','85',NULL,'3','15',NULL),(10,'1','Trastevere and Janiculum','TRASTEVERE',NULL,NULL,'Trastevere is a delightful historic neighbourhood full of charm and history reflected in its narrow cobbled streets lined by medieval houses.\r\nThe Janiculum provides one of the best locations for a scenic view of Rome\' s innumerable domes and bell towers.',7,'Standard',NULL,'30',NULL,'1','0',NULL),(11,'1','Trastevere','TRASTEVERE',NULL,NULL,'Rome’s most characterful neighbourhood. The labyrinth of little alleys and hidden treasures from ancient, mediaeval and Renaissance Rome is not to be missed!',8,'Standard with wine-test','With wine tasting','50',NULL,'2','0',NULL),(12,'1','Trastevere','TRASTEVERE',NULL,NULL,'Rome’s most characterful neighbourhood. The labyrinth of little alleys and hidden treasures from ancient, mediaeval and Renaissance Rome is not to be missed!',8,'Standard with dinner','With dinner','50',NULL,'2','0',NULL),(13,'1','Appian Way, catacombs and the tomb of Cecilia Metella','CIRCUS MAXIMUS',NULL,NULL,'An unforgettable tour in the beautiful countryside surrounding Rome. The Appian Way was one of the earliest and strategically most important Roman roads of the ancient republic.\r\nIt is lined with tombs and catacombs, including the famous Crypt of the Popes.',9,'Standard',NULL,'85',NULL,'3','0',NULL),(14,'1','Appian Way, catacombs and the tomb of Cecilia Metella','CIRCUS MAXIMUS',NULL,NULL,'An unforgettable tour in the beautiful countryside surrounding Rome. The Appian Way was one of the earliest and strategically most important Roman roads of the ancient republic.\r\nIt is lined with tombs and catacombs, including the famous Crypt of the Popes.',9,'Standard with lunch','With lunch','85',NULL,'4','17','10'),(15,'1','Appian Way, catacombs and the tomb of Cecilia Metella','CIRCUS MAXIMUS',NULL,NULL,'An unforgettable tour in the beautiful countryside surrounding Rome. The Appian Way was one of the earliest and strategically most important Roman roads of the ancient republic.\r\nIt is lined with tombs and catacombs, including the famous Crypt of the Popes.',9,'Standard with picninc','With picnic','85',NULL,'4','17','10'),(16,'1','Appian Way, catacombs and the tomb of Cecilia Metella','CIRCUS MAXIMUS',NULL,NULL,'An unforgettable tour in the beautiful countryside surrounding Rome. The Appian Way was one of the earliest and strategically most important Roman roads of the ancient republic.\r\nIt is lined with tombs and catacombs, including the famous Crypt of the Popes.',9,'Standard with cena','With cena','85',NULL,'4','25','10'),(17,'1','Appian Way, catacombs and the tomb of Cecilia Metella','CIRCUS MAXIMUS',NULL,NULL,'An unforgettable tour in the beautiful countryside surrounding Rome. The Appian Way was one of the earliest and strategically most important Roman roads of the ancient republic.\r\nIt is lined with tombs and catacombs, including the famous Crypt of the Popes.',9,'Standard with catacombs visit','With catacombs visit','100',NULL,'4','0','0'),(18,'1','Vatican and the most beautiful squares','SAINT PETER',NULL,NULL,NULL,10,'Standard',NULL,'85',NULL,'3','0','0'),(19,'1','Dolce vita tour','TERMINI',NULL,NULL,NULL,11,'Standard',NULL,'50',NULL,'2','0','0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
