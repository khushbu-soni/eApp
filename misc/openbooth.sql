/*
SQLyog Ultimate v9.02 
MySQL - 5.5.20-log : Database - HOGO
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `coupon` */

DROP TABLE IF EXISTS `coupon`;

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `code` varchar(64) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `used` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=469 DEFAULT CHARSET=latin1;

/*Table structure for table `ingredient` */

DROP TABLE IF EXISTS `ingredient`;

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuItemid` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menuItemid` (`menuItemid`),
  CONSTRAINT `ingredient_ibfk_1` FOREIGN KEY (`menuItemid`) REFERENCES `menuitem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `menuitem` */

DROP TABLE IF EXISTS `menuitem`;

CREATE TABLE `menuitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) NOT NULL,
  `calories` int(11) NOT NULL DEFAULT '500',
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `picturepath` varchar(128) NOT NULL,
  `keywords` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `acceptby` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` int(11) NOT NULL DEFAULT '0',
  `orderid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `acceptby` (`acceptby`),
  CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`acceptby`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customername` varchar(64) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  `pickuptime` timestamp NULL DEFAULT NULL,
  `tablenumber` int(11) NOT NULL,
  `tabletnumber` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tablenumber` (`tablenumber`,`tabletnumber`),
  KEY `tabletnumber` (`tabletnumber`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`tablenumber`) REFERENCES `table` (`tablenumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_ibfk_2` FOREIGN KEY (`tabletnumber`) REFERENCES `table` (`tabletnumber`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `orderitem` */

DROP TABLE IF EXISTS `orderitem`;

CREATE TABLE `orderitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `comp` int(11) DEFAULT NULL,
  `ingredients` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentid` int(11) DEFAULT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `orderid` (`orderid`),
  KEY `menuid` (`menuid`),
  KEY `comp` (`comp`),
  KEY `paymentid` (`paymentid`),
  CONSTRAINT `orderitem_ibfk_1` FOREIGN KEY (`menuid`) REFERENCES `menuitem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `orderitem_ibfk_2` FOREIGN KEY (`comp`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=291 DEFAULT CHARSET=latin1;

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paymenttype` int(11) NOT NULL,
  `amount` float NOT NULL,
  `tipamount` float NOT NULL,
  `couponcode` varchar(64) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `orderitem` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tax` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `couponcode` (`couponcode`),
  KEY `orderitem` (`orderitem`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order`) REFERENCES `orderitem` (`orderid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`couponcode`) REFERENCES `coupon` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`orderitem`) REFERENCES `orderitem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `role` int(11) NOT NULL,
  `logincode` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `logincode` (`logincode`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Table structure for table `table` */

DROP TABLE IF EXISTS `table`;

CREATE TABLE `table` (
  `tablenumber` int(11) NOT NULL,
  `tabletnumber` int(11) NOT NULL,
  `inuse` tinyint(1) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notes` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tablenumber` (`tablenumber`,`tabletnumber`),
  KEY `tabletnumber` (`tabletnumber`)
) ENGINE=InnoDB AUTO_INCREMENT=781 DEFAULT CHARSET=latin1;

/*Table structure for table `tabletnotification` */

DROP TABLE IF EXISTS `tabletnotification`;

CREATE TABLE `tabletnotification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `acceptedby` int(11) DEFAULT NULL,
  `tablenumber` int(11) NOT NULL,
  `tabletnumber` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `acceptedby` (`acceptedby`),
  KEY `tablenumber` (`tablenumber`,`tabletnumber`),
  KEY `tabletnumber` (`tabletnumber`),
  CONSTRAINT `tabletnotification_ibfk_2` FOREIGN KEY (`acceptedby`) REFERENCES `staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tabletnotification_ibfk_3` FOREIGN KEY (`tablenumber`) REFERENCES `table` (`tablenumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tabletnotification_ibfk_4` FOREIGN KEY (`tabletnumber`) REFERENCES `table` (`tabletnumber`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
