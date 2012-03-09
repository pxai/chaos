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
INSERT INTO `captcha` VALUES ('q2wkwr86','v8qqkv5j','2012-03-09 12:08:13'),('wzz9pxya','f4wunjh','2012-03-09 12:08:14'),('eswrxq','fh57nrt','2012-03-09 12:08:14'),('n3geh7b3','qw7pwtjx','2012-03-09 12:09:46'),('8xa3vxx','kf7p6jm','2012-03-09 12:08:31'),('pbq7tjzx','xb9vnnt8','2012-03-09 12:09:46'),('bjdkrjc','dre42yz7','2012-03-09 12:09:47'),('9rtapccs','jj34qqw4','2012-03-09 12:11:20'),('dgncu4fu','ugjdmtk5','2012-03-09 12:11:20'),('u9mudbr','rfdw5brm','2012-03-09 12:11:20'),('tuyn6xpd','24e4usmy','2012-03-09 12:21:00'),('duv5qrxx','2tvsjeez','2012-03-09 12:21:01'),('9u2ywnsw','mxm6yjnn','2012-03-09 12:21:01'),('v4uf5y6x','9supueaf','2012-03-09 12:26:56'),('b3hruwtf','euhdw4u','2012-03-09 12:27:01'),('pjjj7rqg','nq7ufkzg','2012-03-09 12:27:01'),('awrq5hs','xjfvcwx','2012-03-09 12:37:16'),('hey2ya78','m7rezddt','2012-03-09 12:27:25'),('a6bc9nww','s22jdzrb','2012-03-09 12:27:25'),('heba55s5','q6h6mw5','2012-03-09 12:34:55'),('t67h6u4','jentfjc7','2012-03-09 12:34:55'),('gcz4yz2q','f7p7hnd','2012-03-09 12:36:52'),('pee9s9tn','qy99fsuh','2012-03-09 12:36:52'),('rndktaug','jtcq37u','2012-03-09 12:37:16'),('37jud3sw','x63u2ndd','2012-03-09 12:37:16'),('246v4q9q','ycysnefx','2012-03-09 12:42:28'),('rjjggea7','ptjpveuj','2012-03-09 12:42:28'),('cb8mqfy','4gd8b8vh','2012-03-09 12:42:28'),('6swtqch5','bf8j2x','2012-03-09 12:42:59'),('xe88e7t','r7vrgkr','2012-03-09 12:42:59'),('wczs92fz','hbk5xx','2012-03-09 12:42:59'),('5v4c8bbx','m8v3yjdb','2012-03-09 12:43:12'),('bzsyd6nx','tzu5wpfj','2012-03-09 12:43:12'),('7py9ge92','68furu5','2012-03-09 12:43:12'),('2st374jr','46qkxqsj','2012-03-09 12:43:26'),('as958uju','hv9f4zyb','2012-03-09 12:43:26'),('bzgdu96s','f8m7ezwz','2012-03-09 12:43:26'),('q5p7jajy','7gjv83dc','2012-03-09 12:47:57'),('9qqdqwj','cehypyp','2012-03-09 12:47:57'),('k7hvezqt','w55zbypu','2012-03-09 12:47:57'),('36cynm2','mct55e3c','2012-03-09 12:48:00'),('w4e4cg78','9e4zhpze','2012-03-09 12:48:00'),('dvqmamvm','zb2446mt','2012-03-09 12:48:00'),('927n7pb4','9uasc7m','2012-03-09 12:48:14'),('qsfnecze','fuxrscdf','2012-03-09 12:48:15'),('rka4uyf6','5esd9dqs','2012-03-09 12:48:15'),('x7w7w7cc','mg48wz58','2012-03-09 12:48:18'),('bbmwj7gj','5rtk5tmx','2012-03-09 12:48:18'),('2hr5snp8','m2v8hptz','2012-03-09 12:48:18'),('4xx4yf3m','4et9sne4','2012-03-09 12:48:23'),('ha4hn6wp','ycxxgz94','2012-03-09 12:48:23'),('xrvw6yzx','d5vjkvy4','2012-03-09 12:48:23'),('nf3ryn3w','fs8y53vs','2012-03-09 12:49:59'),('m87242m','v9df876y','2012-03-09 12:49:59'),('xabjvejf','9229ssv9','2012-03-09 12:49:59'),('4sk5kp3d','kgvqbmhd','2012-03-09 12:49:59'),('hpcahvp','dgmxy9','2012-03-09 12:49:59'),('7uaevzf3','dmupqwjv','2012-03-09 12:50:00'),('vekg4krt','hbmpzxja','2012-03-09 12:50:01'),('9myhct3u','hgp8pkkd','2012-03-09 12:50:01'),('e7zd8v2a','quxdax33','2012-03-09 12:50:01'),('rerj9du6','jvudpdhh','2012-03-09 12:50:01'),('y6t4awp','yvezaxxu','2012-03-09 12:50:02'),('rd26h6us','ph5vbzx7','2012-03-09 12:50:03'),('e5z2z5eu','ppkzsam','2012-03-09 12:50:03'),('pd37uqkp','feyekd6','2012-03-09 12:50:03'),('vxsqkdb3','euengp5s','2012-03-09 12:50:03'),('y4s8qqtj','zxw8kzyg','2012-03-09 12:50:03'),('7ypuxum','5bjbmykm','2012-03-09 12:50:35'),('6d9ka38','j86hev44','2012-03-09 12:50:08'),('whgsper7','69k2frx','2012-03-09 12:50:08'),('yb95637u','ayvzyqre','2012-03-09 12:50:08'),('asaruzv8','zgwzzjpg','2012-03-09 12:50:08'),('9rv3m8s6','33xnczq5','2012-03-09 12:50:35'),('watpymh9','mvdc6yya','2012-03-09 12:50:35'),('y6d8gq49','92sh9rys','2012-03-09 12:50:35'),('4kt5629','79vyamry','2012-03-09 12:50:35'),('q7tv4thb','8q6qr6r2','2012-03-09 12:57:55'),('k8cfrzqr','yf9me93','2012-03-09 12:57:55'),('c6x3zdtm','b94daf6w','2012-03-09 12:57:55'),('2aa5bxs','7h7krr','2012-03-09 12:57:55'),('utrvp7eh','92eq37xb','2012-03-09 12:57:55'),('gcf5gdmh','4h588wfy','2012-03-09 12:58:55'),('er8d3q','yewjpf6m','2012-03-09 12:58:55'),('uww574t','pmtsn2n','2012-03-09 12:58:55'),('4tc2bc47','njhqjm6x','2012-03-09 12:58:55'),('r36f7u8h','cs78ew6e','2012-03-09 12:58:55'),('t7q3ee9h','dbtwyea5','2012-03-09 12:59:11'),('ywqqdxp','f2ugszxh','2012-03-09 12:59:11'),('wwppab7k','6qbbp8x','2012-03-09 12:59:11'),('b5tdbmfy','bbbwbd2d','2012-03-09 12:59:11'),('vjvmfuf6','wh7pyp76','2012-03-09 12:59:11'),('faacfa3c','6ge2s8zy','2012-03-09 12:59:12'),('rgz8jhvc','a8fjme3u','2012-03-09 12:59:12'),('2djqwkpq','czcwqz55','2012-03-09 12:59:12'),('6mxdjdqv','agrd2vka','2012-03-09 12:59:12'),('rkys29hq','zfwdmxc','2012-03-09 12:59:12'),('ts95sqs3','x8nzgqfn','2012-03-09 12:59:22'),('tx8accvn','pafnenvp','2012-03-09 12:59:23'),('mzj89wgp','7gsxnke2','2012-03-09 12:59:23'),('sp77nks3','3uv36wjk','2012-03-09 12:59:23'),('dbtw53hn','aqzu5w7p','2012-03-09 12:59:23'),('96kf8b8','gbuqc56z','2012-03-09 12:59:35'),('d4b59jqk','pr9f463','2012-03-09 12:59:36'),('duyrfbf','etxeynca','2012-03-09 12:59:36'),('n9eyjez','y9n9hue','2012-03-09 12:59:36'),('7y8u8wsq','zxjmshh','2012-03-09 12:59:36'),('ekvz5gkq','4yacbmhs','2012-03-09 13:00:16'),('57euj7xm','qn5keucu','2012-03-09 13:00:16'),('fq2uzchf','4av4qwej','2012-03-09 13:00:16'),('mkmky4p','ycv6vmbr','2012-03-09 13:00:16'),('736s5d9r','wqcmwrwa','2012-03-09 13:00:16'),('5w3458xn','vd6wb7a','2012-03-09 13:00:22'),('c336kjbs','zxjgsv88','2012-03-09 13:00:23'),('s3bnjms','j8q85dp5','2012-03-09 13:00:23'),('xuh7a6br','kb4phqs6','2012-03-09 13:00:23'),('3xqbb5rh','enetbvy','2012-03-09 13:00:23'),('2q3pp6jh','d242m9qs','2012-03-09 13:00:38'),('yqwcvpxg','m2vyg8e3','2012-03-09 13:00:38'),('utwpn3xe','vh7xjbue','2012-03-09 13:00:38'),('xmrf36p','gt3a36an','2012-03-09 13:00:39'),('s27enfys','ugm7w4uj','2012-03-09 13:00:39'),('e976npqt','qtxzb4rp','2012-03-09 13:00:52'),('k5syxkt','46s4tzgy','2012-03-09 13:00:52'),('uamsfvbc','rv7vpyu','2012-03-09 13:00:52'),('3zt3jahj','sez8wada','2012-03-09 13:00:52'),('cy9777e','ftqzk6ju','2012-03-09 13:00:52'),('9wd424fz','x3fyvw','2012-03-09 13:00:55'),('wcya8z2','94b2szd6','2012-03-09 13:00:55'),('fm82h2gu','xkusabkq','2012-03-09 13:00:55'),('jfh4v57','73wydxnd','2012-03-09 13:00:55'),('scy9z53t','v5qhqrdn','2012-03-09 13:00:55'),('tgmge9','ewu8t3tw','2012-03-09 13:00:58'),('4fua8dww','vfy7gpu9','2012-03-09 13:00:59'),('pmegptdd','jn4wnegc','2012-03-09 13:00:59'),('83nxv2mb','zaff3dyq','2012-03-09 13:01:00'),('pjr2vkmx','trdsfnn3','2012-03-09 13:01:01'),('5z6gr3nb','bh7qe86','2012-03-09 13:01:01'),('mdvq8fyc','3bbsj673','2012-03-09 13:01:01'),('88mk69e','grhsnr3u','2012-03-09 13:01:01');
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
  `question` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaos`
--

LOCK TABLES `chaos` WRITE;
/*!40000 ALTER TABLE `chaos` DISABLE KEYS */;
INSERT INTO `chaos` VALUES (1,'sadfdsf','2012-03-09 11:21:23',0,'',''),(2,'muerte','2012-03-09 11:21:51',0,'',''),(3,'desolacion','2012-03-09 11:36:53',0,'',''),(4,'ssadfsadf','2012-03-09 11:39:15',0,'',''),(5,'ssadfsadfe','2012-03-09 11:40:05',0,'',''),(6,'muertedolor','2012-03-09 11:44:52',0,'',''),(7,'asdfdsaf','2012-03-09 11:59:15',0,'',''),(8,'muertes','2012-03-09 12:00:40',0,'',''),(9,'sn','2012-03-09 12:05:29',0,'',''),(10,'dolores','2012-03-09 12:08:47',0,'',''),(11,'dsfasdf','2012-03-09 12:27:38',0,'',''),(12,'muertetotal','2012-03-09 12:35:43',0,'',''),(13,'pello','2012-03-09 12:37:14',0,'',''),(14,'degeneracion','2012-03-09 12:50:35',0,'','');
/*!40000 ALTER TABLE `chaos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-09 14:03:57
