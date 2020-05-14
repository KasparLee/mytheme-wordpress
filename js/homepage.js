///////////////
// FUNCTIONS //
///////////////

	// SMOOTH SCROLLING (Scroll to section slowly, rather than instantly (default))
	function smooth_scroll(id) {
		scrolling = true;
		$('html, body').animate({ scrollTop: $(id).offset().top + 1 }, { duration: 500 + ($(id).offset().top / 2), complete: function() { setTimeout(function() { scrolling = false }, 100) } } );
	}

	// ANIMATIONS (To animate elements if they are in the viewport)
	function animate() {

		//******************//
		//*** ANIMATIONS ***//
		//******************//

		// LANDER - BUTTONS
		$('.landerbutton').each(function(index, element) {
			if (isiv($(element))) { $(element).animate({"margin": "20px", "opacity": "1"}, 500) }
		});

		// FEATURES - IMAGES
		$('.featureimgcont').each(function(index, element) {
			// If element is in viewport, animate
			if (isiv($(element)) == true) { $(element).children('img').show('puff', {percent: 105}, 500) } })
		
		// OUR COMPANY - TITLE + TEXT + IMAGE
		if (isiv3($('#ourcompanytitlecont'), 100) == true) {
			$('#ourcompanytitlecont h3').show('slide', 500);
			$('#ourcompanytext').show('clip', 500);
			setTimeout(
				function() {$('#ourcompany img').show('drop', {direction: "right"}, 750)},
			500);
		}

		// ABOUT US - PROGESS BARS
		$('.pbcont').each(function(index, element) {
			// For each progress bar, if it is in viewport and not been animated, animate it sliding in, then filling up
			// If element is in viewport and has not been animated
			if ((isiv(element) == true) && ($(element).attr('data-animated') == 'false')) {
				// Set status to animated
				$(element).attr('data-animated', 'true');
				// Slide in
				$(element).animate({"opacity": 1.0, "margin-left": 0}, {queue: false, duration: 500});
				// Set progress_elem to the progress bar inside the container
				var progress_elem = $(element).children('.progressbar').children('.progress')
				// Grow progress bar
				$(progress_elem).animate({"width": $(progress_elem).attr('data-width') + '%'}, {queue: false, duration: 500});
			}
		})

		// PACKAGES - PACKAGE
		$('#packages .package-cont').each(function(index, element) {
			if (isiv2($(element)) == true) {
				$(element).children('div.package').show("fold", {size: 100} , 1000)
			}
		})

		// TESTIMONIALS
		if (isiv2($('.testim')) == true) {
			$('.testim img').each(function(index, element) {
				$(element).show('scale', {origin: ["middle", "left"]}, 500)
			})
		}

		// STATS
		if (isiv2($('.statf')) == true) {
			// $('.statf').each(function(index, element) {
			// 	countUpStats(element, index)
			// })
		}

		// PORTFOLIO

		// OUR CLIENTS

		// OUR TEAM
		if (isiv2($('.teammem')) == true) {
			$('.teammem img').each(function(index, element) {
				$(element).show('scale', {origin: ["middle", "left"]}, 500)
			})
		}

		//**********//
		// PARALLAX //
		//**********//

		var pos = $(window).scrollTop();
		var height = $(document).height();
		var pixel = (1 / height) * 100;
		// MULTIPLICATION BY VALUES OVER 30 WILL RESULT IN IMAGE MOVING UP FASTER THAN DIV, RATHER THAN DOWN BEHIND DIV SLOWER
		
		// Lander Background
		$('#lander').css('background-position', "50% -" + (pos * pixel * 20) + "px");
		
		// Stats Background
		if (isiv2($('#stats')) == true) {
			$('#stats').css('background-position', ((pos - $('#stats').offset().top) * pixel * 5) - 200 + "px 50%");
		}
		
	}

	// CSS (To change CSS of elements on page load)
	function change_css(event) {
		// ABOUT US
			// Set the color of each Progress Bar
			$('.progress').each(function(index, element) {
				$(element).css('background-color', $(element).attr('data-color'))
			})

		// PACKAGES
			// Set each Package container width and height, due to bug with Smooth Scrolling function
			$('.package-cont').each(function(index, element) {
				$(element).css({'width': '', 'height': ''})
				$(element).css({'width': $(element).width(), 'height': $(element).height()})
				if (event != 'resize') { $(element).children('.package').css('display', 'none') }
			})
			// Set each package color
			$('.package').each(function(index, element) {
				$(element).find('.packagehead, .packagebutton').css('background-color', $(element).attr('data-color'))
			})

		// PORTFOLIO
			// CSS for images in Portfolio (each height the same as width)
			$('.portimg-cont').each(function(index, element) { $(element).css('height', $(element).width()) })
	}

	// CHECK IF ELEMENT IS IN VIEW

		// ELEMENT FULLY IN VIEW
		function isiv(elem) {
			var $elem = $(elem); var $window = $(window); var docViewTop = $window.scrollTop(); var docViewBottom = docViewTop + $window.height(); var elemTop = $elem.offset().top; var elemBottom = elemTop + $elem.height();
		 	return ((docViewTop < elemTop) && (docViewBottom > elemBottom));
		}

		// ELEMENT TOP IS IN VIEW
		function isiv2(elem) {
			var $elem = $(elem); var $window = $(window); var docViewTop = $window.scrollTop(); var docViewBottom = docViewTop + $window.height(); var elemTop = $elem.offset().top; var elemBottom = elemTop + $elem.height();
			return (elemTop <= docViewBottom);
		}

		// ELEMENT IS TOTALLY IN VIEW, AND SCROLLED PAST BY X PIXELS
		function isiv3(elem, pixels) {
			var docViewTop = $(window).scrollTop(); var docViewBottom = docViewTop + $(window).height(); var elemTop = $(elem).offset().top; var elemBottom = elemTop + $(elem).height() + pixels;
	    	return ((elemBottom + pixels <= docViewBottom) && (elemTop >= docViewTop));
		}



///////////////
// VARIABLES //
///////////////

	var scrolling = false;



///////////////
// MAIN CODE //
///////////////

	// WHEN PAGE LOADS
	$(window).load(function() { // CHANGE to document.ready
		// Change CSS
		change_css()

		// Animate
		animate()
	})

	// WHEN WINDOW IS RESIZED
	$(window).on('resize', function() {
		// Change CSS
		change_css('resize')
	})

	$('#lb1').click(function(index) { smooth_scroll(landerbuttonsloc[0]); })
	$('#lb2').click(function(index) { smooth_scroll(landerbuttonsloc[1]); })


	$(window).on('load scroll touchmove resize', function() { if (scrolling == false) { animate() } })
	
	// Delay load of Google Maps
	$('#contact-map-link').click(function() { $('#contact-map').attr('src', $('#contact-map').attr('data-src')).fadeIn(1000) })

	// Portfolio
	var hover = false;

	$('.portimg-cont').hover(
		function() {
			hover = true
			$(this).children('.port-img').animate({'background-size': '120%', 'opacity': '0.3'}, 350)
			$(this).children('.port-desc').animate({'top': "-35%"}, 250)
		},
		function() {
			hover = false
			$(this).children('.port-img').animate({'background-size': '100%', 'opacity': '1'}, 350)
			$(this).children('.port-desc').stop()
			$(this).children('.port-desc').animate({'top': "0%"}, 400)
		}
	);