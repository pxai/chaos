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
INSERT INTO `captcha` VALUES ('q2wkwr86','v8qqkv5j','2012-03-09 12:08:13'),('wzz9pxya','f4wunjh','2012-03-09 12:08:14'),('eswrxq','fh57nrt','2012-03-09 12:08:14'),('n3geh7b3','qw7pwtjx','2012-03-09 12:09:46'),('8xa3vxx','kf7p6jm','2012-03-09 12:08:31'),('pbq7tjzx','xb9vnnt8','2012-03-09 12:09:46'),('bjdkrjc','dre42yz7','2012-03-09 12:09:47'),('9rtapccs','jj34qqw4','2012-03-09 12:11:20'),('dgncu4fu','ugjdmtk5','2012-03-09 12:11:20'),('u9mudbr','rfdw5brm','2012-03-09 12:11:20'),('tuyn6xpd','24e4usmy','2012-03-09 12:21:00'),('duv5qrxx','2tvsjeez','2012-03-09 12:21:01'),('9u2ywnsw','mxm6yjnn','2012-03-09 12:21:01'),('v4uf5y6x','9supueaf','2012-03-09 12:26:56'),('b3hruwtf','euhdw4u','2012-03-09 12:27:01'),('pjjj7rqg','nq7ufkzg','2012-03-09 12:27:01'),('awrq5hs','xjfvcwx','2012-03-09 12:37:16'),('hey2ya78','m7rezddt','2012-03-09 12:27:25'),('a6bc9nww','s22jdzrb','2012-03-09 12:27:25'),('heba55s5','q6h6mw5','2012-03-09 12:34:55'),('t67h6u4','jentfjc7','2012-03-09 12:34:55'),('gcz4yz2q','f7p7hnd','2012-03-09 12:36:52'),('pee9s9tn','qy99fsuh','2012-03-09 12:36:52'),('rndktaug','jtcq37u','2012-03-09 12:37:16'),('37jud3sw','x63u2ndd','2012-03-09 12:37:16'),('246v4q9q','ycysnefx','2012-03-09 12:42:28'),('rjjggea7','ptjpveuj','2012-03-09 12:42:28'),('cb8mqfy','4gd8b8vh','2012-03-09 12:42:28'),('6swtqch5','bf8j2x','2012-03-09 12:42:59'),('xe88e7t','r7vrgkr','2012-03-09 12:42:59'),('wczs92fz','hbk5xx','2012-03-09 12:42:59'),('5v4c8bbx','m8v3yjdb','2012-03-09 12:43:12'),('bzsyd6nx','tzu5wpfj','2012-03-09 12:43:12'),('7py9ge92','68furu5','2012-03-09 12:43:12'),('2st374jr','46qkxqsj','2012-03-09 12:43:26'),('as958uju','hv9f4zyb','2012-03-09 12:43:26'),('bzgdu96s','f8m7ezwz','2012-03-09 12:43:26'),('q5p7jajy','7gjv83dc','2012-03-09 12:47:57'),('9qqdqwj','cehypyp','2012-03-09 12:47:57'),('k7hvezqt','w55zbypu','2012-03-09 12:47:57'),('36cynm2','mct55e3c','2012-03-09 12:48:00'),('w4e4cg78','9e4zhpze','2012-03-09 12:48:00'),('dvqmamvm','zb2446mt','2012-03-09 12:48:00'),('927n7pb4','9uasc7m','2012-03-09 12:48:14'),('qsfnecze','fuxrscdf','2012-03-09 12:48:15'),('rka4uyf6','5esd9dqs','2012-03-09 12:48:15'),('x7w7w7cc','mg48wz58','2012-03-09 12:48:18'),('bbmwj7gj','5rtk5tmx','2012-03-09 12:48:18'),('2hr5snp8','m2v8hptz','2012-03-09 12:48:18'),('4xx4yf3m','4et9sne4','2012-03-09 12:48:23'),('ha4hn6wp','ycxxgz94','2012-03-09 12:48:23'),('xrvw6yzx','d5vjkvy4','2012-03-09 12:48:23'),('nf3ryn3w','fs8y53vs','2012-03-09 12:49:59'),('m87242m','v9df876y','2012-03-09 12:49:59'),('xabjvejf','9229ssv9','2012-03-09 12:49:59'),('4sk5kp3d','kgvqbmhd','2012-03-09 12:49:59'),('hpcahvp','dgmxy9','2012-03-09 12:49:59'),('7uaevzf3','dmupqwjv','2012-03-09 12:50:00'),('vekg4krt','hbmpzxja','2012-03-09 12:50:01'),('9myhct3u','hgp8pkkd','2012-03-09 12:50:01'),('e7zd8v2a','quxdax33','2012-03-09 12:50:01'),('rerj9du6','jvudpdhh','2012-03-09 12:50:01'),('y6t4awp','yvezaxxu','2012-03-09 12:50:02'),('rd26h6us','ph5vbzx7','2012-03-09 12:50:03'),('e5z2z5eu','ppkzsam','2012-03-09 12:50:03'),('pd37uqkp','feyekd6','2012-03-09 12:50:03'),('vxsqkdb3','euengp5s','2012-03-09 12:50:03'),('y4s8qqtj','zxw8kzyg','2012-03-09 12:50:03'),('7ypuxum','5bjbmykm','2012-03-09 12:50:35'),('6d9ka38','j86hev44','2012-03-09 12:50:08'),('whgsper7','69k2frx','2012-03-09 12:50:08'),('yb95637u','ayvzyqre','2012-03-09 12:50:08'),('asaruzv8','zgwzzjpg','2012-03-09 12:50:08'),('9rv3m8s6','33xnczq5','2012-03-09 12:50:35'),('watpymh9','mvdc6yya','2012-03-09 12:50:35'),('y6d8gq49','92sh9rys','2012-03-09 12:50:35'),('4kt5629','79vyamry','2012-03-09 12:50:35'),('q7tv4thb','8q6qr6r2','2012-03-09 12:57:55'),('k8cfrzqr','yf9me93','2012-03-09 12:57:55'),('c6x3zdtm','b94daf6w','2012-03-09 12:57:55'),('2aa5bxs','7h7krr','2012-03-09 12:57:55'),('utrvp7eh','92eq37xb','2012-03-09 12:57:55'),('gcf5gdmh','4h588wfy','2012-03-09 12:58:55'),('er8d3q','yewjpf6m','2012-03-09 12:58:55'),('uww574t','pmtsn2n','2012-03-09 12:58:55'),('4tc2bc47','njhqjm6x','2012-03-09 12:58:55'),('r36f7u8h','cs78ew6e','2012-03-09 12:58:55'),('t7q3ee9h','dbtwyea5','2012-03-09 12:59:11'),('ywqqdxp','f2ugszxh','2012-03-09 12:59:11'),('wwppab7k','6qbbp8x','2012-03-09 12:59:11'),('b5tdbmfy','bbbwbd2d','2012-03-09 12:59:11'),('vjvmfuf6','wh7pyp76','2012-03-09 12:59:11'),('faacfa3c','6ge2s8zy','2012-03-09 12:59:12'),('rgz8jhvc','a8fjme3u','2012-03-09 12:59:12'),('2djqwkpq','czcwqz55','2012-03-09 12:59:12'),('6mxdjdqv','agrd2vka','2012-03-09 12:59:12'),('rkys29hq','zfwdmxc','2012-03-09 12:59:12'),('ts95sqs3','x8nzgqfn','2012-03-09 12:59:22'),('tx8accvn','pafnenvp','2012-03-09 12:59:23'),('mzj89wgp','7gsxnke2','2012-03-09 12:59:23'),('sp77nks3','3uv36wjk','2012-03-09 12:59:23'),('dbtw53hn','aqzu5w7p','2012-03-09 12:59:23'),('96kf8b8','gbuqc56z','2012-03-09 12:59:35'),('d4b59jqk','pr9f463','2012-03-09 12:59:36'),('duyrfbf','etxeynca','2012-03-09 12:59:36'),('n9eyjez','y9n9hue','2012-03-09 12:59:36'),('7y8u8wsq','zxjmshh','2012-03-09 12:59:36'),('ekvz5gkq','4yacbmhs','2012-03-09 13:00:16'),('57euj7xm','qn5keucu','2012-03-09 13:00:16'),('fq2uzchf','4av4qwej','2012-03-09 13:00:16'),('mkmky4p','ycv6vmbr','2012-03-09 13:00:16'),('736s5d9r','wqcmwrwa','2012-03-09 13:00:16'),('5w3458xn','vd6wb7a','2012-03-09 13:00:22'),('c336kjbs','zxjgsv88','2012-03-09 13:00:23'),('s3bnjms','j8q85dp5','2012-03-09 13:00:23'),('xuh7a6br','kb4phqs6','2012-03-09 13:00:23'),('3xqbb5rh','enetbvy','2012-03-09 13:00:23'),('2q3pp6jh','d242m9qs','2012-03-09 13:00:38'),('yqwcvpxg','m2vyg8e3','2012-03-09 13:00:38'),('utwpn3xe','vh7xjbue','2012-03-09 13:00:38'),('xmrf36p','gt3a36an','2012-03-09 13:00:39'),('s27enfys','ugm7w4uj','2012-03-09 13:00:39'),('e976npqt','qtxzb4rp','2012-03-09 13:00:52'),('k5syxkt','46s4tzgy','2012-03-09 13:00:52'),('uamsfvbc','rv7vpyu','2012-03-09 13:00:52'),('3zt3jahj','sez8wada','2012-03-09 13:00:52'),('cy9777e','ftqzk6ju','2012-03-09 13:00:52'),('9wd424fz','x3fyvw','2012-03-09 13:00:55'),('wcya8z2','94b2szd6','2012-03-09 13:00:55'),('fm82h2gu','xkusabkq','2012-03-09 13:00:55'),('jfh4v57','73wydxnd','2012-03-09 13:00:55'),('scy9z53t','v5qhqrdn','2012-03-09 13:00:55'),('tgmge9','ewu8t3tw','2012-03-09 13:00:58'),('4fua8dww','vfy7gpu9','2012-03-09 13:00:59'),('pmegptdd','jn4wnegc','2012-03-09 13:00:59'),('83nxv2mb','zaff3dyq','2012-03-09 13:01:00'),('pjr2vkmx','trdsfnn3','2012-03-09 13:01:01'),('5z6gr3nb','bh7qe86','2012-03-09 13:01:01'),('mdvq8fyc','3bbsj673','2012-03-09 13:01:01'),('88mk69e','grhsnr3u','2012-03-09 13:01:01'),('y4tzmsn5','yteg2y79','2012-03-09 21:30:50'),('gcsxznrb','zszf7bgb','2012-03-09 21:34:47'),('2uq9cnnc','uqrxc8sk','2012-03-09 21:34:47'),('28d8vwz','u86fhu9','2012-03-09 21:35:55'),('zexjp4df','rawc28rc','2012-03-09 21:37:40'),('nqwwgu3g','vswsvgr3','2012-03-09 21:39:10'),('hc4kqhxt','3a9nxe8p','2012-03-09 21:39:16'),('cmkq9ddk','7wshsaw','2012-03-09 21:39:27'),('xfbedwfv','3n4qpjf6','2012-03-09 21:40:27'),('wnb6kdy','7sjngyb8','2012-03-09 21:42:25'),('egrpdga','tughwxf8','2012-03-09 21:44:19'),('erhtaj2u','jwbjaj8','2012-03-09 21:44:52'),('ta8rpvvk','984564ja','2012-03-09 21:44:52'),('b3agjpet','vwh884h','2012-03-09 21:44:54'),('h7utsmnt','m5r8m7a','2012-03-09 21:45:01'),('488abjsj','4ev4ne2w','2012-03-09 21:45:03'),('et62ptp','ewvf3z39','2012-03-09 21:45:05'),('aketxsa9','ms7xr3xh','2012-03-09 21:45:06'),('herqstdw','qu52n4dn','2012-03-09 21:45:06'),('qd2xud5','k58j5w58','2012-03-09 21:45:39'),('d45sd7t','3kt9z28','2012-03-09 21:45:59'),('kumc92md','whxux2z','2012-03-09 21:46:54'),('ewquep9j','atr4hh3u','2012-03-09 21:46:56'),('jcueh4yg','4x4fyyr4','2012-03-09 21:46:57'),('k4kq92qu','5fskhnkb','2012-03-09 21:46:57'),('mmjwysj2','p7zqrhb2','2012-03-09 21:46:57'),('efnxyshc','ac4p782','2012-03-09 21:47:46'),('htygn3x','vc7qdk8p','2012-03-09 21:48:23'),('dqj9u6f','s49z4chg','2012-03-09 21:50:44'),('ae54cajm','44nuwyuz','2012-03-09 21:50:47'),('8jstp6d3','7be4vxbv','2012-03-09 21:50:48'),('5q9cctz4','g5qxnubm','2012-03-09 21:51:14'),('5b6j6ctw','wjzhtg5','2012-03-09 21:51:14'),('g4jgz6f','xxgm3cs','2012-03-09 21:51:16'),('9wz8brgd','w5nnjuvt','2012-03-09 21:51:16'),('cg5a9hv3','qbcxpnzx','2012-03-09 21:51:18'),('jdtkc539','shzerpz2','2012-03-09 21:51:18'),('v3zds5au','txwaqpdp','2012-03-09 21:51:22'),('33dd8rha','dqa7zgvu','2012-03-09 21:51:22'),('eusffp3w','xs3thjts','2012-03-09 21:51:30'),('tkypz3zw','f3543hn','2012-03-09 21:51:30'),('nhgvu9xb','93sk95uz','2012-03-09 21:51:32'),('nn3cshrg','9w2q475v','2012-03-09 21:51:33'),('srbjktt','37uukqcy','2012-03-09 21:51:33'),('f72ur6pg','skwdh3zm','2012-03-09 21:52:55'),('vx4scatg','rtcfzxzc','2012-03-09 22:02:30'),('gdx5f28s','2sczvbtc','2012-03-09 22:02:30'),('2vs5r4g','kmfm78r','2012-03-09 22:03:52'),('78yq6kr4','b9c3wzm','2012-03-09 22:03:53'),('36n66wfy','quhag42d','2012-03-09 22:06:38'),('bhxqc2g','4m4n9582','2012-03-09 22:06:38'),('jt5numu','6wevj6xe','2012-03-09 22:07:02'),('zjvkbu73','gsqnx283','2012-03-09 22:07:59'),('nvs5s2jr','5trfa2jc','2012-03-09 22:07:59'),('uxpwk4','q6nh2c5h','2012-03-09 22:11:38'),('m4ukm2j7','d24zg6p','2012-03-09 22:15:23'),('x38xjdsg','hph7b2r','2012-03-09 22:15:23'),('2s7jnp9r','9fpqr544','2012-03-09 22:15:27'),('qy9ty2en','bq773qhk','2012-03-09 22:15:32'),('nswcjmzr','cuq7myh7','2012-03-09 22:16:09'),('s5hhbp8v','72w99nun','2012-03-09 22:16:09'),('n5tgthe9','mr3myqqr','2012-03-09 22:16:14'),('qc8vxgqk','mgw75h8j','2012-03-09 22:16:46'),('kxsvqsv5','n8cc7kn','2012-03-09 22:16:50'),('guyxgv7f','tpneufd7','2012-03-09 22:18:00'),('j7cqyqcp','kry3n8r6','2012-03-09 22:18:04'),('vscnxute','e697drz5','2012-03-09 22:19:13'),('p8rxhfdm','ztgagr7s','2012-03-09 22:19:13'),('9gvtum','2jhzkg8p','2012-03-09 22:19:22'),('jdxkmk2q','a9q5jggh','2012-03-09 22:19:45'),('nxkrxmgk','g7sppthk','2012-03-09 22:19:46'),('9ym5udh4','qy6nhsuy','2012-03-09 22:33:00'),('77yba5ch','dhkhw849','2012-03-09 22:33:00'),('2ye4dmu8','3rp7as6p','2012-03-09 22:33:02'),('3yc5caq9','3b82psdy','2012-03-09 22:34:08'),('w6uk82z','ngue6tv','2012-03-09 22:34:08'),('476p4zxz','9uv3dgzc','2012-03-09 22:34:10'),('tzbq6v4g','znp5hqrm','2012-03-09 22:34:11'),('qg8gwbge','t3fgdx3z','2012-03-09 22:34:11'),('kmnuyyab','gje5vsek','2012-03-09 22:34:25'),('ed2dpvw','fmcqjkka','2012-03-09 22:39:35'),('3nwyfbkp','gyshdztg','2012-03-09 22:39:35'),('sjgne7qf','zsp52ybn','2012-03-09 22:39:37'),('r7wdxbd','5538x69b','2012-03-09 22:39:38'),('gu5c7bur','znmv3djp','2012-03-09 22:39:58'),('9mtrtfzb','tnakjt34','2012-03-09 22:40:18'),('kvjecn7w','qyveyk8','2012-03-09 22:40:29'),('r4d4nbu','5qr58mhb','2012-03-09 22:40:56'),('uf3vk3mz','mxbyg2nh','2012-03-09 22:41:27'),('3ut8pcpt','pkyxxxff','2012-03-09 22:41:29'),('w6kf92nn','n7a66b3m','2012-03-09 22:41:31'),('eguy7e','7rb4zjza','2012-03-09 22:41:32'),('wuwpnyr','zjkqh24','2012-03-09 22:41:34'),('5h9qbwy','eszb75gd','2012-03-09 22:44:22'),('4xuub935','jd7gvbat','2012-03-09 22:44:23'),('uafcee8y','2n7yus23','2012-03-09 22:44:51'),('tjq44fv','3bn4mre','2012-03-09 22:46:22'),('n4d2uzt2','sxepwv23','2012-03-09 22:46:23'),('whu3rxqh','m8v3ytk','2012-03-09 22:48:39'),('69e9kbu2','ze6y4fv8','2012-03-09 22:48:39'),('hbhxzhk','zwjmbjeq','2012-03-09 22:48:42'),('jh9rm4q','ujrah4pe','2012-03-09 22:53:47'),('y269zupu','yadjswy','2012-03-09 22:53:47'),('sypjd4v','bfsrp4z','2012-03-09 22:54:27'),('h6kg9eb5','85rsntqe','2012-03-09 22:54:34'),('x4ycdrsy','z8y82ccg','2012-03-09 22:54:37'),('8k8hknsa','fdd62bpp','2012-03-09 22:54:42'),('yyn55ksu','xngg59r','2012-03-09 22:55:14'),('j7zk3z89','eypfbh','2012-03-09 22:55:14'),('b8wzkhs','my4tzfg4','2012-03-09 22:59:28'),('nzhh75k8','mtyvtwx3','2012-03-09 22:59:28'),('bpwdmdvz','4tn2n7c','2012-03-09 23:00:52'),('yfhgwxym','pp9bvt69','2012-03-09 23:00:54'),('gtgxex7s','u7bmuvwh','2012-03-09 23:00:54'),('es9arkmh','7nesm54v','2012-03-09 23:00:56'),('mdhdx8j6','2t6dhb2p','2012-03-09 23:00:57'),('xcz3erkw','dus45hs3','2012-03-09 23:02:05'),('vwecvwrp','mdgfkqy','2012-03-09 23:02:05'),('cnueemt2','phs3xfah','2012-03-09 23:02:14'),('ewxcmze','trwyrfyb','2012-03-09 23:02:14'),('44dppv32','y9z6jetj','2012-03-09 23:02:16'),('7tm83snk','bqrmyhza','2012-03-09 23:02:18'),('f6cmnqee','arjhv7f5','2012-03-09 23:02:41'),('jd7mrws9','cdxtjkvc','2012-03-09 23:02:41'),('5updr2xe','ke397h86','2012-03-09 23:02:48'),('gwrgw5px','byqyxhvk','2012-03-09 23:02:55'),('ya68bzxu','76shre4j','2012-03-09 23:03:02'),('mh8yfdk4','ev8w7un8','2012-03-09 23:03:02'),('x2erqdr','ekmhwyy3','2012-03-09 23:03:02'),('mkcr2nb5','8tw33du','2012-03-09 23:03:02'),('hf85rcn','zmswy8hf','2012-03-09 23:03:02'),('ygpe8ajh','fbgcjd88','2012-03-09 23:03:02'),('yhc2hnqh','6adkjr4b','2012-03-09 23:03:02'),('5ygc74c','w2nv','2012-03-09 23:03:02'),('zfk4u96','gnu6vdf8','2012-03-09 23:03:02'),('9bjcw6','emvshvvv','2012-03-09 23:03:02'),('7kjt5u5q','w9dcrpky','2012-03-09 23:03:02'),('e46fss2p','nhx4nrcb','2012-03-09 23:03:02'),('phnewp9u','8umzx6yn','2012-03-09 23:03:02'),('zvefhwe','u8pewb7q','2012-03-09 23:03:02'),('ekjkw9yb','n9ufsef','2012-03-09 23:03:02'),('xrfvsr5x','sa23dxzh','2012-03-09 23:03:03'),('4sh9wu22','dymagz9f','2012-03-09 23:03:03'),('55yxpxsw','arvexsu','2012-03-09 23:03:03'),('zdtw7syt','hxtvwdum','2012-03-09 23:03:03'),('gh7rvmyr','n42whuyp','2012-03-09 23:03:03'),('yq2vqvz','2fg924uu','2012-03-09 23:03:03'),('ruq8bfmp','pg3qj4c','2012-03-09 23:03:03'),('75yshwbe','fn55gtga','2012-03-09 23:03:03'),('69zr8ntj','kbq3bv8j','2012-03-09 23:03:03'),('uxaahz8s','644emxzf','2012-03-09 23:03:03'),('yzsy9c5s','agxwhub8','2012-03-09 23:03:03'),('bmdepuuy','h7e5cbtx','2012-03-09 23:03:03'),('45zpfp5t','fvdpd44','2012-03-09 23:03:03'),('m7y2tems','f4cmqu6k','2012-03-09 23:03:03'),('k3s7khwq','88qewpkj','2012-03-09 23:03:03'),('2ygrs59','suzwgp6x','2012-03-09 23:03:03'),('yuuuagch','5v4rzn3p','2012-03-09 23:03:03'),('n2a9ewy6','365sxnb8','2012-03-09 23:03:03'),('9kvr8p6','7vwm6qpv','2012-03-09 23:03:03'),('bjbn7sn','cd9mxjm','2012-03-09 23:03:03'),('ytx8hvqc','nghz5866','2012-03-09 23:03:03'),('nu4wf52m','fvfpcpqq','2012-03-09 23:03:03'),('2sqx597e','am8b76mz','2012-03-09 23:03:03'),('et4q3q6y','nk59ydhb','2012-03-09 23:03:03'),('qb36uw4a','fsxn7sa5','2012-03-09 23:03:13'),('h9axtuk2','rrvutcfg','2012-03-09 23:03:16'),('jce3gsjp','jmzy6vh','2012-03-09 23:03:26'),('4cfvpx2','atgvph79','2012-03-09 23:09:46'),('xc9ug97d','a3nrypt','2012-03-09 23:10:04'),('wmbjqa4w','y2arzn7','2012-03-09 23:11:56'),('w4hugcr3','z3xdfgth','2012-03-09 23:12:00'),('p2q7t627','2chhymkk','2012-03-09 23:12:01'),('x3f4fhfv','yqx5g6ks','2012-03-09 23:12:15'),('93sx8f9z','nnyjsh3s','2012-03-09 23:20:10'),('839zy53','2ncgsaf6','2012-03-09 23:22:00'),('hu49hyug','8y3vmw','2012-03-09 23:22:06'),('ermdhsqt','m843zvbx','2012-03-09 23:22:15'),('ey23vxwy','pp2upk9a','2012-03-09 23:22:21'),('p5t5vfpu','efzwrs2v','2012-03-09 23:22:44'),('gn6sugz','g9y5qrv4','2012-03-09 23:22:44'),('jdw6kqr','fdbxv4g4','2012-03-09 23:22:44'),('4uxjd59m','4wegc2n','2012-03-09 23:22:44'),('6vgevwv2','zxpkrwch','2012-03-09 23:22:44'),('ezsjurwm','c2tertsm','2012-03-09 23:22:44'),('czrymbqb','z4mepqnu','2012-03-09 23:22:44'),('e65ymqap','euuwbb8e','2012-03-09 23:22:44'),('2p4brgde','aqjp5x89','2012-03-09 23:22:44'),('s2x4eygk','g28j35pt','2012-03-09 23:22:44'),('hgvyqy4q','dc48227g','2012-03-09 23:22:44'),('suaxgg9p','96yzzch8','2012-03-09 23:22:44'),('j4wysqdv','s7tgxpqd','2012-03-09 23:22:44'),('8q3dxztv','vfkjhtgt','2012-03-09 23:22:44'),('m4g4gkny','g675jm9f','2012-03-09 23:22:44'),('22kpq59','ahjj3r3c','2012-03-09 23:22:44'),('h6qjhdr','daknmhuc','2012-03-09 23:22:44'),('96rpyqpy','xx9pc2sk','2012-03-09 23:22:44'),('zm29v5qy','5zae9ug8','2012-03-09 23:22:44'),('qymccz32','m2eqrw2e','2012-03-09 23:22:44'),('9rdtjtfd','hfjf2sdf','2012-03-09 23:22:44'),('zc8ss245','wv2vpzqn','2012-03-09 23:24:29'),('b9thu8sq','6k8annht','2012-03-09 23:25:16'),('bjww7k','jauymsyn','2012-03-09 23:25:16'),('rfwddq9','qn32hj3','2012-03-09 23:25:16'),('gup5qy4z','ynna6apk','2012-03-09 23:25:16'),('gkkd2jt','cjk4suvy','2012-03-09 23:25:16'),('d9stxkhk','xvmswz44','2012-03-09 23:25:16'),('j9rqezr','asduh6pj','2012-03-09 23:34:54'),('vv3teq3','c7e7rca2','2012-03-09 23:34:54'),('bsffgwfg','ck3mfew3','2012-03-09 23:34:54'),('r8pc8cq','k3z3rjy','2012-03-09 23:34:54'),('tffa895u','uvd9juk2','2012-03-09 23:34:54'),('rjduggs','9yj9duxw','2012-03-09 23:34:54'),('4q57wk74','fahtesv','2012-03-09 23:34:56'),('ms4dgne','52eq356v','2012-03-09 23:34:56'),('hzr6mxf','n7ysnxbn','2012-03-09 23:34:56'),('24xx3sgk','bkhk6ubm','2012-03-09 23:34:57'),('5e6an5tk','t3jwk8ha','2012-03-09 23:34:57'),('z6ysn64p','fbzbv2np','2012-03-09 23:34:57'),('eqjhda9r','2c7gywmw','2012-03-09 23:40:52'),('bqem9krf','sznhgrpn','2012-03-09 23:40:52'),('6xvytrq','wmwj997','2012-03-09 23:40:52'),('rwqq67ej','4zcn635','2012-03-09 23:40:57'),('8da82nth','7fzfpn96','2012-03-09 23:40:57'),('9nk5jqcc','der8q55','2012-03-09 23:40:57'),('pammm4t4','s6bzmqbg','2012-03-09 23:54:20'),('cwg2exf2','4a8287d','2012-03-09 23:54:20'),('9hrja9ct','5dhfujnx','2012-03-09 23:54:20'),('64n7jtcs','djzgurt2','2012-03-09 23:54:50'),('vdsjt2ek','3fet93n','2012-03-09 23:54:50'),('2djawns2','wf8fxr7g','2012-03-09 23:54:50'),('q6grykbr','vfwfdbfx','2012-03-09 23:56:34'),('juc7tyjm','tk9q7smm','2012-03-09 23:56:34'),('nt3b45tp','adudez3q','2012-03-09 23:56:34'),('j5m3tvda','6cq3v2c8','2012-03-09 23:56:34'),('j59byrqy','u3zzue9','2012-03-09 23:56:34'),('pr28a686','8nwtczqn','2012-03-09 23:56:34'),('k8xv2dem','4hjk37v','2012-03-09 23:57:22'),('ghvt2fgt','7xdyrs9','2012-03-09 23:57:22'),('pduehyrb','72mxx8w5','2012-03-09 23:57:22'),('ffn7nvqm','sbqft7e8','2012-03-09 23:57:22'),('aybjmsmg','hy66vsz3','2012-03-09 23:57:22'),('xbxaxbmd','d3kxyquz','2012-03-09 23:57:22'),('wk9reu95','kw79wua9','2012-03-09 23:57:22'),('ydz92nnk','cq7b59mq','2012-03-09 23:57:22'),('jk7q65jf','qeeaye9n','2012-03-09 23:57:22'),('p6y3342','p98w9me','2012-03-10 00:00:09'),('4wdkte7','agdmp2v3','2012-03-10 00:00:09'),('wjupcjnr','hkbgjpnb','2012-03-10 00:00:09'),('jykabxkd','bfe7eskp','2012-03-10 00:00:09'),('4g5yac5r','gs7dqhp','2012-03-10 00:00:09'),('dupefzhh','7pda6qqx','2012-03-10 00:00:09'),('ghsvzhsz','dqvb3gu6','2012-03-10 00:00:09'),('79grmwxf','rtvkey5m','2012-03-10 00:00:09'),('8m8wuqmy','57zvchq','2012-03-10 00:00:09'),('cteuqhy','wcgagpzr','2012-03-10 00:00:11'),('ww5zwzdb','n2kynv5q','2012-03-10 00:00:11'),('d9ug9g5','bq5j4uzp','2012-03-10 00:00:11'),('jjdsxdt5','9cjsdvbs','2012-03-10 00:00:11'),('t2hncsvc','3ebw6cfd','2012-03-10 00:00:11'),('mkwpd4n','gc6mx75f','2012-03-10 00:00:11'),('xkbvb32t','m452ddfb','2012-03-10 00:03:06'),('7emruaus','g3wwvudh','2012-03-10 00:03:06'),('5e478tph','mhqmesh','2012-03-10 00:03:06'),('j4y44hka','7wur23j','2012-03-10 00:03:06'),('6vf4duaq','45ddmnp','2012-03-10 00:03:06'),('daf8js9h','nv44kvcf','2012-03-10 00:03:06'),('3kh47c7c','ghn5g39a','2012-03-10 00:04:51'),('dec9s25k','8rnqe7t7','2012-03-10 00:04:51'),('g2zd5wfb','5u6bm4bq','2012-03-10 00:04:51'),('9epq7h24','ydh4a2zg','2012-03-10 00:04:51'),('sqkkasn5','ag6n839','2012-03-10 00:04:51'),('bfn8pdzc','g97hywqf','2012-03-10 00:04:51'),('94b6e9sz','n4ngyb33','2012-03-10 00:04:55'),('kg3s6fad','hz444t9','2012-03-10 00:04:55'),('wv52tkq7','d4d466ue','2012-03-10 00:04:55'),('6hv93qc','vwj9jetx','2012-03-10 00:05:00'),('ezg77tx9','vk837fp3','2012-03-10 00:05:00'),('pzfp3f','pq8xuqjy','2012-03-10 00:05:00'),('eruafv','r8mnczds','2012-03-10 00:05:01'),('y4xcu4b8','gu3p5qu','2012-03-10 00:05:01'),('jvjeu5w','rf9t6bu','2012-03-10 00:05:01'),('u2hddfqk','zexp7gck','2012-03-10 00:05:46'),('kzmx3bzr','nrw6s57b','2012-03-10 00:05:46'),('vdeyjv','2xnx6r8e','2012-03-10 00:05:46'),('fh38krpy','8aup5qqq','2012-03-10 00:05:46'),('uvc4fc47','2ftvxrz4','2012-03-10 00:05:46'),('zs2a9dy6','dgj9xznf','2012-03-10 00:05:46'),('jrru3nj','976vmunb','2012-03-10 00:05:47'),('bcbag26m','8eku5yzd','2012-03-10 00:05:47'),('dzvyr89p','44enmfp','2012-03-10 00:05:47'),('3c9g87ex','9yp5ws7','2012-03-10 00:07:40'),('akcr95mn','dud9jm6a','2012-03-10 00:07:40'),('p4gmyn9x','answm9tn','2012-03-10 00:07:40'),('hw5gqevu','zzs9am9q','2012-03-10 00:07:40'),('df24uzqv','b7gp6z2c','2012-03-10 00:07:40'),('kvk2z7jq','v2nvbmf','2012-03-10 00:07:40'),('zj6n6cyt','2pbkgufq','2012-03-10 00:07:41'),('btthrjvr','9y8d8myx','2012-03-10 00:07:41'),('vurwy9m','baxhu4xw','2012-03-10 00:07:41'),('qhpw9j87','qgqh6en','2012-03-10 00:08:42'),('58yk5wzx','py43afq','2012-03-10 00:08:42'),('gvaf58bh','essax6s','2012-03-10 00:08:42'),('3y3wjsjy','ebqeawuh','2012-03-10 00:08:42'),('fvpasrjx','82xuvxan','2012-03-10 00:08:42'),('k49vjhjp','jzukkdtr','2012-03-10 00:08:42'),('kxx6pby5','w94fh8zb','2012-03-10 00:08:43'),('ufgsycuy','xpkj329c','2012-03-10 00:08:43'),('nv93xwvh','vnp5kd65','2012-03-10 00:08:43'),('z5qp38qq','2h76tfhp','2012-03-10 00:09:08'),('gx78fvkx','vun5ekt','2012-03-10 00:09:08'),('9282xnfn','wbhehstq','2012-03-10 00:09:08'),('dpnj9x7u','fjtap5un','2012-03-10 00:09:08'),('usdg5jur','m4vukcp','2012-03-10 00:09:08'),('rmyqv9f','5sfhmzv6','2012-03-10 00:09:08'),('fzbawsk','qb6zd5dv','2012-03-10 00:09:08'),('f3em9ke','rsp3fxn','2012-03-10 00:09:08'),('yzpxk682','84qawuw4','2012-03-10 00:09:08'),('7bdewdkw','k5h97sye','2012-03-10 00:10:06'),('9neet8c','4r72nvhj','2012-03-10 00:10:06'),('wnqhrz53','ubzqupvs','2012-03-10 00:10:06'),('32wjxvnr','bjgq6rzs','2012-03-10 00:10:06'),('4ezj6uap','w25eeqw7','2012-03-10 00:10:06'),('ehf45th6','3qkw6acy','2012-03-10 00:10:06'),('xbcxa3j','xmthz8ba','2012-03-10 00:10:47'),('b86kafjg','b6ak3dmp','2012-03-10 00:10:47'),('eqp3rebd','svnfsqft','2012-03-10 00:10:47'),('9ejc87vk','j79jk4q8','2012-03-10 00:10:50'),('v4pm6rcp','h73cgbf','2012-03-10 00:10:50'),('fjhde5qq','zpzafd83','2012-03-10 00:10:50'),('p8zhb6xx','3378uzq3','2012-03-10 00:12:34'),('vgg75c77','2byybxr','2012-03-10 00:12:34'),('8ny9gmw','cs7xfmq3','2012-03-10 00:12:34'),('uwxnzujq','v9dx93d6','2012-03-10 00:12:34'),('e44mdpmg','7g5cuj5c','2012-03-10 00:12:34'),('7rqvayaw','xehv7mqa','2012-03-10 00:12:34'),('egnhwyrt','7kvquqtq','2012-03-10 00:12:35'),('787wasj','e25bchbg','2012-03-10 00:12:35'),('rqqcd7v','feqzv8er','2012-03-10 00:12:35'),('6emse52k','uumw4p4h','2012-03-10 00:12:35'),('4hk8d67j','amwjdbe','2012-03-10 00:12:35'),('hpwpgny3','8nznf9f','2012-03-10 00:12:35'),('8qht324q','na9uct6','2012-03-10 21:37:28'),('cuagjjub','vq3bj7cf','2012-03-10 21:37:28'),('kkzbassn','srmau67w','2012-03-10 21:37:28'),('56z4n9hc','yvanqurt','2012-03-10 21:37:49'),('e452vyk4','ykxcptng','2012-03-10 21:37:49'),('pb3ah5y','46bhqs3u','2012-03-10 21:37:49'),('buy7gu8','26n6yx9','2012-03-10 21:38:18'),('kvub7rjv','ardxcbwd','2012-03-10 21:38:18'),('wjctrxqg','tpunbfmm','2012-03-10 21:38:18'),('27pxmyhm','engpvka','2012-03-10 21:38:18'),('6ptmb8tu','kc8njjza','2012-03-10 21:38:18'),('ecyr3747','h4cxnpxh','2012-03-10 21:38:18'),('223s3an6','gxe7zfpf','2012-03-10 21:38:25'),('u6x77f23','4fyw659v','2012-03-10 21:38:25'),('uzcm2qg8','cm54tg9c','2012-03-10 21:38:25'),('bj4kxn9m','b8us8cum','2012-03-10 21:38:26'),('q5m5bttj','xzdzhtzj','2012-03-10 21:38:26'),('4tvr6u38','rmqpq9z6','2012-03-10 21:38:26'),('yee65xfb','xuwe59j','2012-03-10 21:39:46'),('paynmysu','rjtwcxj','2012-03-10 21:39:46'),('h3dbpjdb','52fyyryc','2012-03-10 21:39:46'),('zjpaqre','kkqeuyeb','2012-03-10 21:39:53'),('h7fsz8yc','vghbe276','2012-03-10 21:39:53'),('ak7qjmuv','xzgy5j8','2012-03-10 21:39:53'),('by96d8z','rkqe5ymx','2012-03-10 22:09:36'),('e2kvn6tx','yrur5bt','2012-03-10 22:09:36'),('tsndqcv','zsztfbfm','2012-03-10 22:09:36'),('9as298cn','msmbmeca','2012-03-10 22:13:53'),('9xgc5ckz','gamvtrts','2012-03-10 22:13:53'),('sahq9k4j','3dkdhndg','2012-03-10 22:13:53'),('uj4kqe2q','6wxjp6hd','2012-03-10 22:13:55'),('qvgdnav6','6d4s393k','2012-03-10 22:13:55'),('huwxymbu','9y4mubq9','2012-03-10 22:13:55'),('xx36p784','fa52yq','2012-03-10 22:14:57'),('qmt7x9yy','69e2uehf','2012-03-10 22:14:57'),('3be698a','3az3yeg','2012-03-10 22:14:57'),('kn5862q','haeh4vz3','2012-03-10 22:15:54'),('wmh8y5t7','y6xbamta','2012-03-10 22:15:54'),('x65v2ua','vehn28en','2012-03-10 22:15:54'),('jpj8g347','wr9x4rxr','2012-03-10 22:15:54'),('msacbabx','fk8gejr','2012-03-10 22:15:54'),('tun2kfw8','xuvqah7m','2012-03-10 22:15:54'),('suyx8wuy','knr4cew','2012-03-10 22:16:00'),('jd5ehay','8fbgpfz','2012-03-10 22:16:00'),('86m6r7u3','htgbwnx6','2012-03-10 22:16:00'),('nnek2puq','pzscfh99','2012-03-10 22:17:16'),('ef2g4dvr','mnv7fy8t','2012-03-10 22:17:16'),('ab53rnf6','by8h76fb','2012-03-10 22:17:16'),('pc3pa9tj','qa442d9n','2012-03-10 22:20:40'),('av7wa857','ht4ykzey','2012-03-10 22:20:40'),('47b45vcj','v7bmya','2012-03-10 22:20:40'),('vvwwsqt2','9mphat85','2012-03-10 22:20:40'),('pxhu2se','wtrwtewc','2012-03-10 22:20:40'),('zhzgxg8w','tm5u53pg','2012-03-10 22:20:40'),('qkr3d8h9','ukmupw2','2012-03-10 22:22:03'),('9fw35m36','yww8e4yv','2012-03-10 22:22:03'),('cengcveb','drny59p4','2012-03-10 22:22:03'),('fka9ak2t','n49h4w9','2012-03-10 22:56:27'),('srfxvh46','5jmdav3f','2012-03-10 22:56:27'),('64e6c6pr','xmzr9xqr','2012-03-10 22:56:27'),('b8h6b5kp','g7jnug6v','2012-03-10 23:07:54'),('vefsncnt','dprnhtgu','2012-03-10 23:07:57'),('nwvxk8nn','r8swp5y2','2012-03-10 23:07:57'),('nm8hzpqq','p4bqm83','2012-03-10 23:07:58'),('ax5pq9hv','mv7j5wxj','2012-03-10 23:07:58'),('q8hdj8kh','am752k39','2012-03-10 23:07:58'),('qxymc3c','g6mh8we8','2012-03-10 23:08:27'),('dprn52n','p94d5vu','2012-03-10 23:08:27'),('smywfrfq','jndum9c','2012-03-10 23:08:32'),('mszrghwr','qprrtkpr','2012-03-10 23:09:31'),('mnhncbh','fb7jysaa','2012-03-10 23:09:31'),('fetf8nec','exp5hvjq','2012-03-10 23:09:34'),('8zmjbs','vxb295g6','2012-03-10 23:09:59'),('tk3t2b','xaxbuh9s','2012-03-10 23:09:59'),('jymnhym','kpbgaung','2012-03-10 23:10:02'),('v7hm3swp','5ywxapf','2012-03-10 23:13:21'),('ndxxv87','aufrdjat','2012-03-10 23:10:19'),('sae79ph','mksmwnem','2012-03-10 23:10:21'),('8dq42ex','3zzvf5kt','2012-03-10 23:14:10'),('9krgn8g8','vhyuc6pb','2012-03-10 23:14:37'),('s5f6af6','5q6smhu','2012-03-10 23:15:30'),('knhyn6dp','tvqyspbr','2012-03-10 23:15:51'),('59ebxt82','8qmmc42e','2012-03-10 23:15:58'),('k3t2uj7u','8xjwhqqt','2012-03-10 23:16:16'),('75j9x9vr','wpxqd444','2012-03-10 23:17:00'),('n6bc94cw','u8uzgh7','2012-03-10 23:18:32'),('srmwjw2d','6wpjr3ky','2012-03-10 23:19:04'),('ka3zgb4','mte96bsy','2012-03-10 23:19:24'),('mdwdyvck','jnkactad','2012-03-10 23:19:26'),('s3fgxqd','n3h978t9','2012-03-10 23:19:27'),('b4tnde4q','ykf5s558','2012-03-10 23:19:27'),('dxtmq55h','g7bzhf6b','2012-03-10 23:19:27'),('vf3tmrzr','a4dudtn9','2012-03-10 23:19:28'),('9eetxsja','n5fdntvb','2012-03-10 23:19:28'),('wt8nd3ep','6dtwfs6','2012-03-10 23:19:28'),('7ud6e9j','9u4787yc','2012-03-10 23:19:29'),('aye5nt4','qpmuhrug','2012-03-10 23:19:29'),('rb22u8tc','ztcnx82f','2012-03-10 23:19:30'),('tjh224d','phfe92bs','2012-03-10 23:19:30'),('464tbnu3','ebadk35c','2012-03-10 23:19:31'),('3q3uf3qk','pheg2fuk','2012-03-10 23:19:33'),('zx2v6bxh','mpxd946n','2012-03-10 23:19:36'),('qawnz9kt','wafnwbph','2012-03-10 23:19:37'),('zz84tbr','5rsr4gqc','2012-03-10 23:19:38'),('738fttcn','c4bwatx','2012-03-10 23:19:38'),('8ekhrpbg','tktbk8hy','2012-03-10 23:20:32'),('2v29d8ay','kxu3eusw','2012-03-10 23:20:32'),('zmgjtzdv','z6fr5jp5','2012-03-10 23:20:32'),('dajngnhj','78vege6m','2012-03-10 23:20:33'),('gr7fgpzz','b5zmg7yq','2012-03-10 23:20:33'),('8x8yjewk','g43daatz','2012-03-10 23:20:34'),('pwhvjwpb','gnzfc9my','2012-03-10 23:20:34'),('dgh534kz','wyn5kwrz','2012-03-10 23:20:35'),('pg5z2n4p','78vf3nac','2012-03-10 23:20:35'),('c843x6ft','cvz7krke','2012-03-10 23:20:36'),('5p88azps','4sqwjctr','2012-03-10 23:20:37'),('35txcwdr','s95q75fm','2012-03-10 23:20:38'),('6fvs3x4m','bvfujhgn','2012-03-10 23:20:38'),('pjw2kru7','vrdf8743','2012-03-10 23:20:39'),('wwbmkp5q','yjzmaa4v','2012-03-10 23:20:41'),('9q3gjfvz','5hm6uxkq','2012-03-10 23:20:42'),('4em2un4e','n3vfa5mw','2012-03-10 23:20:43'),('vn6ynvsy','mm5xcpb7','2012-03-10 23:20:43'),('a8mwegug','wevt58dn','2012-03-10 23:20:45'),('7eysuqxf','fydskhz5','2012-03-10 23:20:46'),('99hwq7du','ybyptj4g','2012-03-10 23:20:47'),('2hbgvbgr','7fre46c7','2012-03-10 23:20:48'),('qay5avpt','3f24nm5v','2012-03-10 23:20:49'),('eatu2sz8','ae8za8kq','2012-03-10 23:20:49'),('u2unumvs','82ssmj9b','2012-03-10 23:20:50'),('ebwweh5b','gp322ndn','2012-03-10 23:20:50'),('xus6uybk','7gmu4r3x','2012-03-10 23:20:51'),('x6ht9n7t','4udkqxas','2012-03-10 23:20:52'),('3jfkhjva','dj7n46zz','2012-03-10 23:20:53'),('g6gf36sj','pktuv34f','2012-03-10 23:20:53'),('wb9bvjvr','a4mgaedt','2012-03-10 23:20:54'),('z7vu6bjg','k7jk86vu','2012-03-10 23:20:54'),('487hrzfu','e7rzrn22','2012-03-10 23:56:09'),('5444c9bh','wvn8vvbu','2012-03-11 00:31:43'),('ethefm9x','ds995ed2','2012-03-11 00:34:17'),('4455d8w4','pewztzsh','2012-03-11 00:37:17'),('9wcfp9k4','d3vkr4sv','2012-03-11 00:51:11'),('m6shv24p','urfvuvz2','2012-03-11 00:52:02'),('hbbmwfpe','fw463wrz','2012-03-11 00:52:50'),('52kf7xtj','tffrfaw5','2012-03-11 00:53:19'),('6jm4nc52','2b7rwcu2','2012-03-11 00:53:52'),('5dvf88j3','ya5vrryb','2012-03-11 00:54:00'),('gswscq7j','m7fgemrq','2012-03-11 23:28:07'),('hxu9xjtn','qnvb3gev','2012-03-11 23:28:29'),('3y9gg3us','dpt4kcum','2012-03-11 23:28:59'),('rtq7qpxs','tcrhp6uv','2012-03-12 00:04:06'),('ztc2hcje','c4egrtr2','2012-03-12 00:06:13'),('ajf2ftpv','5rw774h5','2012-03-12 00:09:38'),('ehdyps2h','dqr85dsh','2012-03-12 00:09:42'),('tnrpw5xz','xu67seeg','2012-03-12 00:10:10'),('27tymv94','k94jryex','2012-03-12 00:10:10'),('xrnrxtcy','93xyqpk6','2012-03-12 00:10:41'),('j4x3zuwn','m2wrqa8g','2012-03-12 00:10:41'),('qt6kzr4q','e4ecrfuf','2012-03-12 00:11:04'),('5ucynhz4','aupvd2g2','2012-03-12 11:25:01'),('p5bbn8fe','6gwq6t2a','2012-03-12 11:26:38'),('g9mvynqq','pxapkg7s','2012-03-12 11:26:50'),('5p9gfes3','4bmcsf7d','2012-03-13 09:16:22'),('st5cdurn','82j5ucvu','2012-03-13 09:27:03'),('hgfhcvkb','ba9n33gg','2012-03-13 09:27:36'),('z3qvy499','fk4qfqhr','2012-03-13 09:27:43'),('dyk5xvqn','w3spfhbc','2012-03-13 09:28:10'),('983v6e4t','7zwrqjbt','2012-03-13 09:28:50'),('wpas3hca','vwuh8utm','2012-03-13 09:29:11'),('wrvuz2g4','v8dh96p9','2012-03-13 09:29:17'),('4parwjes','vfvrex36','2012-03-13 11:36:42'),('embec66c','s9t4944t','2012-03-13 11:36:49'),('9t733z8a','kwj49ukg','2012-03-13 11:41:45'),('5yzn9mkj','6a4pm3j2','2012-03-13 11:43:20'),('a5dackz9','yyc5c3rw','2012-03-13 11:43:41'),('r8wq534t','q8cjjecn','2012-03-13 13:04:20'),('zre9prdz','k3zumj2x','2012-03-13 13:04:40'),('669s62au','6832sn62','2012-03-14 12:31:03'),('qu3ergxv','qdxwp4vq','2012-03-14 12:41:39'),('m8dj229b','f329yz8k','2012-03-14 12:41:42'),('a76tcrsh','rcrah99h','2012-03-14 13:02:23'),('h5vx857c','cgjhfaja','2012-03-14 13:03:54'),('f5ubwu8c','7g646dfp','2012-03-14 13:19:20'),('cvfafc4y','b3hxyy7d','2012-03-14 13:26:59'),('9q4tn96r','8wza579j','2012-03-15 08:08:05'),('anff53y6','3z5rpvzu','2012-03-15 08:09:34'),('79fxx39c','v3tvmahr','2012-03-15 08:10:10'),('hh9jr5d7','acbd2zp3','2012-03-15 08:10:59'),('dsgmzq46','nckrjuvg','2012-03-15 08:13:10'),('f45ru9t4','e4vy2jfy','2012-03-15 08:16:03'),('smmafeee','adv5w85s','2012-03-15 08:25:07'),('q4de58b4','hajp8ugr','2012-03-15 08:26:16'),('dejfhj59','axe8h794','2012-03-15 08:39:21'),('yrmk6grx','6du4xs3g','2012-03-15 08:40:22'),('wdae3wm7','nuk4e4rv','2012-03-15 08:42:23'),('hpv2q9d2','gg4jw2nj','2012-03-15 08:42:28'),('2cz4q89w','kcwdvcee','2012-03-15 08:42:53'),('5ppxa2un','k6grzxb8','2012-03-15 08:43:16'),('satwhsy6','waw2harw','2012-03-15 08:43:38'),('nbbmgbwc','ppcs7vbx','2012-03-15 08:44:15'),('8uu9sskw','666qvbx3','2012-03-15 08:50:05'),('ca6agrwu','t3hmf5em','2012-03-15 08:52:45'),('fpg5x78f','rxcn8stc','2012-03-15 08:53:15'),('g3tu2wh9','mwxa7768','2012-03-15 08:54:03'),('y3sd2r2c','unffrkm4','2012-03-15 08:59:09'),('bafm57fs','hrjzx2vz','2012-03-15 09:02:27'),('ge6n2wbf','gpbvtska','2012-03-16 09:59:46'),('fka5k9y3','y6kwfman','2012-03-16 10:00:11'),('mdaw24f3','cdyxjq45','2012-03-16 10:06:05'),('pqkyyr2m','bwjyzxq7','2012-03-16 10:08:47'),('y6mzmaxb','zgwjsrqp','2012-03-16 10:12:26'),('bgfyjagx','n2r2gb9z','2012-03-16 10:13:13'),('3d6knntr','ftx5whw4','2012-03-16 10:15:23'),('2g7k7hx8','kv2exda3','2012-03-16 10:15:29'),('rgqntd4c','kg7mny3s','2012-03-16 10:15:42'),('wsg9q74s','scww863j','2012-03-16 10:16:02'),('uzjr4gxy','wtnz6aeh','2012-03-16 10:16:10'),('sek5v8ry','kujyg4sz','2012-03-16 10:17:45'),('y8xu756b','uee5vwz7','2012-03-16 10:18:00'),('5q9782je','qyruze3a','2012-03-16 10:18:30'),('kv3tnhbm','g3mssq5p','2012-03-16 11:38:21'),('k8r43pgu','zh3eueyj','2012-03-16 11:40:46'),('bxdx5ck4','mgr3ct7k','2012-03-16 11:57:09'),('z7dnf4xs','aksjps27','2012-03-16 12:38:07'),('9ddsc9qn','3qfub7rf','2012-03-16 12:51:26'),('a3d33e59','szms6nj5','2012-03-16 12:53:33'),('uucp236h','bneasfra','2012-03-16 12:57:36'),('pxzy53ea','gycxe4rp','2012-03-16 12:57:47'),('eywn7fb3','sdwdvmvv','2012-03-16 12:57:53'),('s4db8bc6','x6qrn5p5','2012-03-16 13:09:16'),('sqr3aqrz','5vuy3hcd','2012-03-16 13:11:10'),('zg7crh27','f7z8j83h','2012-03-16 13:13:20');
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
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chaos`
--

LOCK TABLES `chaos` WRITE;
/*!40000 ALTER TABLE `chaos` DISABLE KEYS */;
INSERT INTO `chaos` VALUES (1,'sadfdsf','2012-03-09 11:21:23',0,0,'','','','','',0),(2,'muerte','2012-03-09 22:41:24',0,0,'','','efde21','e2e3e4','',0),(3,'desolacion','2012-03-09 11:36:53',0,0,'','','','','',0),(4,'ssadfsadf','2012-03-09 11:39:15',0,0,'','','','','',0),(5,'ssadfsadfe','2012-03-09 11:40:05',0,0,'','','','','',0),(6,'muertedolor','2012-03-09 11:44:52',0,0,'','','','','',0),(7,'asdfdsaf','2012-03-09 11:59:15',0,0,'','','','','',0),(8,'muertes','2012-03-09 12:00:40',0,0,'','','','','',0),(9,'sn','2012-03-09 12:05:29',0,0,'','','','','',0),(10,'dolores','2012-03-09 12:08:47',0,0,'','','','','',0),(11,'dsfasdf','2012-03-09 12:27:38',0,0,'','','','','',0),(12,'muertetotal','2012-03-09 12:35:43',0,0,'','','','','',0),(13,'pello','2012-03-09 12:37:14',0,0,'','','','','',0),(14,'degeneracion','2012-03-09 12:50:35',0,0,'','','','','',0),(15,'muertenegratotal','2012-03-09 21:48:23',0,0,'','','','','',0),(16,'dolorintestinal','2012-03-09 23:11:18',0,0,'','','5988aa','4c9040','',0),(17,'bebe','2012-03-09 23:11:56',0,0,'','','8d7e6f','558a10','',0),(18,'terminator','2012-03-10 23:13:17',0,0,'','','9b2ec2','795458','',0),(19,'muertesnegras','2012-03-10 23:18:28',0,0,'','','e7542f','3aa58','',0),(20,'pellochaos','2012-03-11 23:28:43',0,0,'','','ca72a3','920dda','',3),(21,'gangrenoso','2012-03-16 10:11:59',0,1,'muerte y dolor','dolor','30f53d','443c26','',0),(22,'pellochaosium','2012-03-16 10:12:45',0,0,'','','c3121','833e3f','',3);
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
INSERT INTO `chaos_upload_code` VALUES (2,'kngkxmr3'),(2,'zqx7s5jy'),(2,'7teh3c67'),(2,'s5ww62ch'),(2,'kbxkqvcu'),(2,'wprb5nh'),(18,'r5zd3x3'),(18,'q9yvp36q'),(19,'pz57q49c'),(19,'5vwvvmh8');
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
  `cleanurl` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idtype` int(11) NOT NULL,
  `idchaos` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'0','','wwwyoutubecom',1,0,'2012-03-11 00:21:43',0),(2,'0','','wwwelpaises',1,2,'2012-03-11 00:22:30',0),(3,'0','','httpssdfasdf',2,0,'2012-03-11 00:38:25',0),(4,'dolores','','fffff',2,0,'2012-03-11 00:40:41',0),(5,'neworder','','cambio',2,0,'2012-03-11 00:41:44',0),(6,'muertetotal','','degenera',2,0,'2012-03-11 00:43:04',0),(7,'murmura','','sadfasddfas',2,0,'2012-03-11 00:45:47',0),(8,'aaa','','ccc',2,0,'2012-03-11 00:47:18',0),(9,'aaa','','vvv',2,0,'2012-03-11 00:48:02',0),(10,'aaa','','ccc',2,0,'2012-03-11 00:50:43',0),(11,'aaa','','ccc',2,0,'2012-03-11 00:52:16',0),(12,'muerte','','asdfasdfas',2,0,'2012-03-11 00:53:07',0),(13,'aaaa','','asdfdasf',2,0,'2012-03-11 00:53:35',0),(14,'dolorrr','','asdfsdf',2,2,'2012-03-11 00:54:21',0),(15,'ejemplo','','asdfsdf',2,0,'2012-03-11 23:28:20',3),(16,'Muerte negra y total','','http://www.chaos.cx',5,0,'2012-03-14 13:02:47',0),(17,'Muerte negra y total','','http://www.chaos.cx',5,0,'2012-03-14 13:02:49',0),(18,'Muerte negra','','http://www.as.com',5,0,'2012-03-14 13:20:25',0),(19,'Muerte negra','','http://www.as.com',5,0,'2012-03-14 13:20:25',0),(20,'Muerte negra','','http://www.as.com',5,0,'2012-03-14 13:20:52',0),(21,'Muerte negra','','http://www.as.com',5,0,'2012-03-14 13:21:28',0),(22,'Muerte negra','','http://www.as.com',5,0,'2012-03-14 13:22:30',0),(23,'Muerte negra','','http://www.as.com',5,0,'2012-03-14 13:22:43',0),(24,'Muerte negra','','http://www.as.com',5,0,'2012-03-14 13:23:24',0),(25,'Muerte negra','muerte-negra','http://cambia.com',5,0,'2012-03-14 13:27:19',0),(26,'muerte total','muerte-total','http://cambia.com',5,0,'2012-03-16 11:41:04',3),(27,'jarenau','jarenau','http://cambia.com',5,0,'2012-03-16 11:57:30',3),(28,'El horror total','el-horror-total','http://www.el-mundo.es',5,0,'2012-03-16 13:09:52',3),(29,'Enajenacion','enajenacion','http://jodete.com',5,0,'2012-03-16 13:11:41',3),(30,'risas','risas','http://www.youtube.com',5,0,'2012-03-16 13:14:55',3);
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
INSERT INTO `item_tag` VALUES (12,5),(13,6),(13,7),(13,8),(14,2),(14,9),(14,10),(23,11),(23,12),(24,13),(25,14),(27,14),(28,15),(29,16),(30,17);
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_type`
--

LOCK TABLES `item_type` WRITE;
/*!40000 ALTER TABLE `item_type` DISABLE KEYS */;
INSERT INTO `item_type` VALUES (1,'Image','Pictures, graphics,...'),(2,'Video','Links to video files'),(3,'Music','Links to music'),(4,'File','Any kind of file'),(5,'Link','Hyperlink to somewhere'),(6,'RSS','Rss news feed'),(7,'Text','Simply text'),(8,'Map','A link to a localization');
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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'chaos'),(2,'muerte'),(3,'algoqueda'),(4,'bbb'),(5,'negrura'),(6,'a'),(7,'b'),(8,'c'),(9,'negra'),(10,'jar'),(11,'asdf'),(12,'err'),(13,'asdf,err'),(14,'muerte, total'),(15,'horror, desolacion, muerte'),(16,'dolor, muerte, error'),(17,'risas, mil, muerte');
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'aaaa','bbb@wer.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-11 23:11:34',''),(2,'test','wer@wer.come','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-11 23:12:40',''),(3,'pello','pello@pello.infos','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-11 23:14:30',''),(4,'muerte','muerte@wer.comn','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-11 23:39:56',''),(5,'prueba','prueba@wer.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-12 00:11:04','f1c3f6c91bffb55a0d27e9470ec335854a187e48'),(6,'dolores','bag@asdg.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-13 11:43:41',''),(7,'muertetotal','pello.altadill@gmail.com','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','2012-03-13 13:04:40','4ef6eac96967730f0d86494b4ed389c09731d84a');
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

-- Dump completed on 2012-03-16 14:24:22
