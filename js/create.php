<?php
	/**
	* create.php
	* dynamic javascript spawned by the chaos
	*
	*/
	header("Content-type: text/javascript");
?>
$(document).ready(function() {
	$("#privatechaosform").css("display","none");
	
	var islogged = <?=($user->logged)?"true":"false";?>;
			
//	$("#createchaos").click(function(e){
	//	e.preventDefault();

		$("#captchalog").text("");
		$("#createlog").text("");
		$("#chaosname").css("background-color","");
		$("#chaosname").val("");
		$("#chaosnamelog").text("");
		//$("#securityquestiondiv").css("display","none");
		$("#securityquestion").css("background-color","");
		$("#securityquestion").val("");
		$("#securityquestionlog").text("");
		$("#securityanswer").css("background-color","");
		$("#securityanswer").val("");
		$("#securityanswerlog").text("");
		$("#captcha").val("");
		$("#captcha").css("background-color","");
		$("#privatechaos").val("0");

   	
   	var result = $.ajax({
   			type: "GET",
   			url: "index.php?p=ajax/createcaptcha",
   			dataType:"html",
   			success: function(data){
   								$("#createcaptcha").html(data);
   						}
   		});
	//});

	/*$('#dialogcreate').dialog({
					autoOpen: false,
					title: "<?=_("Create new Chaos")?>",
					width: 600,
					modal: true
	})*/;
	
	/*$("#dialogcreate").dialog("open");*/
	
	
					
	$("#privatechaos").click(function() {
		if ($("#privatechaos").is(":checked")) {
			$("#privatechaos").val("1");
			$("#securityquestiondiv").css("display","block");
		} else {
			$("#privatechaos").val("0");
			if (islogged)
				$("#securityquestiondiv").css("display","none");
		}
	});
	
	$("#anonymouschaos").click(function() {
		if ($("#anonymouschaos").is(":checked")) {
			$("#anonymouschaos").val("1");
			$("#securityquestiondiv").css("display","block");
		} else {
			$("#anonymouschaos").val("0");
			$("#securityquestiondiv").css("display","none");
		}
	});

	$("#chaosname").blur(function() {
		if (trim($("#chaosname").val()) != "") {
			$("#chaosname").css("background-color","lightgreen");
		} else {
			$("#chaosname").css("background-color","yellow");
		}
	
	});
	
	$("#submitchaos").click(function() {

		if (trim($("#chaosname").val()) == "") {
			$("#chaosname").focus();
			$("#chaosname").css("background-color","yellow");
			return;
		}
		
		$("span.log").each(function () {
				$(this).text();
		});
		
		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/createchaos",
   			data: "chaosname="+$("#chaosname").val()+"&privatechaos="+$("#privatechaos").val()+"&anonymouschaos="+$("#anonymouschaos").val()+"&securityquestion="+$("#securityquestion").val()+"&securityanswer="+$("#securityanswer").val()+"&captchakey="+$("#captchakey").val()+"&captcha="+$("#captcha").val(),
   			dataType:"json",
   			success: function(data){

					if (data.Result == "Success") {
						//alert(data.Chaosname);
   					$("#dialogcreate").dialog("close");
   					window.location.href = "index.php?p="+data.Chaosname;
   				} else {
   					if (data.captcha == "incorrect") {
							$("#captchalog").text("<?=_("Captcha incorrect")?>");
							$("#captcha").css("background-color","yellow");
						} 
						
						if (data.chaos == "exists") {
							$("#createlog").text("<?=_("Error creating chaos.")?><br />");
							$("#chaosnamelog").text("<?=_("Chaos exists already")?>");
							$("#chaosname").css("background-color","yellow");
						}

						if (data.name == "incorrect") {
							$("#createlog").text("<?=_("Error creating chaos.")?><br />");
							$("#chaosnamelog").text("<?=_("Chaos name incorrect. Allowed [a-z][0-9].-_")?>");
							$("#chaosname").css("background-color","yellow");
						}
						
						if (data.securityquestion == "incorrect") {
							$("#createlog").text("<?=_("Error creating chaos.")?><br />");
							$("#securityquestionlog").text("<?=_("Security question can't be blank")?>");
							$("#securityquestion").css("background-color","yellow");
						}
						if (data.securityanswer == "incorrect") {
							$("#createlog").text("<?=_("Error creating chaos.")?><br />");
							$("#securityanswerlog").text("<?=_("Security answer can't be blank")?>");
							$("#securityanswer").css("background-color","yellow");
						}
					}

   			}
 			});// end ajax
	});// end click
});