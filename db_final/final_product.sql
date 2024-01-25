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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `title` varchar(350) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `description` longtext,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_product_category` (`category_id`),
  CONSTRAINT `FK_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,'Dior Black Dior Oblique Galaxy ',4190000,3690000,'1_1.jpg','Wallet Dior Black Dior Oblique Galaxy Leather handbag in black, Like Auth 1:1 imported from Hong Kong at TUNG LUXURY, is designed and meticulously machined to every detail. Dior Black Dior Oblique Galaxy Leather handbag in black is made of leather Dior Oblique Galaxy in black, perforated smooth calfskin with Dior Oblique motif and embellished with a reflective lining. It has a palladium-finished bronze signature on the zipper closure and its interior features three card slot with a compartment for phone storage. The bag has a removable strap and can be carried by hand or in a pocket.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(2,1,'Dior Pouch White CD Diamond Canvas ',3690000,2450000,'1_2.jpg','Dior Pouch Clutch Wallet Black CD Diamond Canvas white Like Auth 1:1 imported from Hong Kong at TUNG LUXURY is designed and meticulously machined down to every detail. In addition, it is also crafted on black CD Diamond canvas inspired by warehouses. storage, emblazoned with the \'DIOR\' logo on the front. It has a spacious zippered compartment, ideal for a phone, as well as three card slots. Thanks to the removable calfskin wrist strap, the bag can be carried by hand or put in a pocket.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(3,1,'Dior Pouch Black CD Diamond Canvas ',3690000,2450000,'1_3.jpg','Dior Pouch Clutch Wallet Black CD Diamond Canvas in black color Like Auth 1:1 imported from Hong Kong at TUNG LUXURY is designed and meticulously machined to every detail. In addition, it is also crafted on black CD Diamond canvas inspired by warehouses. storage, emblazoned with the \'DIOR\' logo on the front. It has a spacious zippered compartment, ideal for a phone, as well as three card slots. Thanks to the removable calfskin wrist strap, the bag can be carried by hand or put in a pocket.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(4,1,'Dior Toiletry Bag Beige and Black Dior Oblique ',4690000,3690000,'1_4.jpg','Wallet Dior Toiletry Bag Beige and Black Dior Oblique Jacquard Clutch in gray color, Like Auth 1:1, imported from Hong Kong at TUNG LUXURY, designed and meticulously machined to every detail with the highest quality on the market today in the super class . All finishing details and designs are guaranteed by the shop to be 100% similar to the picture. In addition, the surface is designed with the \'DIOR\' logo in ruthenium-finished copper on the front. Designed with 2 main slots and eight card slots.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(5,1,'Dior Beige and Black Dior Oblique Jacquard Wallet Gray',2190000,1650000,'1_5.jpg','Dior Beige and Black Wallet Black Dior Oblique Jacquard gray Like Auth 1:1 imported from Hong Kong at TUNG LUXURY is designed and meticulously machined to every detail with the highest quality on the market today in the super class. Every detail is perfect. , the design is guaranteed by the shop to be 100% similar to the picture. In addition, the surface is designed with the \'DIOR\' logo in ruthenium-finished copper on the front. Designed with 2 main shorts and eight card slots','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(6,1,'Dior Black Dior Oblique Jacquard Wallet with black logo pattern',2190000,1650000,'1_6.jpg','Dior Black Wallet Dior Oblique Jacquard with black logo pattern, Like Auth 1:1 imported from Hong Kong at TUNG LUXURY, meticulously designed and machined to every detail with the highest quality on the market today in the super class. Finished, the design is guaranteed by the shop to be 100% similar to the picture. In addition, the surface is designed with the \'DIOR\' logo in ruthenium-finished copper on the front. Designed with 2 main slots and eight card slots','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(7,2,'Hermes black box-shaped wrinkled leather wallet',3690000,3250000,'2_1.jpg','Hermes wallet Black box-shaped wrinkled leather, super quality imported from Hong Kong at TUNG LUXURY, is designed and meticulously machined to every detail with the highest quality on the market today in the super class. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(8,2,'Men\'s Hermes Clutch Wallet with blue number ',2950000,2190000,'2_2.jpg','Men\'s Hermes Clutch Wallet The blue number lock pattern is a super quality product imported from Hong Kong at TUNG LUXURY, meticulously designed and processed to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(9,2,'Men\'s Hermes Clutch Wallet with black number ',2950000,2190000,'2_3.jpg','Super Hermes Clutch Wallet The black number lock pattern is a perfect work of art and of the best quality. Meticulous design and attention to detail ensure that the Hermes Clutch Wallet will be a beautiful and precious accessory. for anyone who wants to exude luxury and glamour.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(10,2,'Men\'s Hermes Clutch Wallet with brown number ',2950000,2190000,'2_4.jpg','Men\'s Hermes Clutch Wallet Brown number lock pattern, super quality product imported from Hong Kong at TUNG LUXURY, is designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(11,2,'Hermes Clutch Wallet with buckle pattern in black logo pattern',2950000,2190000,'2_5.jpg','Hermes Clutch Wallet with pattern Super high quality black snap locks imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Every detail and design is perfected by the shop. Committed to 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(12,2,'Hermes Clutch Wallet with blue sunken horse logo pattern',3690000,2950000,'2_6.jpg','Hermes Clutch Wallet with pattern The blue sunken horse logo details, super quality products imported from Hong Kong at TUNG LUXURY are designed and meticulously processed to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(13,2,'Hermes Clutch Wallet with sunken horse logo pattern in brown',3690000,2950000,'2_7.jpg','Hermes Clutch Wallet with Brown sunken horse logo detail, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(14,2,'Hermes Clutch Wallet with black sunken horse logo pattern',3690000,2950000,'2_8.jpg','Hermes Clutch Wallet with pattern Black sunken horse logo detail, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(15,2,'Hermes Clutch Wallet with brown round logo pattern',2950000,2190000,'2_9.jpg','Hermes Clutch Wallet with The black round logo detail of the super quality goods imported from Hong Kong at TUNG LUXURY is designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(16,2,'Hermes Clutch Wallet with black round logo pattern',2950000,2190000,'2_10.jpg','Hermes Clutch Wallet with The black round logo detail of the super quality goods imported from Hong Kong at TUNG LUXURY is designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(17,2,'Hermes Clutch Wallet with brown compartment',3690000,2450000,'2_11.jpg','Hermes Clutch Wallet with pattern The brown sub-compartment is a super quality product imported from Hong Kong at TUNG LUXURY which is meticulously designed and machined to every detail with the highest quality on the market today in the super class line. Every finishing detail and design is guaranteed by the shop. Committed to 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(18,2,'Hermes Clutch Wallet with black compartment pattern',3690000,2450000,'2_12.jpg','Hermes Clutch Wallet with pattern The black sub-compartment of super high-end goods imported from Hong Kong at TUNG LUXURY is designed and meticulously machined to every detail with the highest quality on the market today in the super-class line. Every finishing detail and design is guaranteed by the shop. Committed to 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(19,2,'Hermes men\'s wallet with small blue compartment pattern',2950000,2190000,'2_13.jpg','Men\'s wallet Hermes handbags with blue compartment pattern, super quality products imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Every detail is perfect, The shop guarantees that the design is 100% similar to the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(20,2,'Hermes men\'s wallet with small brown compartment pattern',2950000,2190000,'2_14.jpg','Men\'s wallet Hermes handbags with brown compartment pattern, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Every detail is perfect, The shop guarantees that the design is 100% similar to the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(21,2,'Hermes men\'s wallet with small black compartment pattern',2950000,2190000,'2_15.jpg','Men\'s wallet Hermes handbags with black compartment pattern, super quality products imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Every detail is perfect, The shop guarantees that the design is 100% similar to the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(22,2,'Hermes purse with blue thread compartment pattern',3690000,2950000,'2_16.jpg','Hermes purse Red and black thread border pattern, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. The shop guarantees that the design is 100% similar to the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(23,2,'Hermes wallet with brown thread pattern',3690000,2950000,'2_17.jpg','Hermes wallet Red and black thread border pattern, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. The shop guarantees that the design is 100% similar to the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(24,2,'Hermes wallet with red and black thread pattern',3690000,2950000,'2_18.jpg','Wallet Hermes patterned with red and black thread border, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class. Every detail is perfect, The shop guarantees that the design is 100% similar to the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(25,2,'Hermes wallet with brown compartment pattern',2990000,2390000,'2_19.jpg','Men\'s wallet Hermes embossed letter H pattern in black, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Every detail is perfect. , the design is guaranteed by the shop to be 100% similar to the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(26,2,'Hermes wallet with black compartment pattern',2990000,2390000,'2_20.jpg','Men\'s wallet Hermes embossed letter H pattern in black, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Every detail is perfect. , the design is guaranteed by the shop to be 100% similar to the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(27,3,'Versace men\'s wallet with logo pattern in matte black ',2450000,1850000,'3_1.jpg','Versace men\'s wallet with pattern Black logo detail, super premium imported Hong Kong goods at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(28,3,'Versace men\'s wallet with black corner logo pattern',2450000,1750000,'3_2.jpg','Versace men\'s wallet with pattern The black corner logo of the super quality product imported from Hong Kong at TUNG LUXURY is designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Every finishing detail and design is guaranteed by the shop. Committed to 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(29,3,'Versace men\'s wallet with black human face ',2450000,1850000,'3_3.jpg','Versace floral men\'s wallet Black mat logo details, super high-end goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(30,3,'Black matte leather Versace wallet',2950000,2450000,'3_4.jpg','Versace patterned wallet The black logo of super high-end goods imported from Hong Kong at TUNG LUXURY is designed and meticulously processed to every detail with the highest quality on the market today in the super high-end line. Every perfect detail and design is guaranteed by the shop. The result is 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(31,3,'Versace wallet with stretch leather pattern and gold logo',2950000,2450000,'3_5.jpg','Versace wallet Stretch leather pattern Gold logo Super quality products imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(32,3,'Versace purse with gold embroidered logo motif',2450000,1850000,'3_6.jpg','Versace purse Gold embroidered letter logo motifs, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(33,3,'Versace wallet with black stretch leather pattern',2450000,1850000,'3_7.jpg','Versace wallet Black stretch leather pattern, super quality goods imported from Hong Kong at TUNG LUXURY, are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(34,3,'Versace purse with yellow pattern',2450000,2190000,'3_8.jpg','Versace purse Yellow pattern, super quality goods imported from Hong Kong at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class line. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(35,3,'Versace wallet with face print',2450000,1850000,'3_9.jpg','Versace wallet with print Face printing for super high-end products imported from Hong Kong at TUNG LUXURY is designed and meticulously processed to every detail with the highest quality on the market today in the super-class line. Committed to 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(36,3,'Versace Wallet with White Logo Pattern',2450000,1850000,'3_10.jpg','Versace Wallet with Pattern The white letter logo of super premium goods imported from Hong Kong at TUNG LUXURY is designed and meticulously processed to every detail with the highest quality on the market today in the super class line. Every perfect detail and design is guaranteed by the shop. Committed to 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(37,3,'Versace handbag with screw pattern and border',2450000,1850000,'3_11.jpg','Versace handbag Super quality imported Hong Kong screw motifs at TUNG LUXURY are designed and meticulously machined to every detail with the highest quality on the market today in the super class. Shop guarantees 100% like the picture.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(38,4,'Montblanc handbag with taiga leather briefcase lock',2890000,2350000,'4_1.jpg','Montblanc briefcase lockable handbag Super quality taiga leather imported from Hong Kong at TUNG LUXURY is beautifully designed and fashionable from the famous German brand Montblanc. The product is made from high-quality cowhide, durable and beautiful throughout the customer\'s use. Every detail is guaranteed by the shop, from quality to imported high-quality standard products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(39,4,'Montblanc men\'s wallet with rough leather logo ',2190000,1650000,'4_2.jpg','Montblanc men\'s wallet with logo pattern Super high-quality wrinkled leather imported from Hong Kong at TUNG LUXURY is beautifully designed and fashionable from the famous German brand Montblanc. The product is made from high-quality cowhide, durable and beautiful throughout the customer\'s use. Every detail is guaranteed by the shop, from quality to imported high-quality standard products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(40,4,'Montblanc men\'s wallet with crocodile grain pattern',2190000,1650000,'4_3.jpg','Montblanc men\'s wallet with pattern Super quality crocodile-embossed leather imported from Hong Kong at TUNG LUXURY is beautifully designed and fashionable from the famous German brand Montblanc. The product is made from high-quality cowhide, durable and beautiful throughout. for customers to use. Every detail is guaranteed by the shop, from quality to imported high-quality standard products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(41,4,'Montblanc men\'s wallet with wrinkled leather logo ',2190000,1650000,'4_4.jpg','Montblanc men\'s wallet with logo pattern Super high-quality wrinkled leather imported from Hong Kong at TUNG LUXURY is beautifully designed and fashionable from the famous German brand Montblanc. The product is made from high-quality cowhide, durable and beautiful throughout the customer\'s use. Every detail is guaranteed by the shop, from quality to imported high-quality standard products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(42,4,'Montblanc wallet in box shape with glossy leather',2950000,2450000,'4_5.jpg','Montblanc wallet in photo The premium glossy leather logo box imported from Hong Kong at TUNG LUXURY is beautifully designed and fashionable from the famous German brand Montblanc. The product is made from high-quality cowhide, durable and beautiful throughout the customer\'s life. Used goods. Every detail is guaranteed by the shop, from quality to standard imported high-end products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(43,4,'Montblanc handbag with sunken logo pattern',2950000,2190000,'4_6.jpg','Montblanc handbag with embossed lettering The sunken letter logo of the super quality goods imported from Hong Kong at TUNG LUXURY is beautifully designed and fashionable from the famous German brand Montblanc. The product is made from high-quality cowhide, durable and beautiful throughout the customer\'s life. Used goods. Every detail is guaranteed by the shop, from quality to standard imported high-end products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(44,4,'Montblanc handbag with logo pattern and number',2950000,2190000,'4_7.jpg','Montblanc handbag with pattern The logo and number of the super quality goods imported from Hong Kong at TUNG LUXURY are beautifully designed and fashionable from the famous German brand Montblanc. The product is made from high-quality cowhide, durable and beautiful throughout the customer\'s life. Used goods. Every detail is guaranteed by the shop, from quality to standard imported high-end products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(45,5,'Handheld Prada taiga leather wallet with sunken logo pattern',2450000,1950000,'5_1.jpg','Wallet Prada hand-held taiga leather with sunken logo pattern, super standard product imported from Hong Kong with high quality materials, full accessories with mac stamps just like genuine Authentic products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(46,5,'Prada taiga leather long wallet with corner logo motif',2450000,1950000,'5_2.jpg','Prada wallet Taiga leather handheld with sunken logo pattern, super standard product imported from Hong Kong with high quality materials, full accessories with mac stamps just like genuine Authentic products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(47,5,'Prada taiga leather long wallet with embossed logo pattern',2450000,1950000,'5_3.jpg','Long wallet Prada hand-held taiga leather with embossed logo pattern, super standard product imported from Hong Kong with high quality materials, full accessories with mac stamps just like genuine Authentic products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(48,5,'Prada taiga leather long wallet with triangle logo pattern',2450000,1950000,'5_4.jpg','Long wallet Prada hand-held taiga leather with triangle logo pattern, super standard product imported from Hong Kong with high quality materials, full accessories with mac stamps just like genuine Authentic products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(49,5,'Prada hand-held long wallet with gold letter logo motif',2450000,1950000,'5_5.jpg','Prada long hand-held wallet Hand patterned with gold letter logo, super standard product, imported from Hong Kong with high quality materials, full accessories with mac stamps just like genuine Authentic products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(50,5,'Prada Saffiano Leather Clutch Black Wallet',4190000,3490000,'5_6.jpg','Prada Saffiano Clutch Wallet Black Leather Clutch, super standard product, imported from Hong Kong with high quality materials, full mac stamp accessories just like genuine Authentic products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(51,5,'Prada taiga leather men\'s wallet with striped pattern',2950000,2190000,'5_7.jpg','Prada wallet Men\'s taiga leather with super standard striped pattern Like Auth 1:1, imported from Hong Kong with high quality materials, full mac accessories just like genuine Authentic products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(52,5,'Prada taiga leather wallet with vertical striped pattern',4190000,34900000,'5_8.jpg','Prada wallet Taiga leather with vertical striped pattern, super standard, imported from Hong Kong with high-quality materials, full mac stamp accessories just like genuine Authentic products. This is a high-end Prada wallet from the famous Prada brand. . Possesses outstanding color tones and modern design to make users more luxurious and outstanding.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(53,5,'Prada Saffiano Leather Cross-Body Bag Black Wallet',4190000,3490000,'5_9.jpg','Wallet Prada Saffiano Leather Cross-Body Bag Black, super standard product, imported from Hong Kong with high-quality materials, full accessories just like genuine Authentic products. Part of the high-end Prada handbag collection to from the famous Prada brand. The bag is made from high quality materials that are durable and beautiful throughout use.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(54,5,'Prada wallet for men in taiga leather with black grain pattern',2190000,1650000,'5_10.jpg','Prada wallet for men Taiga leather with black crackle pattern, super standard, imported from Hong Kong with high quality materials, full mac stamp accessories just like genuine Authentic products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(55,6,'Burberry Classic Men\'s Full Leather Clutch Clutch',3690000,2450000,'6_1.jpg','Wallet Burberry Classic Men\'s Full Leather Clutch genuine wrinkled leather Like Auth 1:1 line imported from Hong Kong with high quality materials, full mac accessories just like genuine Authentic products. With the line\'s typical iconic checkered pattern. Burberry','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(56,6,'Burberry London Check Finster Travel Clutch',5490000,3490000,'6_2.jpg','Burberry men\'s wallet is always The top choice of successful gentlemen because of the class and luxury it brings. Among them, the Burberry London Check Finster Travel Clutch wallet model is popular, represents value and is also very convenient to use. ','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(57,6,'Burberry London Knight Horse Folding Wallet',2950000,1950000,'6_3.jpg','Burberry London Folding Wallet Knight Horse standard Like Auth 1:1 knight pattern imported from Hong Kong with high-quality materials, full mac accessories just like genuine Authentic products. With the iconic checkered pattern typical of the Burberry line.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(58,6,'Burberry London Knight Warhorse Men\'s Wallet ',2190000,1650000,'6_4.jpg','Burberry London Men\'s Wallet Knight Warhorse, Like Auth 1:1 standard knight pattern, imported from Hong Kong with high quality materials, full mac stamp accessories just like genuine Authentic products. With the iconic checkered pattern typical of the Burberry line.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(59,6,'Burberry London Horse Rider Long Wallet ',2950000,2190000,'6_5.jpg','Burberry London Long Wallet Horse Rider standard Like Auth 1:1 rider pattern imported from Hong Kong with high quality materials, full mac accessories just like genuine Authentic products. With the iconic checkered pattern typical of the Burberry line.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(60,6,'Burberry Long Zipper Wallet black taiga',2950000,2190000,'6_6.jpg','Burberry Long Wallet Standard black taiga leather Zipper Wallet Like Auth 1:1, imported from Hong Kong with high quality materials, full mac stamp accessories just like genuine Authentic products. With the iconic check pattern typical of the Burberry line.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(61,7,'Gucci Clutch wallet with bee pattern lock',2750000,2190000,'7_1.jpg','Gucci clutch wallet with pattern lock Super quality products like auth 1:1 are 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(62,7,'Gucci Clutch Wallet with black number lock ',2450000,1950000,'7_2.jpg','Gucci Clutch Wallet with pattern Black digital lock logo details, super quality products like 1:1 auth, up to 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(63,7,'Gucci Supreme Clutch Wallet with logo pattern ',2890000,2390000,'7_3.jpg','Gucci Supreme Clutch Wallet with logo pattern Beige logo detail, super quality products like 1:1 auth, 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(64,7,'Gucci purse with brown logo motif',3769000,3350000,'7_4.jpg','Gucci purse with logo pattern brown logo details, super quality products like auth 1:1, 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products..','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(65,7,'Boxy Gucci Supreme Black Clutch Wallet',2890000,2390000,'7_5.jpg','Boxy Gucci Supreme Black Clutch Wallet Super quality products like 1:1 auth are up to 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(66,7,'Gucci GG Marmont Leather Long Folding Wallet Logo Pattern Id',2190000,1850000,'7_6.jpg','Gucci Folding Wallet GG Marmont Leather Long Id logo pattern of super quality product like auth imported from Hong Kong is designed and meticulously processed to every detail like genuine product. Gucci GG Marmont Leather Long Id folding wallet with logo pattern of product like Auth is fully refundable The precision is 99% similar, not inferior to branded products. Every detail of the product is 100% hand-processed, complete with accessories, bills, cards, fabric bags...','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(67,7,'Men\'s Gucci GG Marmont Leather Coin Wallet with logo pattern',1990000,1650000,'7_7.jpg','Gucci Men\'s Wallet GG Marmont Leather Coin with logo pattern of super quality goods like Auth imported from Hong Kong, designed and meticulously processed to every detail like genuine products. Gucci GG Marmont Leather Coin men\'s wallet with logo pattern of goods like Auth is refundable The precision is 99% similar, not inferior to branded products. Every detail of the product is 100% hand-processed, complete with accessories, bills, cards, fabric bags...','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(68,7,'Men\'s Gucci Animalier Leather Coin Wallet with bee pattern',1990000,1650000,'7_8.jpg','Men\'s Gucci Animalier Leather Wallet Super quality bee pattern coin like Auth imported from Hong Kong is designed and meticulously machined to every detail like a genuine product. Men\'s Gucci Animalier Leather Coin wallet with bee pattern like Auth is finished with the same sophistication as the genuine product. 99% is not inferior to branded products. Every detail of the product is 100% hand-processed, complete with accessories, bills, cards, fabric bags...','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(69,8,'Louis Vuitton box-shaped checkered wallet',3890000,3390000,'8_1.jpg','Louis wallet Box-shaped Vuitton with checkered patterns like authentic 1:1 products are 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(70,8,'Louis Vuitton wrinkled leather wallet ',2790000,2190000,'8_2.jpg','Louis wallet Vuitton wrinkled leather buckle with gold logo, like authentic 1:1 products, 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(71,8,'Louis Vuitton Clutch Wallet with number lock ',2890000,2190000,'8_3.jpg','Louis Vuitton Clutch Wallet Digital lock with sunken logo pattern like auth 1:1 is up to 99% similar to Authentic goods. All materials are imported and meticulously designed and processed to every detail like genuine goods.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(72,8,'Louis Vuitton wallet with gold logo number lock',2950000,2190000,'8_4.jpg','Louis Vuitton wallet Gold logo number lock like auth 1:1 products are 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(73,8,'Louis Vuitton Dragonne Epi Leather Black Wallet',2890000,2400000,'8_5.jpg','Louis Vuitton Zippy Dragonne Epi Wallet Leather Black products like authentic 1:1 are up to 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(74,8,'Louis Vuitton Dragonne Taiga Leather Wallet',2990000,2400000,'8_6.jpg','Louis Vuitton Zippy Dragonne Taiga Leather Wallet 1:1 like auth products are up to 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(75,8,'Louis Vuitton clutch wallet with sunken check pattern',2690000,2190000,'8_7.jpg','Wallet Louis Vuitton has a number lock with sunken checkered patterns, like auth 1:1, 99% similar to Authentic goods. All materials are imported and meticulously designed and processed to every detail like genuine goods.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(76,8,'Louis Vuitton wallet with embossed logo pattern',2690000,2190000,'8_8.jpg','Louis wallet Vuitton embossed logo motifs like 1:1 authentic products are 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(77,8,'Louis Vuitton Clutch Wallet with black epi logo leather number lock',2690000,2190000,'8_9.jpg','Louis Vuitton Clutch Wallet Epi leather number lock with black logo like auth 1:1 products are 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(78,8,'Louis Vuitton Clutch Wallet with taiga leather logo pattern, number lock',2690000,2190000,'8_10.jpg','Louis Clutch Wallet Vuitton pattern with taiga leather logo, locking the product number like auth 1:1, 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(79,8,'Louis Vuitton Clutch wallet with sunken floral pattern, number lock',2690000,2190000,'8_11.jpg','Louis Vuitton Clutch Wallet Sunken floral pattern locks the product number like auth 1:1, 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(80,8,'Long Wallet Louis Vuitton Brazza Wallet Gray Damier Graphite 3D Coated Canvas',2290000,1950000,'8_12.jpg','Long Wallet Louis Vuitton Brazza Wallet Gray Damier Graphite 3D Coated Canvas like authentic 1:1 products are up to 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(81,8,'Long Wallet Louis Vuitton Brazza Wallet Damier Graphite Canvas Black',2190000,1850000,'8_13.jpg','Louis Long Wallet Vuitton Brazza Wallet Damier Graphite Canvas black checkered goods like auth 1:1 are 99% similar to Authentic goods. All materials are imported and meticulously designed and processed to every detail like genuine goods.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(82,8,'Long Wallet Louis Vuitton Brazza Wallet Damier Graphite Canvas Brown',2190000,1850000,'8_14.jpg','Louis Long Wallet Vuitton Brazza Wallet Damier Graphite Brown Checkered Canvas 1:1 like authentic product is 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0),(83,8,'Long Wallet Louis Vuitton Brazza Wallet Monogram Canvas Brown Flower',2195000,1850000,'8_15.jpg','Louis Wallet Box-shaped Vuitton with checkered patterns like authentic 1:1 products are 99% similar to Authentic products. All materials are imported and meticulously designed and processed to every detail like genuine products.','2024-01-07 14:38:17','2024-01-07 14:38:17',0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-23 21:00:09
