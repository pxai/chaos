/**
* jquery for chaos config
*
*/

$(document).ready(function() {

	$("#configchaos").click(function(e){
		e.preventDefault();
		$("#dialogconfig").dialog("open");
	});
	
		$('#dialogconfig').dialog({
					autoOpen: false,
					title: "Config Chaos",
					width: 400,
					modal: true
					});
			
});