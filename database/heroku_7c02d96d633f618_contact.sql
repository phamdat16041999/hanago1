-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: us-cdbr-east-06.cleardb.net    Database: heroku_7c02d96d633f618
-- ------------------------------------------------------
-- Server version	5.5.62-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(45) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `dienthoai` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mucdichgui` varchar(45) NOT NULL,
  `tieudegui` varchar(100) NOT NULL,
  `noidung` varchar(500) NOT NULL,
  `ngay` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'aaaaaaaaa','Hà Nội','0123456','phamdat128@gmail.com','Hỗ trợ khách hàng','aaaaaa','aa','2020-08-05 00:00:00'),(2,'aaaaaaaaa','Hà Nội','0123456','phamdat128@gmail.com','Hỗ trợ khách hàng','aaaaaa','aaaaa','2020-05-30 00:00:00'),(3,'bbbbbbbb','bbbbbbbb','0123456','phamdat128@gmail.com','Hỗ trợ khách hàng','aaaaaaaaaa','aaaaaaaaaaa','2020-05-08 00:00:00'),(11,'Ph?m Thành ??t','Hà N?i','','','H? tr? khách hàng','','','2020-05-11 00:00:00'),(21,'','Hà N?i','','','H? tr? khách hàng','','','2020-05-11 00:00:00'),(31,'Ph?m Thành ??t','Hà N?i','','','H? tr? khách hàng','','','2020-05-11 00:00:00'),(41,'Nguyễn văn sang','Hà Nội','','','','','','0000-00-00 00:00:00'),(51,'Nguyễn văn sang','Hà Nội','','','','','','0000-00-00 00:00:00'),(61,'Nguyễn văn sang','Hà Nội','a','a','a','a','a','0000-00-00 00:00:00'),(71,'Phạm Thành Đạt','Hà Nội','','','Hỗ trợ khách hàng','','','2020-05-11 00:00:00'),(81,'Phạm Thành Đạt','Hà Nội','0353650258','phamdat128@gmail.com','Hỗ trợ khách hàng','Hỗ trợ sản phẩm','aaaaaaaaa','2020-05-11 00:00:00'),(91,'xzAxZAx','ZÂ','325432543','3r43','Hỗ trợ khách hàng','sấcfsa','csfcsafda','2020-05-11 00:00:00'),(101,'Phạm Thành Đạt','Hà Nội','','','Hỗ trợ khách hàng','','Hello my name is Dat. I want to know about your product. Give me a call on 0353650258','2020-05-12 00:00:00');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-02 11:26:59
