-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dtb_stiker
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_bop3`
--

DROP TABLE IF EXISTS `tb_bop3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_bop3` (
  `id_stiker` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `week` int(10) NOT NULL,
  `operator` varchar(50) NOT NULL,
  `leader` varchar(20) NOT NULL,
  `reject` int(20) NOT NULL,
  `finish` int(20) NOT NULL,
  `presentase` varchar(20) NOT NULL,
  PRIMARY KEY (`id_stiker`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bop3`
--

LOCK TABLES `tb_bop3` WRITE;
/*!40000 ALTER TABLE `tb_bop3` DISABLE KEYS */;
INSERT INTO `tb_bop3` VALUES (6,'2022-01-31',5,'ZAIN','SRI WAHYUNI',0,1488,'0'),(7,'2022-01-31',5,'ROBA','SITI AISYAH',0,3696,'0'),(8,'2022-01-31',5,'ADNA','ETI SUMIATI',0,4080,'0'),(9,'2022-02-02',5,'ZAIN','SRI WAHYUNI',0,5040,'0'),(10,'2022-02-02',5,'ROBA','SITI AISYAH',0,2398,'0'),(11,'2022-02-02',5,'ADNA','ETI SUMIATI',250,6664,'3,75'),(12,'2022-02-03',5,'ZAIN','SRI WAHYUNI',138,4144,'3,33'),(13,'2022-02-04',5,'ADNA','ETI SUMIATI',390,3158,'12,35'),(14,'2022-02-05',5,'ADNA','ETI SUMIATI',0,4872,'0'),(15,'2022-02-08',6,'ZAIN','SRI WAHYUNI',350,3012,'11,62'),(16,'2022-02-08',6,'ROBA','SITI AISYAH',105,4716,'2,23'),(17,'2022-02-08',6,'ADNA','ETI SUMIATI',230,3276,'7,02');
/*!40000 ALTER TABLE `tb_bop3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_bop4`
--

DROP TABLE IF EXISTS `tb_bop4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_bop4` (
  `id_stiker` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `operator` varchar(50) NOT NULL,
  `reject` int(20) NOT NULL,
  `finish` int(20) NOT NULL,
  `presentase` int(20) NOT NULL,
  PRIMARY KEY (`id_stiker`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bop4`
--

LOCK TABLES `tb_bop4` WRITE;
/*!40000 ALTER TABLE `tb_bop4` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_bop4` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-01 14:01:05
