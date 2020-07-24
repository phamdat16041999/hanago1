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
-- Table structure for table `duantrienkhai`
--

DROP TABLE IF EXISTS `duantrienkhai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `duantrienkhai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `linkimg` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `duantrienkhai`
--

LOCK TABLES `duantrienkhai` WRITE;
/*!40000 ALTER TABLE `duantrienkhai` DISABLE KEYS */;
INSERT INTO `duantrienkhai` VALUES (1,'Công ty TNHH Thương mại và dịch vụ Bách Hợp ANDEVA','https://www.saokim.com.vn/project/images/gallery/large/Logo%20spa%20Andeva1547192183.jpg','Hà Nội'),(5,'HàTechcombank hội sở Nội','https://vakaxa.com/wp-content/uploads/2019/01/code-api-chuyen-tien-tu-dong-ngan-hang-ky-thuong-viet-nam-techcombank.jpg','Hà Nội'),(6,'Công ty TNHH SAPON','https://kvn.org.vn/wp-content/uploads/2017/11/kvn2-05-1110x550.png','Hà Nội'),(7,'Công ty Cổ phần Công nghiệp Môi trường Châu Á ASENCO','/img/ASENCO.png','Hà Nội'),(11,'Công ty cổ phần Ngũ Hành Dưỡng Sinh','https://pbs.twimg.com/profile_images/1015075056253325312/33l1zl6o.jpg','Hà Nội'),(21,'Công ty TNHH Phát triển Đầu tư Hà Nội','https://vieclam.tv/images/logo/aqvd.jpg','Hà Nội'),(31,'Công ty cổ phần HANEL PLASTICS','https://hanel.com.vn/temp/-uploaded-Cong%20Ty%20Thanh%20Vien_logo%20hanel_cr_578x354.jpg','Hà Nội'),(41,'Bảo hiểm nhân thọ Bảo Việt','https://cdn.timviecnhanh.com/asset/home/img/employer/5e4757bd0dde7_1581733821.jpg','Hà Nội'),(71,'Công ty Cổ Phần Vinhomes  ','https://thuanhunggroup.com/wp-content/uploads/2019/04/Vingroup.jpg','Hà Nội'),(81,'Công ty TNHH Vị Phố','https://bom.to/XmE8wG','Hà Nội'),(91,'Công ty TNHH máy tính Minh Châu','https://cdn1.mywork.com.vn/company-logo-medium/122018/d4165e8f4198c5649ecc46677971f045.jpg','Hà Nội'),(101,'CÔNG TY CỔ PHẦN SÁCH MCBOOKS','https://www.fahasa.com/media/wysiwyg/Thang-12-2018/mcBooks.png','Hà Nội'),(111,'Công ty Cổ phần tập đoàn công nghệ CMC','https://static.ybox.vn/2018/8/5/1534520808299-1534498789266-Logo%20CMC.png','Hà Nội'),(121,'Công ty cổ phần thương mại và dịch vụ Ali Việt Nam ','https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0snxjTEbuDSz5KbHopbHvY0Msb8-qHjZ_WYHWcN32PTVi4njv&usqp=CAU','Hà Nội');
/*!40000 ALTER TABLE `duantrienkhai` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-02 11:26:52
