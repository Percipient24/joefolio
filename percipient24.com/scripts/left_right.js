$(document).ready(function(){
	var previous = $("#back");
	var next = $("#forth");
	
	
	$(document).keydown(function(evt){
		
		if(evt.keyCode == 27) // ESC
		{
			// go home
			window.location = "/";
		}
		else if(evt.keyCode == 37 && previous.length > 0) // LEFT ARROW
		{
			// go previous
			window.location = previous.attr("href");
		}
		else if(evt.keyCode == 39 && next.length > 0) // RIGHT ARROW
		{
			// go next
			window.location = next.attr("href");
		}
	});
});