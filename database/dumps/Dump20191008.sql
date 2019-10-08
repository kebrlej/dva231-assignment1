CREATE DATABASE  IF NOT EXISTS `assignment3` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `assignment3`;
-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: assignment3
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

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
-- Table structure for table `news_article`
--

DROP TABLE IF EXISTS `news_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_article` (
  `idnews_article` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `imgurl` text NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`idnews_article`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_article`
--

LOCK TABLES `news_article` WRITE;
/*!40000 ALTER TABLE `news_article` DISABLE KEYS */;
INSERT INTO `news_article` VALUES (1,'Big title','some url','Nice content'),(2,'SpaceX\'s Next Starship Prototype Taking Shape ','https://cdn.mos.cms.futurecdn.net/gLAiKfmDHWuzNpo5TeSLe4-1024-80.jpg','Construction of the test craft is proceeding apace, as two new photos posted on Twitter today (Sept. 17) by company founder and CEO Elon Musk reveal.'),(3,'NASA\'s Juno Mission Cheks Out Eclipse on Jupiter','https://cdn.mos.cms.futurecdn.net/Utrp9avtzvdee9UZyrxLVC-650-80.jpg','All is well on our largest neighbor; NASA\'s Juno spacecraft just managed to spot the shadow of Jupiter\'s moon, Io, passing over its marbled clouds.'),(4,'Europe Wants Ideas for Cave-Spelumking Moon Robots','https://cdn.mos.cms.futurecdn.net/8X7AGzgNVb86gk9Sbn8xYo-1024-80.jpg','As NASA makes a big push to land humans on the moon\'s surface by 2024, the European Space Agency (ESA) wants to learn more about the lunar caves that lie beneath.'),(5,'Florida man arrested at Kennedy Space Center, said he wanted to light cigarette with rocket engine ','https://www.lafloride.com/images/kennedy-space-center-01.jpg','At 4 pm, a 27yo man, known from the authorities for detention of drugs, got arrested with a joint of 100g of cannabis.'),(6,'Hubble satellite delivers astonishing map of Jupiter','https://www.nasa.gov/sites/default/files/styles/full_width/public/thumbnails/image/jupapr3color-jd-170304.png','As reliable as it is for nearly 30 years, Hubble satellite, on its duty of making us see the Solar System, delivers us a whole 360Â° map of our largest neighbour.'),(7,'NASA Research Gives New Insight into How Much Atmosphere Mars Lost','https://www.nasa.gov/sites/default/files/thumbnails/image/mars_landscape_dry_wet_0.png','A key tracer used to estimate how much atmosphere Mars lost can change depending on the time of day and the surface temperature on the Red Planet, according to new observations by NASA-funded scientists.'),(8,'SpaceX\'s Next Starship Prototype Taking Shape ','https://cdn.mos.cms.futurecdn.net/gLAiKfmDHWuzNpo5TeSLe4-1024-80.jpg','Construction of the test craft is proceeding apace, as two new photos posted on Twitter today (Sept. 17) by company founder and CEO Elon Musk reveal.'),(9,'NASA\'s Juno Mission Cheks Out Eclipse on Jupiter','https://cdn.mos.cms.futurecdn.net/Utrp9avtzvdee9UZyrxLVC-650-80.jpg','All is well on our largest neighbor; NASA\'s Juno spacecraft just managed to spot the shadow of Jupiter\'s moon, Io, passing over its marbled clouds.'),(10,'Europe Wants Ideas for Cave-Spelumking Moon Robots','https://cdn.mos.cms.futurecdn.net/8X7AGzgNVb86gk9Sbn8xYo-1024-80.jpg','As NASA makes a big push to land humans on the moon\'s surface by 2024, the European Space Agency (ESA) wants to learn more about the lunar caves that lie beneath.'),(11,'Florida man arrested at Kennedy Space Center, said he wanted to light cigarette with rocket engine ','https://www.lafloride.com/images/kennedy-space-center-01.jpg','At 4 pm, a 27yo man, known from the authorities for detention of drugs, got arrested with a joint of 100g of cannabis.'),(12,'Hubble satellite delivers astonishing map of Jupiter','https://www.nasa.gov/sites/default/files/styles/full_width/public/thumbnails/image/jupapr3color-jd-170304.png','As reliable as it is for nearly 30 years, Hubble satellite, on its duty of making us see the Solar System, delivers us a whole 360Â° map of our largest neighbour.'),(13,'NASA Research Gives New Insight into How Much Atmosphere Mars Lost','https://www.nasa.gov/sites/default/files/thumbnails/image/mars_landscape_dry_wet_0.png','A key tracer used to estimate how much atmosphere Mars lost can change depending on the time of day and the surface temperature on the Red Planet, according to new observations by NASA-funded scientists.');
/*!40000 ALTER TABLE `news_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `iduser_info` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`iduser_info`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (1,'hello','world'),(2,'adsf','asdfasdf');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-08 16:19:33
