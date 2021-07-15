-- MariaDB dump 10.18  Distrib 10.4.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dblokernf
-- ------------------------------------------------------
-- Server version	10.4.16-MariaDB

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
-- Current Database: `dblokernf`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `dblokernf` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dblokernf`;

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_login`
--

LOCK TABLES `admin_login` WRITE;
/*!40000 ALTER TABLE `admin_login` DISABLE KEYS */;
INSERT INTO `admin_login` VALUES (1,'admin','$2y$10$tonZkQrnGnp9n38rWeMTieLPNxtDfvy4Z/35Q4rlFObsm/xFnSae.','admin');
/*!40000 ALTER TABLE `admin_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bidang_usaha`
--

DROP TABLE IF EXISTS `bidang_usaha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bidang_usaha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bidang_usaha`
--

LOCK TABLES `bidang_usaha` WRITE;
/*!40000 ALTER TABLE `bidang_usaha` DISABLE KEYS */;
INSERT INTO `bidang_usaha` VALUES (1,'Teknologi Informasi dan Komunikasi'),(2,'Perbankan'),(3,'Pendidikan'),(4,'Transporasi'),(5,'Industri Nasional');
/*!40000 ALTER TABLE `bidang_usaha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curiculum_vitae`
--

DROP TABLE IF EXISTS `curiculum_vitae`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curiculum_vitae` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_loker` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `cv` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curiculum_vitae`
--

LOCK TABLES `curiculum_vitae` WRITE;
/*!40000 ALTER TABLE `curiculum_vitae` DISABLE KEYS */;
INSERT INTO `curiculum_vitae` VALUES (10,8,'sahrul','Sahrul Roamadhon','default.png');
/*!40000 ALTER TABLE `curiculum_vitae` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hasil_test`
--

DROP TABLE IF EXISTS `hasil_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hasil_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hasil` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hasil_test`
--

LOCK TABLES `hasil_test` WRITE;
/*!40000 ALTER TABLE `hasil_test` DISABLE KEYS */;
INSERT INTO `hasil_test` VALUES (12,'sahrul',60,'2021-07-10');
/*!40000 ALTER TABLE `hasil_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_loker`
--

DROP TABLE IF EXISTS `info_loker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_loker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` varchar(100) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `bagian` varchar(25) NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_loker`
--

LOCK TABLES `info_loker` WRITE;
/*!40000 ALTER TABLE `info_loker` DISABLE KEYS */;
INSERT INTO `info_loker` VALUES (6,'Dicari Kasir Wanita Untuk IndoApril','Kasir','Keuangan','2021-08-25','2021-06-22'),(7,'Programmer Node.js dan Vue.js','Programmer','Javascript Development','2021-09-01','2021-06-22'),(8,'Wordpress Development Plugin','Ketua Plugin Develop','CMS Development','2021-08-06','2021-06-22'),(9,'DevOps','Leader Infrastructure','DevOps Engineer','2021-06-22','2021-06-22'),(11,'Staf Tata Usaha','Senior Staf Tata Usaha','Tata Usaha','2021-07-31','2021-07-10');
/*!40000 ALTER TABLE `info_loker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jawaban`
--

DROP TABLE IF EXISTS `jawaban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `id_soal` varchar(10) NOT NULL,
  `jawaban` varchar(10) NOT NULL,
  `correct` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jawaban`
--

LOCK TABLES `jawaban` WRITE;
/*!40000 ALTER TABLE `jawaban` DISABLE KEYS */;
INSERT INTO `jawaban` VALUES (59,'sahrul','4','b',1),(60,'sahrul','5','b',0),(61,'sahrul','6','a',0),(62,'sahrul','7','c',1),(63,'sahrul','9','a',1);
/*!40000 ALTER TABLE `jawaban` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitra`
--

DROP TABLE IF EXISTS `mitra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mitra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `alamat` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `kontak` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `telpon` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `web` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `bidang_usaha_id` int(11) NOT NULL,
  `sektor_usaha_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fk_mitra_bidang_usaha_idx` (`bidang_usaha_id`),
  UNIQUE KEY `fk_mitra_sektor_usaha1_idx` (`sektor_usaha_id`),
  CONSTRAINT `fk_mitra_bidang_usaha` FOREIGN KEY (`bidang_usaha_id`) REFERENCES `bidang_usaha` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_mitra_sektor_usaha1` FOREIGN KEY (`sektor_usaha_id`) REFERENCES `sektor_usaha` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitra`
--

LOCK TABLES `mitra` WRITE;
/*!40000 ALTER TABLE `mitra` DISABLE KEYS */;
INSERT INTO `mitra` VALUES (2,'PT Bukalapak','Jl Kemang No. 12','Zaki F','0859-42029','hrd@bukalapak.com','bukalapak.com',1,4),(9,'PT Rekayasa Industri','Jl Makam Pahlawan xbata No 182','Aries P','0812-8882329','hrd@rekin.go.id','www.rekin.go.id',5,2),(10,'PT Peruri','Jl. Palatehan No. 4, Blok K-V, Kebayoran Baru','Tulus Raihan','0896-03732822','contact@peruri.co.id','peruri.co.id',2,3);
/*!40000 ALTER TABLE `mitra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodi`
--

DROP TABLE IF EXISTS `prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `nama` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodi`
--

LOCK TABLES `prodi` WRITE;
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` VALUES (1,'SI','Sistem Informasi'),(2,'TI','Teknik Informatika'),(3,'BD','Bisnis Digital'),(5,'IK','Ilmu Komunikasi');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrasi`
--

DROP TABLE IF EXISTS `registrasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `jenjang_pendidikan` varchar(30) DEFAULT NULL,
  `umur` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrasi`
--

LOCK TABLES `registrasi` WRITE;
/*!40000 ALTER TABLE `registrasi` DISABLE KEYS */;
INSERT INTO `registrasi` VALUES (16,'sahrul','$2y$10$trl/Tc4Yos9wJV3uaixb6uEwhrBTBZO2nUUk4HizlkJS7VoAonl0G','Sahrul Romadhon','2001-12-25','islam','Indonesia','smak','21','Lajang','Laki-laki','Jl Raya Cilodong Depok','089603732822','2021-07-10');
/*!40000 ALTER TABLE `registrasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sektor_usaha`
--

DROP TABLE IF EXISTS `sektor_usaha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sektor_usaha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sektor_usaha`
--

LOCK TABLES `sektor_usaha` WRITE;
/*!40000 ALTER TABLE `sektor_usaha` DISABLE KEYS */;
INSERT INTO `sektor_usaha` VALUES (1,'Pemerintahan'),(2,'BUMN'),(3,'Swasta'),(4,'Startup');
/*!40000 ALTER TABLE `sektor_usaha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_online`
--

DROP TABLE IF EXISTS `test_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(10) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `jawaban` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_online`
--

LOCK TABLES `test_online` WRITE;
/*!40000 ALTER TABLE `test_online` DISABLE KEYS */;
INSERT INTO `test_online` VALUES (4,1,'Kapan Indonesia Merdeka?','Indonesia tidak pernah merdeka','17 Agustus 1945','2 Mei 1998','b','2021-07-10'),(5,2,'Bagaimana Cara memakan bubur?','Diaduk searah jarum jam','Diaduk menyilang','Ditelen','c','2019-07-07'),(6,3,'Kenapa dinamakan ikan?','Warnanya kuning','Karena punya insang','Karena punya sayap','b','2019-07-07'),(7,4,'Kenapa kamu suka spongeboob?','Karena Ngeselin','Karena Kuning','Karena Kocak kaya saya','c','2019-07-07'),(9,5,'Kenapa kamu suka persib?','Karena saya orang jawa barat','Karena saya orang argentina','Karena saya orang-orangan','a','2021-07-10'),(10,6,'Siapakah penemu listrik?','Sudah pasti orang','Saya tidak tau','Yang pasti bukan saya','a','2021-07-10');
/*!40000 ALTER TABLE `test_online` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-15 21:07:24
