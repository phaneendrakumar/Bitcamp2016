$(document).ready(function() {
	
	/* When the user clicks on the button, 
	toggle between hiding and showing the dropdown content */
	$('#profileID').click(function(){
	    $("#myDropdown").fadeToggle();
	});

	$('.submitbtn').click(function(){
		$("#results").fadeIn(1000);
	});
	
});

