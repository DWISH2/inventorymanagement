-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (armv7l)
--
-- Host: localhost    Database: tbl_camera
-- ------------------------------------------------------
-- Server version	5.5.57-0+deb8u1

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
-- Table structure for table `tbl_camera`
--

DROP TABLE IF EXISTS `tbl_camera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_camera` (
  `cam_id` int(11) NOT NULL AUTO_INCREMENT,
  `cam_name` varchar(25) NOT NULL,
  `cam_quantity` int(11) NOT NULL,
  `cam_location` varchar(7) NOT NULL,
  PRIMARY KEY (`cam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_camera`
--

LOCK TABLES `tbl_camera` WRITE;
/*!40000 ALTER TABLE `tbl_camera` DISABLE KEYS */;
INSERT INTO `tbl_camera` VALUES (2,'Test',12,'Test'),(6,'Dahua IP Camera',2,'A23');
/*!40000 ALTER TABLE `tbl_camera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_inbraak`
--

DROP TABLE IF EXISTS `tbl_inbraak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_inbraak` (
  `iName` varchar(128) DEFAULT NULL,
  `iQty` int(64) DEFAULT NULL,
  `iLoc` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_inbraak`
--

LOCK TABLES `tbl_inbraak` WRITE;
/*!40000 ALTER TABLE `tbl_inbraak` DISABLE KEYS */;
INSERT INTO `tbl_inbraak` VALUES ('Paradox PIR',1,'B3II');
/*!40000 ALTER TABLE `tbl_inbraak` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-15 13:32:55
