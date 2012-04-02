-- MySQL dump 10.13  Distrib 5.1.49, for debian-linux-gnu (i486)
--
-- Host: localhost    Database: chaos
-- ------------------------------------------------------
-- Server version	5.1.49-3

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
INSERT INTO `captcha` VALUES ('Cvz','Dfz','2012-03-31 21:14:57'),('xby','tk5','2012-03-31 21:16:14'),('9nJ','rnD','2012-03-31 21:16:16'),('PCB','h6D','2012-03-31 21:16:18'),('rBw','UeG','2012-03-31 21:16:19'),('FFM','t8v','2012-03-31 21:16:21'),('4Wq','9f2','2012-03-31 21:16:23'),('WkG','qR9','2012-03-31 21:16:26'),('V8s','Fwt','2012-03-31 21:19:04'),('KFE','uxF','2012-03-31 21:19:06'),('wZy','7aF','2012-03-31 21:19:09'),('rSX','jcB','2012-03-31 21:36:03'),('gYhbuPbR','FYD8GUV4','2012-03-31 22:00:56'),('6FyafS5b','sGZNZM7m','2012-03-31 22:01:01'),('gVP','Fq4','2012-03-31 22:03:09'),('UPR','Uq6','2012-03-31 22:03:15'),('w6h','V8Y','2012-03-31 22:10:32'),('bq5','UGH','2012-03-31 22:10:42'),('hqx','xne','2012-03-31 22:10:51'),('7hS','DEb','2012-03-31 22:26:08'),('jqC','m8y','2012-03-31 22:26:48'),('7WA','RWc','2012-03-31 22:27:23'),('xem','ZDJ','2012-03-31 22:28:24'),('Mjx','7KJ','2012-03-31 22:28:46'),('5Fc','7CM','2012-03-31 22:29:30'),('kmb','Z2t','2012-03-31 22:30:02'),('ZEZ','5XU','2012-03-31 22:31:50'),('q3f','gf2','2012-03-31 22:32:21'),('Pc7','4kh','2012-03-31 22:32:45'),('unN','Sgm','2012-03-31 22:32:56'),('k8r','NDW','2012-03-31 22:33:08'),('M82','PNE','2012-03-31 22:33:33'),('UNVu34qN','W7uXU8cw','2012-04-02 09:52:25'),('RZzbuS3x','w47ayNaH','2012-04-02 10:02:43'),('4DbG9TdC','6BhdApNM','2012-04-02 10:02:46'),('qzqEbrTW','vb3CvcnC','2012-04-02 10:02:50'),('xGkwa28F','9jrsBtZS','2012-04-02 11:28:55'),('q6fTJDWS','dPXdAy4E','2012-04-02 12:15:25'),('U5TPd3hc','H5cc7zez','2012-04-02 12:15:30'),('4BzUSk9T','WfuRTqbu','2012-04-02 12:18:41');
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
  `private` tinyint(4) NOT NULL,
  `anonymous` int(11) NOT NULL DEFAULT '0',
  `question` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bgcolor` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT '666666',
  `fgcolor` varchar(6) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'a1a1a1',
  `bgimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `algorythm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaos`
--

