(function ($) {
	$(document).ready(function() {

		$(".navscroll").hide();

		$(function() {
			$(window).scroll(function(){

				if (($this).scrollTop() > 100) {
				$(".navscroll").fadeIn();
				} else {
					$(".navscroll").fadeOut();
				}
			});		
		});

	});

});
