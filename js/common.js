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
	
		var currentpage = 10;

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
	
	$("#usericon").click(function() {
		$("#ddownuser").css("display","block");
	});
	
		$('#showitem').dialog({
					autoOpen: false,
					title: "",
					width: 600,
					height: 500,
					modal: true
		});
		
		$(".item").dblclick(function (e) {
			e.preventDefault();
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
		
		$("#more").click(function (e) {
			e.preventDefault();

			var result = $.ajax({
   			type: "GET",
   			url: "index.php?p=ajax/item",
   			data: "op=getitem&last="+currentpage+"&chaos="+$(this).attr("href"),
   			dataType:"html",
   			success: function(data){

					if (data != "") {
   					$("#items").append(data);
   					currentpage+= 10;
   				} 
   			}
 			});// end ajax
		});
	
});