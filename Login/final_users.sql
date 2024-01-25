-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: final
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `roles_id` int DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `FK_users_role` (`roles_id`),
  CONSTRAINT `FK_users_role` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'tung','tung.tt@gmail.com','113','hanoi','$2y$10$KgrmI.DVsTfRU7/8Nff/p.qeb25m6nWERwdLNJ.uSr1VmkeezAnDC',NULL,'2024-01-03 15:30:07','2024-01-03 15:30:07',NULL),(7,'tung2','tung.nt@gmail.com',NULL,NULL,'$2y$10$KObBIkYNd81o8sWDVfElLeqnWorOaY2yAqLAcJx05O2xgNmo5rWu6',NULL,'2024-01-03 15:32:40','2024-01-03 15:32:40',NULL),(9,'trọng tùng','tung.ntt@gmail.com',NULL,NULL,'$2y$10$GQb5ivZjK3Rzt4j1X7eSb..eSj0mi/VS7sMTKofW1EjKrYTFpO9ru',NULL,'2024-01-06 19:10:03','2024-01-06 19:10:03',NULL),(10,'hoan','hoan.nd@gmail.com',NULL,NULL,'$2y$10$AtPtYqIKyMXVg1QiPqyuY.dwIw/66gPwEtawupWQMWzlZ8VifG.gu',NULL,'2024-01-06 19:12:03','2024-01-06 19:12:03',NULL),(11,'hoan','hoan.nd2@gmail.com',NULL,NULL,'$2y$10$jejXSEvcnUOXyy0IdhMzweZjNuZ6QJubmoPT6AWgW2Ygw4HYzm1aG',NULL,'2024-01-07 22:30:56','2024-01-07 22:30:56',NULL),(13,'hoan','hoanham@gmail.com',NULL,NULL,'$2y$10$FzjghCFjws6Ew1imMIDIc.2G1ey6KnDoZ0yym6k1qlpW19J0Tlc2u',NULL,'2024-01-07 23:35:15','2024-01-07 23:35:15',NULL),(14,'hoan','hoanhh@gmail.com',NULL,NULL,'$2y$10$CI46xPN4uMtYYa2lYyHIFOahXS30/TkO9y71laQ/160w/UBvP8h6O',NULL,'2024-01-07 23:37:47','2024-01-07 23:37:47',NULL),(15,'trọng tùng','tungnt2@gmail.com',NULL,NULL,'$2y$10$C7XgPkbZ35YJs4fmFxxRYOxf4h/hzOLpRP4.dC0QSXuKxDp5SMrCi',NULL,'2024-01-11 23:45:48','2024-01-11 23:45:48',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-23 21:00:10
