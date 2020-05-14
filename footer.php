<div id="footer" class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<h5>Recent Posts</h5>
		<?php
			$footer_recent_posts = wp_get_recent_posts( array('numberposts' => 3) );
			foreach( $footer_recent_posts as $the_post ) {
				echo '<div class="footer-recent-post">';
					echo '<div class="footer-recent-post-img-cont">';
					echo '<img src="' . wp_get_attachment_image_src( get_post_thumbnail_id( $the_post['ID'] ) )[0] . '">';
					echo '</div>';
					echo '<div class="footer-recent-post-content"><h6>' . $the_post['post_title'] . '</h6><p>' . $the_post['post_excerpt'] . '</p></div>';
				echo '</div>';
			}
		?>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<p>Copyright &copy; <?php echo date("Y "); bloginfo('title'); ?></p><p>All Rights Reserved.</p>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<p>Copyright &copy; <?php echo date("Y "); bloginfo('title'); ?></p><p>All Rights Reserved.</p>
	</div>
</div>