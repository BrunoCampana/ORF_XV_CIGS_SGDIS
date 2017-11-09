-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: ccfexBeta
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu0.16.04.1

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
-- Table structure for table `dependente`
--

DROP TABLE IF EXISTS `dependente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dependente` (
  `cod_dep` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `parentesco` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cod_dep`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dependente`
--

LOCK TABLES `dependente` WRITE;
/*!40000 ALTER TABLE `dependente` DISABLE KEYS */;
INSERT INTO `dependente` VALUES (1,'vai dar certo',NULL,NULL),(2,'vai dar certo',NULL,NULL);
/*!40000 ALTER TABLE `dependente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endereco` (
  `cod` int(11) NOT NULL,
  `numero` char(5) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `bairro` varchar(10) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `uf` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`cod`) REFERENCES `titular` (`cod`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (8,'80','Depósito','Urca','Rio de Janeiro','RJ'),(9,'80','Depósito','Urca','Rio de Janeiro','RJ'),(24,'80','Depósito','Urca','Rio de Janeiro','RJ'),(27,NULL,NULL,NULL,NULL,NULL),(28,NULL,NULL,NULL,NULL,NULL),(29,NULL,NULL,NULL,NULL,NULL),(30,NULL,NULL,NULL,NULL,NULL),(31,NULL,NULL,NULL,NULL,NULL),(32,NULL,NULL,NULL,NULL,NULL),(33,NULL,NULL,NULL,NULL,NULL),(36,NULL,NULL,NULL,NULL,NULL),(37,NULL,NULL,NULL,NULL,NULL),(38,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `user` varchar(10) NOT NULL,
  `passwd` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('augusto','63a9f0ea7bb98050796b649e85481845',2),('root','7b24afc8bc80e548d66c4e7ff72171c5',1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `cod` int(11) NOT NULL,
  `inadiplente` tinyint(1) DEFAULT '0',
  `vencido` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`cod`),
  CONSTRAINT `status_ibfk_1` FOREIGN KEY (`cod`) REFERENCES `titular` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titular`
--

DROP TABLE IF EXISTS `titular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `titular` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `dataInscricao` date DEFAULT NULL,
  `validade` date DEFAULT NULL,
  `tipoPermissao` varchar(10) DEFAULT NULL,
  `posto` varchar(10) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `identidade` char(10) DEFAULT NULL,
  `orgaoExpedidor` char(6) DEFAULT NULL,
  `dataExpedicao` date DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `estadoCivil` char(10) DEFAULT NULL,
  `cpf` char(12) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `telResidencial` char(12) DEFAULT NULL,
  `celular` char(16) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `empresa` varchar(10) DEFAULT NULL,
  `cargo` varchar(10) DEFAULT NULL,
  `telComercial` char(12) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titular`
--

LOCK TABLES `titular` WRITE;
/*!40000 ALTER TABLE `titular` DISABLE KEYS */;
INSERT INTO `titular` VALUES (8,'2016-10-01','2016-10-01','Algum','Aluno','Rodrigo Nascimento','12341234','SPP','2016-10-01',1,'Noivo','01254661611','1991-06-12','(81)33223443','(21)980778231','bizonho@bizonho','IME','CFG','não há'),(9,'2016-10-02','2016-10-01','Algum','Aluno','Felipe Alcântara','12341234','SJDS','2016-10-01',1,'Solteiro','12312312334','1991-06-12','(81)33223443','(21)980778231','felipeaugusto1291@gmail.com','IME','Alu','não há'),(24,'2016-10-08','2110-12-31','Frequência','Aluno','Augusto','89089089','SPP','2016-10-01',1,'Solteiro','12312312334','1991-06-12',NULL,NULL,NULL,NULL,NULL,NULL),(27,'2016-10-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'2016-10-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'2016-10-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,'2016-10-10',NULL,NULL,NULL,'Teste upload foto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,'2016-10-10',NULL,NULL,NULL,'vamo lá',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'2016-10-10',NULL,NULL,NULL,'teste upload',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'2016-10-10',NULL,NULL,NULL,'testeee',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'2016-10-11',NULL,NULL,NULL,'testefoto','1111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `titular` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-13 16:40:20
