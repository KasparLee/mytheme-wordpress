<?php

// *********** //
// ADD SUPPORT //
// *********** //

	// Theme Support
	add_theme_support('post-thumbnails');

	// Pages & Post Support
	add_post_type_support( 'post', 'excerpt' );
	add_post_type_support( 'page', 'excerpt' );



// *************** //
// ENQUEUE SCRIPTS //
// *************** //

	// jQuery
	wp_enqueue_script('jquery');

	// Wordpress Color Picker
	wp_enqueue_script('wp-color-picker');
	wp_enqueue_style('wp-color-picker');

	// Script for media uploads in Widget Forms
	wp_enqueue_script( 'widget_forms', get_template_directory_uri() . '/js/widget_forms.js', array('jquery'));
	// To allow Media Uploads in Widget Forms
	wp_enqueue_media();



// ************** //
// INCLUDES FILES //
// ************** //

	// Code for the Wordpress Theme Customizer
	include 'customizer.php';



// ********* //
// FUNCTIONS //
// ********* //

	// Split up lines from textarea by adding <p>
	function add_new_lines_p($text) {
		$lines = explode("\n", $text);
		foreach($lines as $line) { echo '<p>' . $line . '</p>'; }
	}



// ***************************** //
//           MAIN CODE           //
// ***************************** //

	// ****************** //
	// SIDEBARS & WIDGETS //
	// ****************** //

		///////////////////////
		// Register Sidebars //
		///////////////////////

			function mytheme_register_sidebars() {
				// Homepage Features Section
				register_sidebar(array(
				    'name' => 'Homepage Section - Features',
				    'id' => 'features_sidebar',
				    'before_widget' => '<div class="feature-cont col-lg-3 col-md-3 col-sm-3 col-xs-7">',
				    'after_widget' => '</div><div class="featurebreak hidden-lg hidden-md hidden-sm"></div>',
				    'before_title' => '<h4>',
				    'after_title' => '</h4>',
				));

				// Homepage About Us Section
				register_sidebar(array(
				    'name' => 'Homepage Section - About Us',
				    'id' => 'aboutus_sidebar',
				    'before_widget' => '<div class="pbcont" data-animated="false">',
				    'after_widget' => '</div>',
				    'before_title' => '<p><em>',
				    'after_title' => '</em></p>',
				));

				// Homepage Packages Section
				register_sidebar(array(
				    'name' => 'Homepage Section - Packages',
				    'id' => 'packages_sidebar',
				    'before_widget' => '<div class="inlineb package-cont col-lg-3 col-md-3 col-sm-4 col-xs-7">',
				    'after_widget' => '</div><div class="packagebreak hidden-lg hidden-md hidden-sm"></div>',
				    'before_title' => '<h4>',
				    'after_title' => '</h4>',
				));
			}

		////////////////////
		// Create Widgets //
		////////////////////

			// Features Widget
			class features_widget extends WP_Widget {

				function __construct() {
					parent::__construct(
						// Widget ID
						'features_widget', 

						// Widget Name
						'MyTheme - Features Widget',

						// Widget Description
						array('classname' => 'features_widget', 'description' => 'For each Feature in the Features Section of the Homepage') 
					);
				}

				// Widget front-end
				public function widget($args, $instance) {

					echo $args['before_widget']; // Echo Before Widget Data

					// Echo the HTML code
					echo '<div class="feature">';
					echo '<div class="featureimgcont"><img src="' . $instance['image_url'] . '" alt="' . $instance['image_alt'] . '"></div>';
					echo $args['before_title'] . $instance['title'] . $args['after_title'];
					echo '<hr class="featureshr">';
					add_new_lines_p($instance['description']);
					echo '</div>';

					echo $args['after_widget']; // Echo After Widget Data
				}
					
				// Widget back-end 
				public function form($instance) {
					// Set $title //
					// If title is set, set $title to the title
					if (isset($instance['title'])) { $title = $instance['title']; }
					// If it is not set, set $title to the default value
					else { $title = 'Feature Name'; }

					// Set $description //
					// If description is set, set $description to the description
					if (isset($instance['description'])) { $description = $instance['description']; }
					// If it is not set, set $description to the default value
					else { $description = 'Enter the Feature Description here...'; }

					// Set $image_url //
					// If image URL is set, set $image_url to the Image URL
					if (isset($instance['image_url'])) { $image_url = $instance['image_url']; }
					// If it is not set, set $image_url to the default value
					else { $image_url = ''; }

					// Set $image_alt //
					// If image ALT tag is set, set $image_alt to the ALT tag
					if (isset($instance['image_alt'])) { $image_alt = $instance['image_alt']; }
					// If it is not set, set $image_alt to the default value
					else { $image_alt = ''; }

					// Widget form
					?>
					<p>
						<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label> 
						<input id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>"/>
					</p>
					<p>
						<label for="<?php echo $this->get_field_id('description'); ?>">Description:</label> 
						<textarea id="<?php echo $this->get_field_id('description'); ?>" class="widefat" name="<?php echo $this->get_field_name('description'); ?>"><?php echo esc_attr($description); ?></textarea>
					</p>
				    <p>
				    	<label for="<?php echo $this->get_field_id('image_url'); ?>">Image URL:</label>
				    	<input id="<?php echo $this->get_field_id('image_url'); ?>" class="widefat image_url" name="<?php echo $this->get_field_name('image_url'); ?>" type="text" value="<?php echo $image_url; ?>"/>
				    	<img style="display: block; margin: 1em 0; max-width: 100%; max-height: 100%;" src="<?php echo $image_url; ?>">
				    	<input class="button image_selector" type="button" value="Select Image"/>
					</p>
					<p>
						<label for="<?php echo $this->get_field_id('image_alt'); ?>">Image ALT Tag:</label>
						<input id="<?php echo $this->get_field_id('image_alt'); ?>" class="widefat" name="<?php echo $this->get_field_name('image_alt'); ?>" type="text" value="<?php echo esc_attr($image_alt); ?>">
					</p>
					<?php 
				}
				
				// Updating widget replacing old instances with new
				public function update($new_instance, $old_instance) {
					// Set $instance to the old values
					$instance = $old_instance;

					// Replace the old values in $instance with the new ones
					$instance['title'] = $new_instance['title'];
					$instance['description'] = $new_instance['description'];
					$instance['image_url'] = $new_instance['image_url'];
					$instance['image_alt'] = $new_instance['image_alt'];

					// Return $instance that now contains all the new values
					return $instance;
				}
			}

			// About Us Widget
			class aboutus_widget extends WP_Widget {

				function __construct() {
					parent::__construct(
						// Widget ID
						'aboutus_widget', 

						// Widget Name
						'MyTheme - About Us Widget',

						// Widget Description
						array('classname' => 'aboutus_widget', 'description' => 'For each Progress / Skills bar in the About Us Section of the Homepage') 
					);
				}

				// Widget front-end
				public function widget($args, $instance) {

					echo $args['before_widget']; // Echo Before Widget Data

					// Echo the HTML code
					echo '<div class="progressbar">';
					echo '<div class="progress" data-width=' . $instance['percent'] . ' data-color="' . $instance['color'] . '"></div>';
					echo '</div>';

					echo '<div class="postpb">';
					echo $args['before_title'] . $instance['title'] . $args['after_title'];
					echo '<p>' . $instance['disp_per'] . '</p>';
					echo '</div>';

					echo $args['after_widget']; // Echo After Widget Data
				}
					
				// Widget back-end 
				public function form($instance) {
					// Set $title //
					// If title is set, set $title to the skill
					if (isset($instance['title'])) { $title = $instance['title']; }
					// If it is not set, set $title to the default value
					else { $title = 'Your Skill'; }

					// Set $disp_per //
					// If displayed percentage is set, set $disp_per to the displayed percentage
					if (isset($instance['disp_per'])) { $disp_per = $instance['disp_per']; }
					// If it is not set, set $disp_per to the default value
					else { $disp_per = '100%'; }

					// Set $percent //
					// If real percentage is set, set $percent to the real percentage
					if (isset($instance['percent'])) { $percent = $instance['percent']; }
					// If it is not set, set $percent to the default value
					else { $percent = '100'; }

					// Set $color //
					// If color is set, set $color to the color
					if (isset($instance['color'])) { $color = $instance['color']; }
					// If it is not set, set $color to the default value
					else { $color = '#00CC00'; }

					// Widget form
					?>
					<p>
						<label for="<?php echo $this->get_field_id('title'); ?>">Skill:</label> 
						<input id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>"/>
					</p>
					<p>
						<label for="<?php echo $this->get_field_id('disp_per'); ?>">Displayed Percentage / Number:</label> 
						<input id="<?php echo $this->get_field_id('disp_per'); ?>" class="widefat" name="<?php echo $this->get_field_name('disp_per'); ?>" type="text" value="<?php echo esc_attr($disp_per); ?>"/>
					</p>
				    <p>
						<label for="<?php echo $this->get_field_id('percent'); ?>">Actual Percentage of Bar:</label> 
						<input id="<?php echo $this->get_field_id('percent'); ?>" class="widefat" name="<?php echo $this->get_field_name('percent'); ?>" type="number" min=0 max=100 value="<?php echo $percent; ?>"/>
					</p>
				    <p>
						<label for="<?php echo $this->get_field_id('color'); ?>">Color of Bar:</label>
						<br>
						<input id="<?php echo $this->get_field_id('color'); ?>" class="color_picker" name="<?php echo $this->get_field_name('color'); ?>" type="text" value="<?php echo $color; ?>"/>
					</p>
					<?php 
				}
				
				// Updating widget replacing old instances with new
				public function update($new_instance, $old_instance) {
					// Set $instance to the old values
					$instance = $old_instance;

					// Replace the old values in $instance with the new ones
					$instance['title'] = $new_instance['title'];
					$instance['disp_per'] = $new_instance['disp_per'];
					$instance['percent'] = $new_instance['percent'];
					$instance['color'] = $new_instance['color'];

					// Return $instance that now contains all the new values
					return $instance;
				}
			}

			// Packages Widget
			class packages_widget extends WP_Widget {

				function __construct() {
					parent::__construct(
						// Widget ID
						'packages_widget', 

						// Widget Name
						'MyTheme - Packages Widget',

						// Widget Description
						array('classname' => 'packages_widget', 'description' => 'For each Package in the Packages Section of the Homepage') 
					);
				}

				// Widget front-end
				public function widget($args, $instance) {

					echo $args['before_widget']; // Echo Before Widget Data

					// Echo the HTML code
					echo '<div class="package" data-color="' . $instance['color'] . '">';

					echo '<div class="packagehead">';
					echo $args['before_title'] . $instance['title'] . $args['after_title'];
					if ($instance['subtitle']) {
					echo '<br>';
					echo '<p>' . $instance['subtitle'] . '</p>';
					}
					echo '</div>';
					
					echo '<div class="packagebody">';
					echo add_new_lines_p($instance['features']);
					echo '<div>';
					echo '<p class="packageprice inline">' . $instance['price'] . '</p>';
					echo '<p class="inline">' . $instance['price_dur'] . '</p>';
					echo '</div>';
					echo '<input class="packagebutton" type="button" value="' . $instance['button_text'] . '">';
					echo '</div>';
					
					echo '</div>';

					echo $args['after_widget']; // Echo After Widget Data
				}
					
				// Widget back-end 
				public function form($instance) {
					// Set $color //
					// If color is set, set $color to the color
					if (isset($instance['color'])) { $color = $instance['color']; }
					// If it is not set, set $color to the default value
					else { $color = '#FF4848'; }
					
					// Set $title //
					// If title is set, set $title to the title
					if (isset($instance['title'])) { $title = $instance['title']; }
					// If it is not set, set $title to the default value
					else { $title = 'Package Name'; }

					// Set $subtitle //
					// If subtitle is set, set $subtitle to the subtitle
					if (isset($instance['subtitle'])) { $subtitle = $instance['subtitle']; }
					// If it is not set, set $subtitle to the default value
					else { $subtitle = ''; }

					// Set $features //
					// If features is set, set $features to the features
					if (isset($instance['features'])) { $features = $instance['features']; }
					// If it is not set, set $features to the default value
					else { $features = "Feature 1\nFeature 2\nFeatures 3"; }

					// Set $price //
					// If price is set, set $price to the price
					if (isset($instance['price'])) { $price = $instance['price']; }
					// If it is not set, set $price to the default value
					else { $price = "$30"; }

					// Set $price_dur //
					// If price duration is set, set $price_dur to the price duration
					if (isset($instance['price_dur'])) { $price_dur = $instance['price_dur']; }
					// If it is not set, set $price_dur to the default value
					else { $price_dur = ' / Month'; }

					// Set $button_text //
					// If button text is set, set $button_text to the button text
					if (isset($instance['button_text'])) { $button_text = $instance['button_text']; }
					// If it is not set, set $button_text to the default value
					else { $button_text = 'BUY NOW'; }

					// Widget form
					?>
					<p>
						<label for="<?php echo $this->get_field_id('color'); ?>">Package Color:</label>
						<br>
						<input id="<?php echo $this->get_field_id('color'); ?>" class="color_picker" name="<?php echo $this->get_field_name('color'); ?>" type="text" value="<?php echo $color; ?>"/>
					</p>
					<p>
						<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label> 
						<input id="<?php echo $this->get_field_id('title'); ?>" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>"/>
					</p>
					<p>
						<label for="<?php echo $this->get_field_id('subtitle'); ?>">Subtitle (E.g. <em>Featured Package</em> / <em>Most Popular</em>):</label> 
						<input id="<?php echo $this->get_field_id('subtitle'); ?>" class="widefat" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo esc_attr($subtitle); ?>"/>
					</p>
				    <p>
						<label for="<?php echo $this->get_field_id('features'); ?>">Features (Each on a new line):</label> 
						<textarea id="<?php echo $this->get_field_id('features'); ?>" class="widefat" name="<?php echo $this->get_field_name('features'); ?>" style="height: 150px"><?php echo $features; ?></textarea>
					</p>
					<p>
						<label for="<?php echo $this->get_field_id('price'); ?>">Price:</label> 
						<input id="<?php echo $this->get_field_id('price'); ?>" class="widefat" name="<?php echo $this->get_field_name('price'); ?>" type="text" value="<?php echo esc_attr($price); ?>"/>
					</p>
					<p>
						<label for="<?php echo $this->get_field_id('price_dur'); ?>">Price Duration (E.g. <em>/ Month</em> or <em>/ Year</em>):</label> 
						<input id="<?php echo $this->get_field_id('price_dur'); ?>" class="widefat" name="<?php echo $this->get_field_name('price_dur'); ?>" type="text" value="<?php echo esc_attr($price_dur); ?>"/>
					</p>
					<p>
						<label for="<?php echo $this->get_field_id('button_text'); ?>">Button Text:</label> 
						<input id="<?php echo $this->get_field_id('button_text'); ?>" class="widefat" name="<?php echo $this->get_field_name('button_text'); ?>" type="text" value="<?php echo esc_attr($button_text); ?>"/>
					</p>
					<?php 
				}
				
				// Updating widget replacing old instances with new
				public function update($new_instance, $old_instance) {
					// Set $instance to the old values
					$instance = $old_instance;

					// Replace the old values in $instance with the new ones
					$instance['color'] = $new_instance['color'];
					$instance['title'] = $new_instance['title'];
					$instance['subtitle'] = $new_instance['subtitle'];
					$instance['features'] = $new_instance['features'];
					$instance['price'] = $new_instance['price'];
					$instance['price_dur'] = $new_instance['price_dur'];
					$instance['button_text'] = $new_instance['button_text'];

					// Return $instance that now contains all the new values
					return $instance;
				}
			}

		//////////////////////
		// Register Widgets //
		//////////////////////

			function mytheme_register_widgets() {
				register_widget('features_widget');
				register_widget('aboutus_widget');
				register_widget('packages_widget');
			}

		///////////////////////////////////////
		// Initiate All Sidebars and Widgets //
		///////////////////////////////////////

			add_action( 'widgets_init', 'mytheme_register_sidebars' );
			add_action( 'widgets_init', 'mytheme_register_widgets' );

?>