$().ready(function() {

	$("img#slide").attr({'src': '../img/ico/down-arrow.png'});

	$("img#slide").click(function() {

		if ($(this).attr('src') == "../img/ico/down-arrow.png") {
			$(this).removeAttr('src');

			$("#full-info").slideDown(500);

			$(this).attr({'src': '../img/ico/up-arrow.png'});

		} else {
			$(this).removeAttr('src');

			$("#full-info").slideUp(500);

			$(this).attr({'src': '../img/ico/down-arrow.png'});

		}
	});
});