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
-- Table structure for table `Member`
--

DROP TABLE IF EXISTS `Member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Member` (
  `MemberID` int(11) NOT NULL,
  `PersonID` int(11) NOT NULL AUTO_INCREMENT,
  `RenewalDate` date DEFAULT NULL,
  `Payment_Type` varchar(10) DEFAULT NULL,
  `FamilyCount` int(11) DEFAULT NULL,
  `DateJoin` date DEFAULT NULL,
  `Application` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MemberID`),
  KEY `Person_idx` (`PersonID`)
) ENGINE=InnoDB AUTO_INCREMENT=1239 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Member`
--

LOCK TABLES `Member` WRITE;
/*!40000 ALTER TABLE `Member` DISABLE KEYS */;
INSERT INTO `Member` VALUES (0,1238,'2018-01-03','Credit Car',2,'2017-01-03','No'),(1,1,'2018-01-03','Cash',3,'2018-09-10','Yes'),(2,2,'2019-09-02','Check',10,'2018-09-02','Yes'),(3,3,'2018-03-01','Cash',4,'2017-03-01','Yes'),(4,4,'2018-09-01','Credit Car',1,'2017-09-01','Yes'),(5,5,'2019-02-10','Cash',5,'2018-02-10','No'),(6,6,'2017-03-01','Check',4,'2018-03-01','Yes'),(7,7,'2018-02-10','Cash',4,'2017-02-10','Yes'),(8,8,'2016-03-01','Credit Car',2,'2015-03-01','No'),(9,9,'2018-09-10','Cash',2,'2017-09-10','Yes');
/*!40000 ALTER TABLE `Member` ENABLE KEYS */;
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
