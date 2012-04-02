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

		function split( val ) {
			return val.split( /,\s*/ );
		}
		
		function extractLast( term ) {
			return split( term ).pop();
		}

		$( "#uploadtags" ).bind( "keydown", function( event ) {
				if ( event.keyCode === $.ui.keyCode.TAB &&
						$( this ).data( "autocomplete" ).menu.active ) {
					event.preventDefault();
				}
			})
			.autocomplete({
				source: function( request, response ) {
					$.getJSON( "index.php?p=ajax/gettags", {
						term: extractLast( request.term )
					}, response );
				},
				search: function() {
					// custom minLength
					var term = extractLast( this.value );
					if ( term.length < 2 ) {
						return false;
					}
				},
				focus: function() {
					// prevent value inserted on focus
					return false;
				},
				select: function( event, ui ) {
					var terms = split( this.value );
					// remove the current input
					terms.pop();
					// add the selected item
					terms.push( ui.item.value );
					// add placeholder to get the comma-and-space at the end
					terms.push( "" );
					this.value = terms.join( ", " );
					return false;
				}
			});
	
	
	
	
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
	
	
	$(".item_edit").click(function(e){
		e.preventDefault();
		var item_id = $(this).attr("href");
		updateid = item_id;
		var id = "#item-"+item_id;
		var item_name = $(id + " .item-name a").text();
		var item_description = $(id + " .item-description").text();
		var item_tags = $(id + " .item-tags span").text();
		var item_url = $(id + " .item-link a").attr("href");
		var item_type = $(id + " .item-type img").attr("class").split("_")[1];
		uploadtype = item_type;

		$("#linkuploadbutton").val("<?=_("Update")?>");		
		$("#uploadlog").text("");
		$("#uploadnamelog").text("");
		$("#uploaddescriptionlog").val("");
		$("#uploaddescription").text(item_description);
		$("#uploaddescription").css("background-color", "");
		$("#uploadname").val(item_name);
		$("#uploadname").css("background-color", "");
		$("#uploadtags").val(item_tags);
		$("#uploadtags").css("background-color", "");
		$("#uploadtagslog").text("");
		if (item_type==5 || item_type==6 || item_type == 8) {
			$("#url").val(item_url);
			$("#linkuploadform").css("display","block");
		} else {
			$("#linkuploadform").css("display","none");
		}
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
	
	$(".item_delete").click(function(e){
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
					title: "<?=_("Upload Chaos")?>",
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

		if (trim($("#uploadname").val()) == "") {
			$("#uploadname").focus();
			$("#uploadname").css("background-color","yellow");
			return;
		}
		
		if (uploadtype!= 7 && trim($("#url").val()) == "") {
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

		  /*var fd = new FormData();    
		  fd.append( 'upload_file', newfile[0] );
		  fd.append("updateid",updateid);
		  fd.append("updateid",updateid);
		  fd.append("chaosid",$("#chaosid").val());
		  fd.append("chaosuploadcode",$("#chaosuploadcode").val());
		  fd.append("uploadname",$("#uploadname").val());
		  fd.append("uploaddescription",$("#uploaddescription").val());
		  fd.append("uploadtags",$("#uploadtags").val());
		  fd.append("uploadtype",uploadtype);
		  fd.append("url",$("#url").val());
		  fd.append("captchakey",$("#captchakey").val());
		  fd.append("captcha",$("#captcha").val());
		  */
		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/upload",
   			//data: fd,
   			data: "updateid="+updateid+"&chaosid="+$("#chaosid").val()+"&chaosuploadcode="+$("#chaosuploadcode").val()+"&uploadname="+$("#uploadname").val()+"&uploaddescription="+$("#uploaddescription").val()+"&uploadtags="+$("#uploadtags").val()+"&uploadtype="+uploadtype+"&url="+$("#url").val()+"&captchakey="+$("#captchakey").val()+"&captcha="+$("#captcha").val(),
   			dataType:"json",
   			success: function(data){
				
					if (data.Result == "Success") {
	   					$("#dialogupload").dialog("close");

						// It was an update? clear TODO
						if (updateid>0) {
							$("#item-"+updateid).css("display","none");
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
							$("#uploadnamelog").text("<?=_("Item name incorrect. Allowed [A-Z][a-z][0-9].-_")?>");
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
    
