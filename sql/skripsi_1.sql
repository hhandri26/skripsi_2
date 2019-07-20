-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: skripsi_1
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_attribut`
--

DROP TABLE IF EXISTS `tb_attribut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_attribut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kriteria` int(11) DEFAULT NULL,
  `keterangan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_attribut`
--

LOCK TABLES `tb_attribut` WRITE;
/*!40000 ALTER TABLE `tb_attribut` DISABLE KEYS */;
INSERT INTO `tb_attribut` VALUES (1,1,'Usia 1-3 Tahun','1'),(2,1,'Usia 4- 6 Tahun','2'),(3,1,'Usia 7- 12 Tahun','3'),(4,1,'Usia 13-16 Tahun','4'),(5,1,'Usia 17 – 19 Tahun','5'),(6,2,'Pra Sekolah','1'),(7,2,'SD/MI/Paket A/SLB','2'),(8,2,'SLTP/MTS/SMLB','3'),(9,2,'SMA ','4'),(10,2,'KULIAH','5'),(11,3,'1','1'),(12,3,'2','2'),(13,3,'3','3'),(14,3,'4','4'),(15,3,'>=5','5'),(16,4,'500-700rb/bln','5'),(17,4,'701-1jt/bln','4'),(18,4,'1,01jt-1,2jt/bln','3'),(19,4,'1,201-2jt','2'),(20,4,'>=2,1jt','1'),(21,5,'0-0,5 Ha','5'),(22,5,'0,6-1,0 Ha','4'),(23,5,'1,1-1,5 Ha','3'),(24,5,'1,6-2,0 Ha','2'),(25,5,'>=2,1 Ha','1'),(26,2,'S1','2'),(27,6,'Milik Sendiri','1'),(28,6,'Sewa','3'),(29,6,'Numpang','5');
/*!40000 ALTER TABLE `tb_attribut` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_bobot`
--

