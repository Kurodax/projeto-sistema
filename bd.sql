CREATE DATABASE  IF NOT EXISTS `lanchonete` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lanchonete`;
-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: lanchonete
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
-- Table structure for table `gravapedido`
--

DROP TABLE IF EXISTS `gravapedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gravapedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomelanche` varchar(45) DEFAULT NULL,
  `igredientes` varchar(45) DEFAULT NULL,
  `preco` varchar(45) DEFAULT NULL,
  `adicionalpro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gravapedido`
--

LOCK TABLES `gravapedido` WRITE;
/*!40000 ALTER TABLE `gravapedido` DISABLE KEYS */;
INSERT INTO `gravapedido` VALUES (1,'x-bacon','Bacon, Hamburguer de Carne e Queijo','2,50','alface'),(69,'','','','');
/*!40000 ALTER TABLE `gravapedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lanche`
--

DROP TABLE IF EXISTS `lanche`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lanche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomel` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lanche`
--

LOCK TABLES `lanche` WRITE;
/*!40000 ALTER TABLE `lanche` DISABLE KEYS */;
INSERT INTO `lanche` VALUES (1,'X-Bacon','Bacon, Hamburguer de Carne e Queijo','10,00'),(2,'X-Burguer','Hamburguer de Carne e Queijo','8,00'),(3,'X-Egg','Ovo, Hamburguer de Carne e Queijo','8,80'),(4,'X-Egg Bacon','Ovo, Bacon, Hamburguer de Carne e Quejo','10,80');
/*!40000 ALTER TABLE `lanche` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtoadd`
--

DROP TABLE IF EXISTS `produtoadd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtoadd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produtoadicional` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtoadd`
--

LOCK TABLES `produtoadd` WRITE;
/*!40000 ALTER TABLE `produtoadd` DISABLE KEYS */;
INSERT INTO `produtoadd` VALUES (1,'Rucula','0,40'),(2,'Alface','0,30'),(3,'Cheddar','1,50'),(4,'Bacon','2.00'),(5,'Hamburguer de Carne','3.00'),(6,'Ovo','0,80'),(7,'Queijo','1,50');
/*!40000 ALTER TABLE `produtoadd` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-05 19:15:54
