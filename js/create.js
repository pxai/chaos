/**
* llamadas jquery
*
*/

$(document).ready(function() {
	$("#privatechaosform").css("display","none");
			
	$("#createchaos").click(function(e){
		e.preventDefault();
		$("#chaosname").css("background-color","");
		$("#chaosname").val("");
		$("#captcha").val("");
		$("#captcha").css("background-color","");
		$("#privatechaos").val("0");
		$("#securityquestion").val("");
		$("#securityanswer").val("");

		$("#dialogcreate").dialog("open");
	});
	
		$('#dialogcreate').dialog({
					autoOpen: false,
					title: "Create new Chaos",
					width: 400,
					modal: true
					});
					
	$("#privatechaos").click(function() {
		if ($("#privatechaos").is(":checked")) {
			$("#privatechaosform").css("display","block");
			$("#privatechaos").val("1");
		} else {
			$("#privatechaosform").css("display","none");
			$("#privatechaos").val("0");
		}
	});

	$("#chaosname").blur(function() {
		if (trim($("#chaosname").val()) != "") {
			$("#chaosname").css("background-color","green");
		} else {
			$("#chaosname").css("background-color","red");
		}
	
	});
	
	$("#submitchaos").click(function() {

		if (trim($("#chaosname").val()) == "") {
			$("#chaosname").focus();
			$("#chaosname").css("background-color","red");
		}
		
		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/createchaos",
   			data: "chaosname="+$("#chaosname").val()+"&privatechaos="+$("#privatechaos").val()+"&securityquestion="+$("#securityquestion").val()+"&securityanswer="+$("#securityanswer").val()+"&captchakey="+$("#captchakey").val()+"&captcha="+$("#captcha").val(),
   			dataType:"json",
   			success: function(data){

					if (data.Result == "Success") {
						//alert(data.Chaosname);
   					$("#dialogcreate").dialog("close");
   					window.location.href = "index.php?p="+data.Chaosname;
   				} else {
   					if (data.captcha == "incorrect") {
							$("#captchalog").text("Captcha incorrect");
							$("#captcha").css("background-color","red");
						} 
						
						if (data.chaos == "exists") {
							$("#createlog").text("Error creating chaos.");
							$("#chaosnamelog").text("Chaos exists already");
							$("#chaosname").css("background-color","red");
						}

						if (data.name == "incorrect") {
							$("#createlog").text("Error creating chaos.");
							$("#chaosnamelog").text("Chaos name incorrect. Allowed [a-z][0-9].-_");
							$("#chaosname").css("background-color","red");
						}
					}

   			}
 			});// end ajax
	});// end click
});