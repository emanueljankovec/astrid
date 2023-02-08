$(".mobile_hamburger").click(function() {
	$(".menu_options").css("right", "0px");
	$(".body_dark_overlay").show();
});

$(".mobile_hamburger_close").click(function() {
	$(".menu_options").css("right", "-400px");
	$(".body_dark_overlay").hide();
});