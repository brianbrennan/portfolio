// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
var topHeight;
var titleHeight;

$(window).scroll(function(event){
	if($(this).scrollTop() > titleHeight && $(this).scrollTop() > topHeight){
		didScroll = true;
	}

	if($(this).scrollTop() > topHeight && $(this).scrollTop() > titleHeight){
		$('header').addClass('light');
	} else{
		$('header').removeClass('light');
	}
});

setInterval(function() {
	if (didScroll) {
		hasScrolled();
		didScroll = false;
	}
}, 250);

function hasScrolled() {
	var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
    	return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
        	$('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}

$(document).ready(function(){
	topHeight = $('.hero').outerHeight();
	titleHeight = $('.title-section').outerHeight();
});