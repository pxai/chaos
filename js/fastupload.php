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
	var current = "linkuploadform";
	var currentchaos = "<?=$chaos->current["name"]?>";

		$("#uploaddescriptionlog").text("");
		$("#uploaddescription").val("");
		$("#uploaddescription").css("background-color", "");
		$("#uploaddescription").css("width", "40em");
		$("#uploaddescription").css("height", "10em");
		$("#url").val("");
		$("#linkuploadbutton").val("<?=_("Upload")?>");		
//		$("#linkuploadform").css("display","none");
//		$("#fileuploadform").css("display","none");
		//$("#linkuploadform").css("display","block");
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
    

   		$(".atab").click(function(e) {
   			e.preventDefault();
   			var who = $(this).attr("href");
   			$("span.#span-"+current).attr("class","");
   			$("span.#span-"+who).attr("class","current");
   			
   			$("#"+current).css("display","none");
   			current = $(this).attr("href"); 
   			$("#"+current).css("display","block");
		});
		
		var captchacorrect = "Error";
		
		$("#linkuploadbutton").click(function() {


		if (current == "fileuploadform" && $("#uploadfile").val() != "") {
			var result = $.ajax({
   					type: "POST",
   					url: "index.php?p=ajax/checkcaptcha",
   					data: "captchakey="+$("#captchakey").val()+"&captcha="+$("#captcha").val(),
   					dataType:"json",
   					success: function(data){
   								if (data.Result == "Success") {
									$("#fastuploadform").submit()
								} else {
									$("#captchalog").text("<?=_("Captcha incorrect")?>");
									$("#captcha").css("background-color","yellow");
								}
   						}
   			});
			return;
		}
					
		if (current== "linkuploadform" && trim($("#url").val()) == "") {
			$("#url").focus();
			$("#url").css("background-color","yellow");
			return;
		}
		
		// if it is text and it's void...
		if (current== "textuploadform" && trim($("#uploaddescription").val()) == "") {
			$("#uploaddescription").focus();
			$("#uploaddescription").css("background-color","yellow");
			return;
		}

		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/fastupload",
   			//data: fd,
   			data: "chaosid="+$("#chaosid").val()+"&chaosuploadcode="+$("#chaosuploadcode").val()+"&uploaddescription="+$("#uploaddescription").val()+"&uploadtype="+uploadtype+"&url="+$("#url").val()+"&captchakey="+$("#captchakey").val()+"&captcha="+$("#captcha").val(),
   			dataType:"json",
   			success: function(data){
				
					if (data.Result == "Success") {
	   					$("#dialogupload").dialog("close");

						// It was an update? clear TODO
						if (updateid>0) {
							$("#item-"+updateid).css("display","none");
						}
						
						// Go to chaos
						document.location.href = "?p=preview&new="+data.Newid;
   					
   					
   				} else {
   					if (data.captcha == "incorrect") {
							$("#captchalog").text("<?=_("Captcha incorrect")?>");
							$("#captcha").css("background-color","yellow");
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
						
					}

   			}
 			});// end ajax
	});// end click
	
});