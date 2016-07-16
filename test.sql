CREATE DATABASE  IF NOT EXISTS `expense` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `expense`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: expense
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.10-MariaDB

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
-- Table structure for table `expense_users`
--

DROP TABLE IF EXISTS `expense_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_users`
--

LOCK TABLES `expense_users` WRITE;
/*!40000 ALTER TABLE `expense_users` DISABLE KEYS */;
INSERT INTO `expense_users` VALUES (1,5,'asdf'),(2,5,'asdf'),(3,5,'manjk lkioiss'),(15,5,'asdfasdf');
/*!40000 ALTER TABLE `expense_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense_subcategory`
--

DROP TABLE IF EXISTS `expense_subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expense_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_subcategory`
--

LOCK TABLES `expense_subcategory` WRITE;
/*!40000 ALTER TABLE `expense_subcategory` DISABLE KEYS */;
INSERT INTO `expense_subcategory` VALUES (1,1,'Cable TV');
/*!40000 ALTER TABLE `expense_subcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense_subcategory_users`
--

DROP TABLE IF EXISTS `expense_subcategory_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_subcategory_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_subcategory_users`
--

LOCK TABLES `expense_subcategory_users` WRITE;
/*!40000 ALTER TABLE `expense_subcategory_users` DISABLE KEYS */;
INSERT INTO `expense_subcategory_users` VALUES (1,'Cell',82,2425),(2,'Phone',82,2425),(3,'Pencil',83,2425),(4,'Espn',82,2425),(15,'fesfesfefesfesfesseeee',82,2425),(14,'123',82,2425),(13,'fasdfasdf',82,2425),(12,'23',82,2425),(16,'asdfasdf',82,2425),(18,'asdfsadf',86,2425),(19,'safasdf',86,2425),(20,'fesfesfe',86,2425),(21,'afaf',82,2425),(32,'kdioejkse dfdf',114,2425),(23,'gsgsdfg',83,2425),(24,'fe',82,2425),(39,'dasfasdf',118,2425),(38,'fasdfieasfe',84,2425),(34,'asdffasdfasdf',114,2425),(36,'rr',84,2425);
/*!40000 ALTER TABLE `expense_subcategory_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense_category_users`
--

DROP TABLE IF EXISTS `expense_category_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_category_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_category_users`
--

LOCK TABLES `expense_category_users` WRITE;
/*!40000 ALTER TABLE `expense_category_users` DISABLE KEYS */;
INSERT INTO `expense_category_users` VALUES (118,2425,'adfasdf','2016-07-15 17:27:03');
/*!40000 ALTER TABLE `expense_category_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense_category`
--

DROP TABLE IF EXISTS `expense_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense_category`
--

LOCK TABLES `expense_category` WRITE;
/*!40000 ALTER TABLE `expense_category` DISABLE KEYS */;
INSERT INTO `expense_category` VALUES (1,'Bills'),(2,'Education'),(3,'Food'),(4,'Personal'),(5,'Transportation');
/*!40000 ALTER TABLE `expense_category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-15 17:29:14
