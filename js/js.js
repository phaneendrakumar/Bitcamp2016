$(document).ready(function() {
	
	$(".li-home").addClass("active");					   
	var hash = window.location.hash.substr(1);
	var href = $('#nav li a').each(function(){
		var href = $(this).attr('href');
		if(hash==href.substr(0,href.length-5)){
			var toLoad = hash+'.html #content';
			$('#content').load(toLoad)
		}

		$(".align-center").hover(($this).css("opacity", "1"));	
	});

	$('nav li a').click(function(){
		
		$(".canvas").height = window.innerHeight;
		var toLoad = $(this).attr('href')+' #content';
		$('#content').fadeOut(1000,loadContent);
		window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
		function loadContent() {
			$('#content').load(toLoad,'',showNewContent())
		}
		function showNewContent() {
			$('#content').fadeIn(2000);
			}
		var page = $(this).attr('href');
		if (page == "index.html") {
			$(".li-home").addClass("active");
			$(".li-work").removeClass("active");
			$(".li-resume").removeClass("active");
		}
		if (page == "work.html") {
			$(".li-home").removeClass("active");
			$(".li-work").addClass("active");
			$(".li-resume").removeClass("active");
		}
		if (page == "resume.html") {
			$(".li-home").removeClass("active");
			$(".li-work").removeClass("active");
			$(".li-resume").addClass("active");
		}
		return false;
	});

});