LOCK TABLES `chaos` WRITE;
/*!40000 ALTER TABLE `chaos` DISABLE KEYS */;
INSERT INTO `chaos` VALUES (1,'sadfdsf','2012-03-09 11:21:23',0,0,'','','','','','',0),(2,'muerte','2012-03-19 22:32:20',0,0,'','','#ff000','#00e3e','http://www.elpais.es','none',3),(3,'desolacion','2012-03-09 11:36:53',0,0,'','','','','','',0),(4,'ssadfsadf','2012-03-09 11:39:15',0,0,'','','','','','',0),(5,'ssadfsadfe','2012-03-09 11:40:05',0,0,'','','','','','',0),(6,'muertedolor','2012-03-09 11:44:52',0,0,'','','','','','',0),(7,'asdfdsaf','2012-03-09 11:59:15',0,0,'','','','','','',0),(8,'muertes','2012-03-09 12:00:40',0,0,'','','','','','',0),(9,'sn','2012-03-09 12:05:29',0,0,'','','','','','',0),(10,'dolores','2012-03-09 12:08:47',0,0,'','','','','','',0),(11,'dsfasdf','2012-03-09 12:27:38',0,0,'','','','','','',0),(12,'muertetotal','2012-03-09 12:35:43',0,0,'','','','','','',0),(13,'pello','2012-03-09 12:37:14',0,0,'','','','','','',0),(14,'degeneracion','2012-03-09 12:50:35',0,0,'','','','','','',0),(15,'muertenegratotal','2012-03-09 21:48:23',0,0,'','','','','','',0),(16,'dolorintestinal','2012-03-09 23:11:18',0,0,'','','5988aa','4c9040','','',0),(17,'bebe','2012-03-09 23:11:56',0,0,'','','8d7e6f','558a10','','',0),(18,'terminator','2012-03-10 23:13:17',0,0,'','','9b2ec2','795458','','',0),(19,'muertesnegras','2012-03-10 23:18:28',0,0,'','','e7542f','3aa58','','',0),(20,'pellochaos','2012-03-11 23:28:43',0,0,'','','ca72a3','920dda','','',3),(21,'gangrenoso','2012-03-16 10:11:59',0,1,'muerte y dolor','dolor','30f53d','443c26','','',0),(22,'pellochaosium','2012-03-16 10:12:45',0,0,'','','c3121','833e3f','','',3),(23,'negrura','2012-03-19 22:00:57',0,1,'eres tÃº un dios','entonces, muerte','#10101','#2e0cc','http://www.elpais.es','',0),(24,'death','2012-03-19 22:40:05',0,0,'','','fae602','7ba57e','','',3),(25,'ccc','2012-03-28 09:08:35',0,1,'aaa','bbb','2753fb','ef7e7f','','',0),(26,'eee','2012-03-28 09:09:18',0,1,'aaa','bbb','6c9e','158658','','',0),(27,'megadeth','2012-03-28 09:50:36',0,1,'asfdasdf','zxcvcv','#9553d','#982b0','http://www.none.com','none',0),(28,'overkill','2012-03-28 12:31:27',0,1,'eres tu un dios','entocen sfda','#7c0dc','#069de','http://www.elpais.com','none',0);
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
INSERT INTO `chaos_upload_code` VALUES (2,'kngkxmr3'),(2,'zqx7s5jy'),(2,'7teh3c67'),(2,'s5ww62ch'),(2,'kbxkqvcu'),(2,'wprb5nh'),(18,'r5zd3x3'),(18,'q9yvp36q'),(19,'pz57q49c'),(19,'5vwvvmh8'),(2,'cfaed95m'),(2,'cdzbs5jq'),(2,'hyh23svv'),(26,'dth2htkp'),(26,'2zqyedfd'),(26,'d3raxcem'),(28,'zphahbvg'),(28,'rem5rxbv'),(28,'e49dsje3'),(28,'9c3h843d'),(28,'rmygksgg'),(28,'pbt2xqr5'),(0,'6zgyv6k8'),(0,'brykygdb'),(0,'p498n3kz'),(0,'wbteyhpz'),(0,'w44e4ymm'),(0,'s736bcmv'),(0,'m43xajg7'),(0,'9hj2fhdr'),(0,'28j9kwwk'),(0,'4y7ac5wx'),(28,'878527v7'),(28,'drqhzs9j'),(28,'73b6pq8g'),(28,'7ygfy7x2'),(0,'vt9jv27w'),(0,'mvusy2rf'),(0,'x6nuyprc'),(0,'cv5q56cn'),(0,'5qk6u7bg'),(28,'wyh5nv24'),(0,'pwejda9k'),(0,'4gtuzgpk'),(0,'6jq5zgn9'),(0,'68bquj2g'),(0,'6qcdhcc6'),(0,'yp33d2jb'),(0,'mscsfvyp'),(0,'mftqaw3y'),(0,'pyvkdxqn'),(0,'kvcscrza'),(0,'vVsMe3K9'),(0,'CvNw7sSU'),(0,'uePb5BNB'),(0,'zyaE2qjd'),(0,'UBbkvxAE'),(0,'GBxHqjyf'),(0,'kmbk3auk'),(0,'cDv7hvqd'),(0,'xAprusr5'),(0,'9h7AcC3B'),(0,'b9Czjx6m'),(0,'2pDGa7eA'),(0,'5jGAdEfa'),(0,'tBeb9jA2'),(0,'wadDUDbt'),(0,'hSt5Mx8U'),(0,'y254cRMt'),(0,'nxjW57p3'),(0,'Rd7e62gJ'),(0,'pGkZB42P'),(0,'hADKdm3d'),(0,'zayg9Zj5'),(0,'2vGH7YaC'),(0,'8YC6ugnm'),(0,'DeKNuEDX'),(0,'MDvakMXe'),(0,'hwBYVBw5'),(0,'7yPyBTR8'),(0,'RT3mqgnd'),(0,'qPn9rnYt'),(0,'3nV5TC9e'),(0,'YH7kWp9k'),(0,'Sqt62v9f'),(0,'sBZ7Y8HD'),(0,'PxBMKbPj'),(0,'9PpJZkWa'),(0,'f4YVbDmF'),(0,'yVFKwm2m'),(0,'YdFDFdwr'),(0,'rwKd4a72'),(0,'VvMH6RJN');
/*!40000 ALTER TABLE `chaos_upload_code` ENABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'genpas.c','','genpas-c','',7,-1,'2012-03-30 09:46:24',3),(2,'genpas.c','','genpas-c','',7,-1,'2012-03-30 09:47:10',3),(3,'genpas.c','sdfdsf','genpas-c','',7,-1,'2012-03-30 09:48:26',3),(4,'genpas.c','','genpas-c','',7,-1,'2012-03-30 09:53:10',3),(5,'genpas.c','','genpas-c','./upload/items/5/5.c',7,-1,'2012-03-30 09:53:28',3),(6,'http://www.rediris.es','','http-www-rediris-es','http://www.rediris.es',5,-1,'2012-03-30 10:28:24',3),(7,'http://www.rediris.es','','http-www-rediris-es','http://www.rediris.es',5,-1,'2012-03-30 10:29:04',3),(8,'bla bla bla como mol','bla bla bla como mola bla bla','bla-bla-bla-como-mol','',5,-1,'2012-03-30 10:35:41',3),(9,'clases.dia','','clases-dia','./upload/items/9/9.dia',4,-1,'2012-03-30 10:37:49',3),(10,'dsfgsdfgfdsgsdfg','dsfgsdfgfdsgsdfg','dsfgsdfgfdsgsdfg','',7,0,'2012-03-30 10:38:32',0),(11,'http://torrents.thepiratebay.org/3935979/Juegos_de_guerra_(Dvdrip_Spanish).3935979.TPB.torrent','','http-torrents-thepiratebay-org-3935979-juegos-de-guerra-dvdrip-spanish-3935979-tpb-torrent','http://torrents.thepiratebay.org/3935979/Juegos_de_guerra_(Dvdrip_Spanish).3935979.TPB.torrent',5,0,'2012-03-30 10:52:32',0),(12,'Redirises 11','Rediris 22','redirises-11','http://www.rediris.com',5,28,'2012-03-30 10:55:53',3),(13,'El Pais','sdfsd','el-pais','http://www.elmundo.es',5,0,'2012-03-31 20:51:50',3),(14,'09 - Reunion With Mira.mp3','','09-reunion-with-mira-mp3','',3,0,'2012-03-31 21:03:15',3),(15,'09 - Reunion With Mira.mp3','','09-reunion-with-mira-mp3','',3,0,'2012-03-31 21:03:20',3),(16,'09 - Reunion With Mira.mp3','','09-reunion-with-mira-mp3','',3,0,'2012-03-31 21:03:45',3),(17,'2009 - Cosmogenesis.jpg','','2009-cosmogenesis-jpg','./upload/items/17/17.jpg',1,0,'2012-03-31 21:05:00',3),(18,'lower','yeah','lower_4','./upload/items/18/18.mp3',3,0,'2012-03-31 21:05:55',3),(19,'lower.avi','','lower-avi','./upload/items/19/19.avi',2,0,'2012-03-31 21:06:13',3),(20,'lower.avi','','lower-avi','./upload/items/20/wgZNRLRSE9tVcq2Z.avi',2,0,'2012-03-31 21:37:57',3),(21,'lower.avi','','lower-avi','./upload/items/21/4BUsDfD2dYmSTRkT.avi',2,0,'2012-03-31 21:37:57',3),(22,'DSC00128.JPG','','dsc00128-jpg','',1,0,'2012-04-02 09:52:52',0),(23,'andaluzia_askatu.mp3','','andaluzia-askatu-mp3','',3,0,'2012-04-02 12:19:26',0);
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
INSERT INTO `item_tag` VALUES (12,33),(12,42),(12,43),(18,33),(18,44),(43,21),(44,22),(45,23),(45,24),(45,25),(45,26),(45,27),(45,28),(46,23),(46,24),(46,25),(46,29),(46,30),(46,31),(56,32),(56,33),(56,35),(56,36),(57,33),(57,37),(58,38),(59,39),(59,40),(60,33),(60,35),(61,41);
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
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (31,'h'),(30,'g'),(29,'f'),(28,'x'),(27,'y'),(26,'z'),(25,'c'),(24,'b'),(23,'a'),(22,','),(21,'d,a,v'),(32,'negra'),(33,'muerte'),(34,'dolor'),(35,'dolores'),(36,'negrilla'),(37,'bla'),(38,'sadfasdf'),(39,'primeras'),(40,'impresiones'),(41,'333'),(42,'rediris'),(43,'33'),(44,'music');
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'aaaa','bbb@wer.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-11 23:11:34',''),(2,'test','wer@wer.come','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-11 23:12:40',''),(3,'pello','pello@pello.info','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-11 23:14:30',''),(4,'muerte','muerte@wer.comn','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-11 23:39:56',''),(5,'prueba','prueba@wer.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-12 00:11:04','f1c3f6c91bffb55a0d27e9470ec335854a187e48'),(6,'dolores','bag@asdg.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-13 11:43:41',''),(9,'gangrena','gange@wer.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-26 12:13:03','');
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

-- Dump completed on 2012-04-02 14:22:26
