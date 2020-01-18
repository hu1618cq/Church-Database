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
-- Table structure for table `Assignment`
--

DROP TABLE IF EXISTS `Assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Assignment` (
  `AssignmentID` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeID` int(11) DEFAULT NULL,
  `AssignmentName` varchar(45) DEFAULT NULL,
  `AssignmentDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`AssignmentID`),
  KEY `EmployeeID_idx` (`EmployeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Assignment`
--

LOCK TABLES `Assignment` WRITE;
/*!40000 ALTER TABLE `Assignment` DISABLE KEYS */;
INSERT INTO `Assignment` VALUES (26,1,'Clean Tech','2018-10-01'),(27,2,'Check Employee Record','2018-09-01'),(28,3,'Spiritual development for church member','2017-03-01'),(29,4,'Mentor and trainning volutneer','2017-09-01'),(30,5,'Developing policies and procedures','2016-03-01'),(31,6,'Appointment with Church member','2017-02-10'),(32,7,'Developing strategy or annual budget','2017-09-10');
/*!40000 ALTER TABLE `Assignment` ENABLE KEYS */;
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
