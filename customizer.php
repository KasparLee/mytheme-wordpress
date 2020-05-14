<?php

function mytheme_customizer($wp_customize) {
   
   // ALL PANELS, SECTIONS, SETTINGS AND CONTROLS ARE HERE, INDENTED TO DISPLAY HIERARCHY

	// VARIABLES

		// Homepage IDs of each section
		$section_locations = array(
			'#lander' => 'Lander',
			'#features' => 'Features',
			'#ourcompany' => 'Our Company',
			'#aboutus' => 'About Us',
			'#packages' => 'Packages',
			'#testimonials' => 'Testimonials',
			'#stats' => 'Stats',
			'#portfolio' => 'Portfolio',
			'#ourclients' => 'Our Clients',
			'#ourteam' => 'Meet Our Team',
			'#contact' => 'Contact Us',
		);
		
		// URL to theme folder
		$themeurl = get_template_directory_uri();



	// (PANEL) For the HOMEPAGE
		$wp_customize->add_panel('homepage_sections_panel', array(
				'title' => 'Homepage and Sections',
				'priority' => 100,
			)
		);

			// GENERAL Section
				$wp_customize->add_section('homepage_general_section', array(
						'title' => 'Homepage General Settings',
						'panel' => 'homepage_sections_panel',
					)
				);

				// Homepage Title
					$wp_customize->add_setting('homepage_title_setting', array('default' => 'My Website', 'transport' => 'postMessage'));
					$wp_customize->add_control('homepage_title_control', array(
							'label' => 'Homepage Title (shown in tab)',
							'section'    => 'homepage_general_section',
							'settings'   => 'homepage_title_setting',
							'type' => 'text',
						)
					);




			// LANDER Section
				$wp_customize->add_section('lander_section', array(
						'title' => 'Lander Section',
						'panel' => 'homepage_sections_panel',
					)
				);

				// Lander Shown
					$wp_customize->add_setting('lander_shown_setting', array('default' => true, 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_shown_control', array(
							'label' => 'Is Lander Section Shown?',
							'section'    => 'lander_section',
							'settings'   => 'lander_shown_setting',
							'type' => 'checkbox',
						)
					);

				// Lander Background Image
					$wp_customize->add_setting('lander_background_setting', array('default' => $themeurl . '/images/lander-background.jpg', 'transport' => 'postMessage'));
					$wp_customize->add_control(
						new WP_Customize_Image_Control($wp_customize, 'lander_background_control', array(
							'label' => 'Lander Background Image',
							'section' => 'lander_section',
							'settings' => 'lander_background_setting',
						))
					);

				// Lander Title
					$wp_customize->add_setting('lander_title_setting', array('default' => 'My Theme', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_title_control', array(
							'label' => 'Title',
							'section' => 'lander_section',
							'settings' => 'lander_title_setting',
							'type' => 'text',
						)
					);

				// Lander Subtitle
					$wp_customize->add_setting('lander_subtitle_setting', array('default' => 'A professional landing page theme for businesses', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_subtitle_control', array(
							'label' => 'Subtitle',
							'section' => 'lander_section',
							'settings' => 'lander_subtitle_setting',
							'type' => 'text',
						)
					);

				// Button 1 Shown
					$wp_customize->add_setting('lander_button1_shown_setting', array('default' => '1', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_button1_shown_control', array(
							'label' => 'Is Button 1 Shown?',
							'section' => 'lander_section',
							'settings' => 'lander_button1_shown_setting',
							'type' => 'checkbox',
						)
					);

				// Button 1 Text
					$wp_customize->add_setting('lander_button1_text_setting', array('default' => 'Features', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_button1_text_control', array(
							'label' => 'Text for Button 1',
							'section' => 'lander_section',
							'settings' => 'lander_button1_text_setting',
							'type' => 'text',
						)
					);

				// Button 1 Location
					$wp_customize->add_setting('lander_button1_location_setting', array('default' => '#features', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_button1_location_control', array(
							'label' => 'Link Location for Button 1',
							'section' => 'lander_section',
							'settings' => 'lander_button1_location_setting',
							'type' => 'select',
							'choices' => $section_locations,
						)
					);

				// Button 2 Shown
					$wp_customize->add_setting('lander_button2_shown_setting', array('default' => '1', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_button2_shown_control', array(
							'label' => 'Is Button 2 Shown?',
							'section' => 'lander_section',
							'settings' => 'lander_button2_shown_setting',
							'type' => 'checkbox',
						)
					);

				// Button 2 Text
					$wp_customize->add_setting('lander_button2_text_setting', array('default' => 'Products', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_button2_text_control', array(
							'label' => 'Text for Button 2',
							'section' => 'lander_section',
							'settings' => 'lander_button2_text_setting',
							'type' => 'text',
						)
					);

				// Button 2 Location
					$wp_customize->add_setting('lander_button2_location_setting', array('default' => '#packages', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_button2_location_control', array(
							'label' => 'Link Location for Button 2',
							'section' => 'lander_section',
							'settings' => 'lander_button2_location_setting',
							'type' => 'select',
							'choices' => $section_locations,
						)
					);

				// Show Subscribe Section
					$wp_customize->add_setting('lander_subscribe_shown_setting', array('default' => '1', 'transport' => 'postMessage'));
					$wp_customize->add_control('lander_subscribe_shown_control', array(
							'label' => 'Is Subscribe Section Shown?',
							'section' => 'lander_section',
							'settings' => 'lander_subscribe_shown_setting',
							'type' => 'checkbox',
						)
					);



			// FEATURES Section
				$wp_customize->add_section('features_section', array(
						'title' => 'Features Section',
						'panel' => 'homepage_sections_panel',
					)
				);

				// Features Shown
					$wp_customize->add_setting('features_shown_setting', array('default' => true));
					$wp_customize->add_control('features_shown_control', array(
							'label' => 'Is Features Section Shown?',
							'section'    => 'features_section',
							'settings'   => 'features_shown_setting',
							'type' => 'checkbox',
						)
					);

				// Features Title
					$wp_customize->add_setting('features_title_setting', array('default' => 'Features'));
					$wp_customize->add_control('features_title_control', array(
							'label' => 'Title',
							'section' => 'features_section',
							'settings' => 'features_title_setting',
							'type' => 'text',
						)
					);

				// Features Subtitle
					$wp_customize->add_setting('features_subtitle_setting', array('default' => 'Why choose this sleek, lightweight theme.'));
					$wp_customize->add_control('features_subtitle_control', array(
							'label' => 'Subtitle',
							'section' => 'features_section',
							'settings' => 'features_subtitle_setting',
							'type' => 'text',
						)
					);



			// OUR COMPANY Section
				$wp_customize->add_section('ourcompany_section', array(
						'title' => 'Our Company Section',
						'panel' => 'homepage_sections_panel',
					)
				);

				// Our Company Shown
					$wp_customize->add_setting('ourcompany_shown_setting', array('default' => true));
					$wp_customize->add_control('ourcompany_shown_control', array(
							'label' => 'Is Our Company Section Shown?',
							'section'    => 'ourcompany_section',
							'settings'   => 'ourcompany_shown_setting',
							'type' => 'checkbox',
						)
					);

				// Our Company Title
					$wp_customize->add_setting('ourcompany_title_setting', array('default' => 'A Small Heading'));
					$wp_customize->add_control('ourcompany_title_control', array(
							'label' => 'Title',
							'section' => 'ourcompany_section',
							'settings' => 'ourcompany_title_setting',
							'type' => 'text',
						)
					);

				// Our Company Text
					$wp_customize->add_setting('ourcompany_text_setting', array('default' => 'Add a description about your products here...'));
					$wp_customize->add_control('ourcompany_text_control', array(
							'label' => 'Text',
							'section' => 'ourcompany_section',
							'settings' => 'ourcompany_text_setting',
							'type' => 'textarea',
						)
					);

				// Our Company Image
					$wp_customize->add_setting('ourcompany_image_setting', array('default' => $themeurl . '/images/ourcompany-pic1.jpg'));
					$wp_customize->add_control(
						new WP_Customize_Upload_Control($wp_customize, 'ourcompany_image_control', array(
							'label' => 'Our Company Image',
							'section' => 'ourcompany_section',
							'settings' => 'ourcompany_image_setting',
						))
					);

				// Our Company Image ALT Tag
					$wp_customize->add_setting('ourcompany_image_alt_setting', array('default' => ''));
					$wp_customize->add_control('ourcompany_image_alt_control', array(
							'label' => 'Image ALT Tag',
							'section' => 'ourcompany_section',
							'settings' => 'ourcompany_image_alt_setting',
							'type' => 'text',
						)
					);



			// ABOUT US Section
				$wp_customize->add_section('aboutus_section', array(
						'title' => 'About Us Section',
						'panel' => 'homepage_sections_panel',
					)
				);

				// About Us Shown
					$wp_customize->add_setting('aboutus_shown_setting', array('default' => true));
					$wp_customize->add_control('aboutus_shown_control', array(
							'label' => 'Is About Us Section Shown?',
							'section'    => 'aboutus_section',
							'settings'   => 'aboutus_shown_setting',
							'type' => 'checkbox',
						)
					);

				// About Us Title
					$wp_customize->add_setting('aboutus_title_setting', array('default' => 'About Us'));
					$wp_customize->add_control('aboutus_title_control', array(
							'label' => 'Title',
							'section' => 'aboutus_section',
							'settings' => 'aboutus_title_setting',
							'type' => 'text',
						)
					);

				// About Us Subtitle
					$wp_customize->add_setting('aboutus_subtitle_setting', array('default' => 'Tell everyone about your company (and your skills)'));
					$wp_customize->add_control('aboutus_subtitle_control', array(
							'label' => 'Subtitle',
							'section' => 'aboutus_section',
							'settings' => 'aboutus_subtitle_setting',
							'type' => 'text',
						)
					);

				// About Us Text
					$wp_customize->add_setting('aboutus_text_setting', array('default' => 'Add a description about your company here...'));
					$wp_customize->add_control('aboutus_text_control', array(
							'label' => 'Text',
							'section' => 'aboutus_section',
							'settings' => 'aboutus_text_setting',
							'type' => 'textarea',
						)
					);

				// About Us Skills Title
					$wp_customize->add_setting('aboutus_stitle_setting', array('default' => 'Our Skills'));
					$wp_customize->add_control('aboutus_stitle_control', array(
							'label' => 'Skills Title',
							'section' => 'aboutus_section',
							'settings' => 'aboutus_stitle_setting',
							'type' => 'text',
						)
					);



			// PACKAGES Section
				$wp_customize->add_section('packages_section', array(
						'title' => 'Packages Section',
						'panel' => 'homepage_sections_panel',
					)
				);

				// Packages Shown
					$wp_customize->add_setting('packages_shown_setting', array('default' => true));
					$wp_customize->add_control('packages_shown_control', array(
							'label' => 'Is Packages Section Shown?',
							'section'    => 'packages_section',
							'settings'   => 'packages_shown_setting',
							'type' => 'checkbox',
						)
					);

				// Packages Title
					$wp_customize->add_setting('packages_title_setting', array('default' => 'Packages'));
					$wp_customize->add_control('packages_title_control', array(
							'label' => 'Title',
							'section' => 'packages_section',
							'settings' => 'packages_title_setting',
							'type' => 'text',
						)
					);

				// Packages Subtitle
					$wp_customize->add_setting('packages_subtitle_setting', array('default' => ''));
					$wp_customize->add_control('packages_subtitle_control', array(
							'label' => 'Subtitle',
							'section' => 'packages_section',
							'settings' => 'packages_subtitle_setting',
							'type' => 'text',
						)
					);

				// Packages Description
					$wp_customize->add_setting('packages_desc_setting', array('default' => ''));
					$wp_customize->add_control('packages_desc_control', array(
							'label' => 'Description',
							'section' => 'packages_section',
							'settings' => 'packages_desc_setting',
							'type' => 'textarea',
						)
					);

}

add_action('customize_register', 'mytheme_customizer');

?>