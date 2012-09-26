-- MySQL dump 10.13  Distrib 5.1.61, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: chaos
-- ------------------------------------------------------
-- Server version	5.1.61-0+squeeze1

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
-- Table structure for table `captcha`
--

DROP TABLE IF EXISTS `captcha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `captcha` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `captcha` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `captchadate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `captcha`
--

LOCK TABLES `captcha` WRITE;
/*!40000 ALTER TABLE `captcha` DISABLE KEYS */;
INSERT INTO `captcha` VALUES ('fMN','MhJ','2012-04-16 09:53:38'),('87fdsatZ','FYxBX6DH','2012-04-16 11:12:26'),('qqsHxsUu','aYfr9Kqf','2012-04-16 11:12:29'),('eYaUTphX','zSPVYAfK','2012-04-16 11:12:42'),('rV2','xvG','2012-04-16 11:13:09'),('52W','TJP','2012-04-16 12:09:50'),('Bqf','qjy','2012-04-16 12:10:11'),('7hGkkE5k','UsaZEyFe','2012-04-16 12:15:35'),('tXC6tzp8','ChHpncSP','2012-04-16 12:16:00'),('cAZXVkFU','w8VmrwKS','2012-04-16 12:18:15'),('gTuCdCb5','f2qT9xNh','2012-04-16 12:18:33'),('EUn','uEb','2012-04-16 12:20:01'),('TKYb5j5m','vDrBBkpT','2012-04-18 06:50:14'),('drRUZWg6','jNf6Gj5C','2012-04-18 06:50:28'),('3gm','Phn','2012-04-18 09:16:04'),('Bxv','gRM','2012-04-18 09:16:17'),('BFZSBg8T','5Zr37avP','2012-04-19 10:03:37'),('6cu','kr4','2012-04-19 10:05:29'),('tk2','efc','2012-04-19 10:46:14'),('Bs3','wB4','2012-04-19 11:09:47'),('fV9FrMTN','ysCj3tYa','2012-07-12 22:19:54'),('SkCuRJh4','KC3VFGtd','2012-07-12 22:21:04'),('YYZZn4bx','z5xzRB4w','2012-07-20 21:06:57'),('YJy','2Ke','2012-07-20 21:07:44'),('mn7eaJ4z','JYr96qS8','2012-08-20 21:48:47'),('cpkckWUx','qER3SvA9','2012-08-20 22:21:02'),('DhNa2bSj','D232KSED','2012-08-20 22:21:04'),('HVN','qa8','2012-08-20 22:23:47'),('TSG','sVj','2012-08-20 22:23:51');
/*!40000 ALTER TABLE `captcha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chaos`
--

DROP TABLE IF EXISTS `chaos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chaos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `chaostype` tinyint(4) NOT NULL DEFAULT '1' COMMENT '3 for anonymous, 2 for public, 1 for private',
  `bgcolor` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '666666',
  `fgcolor` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'a1a1a1',
  `bgimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `algorythm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaos`
--

LOCK TABLES `chaos` WRITE;
/*!40000 ALTER TABLE `chaos` DISABLE KEYS */;
INSERT INTO `chaos` VALUES (1,'test','2012-04-16 12:09:47',2,'e9db','4caeaa','','',1),(2,'pello','2012-04-18 07:37:29',1,'101010','fefefe','','',2),(3,'chaos','2012-04-18 09:15:37',2,'3b0072','9ebebd','','',2),(4,'testing','2012-04-18 09:16:01',2,'f4bd0','ec7d82','','',2);
/*!40000 ALTER TABLE `chaos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chaos_upload_code`
--

DROP TABLE IF EXISTS `chaos_upload_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chaos_upload_code` (
  `idchaos` int(11) NOT NULL,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  KEY `idchaos` (`idchaos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaos_upload_code`
--

LOCK TABLES `chaos_upload_code` WRITE;
/*!40000 ALTER TABLE `chaos_upload_code` DISABLE KEYS */;
INSERT INTO `chaos_upload_code` VALUES (0,'TuFNKFBx'),(0,'yPMzAktw'),(0,'YN99dRqg'),(0,'7cjUMVqe'),(0,'skNZpPtT'),(0,'SdVZbKws'),(0,'vhgcJGcM'),(0,'bduYMV5V'),(0,'stKtAbFt'),(0,'S9hcnNjJ'),(0,'B2Mwc2dz'),(0,'u9cKZPrC');
/*!40000 ALTER TABLE `chaos_upload_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chaos_user`
--

DROP TABLE IF EXISTS `chaos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chaos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idchaos` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `invitedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recover` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaos_user`
--

LOCK TABLES `chaos_user` WRITE;
/*!40000 ALTER TABLE `chaos_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `chaos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `cleanurl` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idtype` int(11) NOT NULL,
  `idchaos` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iduser` int(11) NOT NULL,
  `sessionid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'digg','news','digg','http://services.digg.com/2.0/story.getTopNews?type=rss',6,0,'2012-03-27 09:54:44',1,''),(2,'cnn','News from cnn','cnn','http://rss.cnn.com/rss/edition.rss',6,0,'2012-03-27 09:56:31',1,''),(3,'indymedia','Indymedia news','indymedia','http://indymedia.org/global.1-0.rss',6,0,'2012-03-27 09:57:53',1,''),(4,'google news','news served by google','google-news','http://news.google.com/news?pz=1',6,0,'2012-03-27 09:59:29',1,''),(5,'slashdot','News for nerds, stuff that matters','slashdot','http://rss.slashdot.org/Slashdot/slashdot',6,0,'2012-03-27 10:02:29',1,''),(6,'BrowserQuest','RPG para navegador que le saca provecho a HTML5, en concreto los websockets','browserquest','http://browserquest.mozilla.org/',5,1,'2012-03-30 11:04:45',2,''),(7,'digg1','news','digg','http://services.digg.com/2.0/story.getTopNews?type=rss',6,0,'2012-03-27 09:54:44',1,''),(8,'cnn1','News from cnn','cnn','http://rss.cnn.com/rss/edition.rss',6,0,'2012-03-27 09:56:31',1,''),(9,'indymedia1','Indymedia news','indymedia','http://indymedia.org/global.1-0.rss',6,0,'2012-03-27 09:57:53',1,''),(10,'google news1','news served by google','google-news','http://news.google.com/news?pz=1',6,0,'2012-03-27 09:59:29',1,''),(11,'slashdot1','News for nerds, stuff that matters','slashdot','http://rss.slashdot.org/Slashdot/slashdot',6,0,'2012-03-27 10:02:29',1,''),(13,'digg1','news','digg','http://services.digg.com/2.0/story.getTopNews?type=rss',6,0,'2012-03-27 09:54:44',1,''),(14,'cnn1','News from cnn','cnn','http://rss.cnn.com/rss/edition.rss',6,0,'2012-03-27 09:56:31',1,''),(15,'indymedia1','Indymedia news','indymedia','http://indymedia.org/global.1-0.rss',6,0,'2012-03-27 09:57:53',1,''),(16,'google news','news served by google','google-news','http://news.google.com/news?pz=1',6,0,'2012-03-27 09:59:29',1,''),(18,'slashdot1','News for nerds, stuff that matters','slashdot','http://rss.slashdot.org/Slashdot/slashdot',6,0,'2012-03-27 10:02:29',1,''),(19,'digg1','news','digg','http://services.digg.com/2.0/story.getTopNews?type=rss',6,0,'2012-03-27 09:54:44',1,''),(20,'cnn1','News from cnn','cnn','http://rss.cnn.com/rss/edition.rss',6,0,'2012-03-27 09:56:31',1,''),(21,'indymedia1','Indymedia news','indymedia','http://indymedia.org/global.1-0.rss',6,0,'2012-03-27 09:57:53',1,''),(22,'google news1','news served by google','google-news','http://news.google.com/news?pz=1',6,0,'2012-03-27 09:59:29',1,''),(23,'slashdot1','News for nerds, stuff that matters','slashdot','http://rss.slashdot.org/Slashdot/slashdot',6,0,'2012-03-27 10:02:29',1,''),(24,'digg2','news','digg','http://services.digg.com/2.0/story.getTopNews?type=rss',6,0,'2012-03-27 09:54:44',1,''),(25,'cnn3','News from cnn','cnn','http://rss.cnn.com/rss/edition.rss',6,0,'2012-03-27 09:56:31',1,''),(26,'indymedia5','Indymedia news','indymedia','http://indymedia.org/global.1-0.rss',6,0,'2012-03-27 09:57:53',1,''),(27,'google news','news served by google','google-news','http://news.google.com/news?pz=1',6,0,'2012-03-27 09:59:29',1,''),(28,'slashdot1','News for nerds, stuff that matters','slashdot','http://rss.slashdot.org/Slashdot/slashdot',6,0,'2012-03-27 10:02:29',1,''),(12,'BrowserQuest','RPG para navegador que le saca provecho a HTML5, en concreto los websockets','browserquest','http://browserquest.mozilla.org/',5,1,'2012-03-30 11:04:45',2,''),(29,'http://www.rediris.es','','http-cambia-com','http://www.rediris.es',5,1,'2012-04-16 12:09:57',1,'ab07956d95fe5108fdfd4ddcfcbfbde2'),(30,'http://www.rediris.es','sdfasdf','http-cambia-com','http://www.rediris.es',5,-1,'2012-04-16 12:10:18',1,'ab07956d95fe5108fdfd4ddcfcbfbde2'),(31,'http://www.gigasize.com/get/8yvxgv3m9hb','','http-www-gigasize-com-get-8yvxgv3m9hb','http://www.gigasize.com/get/8yvxgv3m9hb',5,0,'2012-04-16 12:15:52',0,''),(32,'http://cambia.com','vamos','http-cambia-com','http://cambia.com',5,-1,'2012-04-16 12:20:09',1,'ab07956d95fe5108fdfd4ddcfcbfbde2'),(33,'http://www.rediris.es','','http-www-rediris-es','http://www.rediris.es',5,4,'2012-04-18 09:16:10',2,'08f9d93802a7469016923ec28066131a'),(34,'http://cambia.com','','http-cambia-com','http://cambia.com',5,4,'2012-04-18 09:16:25',2,'08f9d93802a7469016923ec28066131a'),(35,'greenvortex.png','','greenvortex-png','',1,0,'2012-04-19 10:02:58',0,''),(36,'greenvortex.png','','greenvortex-png','',1,0,'2012-04-19 10:03:34',0,''),(37,'map.gif','','favicon-png','',1,-1,'2012-04-19 10:46:01',2,'daa3fff5ff45a83604e62f73e44f794c'),(38,'greenvortex.png','','favicon-png','',1,-1,'2012-04-19 11:04:42',2,'daa3fff5ff45a83604e62f73e44f794c'),(39,'greenvortex.png','vortex','favicon-png','',1,-1,'2012-04-19 11:04:56',2,'daa3fff5ff45a83604e62f73e44f794c'),(41,'greenvortex.png','','favicon-png','',1,0,'2012-04-19 11:06:48',2,'daa3fff5ff45a83604e62f73e44f794c'),(40,'vortex.png','','favicon-png','',1,-1,'2012-04-19 11:05:33',2,'daa3fff5ff45a83604e62f73e44f794c'),(42,'greenvortex.png','','favicon-png','',1,0,'2012-04-19 11:09:56',2,'daa3fff5ff45a83604e62f73e44f794c'),(43,'mapping-root','','favicon-png','',4,0,'2012-04-19 11:10:30',2,'daa3fff5ff45a83604e62f73e44f794c'),(44,'mapping-root','','favicon-png','./upload/items/44/u7sspRbBb3CTyWrk.',4,0,'2012-04-19 11:11:44',2,'daa3fff5ff45a83604e62f73e44f794c'),(46,'http://www.rediris.es','','http-www-rediris-es','http://www.rediris.es',5,0,'2012-07-12 22:20:07',0,''),(45,'favicon.png','','favicon-png','./upload/items/45/3mmwxnpeCjUwfJw4.png',1,0,'2012-04-19 11:12:10',2,'daa3fff5ff45a83604e62f73e44f794c'),(47,'Quinela.java','','quinela-java','./upload/items/47/dVZaEZPs4ntvDXfS.java',4,0,'2012-07-12 22:20:38',0,''),(48,'http://www.rediris.es','','http-www-rediris-es','http://www.rediris.es',5,0,'2012-07-20 21:07:15',0,''),(49,'http://cambia.com','vamosss','andaluzia-askatu','http://cambia.com',5,0,'2012-07-20 21:07:53',2,'c7e6b010faa7bc102035e731c9645d2c'),(50,'andaluzia askatu','Andaluzia Askatu','andaluzia-askatu','',3,0,'2012-08-20 22:24:30',2,'c7e6b010faa7bc102035e731c9645d2c');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_tag`
--

DROP TABLE IF EXISTS `item_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_tag` (
  `iditem` int(11) NOT NULL,
  `idtag` int(11) NOT NULL,
  PRIMARY KEY (`iditem`,`idtag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_tag`
--

LOCK TABLES `item_tag` WRITE;
/*!40000 ALTER TABLE `item_tag` DISABLE KEYS */;
INSERT INTO `item_tag` VALUES (32,1),(39,2),(49,4),(50,5),(50,6);
/*!40000 ALTER TABLE `item_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_type`
--

DROP TABLE IF EXISTS `item_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_type`
--

LOCK TABLES `item_type` WRITE;
/*!40000 ALTER TABLE `item_type` DISABLE KEYS */;
INSERT INTO `item_type` VALUES (1,'Image','Pictures, graphics,...',1),(2,'Video','Links to video files',1),(3,'Music','Links to music',1),(4,'File','Any kind of file',1),(5,'Link','Hyperlink to somewhere',1),(6,'RSS','Rss news feed',1),(7,'Text','Simply text',1),(8,'Map','A link to a localization',1);
/*!40000 ALTER TABLE `item_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'muerte'),(2,'na'),(3,'cambia'),(4,'cambialo'),(5,'chiquito'),(6,'andaluzia');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recover` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'vortex','chaos@change.me','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-04-16 09:42:57',''),(2,'pello','pello@pello.info','40bd001563085fc35165329ea1ff5c5ecbdbbeef','2012-04-18 06:50:28','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-08-23  1:03:08
