$(document).ready(function() {

	$("header nav").hide();

	$("header .menu-button").click(function() {
		$("header nav").slideToggle();
	});

    $('.services ul li').matchHeight();
    $('.match').matchHeight();

    var height = $(".case-studies ul a").height();
    $(".case-studies ul a li").height(height);
});

