<div id="packages" class="section rm">

	<style type="text/css">
	/* PACKAGES */
	#packages { background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo get_template_directory_uri(); ?>/images/packages-background.jpg') no-repeat fixed 50% center; background-size: cover; min-height: 538px; }
	.package-cont { float: none; margin: 1.5%; min-width: 250px; }
	.package { background-color: #FFF; overflow: hidden; }
	.package .packagehead h4 { display: inline-block; margin: 20px; }
	.package .packagehead p { display: inline-block; margin-top: 0; font-weight: 500; color: #2F2F2F; }
	.packagebody { color: #4B4B4B; margin-top: 20px; padding: 0px 20px; }
	.packagebody > * { border-top: 1px solid #DADADA; padding: 15px 0px; margin: 0; font-weight: 500; }
	.packagebody > *:first-child { border: none; }
	.packagebody div:last-child { border-bottom: 1px solid #DADADA; }
	.packageprice { font-size: 20pt; }
	.packagebutton { font-size: 16px; color: #FFF; margin: 10px; padding: 10px; border: none; }
	.packagebreak { height: 50px; }
	</style>
	
	<h2><?php echo get_theme_mod('packages_title_setting'); ?></h2>
	<h3><?php echo get_theme_mod('packages_subtitle_setting'); ?></h3>

	<?php echo add_new_lines_p(get_theme_mod('packages_desc_setting')); ?>

	<?php dynamic_sidebar('packages_sidebar') ?>

</div>