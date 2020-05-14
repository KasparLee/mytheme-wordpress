<div id="lander" class="section">
	
	<style type="text/css">
	/* LANDER */
	#lander h1, #lander h3, #lander h4 { color: #FFF; }
	#lander h4 { margin: 10px 20px; }
	#lander { background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo get_theme_mod("lander_background_setting"); ?>') no-repeat fixed 50% 0% / cover; }
	.landerbutton { border: 3px solid #FFF; font-size: 25px; font-weight: bold; color: #FFF; background-color: rgba(0, 0, 0, 0.6); margin: 20px 10%; opacity: 0; padding: 10px 15px; transition: background-color .5s ease-in-out, color .5s ease-in-out; }
	.landerbutton:hover { background-color: #FFF; color: #000; }
	#lb1 { margin-right: 20%; }
	#lb2 { margin-left: 20%; }
	.subscribe { margin: 10px 20px; padding: 10px; font-size: 15px; width: 50%; max-width: 600px; border: none; border-radius: 3px; color: #000; display: inline-block; }
	</style>
	
	<h1><?php echo get_theme_mod('lander_title_setting'); ?></h1>
	<h3><?php echo get_theme_mod('lander_subtitle_setting'); ?></h3>

	<input type="button" id="lb1" class="landerbutton <?php echo get_theme_mod('lander_button1_shown_setting') == 1 ? '' : 'hidden'; ?>" value="<?php echo get_theme_mod('lander_button1_text_setting'); ?>">
	<input type="button" id="lb2" class="landerbutton <?php echo get_theme_mod('lander_button2_shown_setting') == 1 ? '' : 'hidden'; ?>" value="<?php echo get_theme_mod('lander_button2_text_setting'); ?>">

	<h4 class="<?php echo get_theme_mod('lander_subscribe_shown_setting') == 1 ? '' : 'hidden'; ?>">Subscribe to our newsletter</h4>
	<input type="text" class="subscribe <?php echo get_theme_mod('lander_subscribe_shown_setting') == 1 ? '' : 'hidden'; ?>">

</div>