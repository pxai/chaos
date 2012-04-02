<?php
	/**
	* config.php
	* dynamic javascript spawned by the chaos
	*
	*/
	header("Content-type: text/javascript");
?>
/**
* jquery for chaos config
*
*/

$(document).ready(function() {

		   var result = $.ajax({
   			type: "GET",
   			url: "index.php?p=ajax/createcaptcha",
   			dataType:"html",
   			success: function(data){
   								$("#configcaptcha").html(data);
   						}
   			});
		$("#bgcolor").css("background-color","");
		$("#fgcolor").css("background-color","");
		$("#bgimage").css("background-color","");
		$("#algorythm").css("background-color","");
		$("#configlog").text("");
		$("#bgcolorlog").text("");
		$("#fgcolorlog").text("");
		$("#bgimagelog").text("");
		$("#algorythmlog").text("");
			
			
	$("#submitconfig").click(function() {

		var errors = 0;
		if (trim($("#bgcolor").val()) == "") {
			$("#bgcolor").focus();
			$("#bgcolor").css("background-color","yellow");
			errors = 1;
		}

		if (trim($("#fgcolor").val()) == "") {
			$("#fgcolor").focus();
			$("#fgcolor").css("background-color","yellow");
			return;
			errors = 1;
		}
		
/*		if (trim($("#bgimage").val()) = "") {
			$("#bgimage").focus();
			$("#bgimage").css("background-color","yellow");
			errors = 1;
		}*/

		if (errors) { return; }		
		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/config",
   			data: "chaosid="+$("#chaosid").val()+"&bgcolor="+$("#bgcolor").val()+"&fgcolor="+$("#fgcolor").val()+"&bgimage="+$("#bgimage").val()+"&algorythm="+$("#algorythm").val()+"&captchakey="+$("#captchakey").val()+"&captcha="+$("#captcha").val(),
   			dataType:"json",
   			success: function(data){
				
					if (data.Result == "Success") {
							$("body").css("color",$("#fgcolor").val());
							$("body").css("background-color",$("#bgcolor").val());
							$("body").css("background-image","url("+$("#bgimage").val()+")");
	   					//$("#dialogconfig").dialog("close");
	   						location.href = "?p="+data.Name;
   					
   				} else {
   					if (data.captcha == "incorrect") {
							$("#captchalog").text("<?=_("Captcha incorrect")?>");
							$("#captcha").css("background-color","yellow");
						} 

						if (data.bgcolor == "incorrect") {
							$("#bgcolorlog").text("<?=_("Background color data incorrect")?>");
							$("#bgcolor").css("background-color","yellow");
						}

						if (data.fgcolor == "incorrect") {
							$("#fgcolorlog").text("<?=_("Foreground color data incorrect")?>");
							$("#fgcolor").css("background-color","yellow");
						}
						
						if (data.bgimage == "incorrect") {
							$("#bgimagelog").text("<?=_("Image url incorrect.")?>");
							$("#bgimage").css("background-color","yellow");
						}

						if (data.algorythm == "incorrect") {
							$("#algorythmlog").text("<?=_("Algorythm non existent.")?>");
							$("#algorythm").css("background-color","yellow");
						}

						if (data.permission == "denied") {
							$("#configlog").text("<?=_("Permission denied. This is not yours.")?><br />");
						}

					}

   			}
 			});// end ajax
	});// end click		
});