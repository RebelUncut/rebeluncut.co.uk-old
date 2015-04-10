$(document).ready(function() {

	$("header nav").hide();

	$("header .menu-button").click(function() {
		$("header nav").slideToggle();
	});

    $('.services ul li').matchHeight();
    $('.case-studies.home ul li').matchHeight();
    $('.match').matchHeight();
});

