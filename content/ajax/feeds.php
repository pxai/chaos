<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>RSS Reader</title>
	<script type="text/javascript" src="jquery.js" charset="utf-8"></script>
	<script type="text/javascript" src="getfeed.js" charset="utf-8"></script>
</head>
<body onload="get_rss_feed()">
<div id="container">
<div id="ui">
<h1>Flash Feed Reader</h1>
<form id="selectParser" action="">
<label>Select a feed:</label>
<select id="diffFeeds" onchange="get_rss_feed()">
	<option value="">Select</option>
	<option value="http://feeds.feedburner.com/aralbalkan">Aral Balkan</option>
	<option value="http://www.bit-101.com/blog/?feed=rss2">Bit-101</option>
	<option value="http://feeds.feedburner.com/peterelst/">Peter Elst</option>
	<option value="http://www.gskinner.com/blog/index.xml">Grant Skinner</option>
	<option value="http://blog.andre-michelle.com/feed/">Andre Michelle</option>
	<option value="http://feeds.feedburner.com/flashmagazine/rss2">Flash Magazine</option>
	<option value="http://casario.blogs.com/mmworld/rss.xml">Marco Casario</option>
	<option value="http://www.sephiroth.it/weblog/index.xml">Sephiroth</option>
	<option value="http://www.quasimondo.com/index.xml">Quasimondo</option>
	<option value="http://feeds.feedburner.com/sebleedelisle">Seb Lee-Delisle</option>
	<option value="http://osflash.org/feed.php">OS Flash</option>
</select>
</form>
</div>
<div id="feedContent">
	&nbsp;
</div>
</div>
</body>
</html>