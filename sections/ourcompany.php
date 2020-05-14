<div id="ourcompany" class="section inlineb">

	<style type="text/css">
	/* OUR COMPANY */
	#ourcompany { background-color: #EAEAEA; color: #4B4B4B; text-align: left; width: 100%; }
	#ourcompanytitlecont { height: 25px; }
	#ourcompanytitlecont h3 { margin: 0px; }
	#ourcompanytextcont { padding: 0px; }
	#ourcompany img { margin: 0px auto; }
	</style>

	<div id="ourcompanytitlecont"><h3 class="anim"><?php echo get_theme_mod('ourcompany_title_setting'); ?></h3></div>
	<br>
	<div id="ourcompanytextcont" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div id="ourcompanytext" class="anim">
			<p><?php echo add_new_lines_p(get_theme_mod('ourcompany_text_setting')); ?></p>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
	<img class="anim col-lg-4 col-md-4 col-sm-4 col-xs-12" src="<?php echo get_theme_mod('ourcompany_image_setting'); ?>" alt="<?php echo get_theme_mod('ourcompany_image_alt_setting'); ?>">

</div>