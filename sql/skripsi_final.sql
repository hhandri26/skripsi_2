-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: skripsi_2
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin',1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tb_guru`
--

LOCK TABLES `tb_guru` WRITE;
/*!40000 ALTER TABLE `tb_guru` DISABLE KEYS */;
INSERT INTO `tb_guru` VALUES (3,1234,'Handri','L','4','Kedaung Baru','1996-03-19','19031996'),(4,112223344,'bahrul Mub','L','4','legok','2019-08-05','05082019');
/*!40000 ALTER TABLE `tb_guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tb_jadwal`
--

LOCK TABLES `tb_jadwal` WRITE;
/*!40000 ALTER TABLE `tb_jadwal` DISABLE KEYS */;
INSERT INTO `tb_jadwal` VALUES (3,4,3,4,'Senen','jam ke 1'),(4,4,4,5,'Senen','jam ke 2');
/*!40000 ALTER TABLE `tb_jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tb_kelas_meeting`
--

LOCK TABLES `tb_kelas_meeting` WRITE;
/*!40000 ALTER TABLE `tb_kelas_meeting` DISABLE KEYS */;
INSERT INTO `tb_kelas_meeting` VALUES (1,'Pertandingan Bola','2019-08-07 16:17:07',NULL),(2,'','2019-08-07 16:20:26',NULL),(3,'Pertandingan basket','2019-08-07 16:22:22',NULL),(4,'Pertandingan Voli','2019-08-07 16:39:26',NULL),(5,'Pertandingan 17 agustus','2019-08-09 18:33:15','futsal');
/*!40000 ALTER TABLE `tb_kelas_meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tb_mapel`
--

LOCK TABLES `tb_mapel` WRITE;
/*!40000 ALTER TABLE `tb_mapel` DISABLE KEYS */;
INSERT INTO `tb_mapel` VALUES (4,1,'B.Indonesia'),(5,2,'IPA');
/*!40000 ALTER TABLE `tb_mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tb_murid`
--

LOCK TABLES `tb_murid` WRITE;
/*!40000 ALTER TABLE `tb_murid` DISABLE KEYS */;
INSERT INTO `tb_murid` VALUES (4,'112233','Handri','4','L','2014-08-13','tangerang','13082014');
/*!40000 ALTER TABLE `tb_murid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tb_pertandingan`
--

LOCK TABLES `tb_pertandingan` WRITE;
/*!40000 ALTER TABLE `tb_pertandingan` DISABLE KEYS */;
INSERT INTO `tb_pertandingan` VALUES (1,1,'1','1','Kelas 1 - kelas 4'),(2,1,'1','1','kelas 2 - kelas 5'),(3,1,'1','1','kelas 3 - kelas 6'),(4,1,'2','1','Kelas 1 - kelas 2'),(5,1,'2','1','kelas 3 - kelas 4'),(6,1,'2','1','kelas 6 - kelas 5'),(7,1,'3','1','Kelas 1 - kelas 3'),(8,1,'3','1','kelas 6 - kelas 2'),(9,1,'3','1','kelas 5 - kelas 4'),(10,1,'4','1','Kelas 1 - kelas 6'),(11,1,'4','1','kelas 5 - kelas 3'),(12,1,'4','1','kelas 4 - kelas 2'),(13,1,'5','1','Kelas 1 - kelas 5'),(14,1,'5','1','kelas 4 - kelas 6'),(15,1,'5','1','kelas 2 - kelas 3'),(16,4,'1','1','Kelas 1 - kelas 4'),(17,4,'1','1','kelas 3 - kelas 5'),(18,4,'2','1','Kelas 1 - kelas 3'),(19,4,'2','1','kelas 5 - kelas 4'),(20,4,'3','1','Kelas 1 - kelas 5'),(21,4,'3','1','kelas 4 - kelas 3'),(22,5,'1','1','Kelas 1 - kelas 4'),(23,5,'1','1','kelas 2 - kelas 5'),(24,5,'2','1','Kelas 1 - kelas 2'),(25,5,'2','1','kelas 5 - kelas 4'),(26,5,'3','1','Kelas 1 - kelas 5'),(27,5,'3','1','kelas 4 - kelas 2');
/*!40000 ALTER TABLE `tb_pertandingan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tb_ruangan`
--

LOCK TABLES `tb_ruangan` WRITE;
/*!40000 ALTER TABLE `tb_ruangan` DISABLE KEYS */;
INSERT INTO `tb_ruangan` VALUES (4,'001','Kelas 1'),(5,'002','kelas 2'),(6,'003','kelas 3'),(7,'004','kelas 4'),(8,'005','kelas 5'),(9,'006','kelas 6');
/*!40000 ALTER TABLE `tb_ruangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tb_task`
--

LOCK TABLES `tb_task` WRITE;
/*!40000 ALTER TABLE `tb_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'skripsi_2'
--

--
-- Dumping routines for database 'skripsi_2'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-10 23:15:44
