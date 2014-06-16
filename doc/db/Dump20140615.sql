CREATE DATABASE  IF NOT EXISTS `free_kamilas` /*!40100 DEFAULT CHARACTER SET latin1 */;
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
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `status` int(1) DEFAULT '1' COMMENT '1 = on 0= off',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `position` enum('central','otro') NOT NULL COMMENT 'category of banner',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'image 01','1.jpg',1,'2014-05-28',NULL,'central'),(2,'image 02','2.jpg',1,'2014-05-28',NULL,'central'),(4,'new del','3.jpg',1,'2014-05-29',NULL,'central'),(6,'new','4.jpg',1,'2014-05-29',NULL,'central'),(7,'acccc','5.jpg',1,'2014-05-29',NULL,'central'),(9,'aaaa','1401346943.jpg',1,'2014-05-29',NULL,'central');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `multi_uploads` VALUES (1,1,1,'1350486184_447226731_2-impresora-Hp-D1660-Valencia.jpg',1,'jpg',1,'13504861844472267312impresoraHpD1660Valencia','','2014-02-15 10:10:30',0),(2,1,1,'htc-android.jpg',1,'jpg',1,'htcandroid','','2014-02-17 06:43:24',0);
/*!40000 ALTER TABLE `multi_uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL COMMENT 'image path',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1 = on 0 =off',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'¿Que es la familia? IMG','La familia es un grupo de personas que se respeta y ama. La familia puede estar formada por el papá, la mamá, los hermanos, abuelos y abuelas, tíos y tías, primos y primas y por supuesto por ti.\r\n\r\nComo podrás observar la familia en la mayoría de los casos es bastante numerosa y por consiguiente no toda la familia cabe dentro de una misma casa. En nuestro hogar solo está un grupo reducido de la familia. Las tías y los tíos viven con sus esposos, esposas e hijos en otra casa, formando así cada uno de ellos una nueva familia.&nbsp;IMG','1401402576.jpg','2014-05-26','2014-05-29',1),(2,'¿Que es la familia?','La familia es un grupo de personas que se respeta y ama. La familia puede estar formada por el papá, la mamá, los hermanos, abuelos y abuelas, tíos y tías, primos y primas y por supuesto por ti.\r\n\r\nComo podrás observar la familia en la mayoría de los casos es bastante numerosa y por consiguiente no toda la familia cabe dentro de una misma casa. En nuestro hogar solo está un grupo reducido de la familia. Las tías y los tíos viven con sus esposos, esposas e hijos en otra casa, formando así cada uno de ellos una nueva familia.','banner2.jpg','2014-05-26','0000-00-00',0),(3,'xxxxxx123','xccccccc123','1401226633.png','2014-05-27','2014-05-27',0),(4,'nuevo title','nuevo content','1401221635.jpg','2014-05-27',NULL,1),(5,'test title ñaña','test title&nbsp;ñaña ','1401402395.png','2014-05-27','2014-05-29',0),(8,'Relleno estándar de las industrias','\r\n<p><span style=\"font-weight: bold;\">Lorem Ipsum</span> es simplemente el texto \r\nde relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el \r\ntexto de relleno estándar de las industrias desde el año 1500, cuando un\r\n impresor (N. del T. persona que se dedica a la imprenta) desconocido \r\nusó una galería de textos y los mezcló de tal manera que logró hacer un \r\nlibro de textos especimen. No sólo sobrevivió 500 años, sino que tambien\r\n ingresó como texto de relleno en documentos electrónicos, quedando \r\nesencialmente igual al original. Fue popularizado en los 60s con la \r\ncreación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem \r\nIpsum, y más recientemente con software de autoedición, como por ejemplo\r\n Aldus  PageMaker, el cual incluye versiones de Lorem Ipsum.</p>\r\n<div class=\"rc\">\r\n	<p>Es\r\n un hecho establecido hace demasiado tiempo que un lector se distraerá \r\ncon el contenido del texto de un sitio mientras que mira su diseño. El \r\npunto de usar Lorem Ipsum es que tiene una distribución más o menos \r\nnormal de las letras, al contrario de usar textos como por ejemplo \r\n\"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un \r\nespañol que se puede leer. Muchos paquetes de autoedición y editores de \r\npáginas web usan el Lorem Ipsum como su texto por defecto, y al hacer \r\nuna búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a trav&eacute;s de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).</p></div>','1402327777.jpg','2014-06-09',NULL,1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'preconcepcion','Fertilidad ÑAÑAÑ','\r\n<p>&nbsp;preconcepcion 01 CONTENT 123<span style=\"font-weight: bold;\">123</span></p>\r\n<p>&nbsp;Fertilidad ÑAÑAÑ</p>\r\n<p><span style=\"font-weight: bold;\"> </span></p>              ','2014-05-23','2014-05-29',1),(2,'preconcepcion','Adn y Genetica','preconcepcion 01 CONTENT','2014-05-23',NULL,1),(3,'preconcepcion','Preconcepcion','preconcepcion 02 CONTENT','2014-05-23',NULL,1),(4,'preconcepcion','Planificacion','preconcepcion 02 CONTENT','2014-05-23',NULL,1),(8,'embarazo','Cada Semana','embarazo 01 CONTENT','2014-05-23',NULL,1),(9,'embarazo','Cuidados de Mama','embarazo 02 CONTENT','2014-05-23',NULL,1),(10,'embarazo','Cuidados del bebe','embarazo 03 CONTENT','2014-05-23',NULL,1),(11,'embarazo','Baby shower','embarazo 04 CONTENT','2014-05-23',NULL,1),(12,'bebes','Primeras Horas','Primeras Horas CONTENT','2014-05-23',NULL,1),(13,'bebes','Recien Nacidos','bebes 03 CONTENT','2014-05-23',NULL,1),(14,'ninos','Salud del niño','Salud del niño CONTENT','2014-05-23',NULL,1),(15,'ninos','Mes a Mes','Mes a Mes content','2014-05-23',NULL,1),(16,'ninos','Valores','Valores CONTENT','2014-05-23',NULL,1),(17,'adolescentes','Salud','adolescentes 01 Salud','2014-05-23',NULL,1),(18,'adolescentes','Higiene','adolescentes 02 Higiene','2014-05-23',NULL,1),(19,'adolescentes','Valores','adolescentes 03 Valores','2014-05-23',NULL,1),(20,'adolescentes','Cambios','adolescentes 04 Cambios','2014-05-23',NULL,1),(22,'embarazo','Parto','Parto content','2014-05-23',NULL,1),(23,'embarazo','Post parto','Post parto content','2014-05-23',NULL,1),(24,'bebes','Salud del bebe','Salud del bebe','2014-05-23',NULL,1),(25,'bebes','Higiene del bebe','Higiene del bebe','2014-05-23',NULL,1),(26,'bebes','Lactancia','Lactancia',NULL,NULL,1),(27,'bebes','Bebe','Bebe',NULL,NULL,1),(28,'adolescentes','Sociedad','content Sociedad','2014-05-26',NULL,1),(30,'ninos','Educacion','Educacion content','2014-05-28',NULL,1);
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
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

-- Dump completed on 2014-06-15 19:38:31
