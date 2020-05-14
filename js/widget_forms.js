jQuery(function($) {



///////////////////
// MEDIA UPLOADS //
///////////////////

    $(document).on('click', 'input.image_selector', function() {

    	// Open Media Manager
    	wp.media.editor.open()
    	// Set variable button to the button clicked
    	var button = $(this)

    	// When the image is chosen
    	wp.media.editor.send.attachment = function(props, attachment) {
    		// Update the URL field and the thumbnail src
    		$(button).siblings('.image_url').val(attachment.url)
            $(button).siblings('img').attr('src', attachment.url)
    	}

    })


////////////////////////////
// WORDPRESS COLOR PICKER //
////////////////////////////

    // Creates the Color Picker on widget
    function create_color_picker(widget) {
        widget.find('.color_picker').wpColorPicker({
            // For the Theme Customizer
            change: _.throttle(function() { $(this).trigger('change') }, 3000)
        });
    }

    // Create the Color Picker on widget
    function widget_updated(event, widget) { create_color_picker(widget) }

    // When a widget is added or updated, run function to create the Color Picker on that widget
    $(document).on('widget-added widget-updated', widget_updated);

    // Create the Color Picker on all widgets with a color picker
    $(document).ready(function() {
        $('#widgets-right .widget:has(.color_picker)').each(function() { create_color_picker($(this)) });
    });



});