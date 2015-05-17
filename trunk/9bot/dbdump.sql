/*
SQLyog Community Edition- MySQL GUI v6.15
MySQL - 5.6.17 : Database - ninebotdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `ninebotdb`;

USE `ninebotdb`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `bookinginfo` */

DROP TABLE IF EXISTS `bookinginfo`;

CREATE TABLE `bookinginfo` (
  `bookingId` int(11) NOT NULL AUTO_INCREMENT,
  `tourId` int(11) NOT NULL,
  `bookingDate` varchar(45) DEFAULT NULL,
  `personCount` int(11) DEFAULT NULL,
  `bookedOn` datetime DEFAULT NULL,
  PRIMARY KEY (`bookingId`),
  UNIQUE KEY `bookingId_UNIQUE` (`bookingId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `bookinginfo` */

insert  into `bookinginfo`(`bookingId`,`tourId`,`bookingDate`,`personCount`,`bookedOn`) values (1,1,'25-04-2015',3,NULL),(2,2,'11-04-2015',7,NULL),(3,1,'25-04-2015',3,NULL);

/*Table structure for table `tourinfo` */

DROP TABLE IF EXISTS `tourinfo`;

CREATE TABLE `tourinfo` (
  `tourId` int(11) NOT NULL AUTO_INCREMENT,
  `tourName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tourId`),
  UNIQUE KEY `tourId_UNIQUE` (`tourId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tourinfo` */

insert  into `tourinfo`(`tourId`,`tourName`) values (1,'Ancient Rome – Colosseum – Capitoline Hill'),(2,'Ancient Rome – Colosseum – Capitoline Hill'),(3,'Ghetto, Tiber island and Trastevere'),(4,'Moonlit tour of Rome'),(5,'Villa Borghese'),(6,'Best of Rome’s villas, terraces and fountains'),(7,'Trastevere and Janiculum'),(8,'Trastevere'),(9,NULL);

/*Table structure for table `tourpriceinfo` */

DROP TABLE IF EXISTS `tourpriceinfo`;

CREATE TABLE `tourpriceinfo` (
  `UID` int(11) NOT NULL,
  `tourId` int(11) DEFAULT NULL,
  `unitPrice` varchar(45) DEFAULT NULL,
  `basePrice` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `UID_UNIQUE` (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tourpriceinfo` */

insert  into `tourpriceinfo`(`UID`,`tourId`,`unitPrice`,`basePrice`) values (101,1,'85','0'),(201,2,'85','0'),(301,3,'50','0'),(401,4,'85','0'),(402,4,'100','0'),(501,5,'50','0'),(502,5,'60','0'),(601,6,'85','0'),(602,6,'100','0'),(701,7,'30','0'),(801,8,'50','0'),(802,8,'50','0'),(901,9,'85','0'),(902,9,'85','20'),(903,9,'85','20'),(904,9,'85','30'),(905,9,'100',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
