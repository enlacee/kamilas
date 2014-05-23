CREATE DATABASE  IF NOT EXISTS `free_kamilas` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `free_kamilas`;
-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: free_kamilas
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.13.10.1

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
-- Table structure for table `multi_uploads`
--

DROP TABLE IF EXISTS `multi_uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multi_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `image` int(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL,
  `type_id` int(1) NOT NULL DEFAULT '1',
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `display_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multi_uploads`
--

LOCK TABLES `multi_uploads` WRITE;
/*!40000 ALTER TABLE `multi_uploads` DISABLE KEYS */;
INSERT INTO `multi_uploads` VALUES (1,1,1,'1350486184_447226731_2-impresora-Hp-D1660-Valencia.jpg',1,'jpg',1,'13504861844472267312impresoraHpD1660Valencia','','2014-02-15 05:10:30',0),(2,1,1,'htc-android.jpg',1,'jpg',1,'htcandroid','','2014-02-17 01:43:24',0);
/*!40000 ALTER TABLE `multi_uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paginas`
--

DROP TABLE IF EXISTS `paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paginas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalle` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paginas`
--

LOCK TABLES `paginas` WRITE;
/*!40000 ALTER TABLE `paginas` DISABLE KEYS */;
INSERT INTO `paginas` VALUES (1,'Embarazo','\r\n<p>Detalle de la seccion...</p>');
/*!40000 ALTER TABLE `paginas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` enum('preconcepcion','embarazo','bebes','ninos','adolescentes') NOT NULL COMMENT 'set int or name',
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1= ON, 0 =OFF',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'preconcepcion','Fertilidad','preconcepcion 01 CONTENT','2014-05-23','0000-00-00',1),(2,'preconcepcion','Adn y Genetica','preconcepcion 01 CONTENT','2014-05-23',NULL,1),(3,'preconcepcion','Preconcepcion','preconcepcion 02 CONTENT','2014-05-23',NULL,1),(4,'preconcepcion','Planificacion','preconcepcion 02 CONTENT','2014-05-23',NULL,1),(8,'embarazo','Cada Semana','embarazo 01 CONTENT','2014-05-23',NULL,1),(9,'embarazo','Cuidados de Mama','embarazo 02 CONTENT','2014-05-23',NULL,1),(10,'embarazo','Cuidados del bebe','embarazo 03 CONTENT','2014-05-23',NULL,1),(11,'embarazo','Baby shower','embarazo 04 CONTENT','2014-05-23',NULL,1),(12,'bebes','Primeras Horas','Primeras Horas CONTENT','2014-05-23',NULL,1),(13,'bebes','Recien Nacidos','bebes 03 CONTENT','2014-05-23',NULL,1),(14,'ninos','niños 1','ninos 01 CONTENT','2014-05-23',NULL,1),(15,'ninos','niños 2','ninos 02 CONTENT','2014-05-23',NULL,1),(16,'ninos','niños 3','ninos 03 CONTENT','2014-05-23',NULL,1),(17,'adolescentes','adolescentes 01','adolescentes 01 CONTENT','2014-05-23',NULL,1),(18,'adolescentes','adolescentes 02','adolescentes 02 CONTENT','2014-05-23',NULL,1),(19,'adolescentes','adolescentes 03','adolescentes 03 CONTENT','2014-05-23',NULL,1),(20,'adolescentes','adolescentes 04','adolescentes 04 CONTENT','2014-05-23',NULL,1),(21,'embarazo','Baby shower','Baby shower CONTENT','2014-05-23',NULL,1),(22,'embarazo','Parto','Parto content','2014-05-23',NULL,1),(23,'embarazo','Post parto','Post parto content','2014-05-23',NULL,1),(24,'bebes','Salud del bebe','Salud del bebe','2014-05-23',NULL,1),(25,'bebes','Higiene del bebe','Higiene del bebe','2014-05-23',NULL,1),(26,'bebes','Lactancia','Lactancia',NULL,NULL,1),(27,'bebes','Bebe','Bebe',NULL,NULL,1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Luis Figuera','admin','c4ca4238a0b923820dcc509a6f75849b','milindex@gmail.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-23 17:34:33
