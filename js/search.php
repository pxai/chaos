<?php  
	/**
	* create.php
	* dynamic javascript spawned by the chaos
	*
	*/
	header("Content-type: text/javascript");
?>
$(document).ready(function() {

	
	var islogged = <?=($user->logged)?"true":"false";?>;
			
	$("#searchchaos").click(function(e){
		e.preventDefault();
		var term = $("#searchterm").val();
		var result = $.ajax({
   			type: "POST",
   			url: "index.php?p=ajax/search",
   			data: "searchterm="+term,
   			dataType:"html",
   			success: function(data){
   				if (data != "error") {
   				//alert("yeahh " + data);
   					$("#items").html(data);
   				}
   			}
   			});
	});



});