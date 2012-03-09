/**
* jquery for chaos upload
*
*/

$(document).ready(function() {

	var uploadtype = "";
	
	$("#upload").click(function(e){
		e.preventDefault();
		$("#uploadname").val("");
		$("#uploadtags").val("");
		$("#dialogupload").dialog("open");
	});
	
	$("#uploadname").blur(function(){
		if ($("#uploadname").val() != "") {
			$("#uploadbutton").css("display","block");
		}
	});
	
		$('#dialogupload').dialog({
					autoOpen: false,
					title: "Upload Chaos",
					width: 400,
					modal: true
					});
	
	$("#uploadtype a").mouseout(function(){
		if (uploadtype == "")
			$("#uploadtype").text("");
	});
			
	$("#uploadimage").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("image");
	});
	
	
	$("#uploadvideo").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("video");
	});
	
	
	$("#uploadmusic").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("music");
	});
	
	
	$("#uploadfile").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("file");
	});
	
	$("#uploadlink").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("link");
	});
	
	
	$("#uploadrss").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("rss");
	});
	
	
	$("#uploadtext").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("text");
	});
	
	
	$("#uploadimage").click(function(e){
		changeSelected(e,"image");
	});
	
	
	$("#uploadvideo").click(function(e){
		changeSelected(e,"video");
	});
	
	
	$("#uploadmusic").click(function(e){
		changeSelected(e,"music");
	});
	
	
	$("#uploadfile").click(function(e){	
		changeSelected(e,"file");
	});
	
	$("#uploadlink").click(function(e){
		changeSelected(e,"link");
	});
	
	
	$("#uploadrss").click(function(e){
		changeSelected(e,"rss");
	});
	
	
	$("#uploadtext").click(function(e){
		changeSelected(e,"text");
	});

	function changeSelected(e,what) {
				e.preventDefault();
		$("#uploadtype").text("");
		$("#upload"+uploadtype+" img").css("border","")
		uploadtype = what;
		$("#upload"+uploadtype+" img").css("border","2px solid green")
		$("#uploadtype").text(what);
	}	
	
});