DROP TABLE IF EXISTS `tb_bobot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_bobot` (
  `nilai_bobot` int(11) NOT NULL,
  `keterangan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`nilai_bobot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bobot`
--

LOCK TABLES `tb_bobot` WRITE;
/*!40000 ALTER TABLE `tb_bobot` DISABLE KEYS */;
INSERT INTO `tb_bobot` VALUES (1,'Sangat Rendah'),(2,'Rendah'),(3,'Cukup'),(4,'Baik'),(5,'sangat Baik');
/*!40000 ALTER TABLE `tb_bobot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_hasil`
--

DROP TABLE IF EXISTS `tb_hasil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_hasil` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_peserta` int(11) DEFAULT NULL,
  `nilai_saw` float DEFAULT NULL,
  `ket_saw` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai_wp` float DEFAULT NULL,
  `ket_wp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_hasil`
--

LOCK TABLES `tb_hasil` WRITE;
/*!40000 ALTER TABLE `tb_hasil` DISABLE KEYS */;
INSERT INTO `tb_hasil` VALUES (2,1,0.58,NULL,NULL,NULL),(3,2,0.63,NULL,NULL,NULL),(4,3,0.485,NULL,NULL,NULL),(5,4,0.795,NULL,NULL,NULL),(6,5,0.835,NULL,NULL,NULL),(7,6,0.745,NULL,NULL,NULL),(8,7,0.67,NULL,NULL,NULL),(9,8,0.86,NULL,NULL,NULL),(10,9,0.875,NULL,NULL,NULL),(11,10,0.775,NULL,NULL,NULL),(12,11,0.745,NULL,NULL,NULL),(13,12,0.835,NULL,NULL,NULL),(14,13,0.695,NULL,NULL,NULL),(15,14,0.745,NULL,NULL,NULL),(16,15,0.73,NULL,NULL,NULL),(17,16,0.68,NULL,NULL,NULL),(18,17,0.86,NULL,NULL,NULL),(19,18,0.81,NULL,NULL,NULL),(20,19,0.885,NULL,NULL,NULL),(21,20,0.77,NULL,NULL,NULL),(22,21,0.77,NULL,NULL,NULL),(23,22,0.745,NULL,NULL,NULL),(24,23,0.62,NULL,NULL,NULL),(25,24,0.6,NULL,NULL,NULL),(26,25,0.71,NULL,NULL,NULL),(27,26,0.91,NULL,NULL,NULL),(28,27,0.73,NULL,NULL,NULL),(29,28,0.535,NULL,NULL,NULL),(30,29,0.77,NULL,NULL,NULL),(31,30,0.82,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tb_hasil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_hasil_wp`
--

DROP TABLE IF EXISTS `tb_hasil_wp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_hasil_wp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_peserta` int(11) DEFAULT NULL,
  `nilai_s` float DEFAULT NULL,
  `nilai_v` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_hasil_wp`
--

LOCK TABLES `tb_hasil_wp` WRITE;
/*!40000 ALTER TABLE `tb_hasil_wp` DISABLE KEYS */;
INSERT INTO `tb_hasil_wp` VALUES (2,1,1.18678,0.0257938),(3,2,1.21824,0.0264775),(4,3,0.990693,0.021532),(5,4,1.66417,0.0361695),(6,5,1.75138,0.0380649),(7,6,1.57112,0.0341471),(8,7,1.28209,0.0278653),(9,8,1.83463,0.0398743),(10,9,1.83132,0.0398024),(11,10,1.47007,0.0319509),(12,11,1.57112,0.0341471),(13,12,1.74012,0.0378202),(14,13,1.44874,0.0314873),(15,14,1.55185,0.0337283),(16,15,1.5176,0.0329839),(17,16,1.39939,0.0304147),(18,17,1.83463,0.0398743),(19,18,1.70172,0.0369856),(20,19,1.88818,0.0410382),(21,20,1.59714,0.0347126),(22,21,1.59714,0.0347126),(23,22,1.57112,0.0341471),(24,23,1.28966,0.0280298),(25,24,1.15685,0.0251433),(26,25,1.48143,0.0321978),(27,26,1.93078,0.041964),(28,27,1.5176,0.0329839),(29,28,1.07438,0.0233508),(30,29,1.59714,0.0347126),(31,30,1.74327,0.0378887);
/*!40000 ALTER TABLE `tb_hasil_wp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kriteria`
--

DROP TABLE IF EXISTS `tb_kriteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_kriteria` (
  `kd_kriteria` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `atribut` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nilai_bobot` float DEFAULT NULL,
  PRIMARY KEY (`kd_kriteria`),
  UNIQUE KEY `atribut_UNIQUE` (`atribut`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kriteria`
--

LOCK TABLES `tb_kriteria` WRITE;
/*!40000 ALTER TABLE `tb_kriteria` DISABLE KEYS */;
INSERT INTO `tb_kriteria` VALUES (1,'Usia Anak',NULL,0.2),(2,'Pendidikan',NULL,0.2),(3,'Tanggungan',NULL,0.2),(4,'Penghasilan',NULL,0.15),(5,'Luas Sawah',NULL,0.1),(6,'Tempat Tinggal',NULL,0.15);
/*!40000 ALTER TABLE `tb_kriteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_penilaian`
--

DROP TABLE IF EXISTS `tb_penilaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_penilaian` (
  `kode_penilaian` int(11) NOT NULL AUTO_INCREMENT,
  `no_peserta` int(11) DEFAULT NULL,
  `kd_kriteria` int(11) DEFAULT NULL,
  `angka_penilaian` int(11) DEFAULT NULL,
  `nilai_bobot` float DEFAULT NULL,
  PRIMARY KEY (`kode_penilaian`)
) ENGINE=InnoDB AUTO_INCREMENT=427 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_penilaian`
--

LOCK TABLES `tb_penilaian` WRITE;
/*!40000 ALTER TABLE `tb_penilaian` DISABLE KEYS */;
INSERT INTO `tb_penilaian` VALUES (1,1,1,3,0.2),(2,1,2,2,0.2),(3,1,3,2,0.2),(4,1,4,3,0.15),(5,1,5,5,0.1),(6,1,6,1,0.15),(7,2,1,3,0.2),(8,2,2,2,0.2),(9,2,3,1,0.2),(10,2,4,1,0.15),(11,2,5,5,0.1),(12,2,6,1,0.15),(19,3,1,3,0.2),(20,3,2,2,0.2),(21,3,3,2,0.2),(22,3,4,2,0.15),(23,3,5,5,0.1),(24,3,6,5,0.15),(31,4,1,4,0.2),(32,4,2,3,0.2),(33,4,3,4,0.2),(34,4,4,2,0.15),(35,4,5,5,0.1),(36,4,6,1,0.15),(37,5,1,4,0.2),(38,5,2,4,0.2),(39,5,3,3,0.2),(40,5,4,2,0.15),(41,5,5,3,0.1),(42,5,6,1,0.15),(43,6,1,4,0.2),(44,6,2,3,0.2),(45,6,3,3,0.2),(46,6,4,2,0.15),(47,6,5,5,0.1),(48,6,6,1,0.15),(49,7,1,3,0.2),(50,7,2,2,0.2),(51,7,3,1,0.2),(52,7,4,1,0.15),(53,7,5,3,0.1),(54,7,6,1,0.15),(55,8,1,4,0.2),(56,8,2,3,0.2),(57,8,3,3,0.2),(58,8,4,1,0.15),(59,8,5,3,0.1),(60,8,6,1,0.15),(61,9,1,5,0.2),(62,9,2,4,0.2),(63,9,3,3,0.2),(64,9,4,2,0.15),(65,9,5,3,0.1),(66,9,6,1,0.15),(73,11,1,4,0.2),(74,11,2,3,0.2),(75,11,3,3,0.2),(76,11,4,2,0.15),(77,11,5,5,0.1),(78,11,6,1,0.15),(79,12,1,5,0.2),(80,12,2,4,0.2),(81,12,3,3,0.2),(82,12,4,2,0.15),(83,12,5,5,0.1),(84,12,6,1,0.15),(85,13,1,4,0.2),(86,13,2,3,0.2),(87,13,3,2,0.2),(88,13,4,2,0.15),(89,13,5,5,0.1),(90,13,6,1,0.15),(97,15,1,3,0.2),(98,15,2,2,0.2),(99,15,3,3,0.2),(100,15,4,1,0.15),(101,15,5,5,0.1),(102,15,6,1,0.15),(103,16,1,3,0.2),(104,16,2,2,0.2),(105,16,3,2,0.2),(106,16,4,1,0.15),(107,16,5,5,0.1),(108,16,6,1,0.15),(109,17,1,4,0.2),(110,17,2,3,0.2),(111,17,3,3,0.2),(112,17,4,1,0.15),(113,17,5,3,0.1),(114,17,6,1,0.15),(115,18,1,4,0.2),(116,18,2,3,0.2),(117,18,3,4,0.2),(118,18,4,2,0.15),(119,18,5,4,0.1),(120,18,6,1,0.15),(121,19,1,4,0.2),(122,19,2,3,0.2),(123,19,3,4,0.2),(124,19,4,1,0.15),(125,19,5,4,0.1),(126,19,6,1,0.15),(127,20,1,3,0.2),(128,20,2,2,0.2),(129,20,3,3,0.2),(130,20,4,1,0.15),(131,20,5,3,0.1),(132,20,6,1,0.15),(133,21,1,3,0.2),(134,21,2,2,0.2),(135,21,3,3,0.2),(136,21,4,1,0.15),(137,21,5,3,0.1),(138,21,6,1,0.15),(139,22,1,4,0.2),(140,22,2,3,0.2),(141,22,3,3,0.2),(142,22,4,2,0.15),(143,22,5,5,0.1),(144,22,6,1,0.15),(145,23,1,3,0.2),(146,23,2,2,0.2),(147,23,3,2,0.2),(148,23,4,2,0.15),(149,23,5,4,0.1),(150,23,6,1,0.15),(151,24,1,3,0.2),(152,24,2,2,0.2),(153,24,3,2,0.2),(154,24,4,1,0.15),(155,24,5,3,0.1),(156,24,6,5,0.15),(157,25,1,4,0.2),(158,25,2,3,0.2),(159,25,3,2,0.2),(160,25,4,2,0.15),(161,25,5,4,0.1),(162,25,6,1,0.15),(163,26,1,5,0.2),(164,26,2,4,0.2),(165,26,3,3,0.2),(166,26,4,1,0.15),(167,26,5,5,0.1),(168,26,6,1,0.15),(169,27,1,3,0.2),(170,27,2,2,0.2),(171,27,3,3,0.2),(172,27,4,1,0.15),(173,27,5,5,0.1),(174,27,6,1,0.15),(175,28,1,3,0.2),(176,28,2,2,0.2),(177,28,3,3,0.2),(178,28,4,2,0.15),(179,28,5,5,0.1),(180,28,6,5,0.15),(181,29,1,3,0.2),(182,29,2,2,0.2),(183,29,3,3,0.2),(184,29,4,1,0.15),(185,29,5,3,0.1),(186,29,6,1,0.15),(187,30,1,4,0.2),(188,30,2,3,0.2),(189,30,3,3,0.2),(190,30,4,1,0.15),(191,30,5,5,0.1),(192,30,6,1,0.15),(283,10,1,5,0.2),(284,10,2,4,0.2),(285,10,3,1,0.2),(286,10,4,2,0.15),(287,10,5,3,0.1),(288,10,6,1,0.15),(421,14,1,3,0.2),(422,14,2,2,0.2),(423,14,3,3,0.2),(424,14,4,1,0.15),(425,14,5,4,0.1),(426,14,6,1,0.15);
/*!40000 ALTER TABLE `tb_penilaian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_warga`
--

DROP TABLE IF EXISTS `tb_warga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_warga` (
  `no_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lhr` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lhr` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` tinytext COLLATE utf8_unicode_ci,
  `no_tlpon` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_input` datetime DEFAULT NULL,
  `c1` int(11) DEFAULT NULL,
  `c2` int(11) DEFAULT NULL,
  `c3` int(11) DEFAULT NULL,
  `c4` int(11) DEFAULT NULL,
  `c5` int(11) DEFAULT NULL,
  `c6` int(11) DEFAULT NULL,
  `nomor_peserta` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`no_peserta`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_warga`
--

LOCK TABLES `tb_warga` WRITE;
/*!40000 ALTER TABLE `tb_warga` DISABLE KEYS */;
INSERT INTO `tb_warga` VALUES (1,'Awat','Sukabumi','1986-12-10','KP. BANGBAYANG RT 05 RW 01','085798450000','2019-07-10 19:51:00',3,7,12,18,21,26,'121000018307363'),(2,'Yanah','Sukabumi','1970-09-05','KP. CIKELAT RT 06 RW 02','085787710000','2019-07-10 20:03:38',3,7,11,20,21,26,'121000018330644'),(3,'Karsih','Sukabumi','1977-09-01','KP. ATHOYIBAH RT 03 RW 02','081223330000','2019-07-10 20:36:43',3,7,12,19,21,28,'121000018640959'),(4,'Eem Karmilah','Sukabumi','1975-08-12','KP. CIMUNTIR RT 05 RW 04','087865560000','2019-07-10 21:03:28',4,8,14,19,21,26,'121000018363167'),(5,'Etin Nariah','Sukabumi','1975-07-05','KP. CIKUPA RT 04 RW 03','081300670000','2019-07-10 21:09:28',4,9,13,19,23,26,'121000018370942'),(6,'Umsah','Sukabumi','1970-07-07','KP. NYALINDUNG RT 01 RW 02','085723260000','2019-07-10 21:22:01',4,8,13,19,21,26,'121000018396751'),(7,'Oliah','Sukabumi','1975-03-01','KP. BANGBAYANG RT 03 RW 01','085793390000','2019-07-10 21:28:54',3,7,11,20,23,26,'121000018426684'),(8,'Tuti Isnawati','Sukabumi','1972-06-05','KP. NYALINDUNG RT 01 RW 02','089777110000','2019-07-10 21:35:02',4,8,13,20,23,26,'121000018446377'),(9,'Yeni','Sukabumi','1968-07-31','KP. BANGBAYANG RT 06 RW 01','085720750000','2019-07-10 21:40:24',5,9,13,19,23,26,'121000018502734'),(10,'Hindun','Sukabumi','1968-07-03','KP. NEMPEL RT 03 RW 02','085624780000','2019-07-10 21:48:39',5,9,11,19,23,26,'121000018534139'),(11,'Koyat','Sukabumi','1980-01-30','KP. CIPANENGAH RT 01 RW 03','085714970000','2019-07-10 21:57:51',4,8,13,19,21,26,'121000018216144'),(12,'Anon','Sukabumi','1971-02-11','KP. CIMUNTIR RT 05 RW 04','085703060000','2019-07-10 22:03:15',5,9,13,19,21,26,'121000018217562'),(13,'Barsih','Sukabumi','1972-01-06','KP. NEMPEL RT 03 RW 02','085813390000','2019-07-10 22:05:47',4,8,12,19,21,26,'121000018218763'),(14,'Jubaedah','Sukabumi','1953-01-06','KP. CIMUNTIR RT 05 RW 04','085721120000','2019-07-10 23:05:31',3,7,13,20,22,26,'121000018226991'),(15,'Uun','Sukabumi','1960-06-16','KP. CIPANENGAH RT 01 RW 03','085781230000','2019-07-10 22:10:26',3,7,13,20,21,26,'121000018245399'),(16,'Nurjanah','Sukabumi','1978-06-14','KP. PASIR NANGKA RT 02 RW 02','085777480000','2019-07-10 22:25:01',3,7,12,20,21,26,'121000018247187'),(17,'Aan','Sukabumi','1980-11-07','KP. NAGRAK RT 02 RW 04','085921220000','2019-07-10 22:27:58',4,8,13,20,23,26,'121000018252929'),(18,'Oneng','Sukabumi','1968-08-09','KP. PAJAGAN RT 04 RW 04','081285500000','2019-07-10 22:30:44',4,8,14,19,22,26,'121000018253227'),(19,'Pupun','Sukabumi','1960-09-06','KP. CIKUPA RT 04 RW 03','085779370000','2019-07-10 22:33:22',4,8,14,20,22,26,'121000018254986'),(20,'Dedah','Sukabumi','1978-01-08','KP. ATHOYIBAH RT 03 RW 02','081106420000','2019-07-10 22:35:52',3,7,13,20,23,26,'121000018255285'),(21,'Eer','Sukabumi','1974-05-12','KP. CIPANENGAH RT 02 RW 03','089601470000','2019-07-10 22:38:45',3,7,13,20,23,26,'121000018275765'),(22,'Warsah','Sukabumi','1970-05-06','KP. BANGBAYANG RT 03 RW 01','085609560000','2019-07-10 22:41:27',4,8,13,19,21,26,'121000018278267'),(23,'Atikah','Sukabumi','1953-04-07','KP. NYALINDUNG RT 01 RW 02','085691860000','2019-07-10 22:43:39',3,7,12,19,22,26,'121000018284902'),(24,'Pipin','Sukabumi','1975-05-03','KP. PASIR NANGKA RT 02 RW 02','089838980000','2019-07-10 22:46:06',3,7,12,20,23,28,'121000018310665'),(25,'Ipit Masitoh','Sukabumi','1970-01-02','KP. PAJAGAN RT 04 RW 04','081310940000','2019-07-10 22:48:30',4,8,12,19,22,26,'121000018335603'),(26,'Imas','Sukabumi','1970-10-02','KP. NEMPEL RT 03 RW 02','082122920000','2019-07-10 22:51:11',5,9,13,20,21,26,'121000018336608'),(27,'Nina Widayani','Sukabumi','1985-05-02','KP. NAGRAK RT 01 RW 04','085686070000','2019-07-10 22:55:02',3,7,13,20,21,26,'121000018342637'),(28,'Patimah','Sukabumi','1957-10-16','KP. BANGBAYANG RT 04 RW 01','082361670000','2019-07-10 22:57:21',3,7,13,19,21,28,'121000018358698'),(29,'Rohmah','Sukabumi','1965-03-20','KP. CIKELAT RT 06 RW 02','08116139000','2019-07-10 23:01:21',3,7,13,20,23,26,'121000018359658'),(30,'Epi','Sukabumi','1979-04-10','KP. PAJAGAN RT 04 RW 04','085711110000','2019-07-10 23:03:27',4,8,13,20,21,26,'121000018365876');
/*!40000 ALTER TABLE `tb_warga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'skripsi_1'
--

--
-- Dumping routines for database 'skripsi_1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-13 17:34:24
