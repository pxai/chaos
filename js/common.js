/**
* common.js
* common js functions for the good chaos
*/

function trim(str, chars) {
	return ltrim(rtrim(str, chars), chars);
}
 
function ltrim(str, chars) {
	chars = chars || "\\s";
	return str.replace(new RegExp("^[" + chars + "]+", "g"), "");
}


function rtrim(str, chars) {
	chars = chars || "\\s";
	return str.replace(new RegExp("[" + chars + "]+$", "g"), "");
}

$(document).ready(function() {
	
	$("#usericon").click(function() {
		$("#ddownuser").css("display","block");
	});
	
		$('#showitem').dialog({
					autoOpen: false,
					title: "",
					width: 600,
					modal: true
		});
		
		$(".item").click(function (e) {
			var id = $(this).attr("id").split("-")[1];
   		$("#showitem").html("");
			var result = $.ajax({
   			type: "GET",
   			url: "index.php?p=ajax/item",
   			data: "op=getitemfull&id="+id,
   			dataType:"html",
   			success: function(data){

					if (data != "") {
						//alert(data.Chaosname);
   					$("#showitem").html(data);
   					$("#showitem").dialog("open");
   				} 
   			}
 			});// end ajax
		});
	
});