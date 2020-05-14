jQuery(function($) {



// Start

///////////////
// FUNCTIONS //
///////////////

	// Make it shorter to update page on setting change (remove the need for .bind())
	function update(setting, action) {
		wp.customize(setting + '_setting', function(value) {
			value.bind(function(val) { action(val) })
		})
	}

	// Convert strings to DOM Objects
	function to_dom(string) {
		var div = document.createElement('div')
		div.innerHTML = string
		return div.childNodes
	}

	// Get section using AJAX
	function get_section(section_name) {
		jQuery.ajax({
			url : ajaxurl,
			type : 'post',
			data : { action : 'mytheme_load_section', section: 'sections/' + section_name },
			success : function(section) {
				$(to_dom(section)).appendTo('#' + section_name + '-cont')
				animate_var()
			}
		});
	}



// GENERAL
	update('homepage_title', function(value) { $('title').html(value) })

// LANDER
	update('lander_shown', function(value) {
		if (value == 1 && !$('#lander').length) { get_section('lander') }
		if (value == 0 && $('#lander').length) { $('#lander').remove() }
	})
	update('lander_background', function(value) {
		$('#lander').css('background', 'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(\'' + value + '\') no-repeat fixed 50% 0% / cover')
	})
	update('lander_title', function(value) { $('#lander h1').html(value) })
	update('lander_subtitle', function(value) { $('#lander h3').html(value) })

	// Button 1
		update('lander_button1_shown', function(value) {
			if (value == 1) { $('#lb1').removeClass('hidden') }
			if (value == 0) { $('#lb1').addClass('hidden') }
		})
		update('lander_button1_text', function(value) { $('#lb1').attr('value', value) })
		update('lander_button1_location', function(value) { landerbuttonsloc[0] = value })

	// Button 2
		update('lander_button2_shown', function(value) {
			if (value == 1) { $('#lb2').removeClass('hidden') }
			if (value == 0) { $('#lb2').addClass('hidden') }
		})
		update('lander_button2_text', function(value) { $('#lb2').attr('value', value) })
		update('lander_button2_location', function(value) { landerbuttonsloc[1] = value })

	update('lander_subscribe_shown', function(value) {
		if (value == 1) { $('#lander h4, #lander .subscribe').removeClass('hidden') }
		if (value == 0) { $('#lander h4, #lander .subscribe').addClass('hidden') }
	})

// Stop



}) // End of jQuery(function($))