function get_rss_feed() {
	//clear the content in the div for the next feed.
	$("#feedContent").empty();
	alert("vamos: " + $('#diffFeeds').val());
 

$('#feedContent').load('http://google.com'); // SERIOUSLY!
 
$.ajax({
    url: 'http://news.bbc.co.uk',
    type: 'GET',
    success: function(res) {
        var headline = $(res.responseText).find('a.tsh').text();
        alert(headline);
    }
});
 


	$.getJSON($('#diffFeeds').val() , function(json) { //get information about the user usejquery from twitter api
		//$('#twitter_followers').text(json.followers_count); //get the follower_count from the json object and put it in a span
		alert("A ver: " + json);
	});
	

 /*
	//use the JQuery get to grab the URL from the selected item, put the results in to an argument for parsing in the inline function called when the feed retrieval is complete
	$.get($('#diffFeeds').val(), function(d) {


		alert("vamos: " + $('#diffFeeds').val());

 
		//find each 'item' in the file and parse it
		$(d).find('item').each(function() {
 
			//name the current found item this for this particular loop run
			var $item = $(this);
			// grab the post title
			var title = $item.find('title').text();
			// grab the post's URL
			var link = $item.find('link').text();
			// next, the description
			var description = $item.find('description').text();
			//don't forget the pubdate
			var pubDate = $item.find('pubDate').text();
 
			// now create a var 'html' to store the markup we're using to output the feed to the browser window
			var html = "<div class=\"entry\"><h2 class=\"postTitle\">" + title + "<\/h2>";
			html += "<em class=\"date\">" + pubDate + "</em>";
			html += "<p class=\"description\">" + description + "</p>";
			html += "<a href=\"" + link + "\" target=\"_blank\">Read More >><\/a><\/div>";
 
			//put that feed content on the screen!
			$('#feedContent').append(html);  
		});
	});*/
 
};