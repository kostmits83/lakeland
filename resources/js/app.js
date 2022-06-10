//require('./bootstrap');


$(function() {
	// Show or hide the scroll link
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('.scroll-to-top').fadeIn();
		} else {
			$('.scroll-to-top').fadeOut();
		}
	});

    // Open links in new tab
	$(document).on('click', '.js-external', function() {
		let target = $(this).attr('href');
		window.open(target);
		return false;
	});
	
	// Animate the scroll duration
	$(document).on('click', '.scroll-to-top', function() {
		$('body, html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});

});