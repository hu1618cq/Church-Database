-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: ChurchDatabase
-- ------------------------------------------------------
-- Server version	5.6.31

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
-- Table structure for table `Person`
--

DROP TABLE IF EXISTS `Person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Person` (
  `PersonID` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Zip` varchar(5) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Personnel_Type` varchar(45) DEFAULT NULL,
  `DateModified` date DEFAULT NULL,
  PRIMARY KEY (`PersonID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Person`
--

LOCK TABLES `Person` WRITE;
/*!40000 ALTER TABLE `Person` DISABLE KEYS */;
INSERT INTO `Person` VALUES (1,'John','Johnsin','1123 White Bear','55107','7658976765','john@gmail.com','Member','2018-10-01'),(2,'Jack','Thao','1183 Euclid Street','55106','6517938422','Jack123@gmail.com','Both','2017-01-03'),(3,'Kalden','Han','4521 White Bear avenue','55109','6518881619','Kalden21@gmail.com','Both','2018-09-02'),(4,'David','Stevenson','678 Jackson Avenue','55123','7639881619','David07@gmail.com','Employee','2017-03-01'),(5,'Kevin','Vang','768 Jackson Avenue','55106','6578964444','StevenK@gmail.com','Employee','2017-09-01'),(6,'David','Yang','4512 White Bear Avenue','55106','6517923145','David123@gmail.com','Member','2017-08-04'),(7,'Kevin','Vang','1892 Earl Street','55106','6518882314','Kevin43@gmail.com','Employee','2018-02-10'),(8,'David','Thao','1892 Earl Street','55106','6517938888','David8@gmail.com','Employee','2015-03-01'),(9,'Kyle','Yang','1623 Euclid Street','51506','6517938662','KyleYang@gmail.com','Employee','0000-00-00');
/*!40000 ALTER TABLE `Person` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-16 19:36:32
