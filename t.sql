-- MySQL dump 10.13  Distrib 5.6.28, for Linux (i686)
--
-- Host: localhost    Database: Jaangu
-- ------------------------------------------------------
-- Server version	5.6.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `additional_details`
--

DROP TABLE IF EXISTS `additional_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `additional_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `additional_details`
--

LOCK TABLES `additional_details` WRITE;
/*!40000 ALTER TABLE `additional_details` DISABLE KEYS */;
INSERT INTO `additional_details` VALUES (1,1,'Property Size','2300 Sq Ft'),(2,1,'Lot size','5000 Sq Ft'),(3,1,'Price','23000'),(4,1,'Rooms','5'),(5,1,'Bedrooms','3'),(6,1,'Garages','4'),(7,1,'Roofing','New'),(8,1,'Structure Type','Bricks'),(9,1,'Year built','1989'),(10,1,'Available from','3 jun 1989');
/*!40000 ALTER TABLE `additional_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_on` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Admin','admin','admin','2016-1-5');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Food',0),(2,'Travel',0),(3,'Movies',0),(4,'sa',2),(5,'Indian',1),(6,'Bollywood',3);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'viki','viki@yahoo.com','Admin123','','','9530069076',0,'2016-01-21');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `details` (
  `id` int(5) DEFAULT NULL,
  `code_name` varchar(45) DEFAULT NULL,
  `game_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details`
--

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` VALUES (1,'criket',NULL),(2,'football',NULL),(3,'fd20','Football'),(3,'Hd20','hocky');
/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'Mumbai'),(2,'Pune'),(3,'Bangalore'),(4,'Delhi'),(5,'Chennai'),(6,'Barmer'),(7,'Udaipur'),(8,'Nasik'),(9,'Jaipur'),(10,'Delhi');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location_details`
--

DROP TABLE IF EXISTS `location_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_details`
--

LOCK TABLES `location_details` WRITE;
/*!40000 ALTER TABLE `location_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `location_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `id` int(5) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `points` int(5) DEFAULT NULL COMMENT '			',
  `code_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` VALUES (1,'viki',5,2),(2,'khushi',3,1),(3,'khushi',2,1),(4,'viki',5,2),(5,'khushi',4,1);
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `retailer_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `initial_qty` int(11) DEFAULT NULL,
  `remaining_qty` int(11) DEFAULT NULL,
  `actual_price` decimal(10,2) DEFAULT NULL,
  `discount_per` int(11) DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `sold_limit` int(11) DEFAULT NULL,
  `additional_info` longtext,
  `policies` longtext,
  `what_you_get` longtext,
  `description` longtext,
  `added_on` date DEFAULT NULL,
  `valid_till` date DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Its first Item',2,6,3,10,8,500.00,20,400,6,'vijay','kumar','Boy','Its just short Description about this Product or Deal','2016-01-25',NULL,1,1),(2,'Its second item',2,6,3,10,8,500.00,20,400,6,'khushi','kumari','Girl','Its just short Description about this Product or Deal','2016-01-25',NULL,1,1),(3,'Third Product',4,9,3,500,400,1000.00,20,800,900,'dfbdlkvdlvflfvndvnvn nlf ndlnk dn dlfn dln ldn ldnk lndl ndl ndl ndln dln ldn ldn ldn ldn ldnfl ndlf ndln dln ldn ldnk ldn ldn ldn lkndl ndlfk ndlkn ldfn ldkfn ldnkf lkdn lnk',' lfnk kdlnfkl ndfl ndflk ndkl ndlkn ldn kldn kldn ldnl kndlk ndln dlknf ldn ldn lnkdl ndlkn kln lfn ldn ldnk dlnl','ldnkblnkdbldl kllk l lkllkgl nkgl nlkn klnlgnk ln lkn lnkkl ndlk ndl d nlnk dkl nln lkndl nln kldnl ndl ndkln lkdnl ndlnk dl nl nln lnl nln ln  nnnl kln ldknlkgnbldgnklnkfln ldkn ln lkgn glkn lkdnf kldn kl','ldnkflndk lndlk ndlndln lkdn ldnl ndl ndln ln lnk lfkn ldnlfn dlbn ldn lkdn ldnlf ndfln dlfn dlfn ldfn ldnk ldn lkdn ldnl knfl kfndlk ndlkn lfkn ldknlfnldfnldfn lkndf lnk lknd lkdnf lkdfn lkn','2016-01-29',NULL,1,1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo` mediumblob,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_image`
--

LOCK TABLES `product_image` WRITE;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` VALUES (1,'chaumeen','',2),(2,'burgger','',2);
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retailer`
--

DROP TABLE IF EXISTS `retailer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `retailer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retailer`
--

LOCK TABLES `retailer` WRITE;
/*!40000 ALTER TABLE `retailer` DISABLE KEYS */;
INSERT INTO `retailer` VALUES (1,'abc','abc@gmail.com','abcd','','324823986',1,1,'2016-01-10'),(2,'def','def@gmail.com','sddf',NULL,'34235545',2,1,'2016-01-10'),(3,'ghi','ghi@gmail.com','sdfsdf',NULL,'234523453',3,1,'2016-01-10'),(4,'jkl','jkl@gmail.com','sdfsdf',NULL,'34535354',2,1,'2016-01-10'),(5,'mno','mno@gmail.com','dsree',NULL,'345345435',1,1,'2016-01-10'),(6,'pqr','pqr@gmail.com','rferdf',NULL,'3453453454',3,1,'2016-01-10'),(7,'','','','','',1,NULL,'2016-01-29'),(8,'sfsdf','sdfsdf','sdfsdf','sdfsdfds','sdfsdfsdf',6,NULL,'2016-01-29'),(9,'Viki','Viki@gmail.com','Admin123','Roy Colony','9530069076',2,NULL,'2016-01-29'),(10,'fgvdv','dvdfvv','dfvfdvdv','vdfdvd','vdfvdfvdfv',10,NULL,'2016-02-01');
/*!40000 ALTER TABLE `retailer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-08 15:05:01
