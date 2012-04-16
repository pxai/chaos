<?php  
	/**
	* upload.php
	* dynamic javascript spawned by the chaos
	*
	*/
	header("Content-type: text/javascript");
?>
/**
* jquery for chaos upload
*
*/

$(document).ready(function() {

	var uploadtype = "";
	var updateid = "";


	
	
	
	
	$("#upload").click(function(e){
		e.preventDefault();
		
/* if (!window.FileReader)
  {
  	location.href = "?p=upload";
  	return;
  }*/
		updateid = "";
		uploadtype = "";
		$("#uploadlog").text("");
		$("#uploadnamelog").text("");
		$("#uploadname").val("");
		$("#uploadname").css("background-color", "");
		$("#uploaddescriptionlog").text("");
		$("#uploaddescription").val("");
		$("#uploaddescription").css("background-color", "");
		$("#uploadtags").val("");
		$("#uploadtags").css("background-color", "");
		$("#uploadtagslog").text("");
		$("#url").val("");
		$("#linkuploadbutton").val("<?=_("Upload")?>");		
		$("#linkuploadform").css("display","none");
		$("#fileuploadform").css("display","none");
		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/uploadchaoscode",
   			data: "chaosid="+$("#chaosid").val(),
   			dataType:"json",
   			success: function(data){
   							if (data.Result != "Error") {
   								$("#chaosuploadcode").val(data.Result);
   							}
   						}
   			});
   		var result = $.ajax({
   			type: "GET",
   			url: "index.php?p=ajax/createcaptcha",
   			dataType:"html",
   			success: function(data){
   								$("#uploadcaptcha").html(data);
   						}
   			});
		$("#dialogupload").dialog("open");
	});

	
	
	$(".item_edit").live('click',function(e){
		e.preventDefault();
		var item_id = $(this).attr("href");
		updateitem(item_id);
	});
	
	
	
	
	
	$(".item_delete").live('click',function(e){
		e.preventDefault();
		var item_id = $(this).attr("href");
		deleteid = item_id;
		if (confirm("<?=_("Are you sure?")?>") ) {
		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/upload",
   			data: "deleteid="+deleteid,
   			dataType:"json",
   			success: function(data){
   							if (data.Result == "Success") {
   								$("#item-"+item_id).hide("slow");
   								$("#item-"+item_id).remove();
							}
   						}
   			});		
   	} 
	});
	
	$("#uploadname").blur(function(){
		if ($("#uploadname").val() != "") {
			$("#uploadbutton").css("display","block");
		}
	});
	
	$('#dialogupload').dialog({
					autoOpen: false,
					title: "<?=_("Update Chaos")?>",
					width: 500,
					modal: true
					});

	$('#dialoguploaddrop').dialog({
					autoOpen: false,
					title: "<?=_("Drop on Chaos")?>",
					width: 500,
					modal: true
					});
						
	$("#uploadtype a").mouseout(function(){
		if (uploadtype == "")
			$("#uploadtype").text("");
	});
	
			
	$("#upload_image").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("<?=_("image")?>");
	});
	
	
	$("#upload_video").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("<?=_("video")?>");
	});
	
	
	$("#upload_music").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("<?=_("music")?>");
	});
	
	
	$("#upload_file").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("<?=_("file")?>");
	});
	
	$("#upload_link").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("<?=_("link")?>");
	});
	
	
	$("#upload_rss").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("<?=_("rss feed")?>");
	});
	
	
	$("#upload_text").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("<?=_("text")?>");
	});
	
	$("#upload_map").mouseover(function(){
		if (uploadtype == "")
			$("#uploadtype").text("<?=_("map")?>");
	});

	$("#uploadname").blur(function() {
		if ($(this).val() != "") {
			$("#uploadnamelog").text("");
			$("#uploadname").css("background-color","");
		}
	});
	
	
	$("#uploadtype a").click(function(e){
		e.preventDefault();
		if (trim($("#uploadname").val()) == "") {
			$("#uploadname").focus();
			$("#uploadnamelog").text("<?=_("Put a name please.")?>");
			$("#uploadname").css("background-color", "yellow");
		} else {
			var tagname = $(this).attr("id").split("_");
			var idtype = $(this).attr("href");
			changeSelected(e,tagname[1],idtype);
		switch (tagname[1]) {
			case "link":
			case "rss":
			case "map":
					 $("#linkuploadform").css("display","block");
					 $("#uploaddescription").css("background-color","");
					 break;
			case "video":
			case "image":
			case "file":
			case "music":
					 $("#linkuploadform").css("display","block");
					 $("#uploaddescription").css("background-color","");
					 $("#fileuploadform").css("display","block");
					 $("#uploaddescription").css("background-color","");
					 break;
					 
			default:
					 $("#linkuploadform").css("display","none");
					 $("#fileuploadform").css("display","none");
					 break;
		}//case
	  }// function
	});//click

	function changeSelected(e,what,id) {
		e.preventDefault();
		$("#uploadtype").text("");
		$("#upload_"+uploadtype+" img").css("border","")
		uploadtype = id;
		$("#upload_"+uploadtype+" img").css("border","2px solid green")
		$("#uploadtype").text(what);
	}	
	
	
	$("#linkuploadbutton").click(function() {

		uploadtype = $("#uploadtype").val();
		
		if (trim($("#uploadname").val()) == "") {
			$("#uploadname").focus();
			$("#uploadname").css("background-color","yellow");
			return;
		}
		
		if (uploadtype== 5 && trim($("#url").val()) == "") {
			$("#url").focus();
			$("#url").css("background-color","yellow");
			return;
		}
		
		// if it is text and it's void...
		if (uploadtype== 7 && trim($("#uploaddescription").val()) == "") {
			$("#uploaddescription").focus();
			$("#uploaddescription").css("background-color","yellow");
			return;
		}


		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/upload",
   			//data: fd,
   			data: "updateid="+$("#updateid").val()+"&chaosid="+$("#chaosid").val()+"&chaosuploadcode="+$("#chaosuploadcode").val()+"&uploadname="+$("#uploadname").val()+"&uploaddescription="+$("#uploaddescription").val()+"&uploadtags="+$("#uploadtags").val()+"&uploadtype="+uploadtype+"&url="+$("#url").val()+"&captchakey="+$("#captchakey").val()+"&captcha="+$("#captcha").val(),
   			dataType:"json",
   			success: function(data){
				
					if (data.Result == "Success") {
	   					$("#dialogupload").dialog("close");

						// It was an update? clear TODO
						if ($("#updateid").val()>0) {
							$("#item-"+$("#updateid").val()).css("display","none");
						}
						
   					var resultitem = $.ajax({
   											type: "GET",
   											url: "index.php?p=ajax/item&op=getitem&id="+data.Id,
   											dataType:"html",
   											success: function(data){
   												$("#items").prepend(data);
   											}
   										});// end ajax
   					
   					
   				} else {
   					if (data.captcha == "incorrect") {
							$("#captchalog").text("<?=_("Captcha incorrect")?>");
							$("#captcha").css("background-color","yellow");
						} 

						if (data.name == "incorrect") {
							$("#uploadlog").text("<?=_("Error uploading item.")?><br />");
							$("#uploadnamelog").text("<?=_("Item name incorrect. Write something")?>");
							$("#updatename").css("background-color","yellow");
						}

						if (uploadtype==7 && data.description == "incorrect") {
							$("#uploadlog").text("<?=_("Error uploading item.")?><br />");
							$("#uploaddescriptionlog").text("<?=_("Item description incorrect. Allowed [A-Z][a-z][0-9].-_")?>");
							$("#uploaddescription").css("background-color","yellow");
						}
						
						if (data.url == "incorrect") {
							$("#uploadlog").text("<?=_("Error uploading item.")?><br />");
							$("#uploadurllog").text("<?=_("Url format incorrect")?>");
							$("#uploadurl").css("background-color","yellow");
						}
						
						if (data.tags == "incorrect") {
							$("#uploadlog").text("<?=_("Error uploading item.")?><br />");
							$("#uploadtagslog").text("<?=_("Tags name incorrect. Allowed [a-z][0-9].-_,")?>");
							$("#uploadtags").css("background-color","yellow");
						}
					}

   			}
 			});// end ajax
	});// end click
	
	
	
	
});
    

	function updateitem (id) {
		var item_id = id;
		var item_name = "";
		var item_description = "";
		var item_tags = "";
		var item_url = "";
		var item_type = 0;

				var result = $.ajax({
   			type: "GET",
   			url: "index.php?p=ajax/item",
   			data : "op=getitemjson&id="+item_id,
   			dataType:"json",
   			async: false,
   			success: function(data){
	   				if(data.Result != "Error") {
						$("#uploadname").val(data.Name);
						$("#uploaddescription").text(data.Description);
						$("#uploadtags").val(data.Tags);
						$("#url").val(data.Url);
						$("#uploadtype").val(data.Idtype);
	   				}
   				}
   			});
		updateid = item_id;
		item_type = $("#uploadtype").val();

		$("#updateid").val(id);
		$("#linkuploadbutton").val("<?=_("Update")?>");		
		$("#uploadlog").text("");
		$("#uploadnamelog").text("");
		$("#uploaddescriptionlog").val("");
		$("#uploaddescription").css("background-color", "");
		$("#uploadname").css("background-color", "");
		$("#uploadtags").css("background-color", "");
		$("#uploadtagslog").text("");
		if (item_type=="5" || item_type=="6" || item_type == "8") {
			$("#linkuploadform").css("display","block");
		} else {
			$("#linkuploadform").css("display","none");
		}
		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/uploadchaoscode",
   			data: "chaosid="+$("#chaosid").val(),
   			dataType:"json",
   			async: false,
   			success: function(data){
   							if (data.Result != "Error") {
   								$("#chaosuploadcode").val(data.Result);
   							}
   						}
   			});
   		var result = $.ajax({
   			type: "GET",
   			url: "index.php?p=ajax/createcaptcha",
   			dataType:"html",
   			   			async: false,
   			success: function(data){
   								$("#uploadcaptcha").html(data);
   						}
   			});
		$("#dialogupload").dialog("open");
	}
