<?php
  header("Content-Type: application/xml; charset=utf-8"); 

	if ($chaos->checkExists($chaosname)) {
		$idchaos = $chaos->current["id"];		
	} else {
		$idchaos = 0;
	}
	
	$items = $db->query("select * from item where idchaos=".$idchaos. " order by created desc limit 0, 10");
	//print_r($items);
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<rss version="2.0" 
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:georss="http://www.georss.org/georss"
	xmlns:media="http://search.yahoo.com/mrss/"
	xmlns:meneame="http://chaos.cx/"
 >
<channel>
	<title>chaos.cx</title>
	<atom:link href="<?=$config["site_url"]?>?p=rss" rel="self" type="application/rss+xml" />
	<link><?=$config["site_url"]?></link>
	<image><title><?=$chaos->current["name"]?> chaos</title><link><?=$config["site_url"]?>?p=<?=$chaos->current["name"]?></link><url><?=$config["site_url"]?>images/chaoslogo.jpg</url></image>
	<description>share items in the chaos</description>
	<pubDate>Thu, 22 Mar 2012 12:30:06 +0000</pubDate>
	<generator><?=$config["site_url"]?></generator>
	<language>en</language>
	<atom:link rel="hub" href="http://pubsubhubbub.appspot.com/"/>
<?php
	foreach ($items as $item) { 
		
?>
	<item>
		<title><?=$item["name"]?></title>
		<link><?=$config["site_url"]."p=item&amp;name=".$item["clean_url"]?></link>
		<comments><?=$config["site_url"]."p=item&amp;name=".$item["clean_url"]?></comments>
		<pubDate><?=$item["created"]?></pubDate>
		<dc:creator><?=$item["iduser"]?></dc:creator>
		<category><![CDATA[chaos]]></category>
		<guid><?=$config["site_url"]."p=item&amp;name=".$item["clean_url"]?></guid>
		<description><![CDATA[<?=$item["url"]?>]]></description>
		<wfw:commentRss></wfw:commentRss>	
	</item>


<?php 
	}
?>
</channel>
</rss>