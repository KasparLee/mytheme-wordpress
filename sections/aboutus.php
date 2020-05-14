<div id="aboutus" class="section inlineb">

	<style type="text/css">
	/* ABOUT US */
	#aboutus h2, #aboutus h3, #aboutus h4 { color: #FFF; margin-bottom: 20px; }
	#aboutus { background-color: #0D0D0D; color: #FFF; font-weight: normal; }
	.aboutuscol { text-align: left; }
	.aboutuscol h4 { margin-bottom: 50px; }
	.pbcont { height: 75px; opacity: 0; margin-left: 400px; }
	.progressbar { background-color: #141414; height: 5px; }
	.progress { height: 5px; width: 20px; background-color: #00CC00; transition: width .5s ease-in-out; }
	.postpb p { margin-top: 10px; }
	.postpb p:first-child { float: left; }
	.postpb p:last-child { float: right; }
	</style>

	<h2><?php echo get_theme_mod('aboutus_title_setting'); ?></h2>
	<h3><?php echo get_theme_mod('aboutus_subtitle_setting'); ?></h3>

	<div class="aboutuscol col-lg-5 col-md-5 col-sm-5 col-xs-12" style="float: left;">
		<p><?php echo add_new_lines_p(get_theme_mod('aboutus_text_setting')); ?></p>
	</div>

	<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs"></div>

	<div class="aboutuscol col-lg-5 col-md-5 col-sm-5 col-xs-12" style="float: right;">
		<h4 style="text-align: center"><?php echo get_theme_mod('aboutus_stitle_setting'); ?></h4>
		<?php dynamic_sidebar('aboutus_sidebar'); ?>
	</div>

</div>