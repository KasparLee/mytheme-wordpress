<div id="features" class="section rm">

	<style type="text/css">
	/* FEATURES */
	#features { background-color: #E1E1E1; }
	.feature { color: #4B4B4B; }
	.feature-cont { margin: 0px auto; display: inline-table; float: none; }
	.featureimgcont { height: 100px; overflow: hidden; }
	.featureimgcont img { height: 100px; display: none; top: 0px !important; }
	.featureshr { border: 1px solid #B3B3B3; margin: 20px 0px; }
	.feature p { margin: 10px; }
	.featurebreak { height: 50px; }
	</style>
	
	<h2><?php echo get_option('features_title_setting'); ?></h2>
	<h3><?php echo get_option('features_subtitle_setting'); ?></h3>
	
	<br>

	<!-- Import Features Sidebar -->
	<?php dynamic_sidebar('features_sidebar'); ?>

</div>