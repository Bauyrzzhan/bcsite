$(function(){

	let header = $("#header");
	let intro = $("#intro");
	let introH = intro.innerHeight();
	let scrollPos = $(window).scrollTop();

	$(window).on("scroll load", function() {
	scrollPos = $(this).scrollTop();

	if( scrollPos > introH ) {
		header.addClass("fixed");
	} 
	else {
		header.removeClass("fixed");
	}

	});

	// Scroll //
	$("[data-scroll]").on("click", function(event){

		event.preventDefault();

		let elementid = $(this).data('scroll');
		let elementOffset = $(elementid).offset().top;
		$("html, body").animate({
				scrollTop: elementOffset - 76
		}, 700);


	});

});