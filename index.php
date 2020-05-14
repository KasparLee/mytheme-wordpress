<!DOCTYPE html>

<html>

<head>
	<title><?php echo get_option('homepage_title_setting'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css">
	<style type="text/css">

		/* GENERAL */
		h1, h2, h3, h4, h5, h6 { color: #2F2F2F; font-weight: bold; }
		p { font-weight: normal; }

		/* HEADER*/
		#header { background-color: #FFF; }

	</style>
</head>

<body>

<div id="wrapper">
	
	<!-- Gets the header and adds it to the page -->
	<!-- temp disabled <php get_header(); ?> -->

	<!-- Main Content -->
	<div id="main">
		<div id="content">

			<!-- Import Lander Section -->
			<?php if (get_option('lander_shown_setting') == 1) { include 'sections/lander.php'; }; ?>

			<!-- Import Features Section -->
			<?php if (get_option('features_shown_setting') == 1) { include 'sections/features.php'; }; ?>

			<!-- Import Our Company Section -->
			<?php if (get_option('ourcompany_shown_setting') == 1) { include 'sections/ourcompany.php'; }; ?>

			<!-- Import About Us Section -->
			<?php if (get_option('aboutus_shown_setting') == 1) { include 'sections/aboutus.php'; }; ?>

			<!-- Import Packages Section -->
			<?php if (get_option('packages_shown_setting') == 1) { include 'sections/packages.php'; }; ?>			

			<div id="testimonials" class="section">

				<h2>Testimonials</h2>
				<h3>What people have said about us</h3>

				<div class="testims-container row">
				
					<div class="testim col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<div class="row">
							<div class="testim-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<img class="anim" src="<?php echo get_template_directory_uri(); ?>/images/testim/testim1.jpg">
							</div>
							<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
							<div class="testim-right col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<h4>John Doe</h4>
								<p>CEO of aCompany</p>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testim/sig-johndoe.png">
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					
					<div class="testim col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<div class="row">
							<div class="testim-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<img class="anim" src="<?php echo get_template_directory_uri(); ?>/images/testim/testim2.jpg">
							</div>
							<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
							<div class="testim-right col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<h4>Jane Smith</h4>
								<p>CEO of bCompany</p>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testim/sig-johndoe.png">
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					
					<div class="testim col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<div class="row">
							<div class="testim-left col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<img class="anim" src="<?php echo get_template_directory_uri(); ?>/images/testim/testim3.jpg">
							</div>
							<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
							<div class="testim-right col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<h4>John Doe</h4>
								<p>CEO of aCompany</p>
								<img src="<?php echo get_template_directory_uri(); ?>/images/testim/sig-johndoe.png">
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					
				</div>

			</div>

			<div id="stats" class="section rm">
				<div class="stat"><p class="statf" id="stat1">2470</p><p class="statl">Lines of Code</p></div>
				<div class="stat"><p class="statf" id="stat2">39</p><p class="statl">Awards Won</p></div>
				<div class="stat"><p class="statf" id="stat3">7</p><p class="statl">Team Members</p></div>
				<div class="stat"><p class="statf" id="stat4">95</p><p class="statl">Products</p></div>
			</div>

			<div id="portfolio" class="section rm">
				<h2>Portfolio</h2>
				<h3>Showcase your work to your clients</h3>

				<div class="portimg-cont">
					<div class="port-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio1.jpg');"></div>
					<div class="port-desc">
						<p>Chopping Board</p>
						<hr>
						<p>2013</p>
					</div>
				</div>

				<div class="portimg-cont">
					<div class="port-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio2.jpg');"></div>
					<div class="port-desc">
						<p>Ice Cream Sundae</p>
						<hr>
						<p>2012</p>
					</div>
				</div>

				<div class="portimg-cont">
					<div class="port-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio3.jpg');"></div>
					<div class="port-desc">
						<p>Earbuds</p>
						<hr>
						<p>2015</p>
					</div>
				</div>

				<div class="portimg-cont">
					<div class="port-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio4.jpg');"></div>
					<div class="port-desc">
						<p>Colored Pencils</p>
						<hr>
						<p>2014</p>
					</div>
				</div>

				<div class="portimg-cont">
					<div class="port-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio3.jpg');"></div>
					<div class="port-desc">
						<p>Earbuds</p>
						<hr>
						<p>2015</p>
					</div>
				</div>

				<div class="portimg-cont">
					<div class="port-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio4.jpg');"></div>
					<div class="port-desc">
						<p>Colored Pencils</p>
						<hr>
						<p>2014</p>
					</div>
				</div>

				<div class="portimg-cont">
					<div class="port-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio1.jpg');"></div>
					<div class="port-desc">
						<p>Chopping Board</p>
						<hr>
						<p>2013</p>
					</div>
				</div>

				<div class="portimg-cont">
					<div class="port-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portfolio/portfolio2.jpg');"></div>
					<div class="port-desc">
						<p>Ice Cream Sundae</p>
						<hr>
						<p>2012</p>
					</div>
				</div>

			</div>

			<div id="ourclients" class="section">
				<h2>Our Clients</h2>
				<h3>Impress your prospective buyers showing what major companies used your services</h3>
				<ul class="clientslist">
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/clients/client1.svg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/clients/client1.svg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/clients/client1.svg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/clients/client1.svg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/clients/client1.svg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/clients/client1.svg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/clients/client1.svg"></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/images/clients/client1.svg"></li>
				</ul>
			</div>

			<div id="ourteam" class="section">

				<h2>Meet Our Team</h2>
				<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
				
				<div id="teammem-cont">
				
					<div class="teammem col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<img class="anim" src="<?php echo get_template_directory_uri(); ?>/images/teammem/teammem1.jpg">
						<h5>John Doe</h5>
						<p class="teammemjob">Director</p>
						<hr class="teammemhr">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/facebook.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/twitter.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/linkedin.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/googleplus.png">
					</div>

					<div class="teammem col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<img class="anim" src="<?php echo get_template_directory_uri(); ?>/images/teammem/teammem2.jpg">
						<h5>Jane Smith</h5>
						<p class="teammemjob">Co-Founder</p>
						<hr class="teammemhr">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/facebook.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/twitter.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/linkedin.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/googleplus.png">
					</div>

					<div class="teammem col-lg-4 col-md-4 col-sm-4 col-xs-10">
						<img class="anim" src="<?php echo get_template_directory_uri(); ?>/images/teammem/teammem3.jpg">
						<h5>John Doe</h5>
						<p class="teammemjob">Sales Manager</p>
						<hr class="teammemhr">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/facebook.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/twitter.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/linkedin.png">
						<img class="teammemwidget" src="<?php echo get_template_directory_uri(); ?>/images/sn/googleplus.png">
					</div>
					
				</div>

			</div>

			<div id="contact" class="section">

				<h2>Contact Us</h2>
				
				<div id="contact-map-cont">
					<h3><a id="contact-map-link">Show Google Map</a></h3>
					<iframe id="contact-map" data-src="https://maps.google.com/maps?hl=en&q=Random Hills Road&ie=UTF8&t=roadmap&z=13&iwloc=B&output=embed"></iframe>
				</div>
				
				<div id="contact-details">
				
					<div class="contact-detail">
						<img src="<?php echo get_template_directory_uri(); ?>/images/contact-us/location.svg">
						<hr class="contact-detail-hr">
						<p>Random Hills Road, Fairfax,</p>
						<p>VA 22030, USA</p>
					</div>
				
					<div class="contact-detail">
						<img src="<?php echo get_template_directory_uri(); ?>/images/contact-us/email.svg">
						<hr class="contact-detail-hr">
						<p>yourname@yourcomapny.com</p>
					</div>

					<div class="contact-detail">
						<img src="<?php echo get_template_directory_uri(); ?>/images/contact-us/phone.svg">
						<hr class="contact-detail-hr">
						<p>(001) 234 5678</p>
					</div>

				</div>

			</div>

		</div>
	</div>

	<!-- Gets the footer and adds it to the page -->
	<?php get_footer(); ?>

</div>

<style type="text/css">

	/* TESTIMONIALS */
	.testim { display: inline-block; text-align: left; margin-top: 25px; }
	.testim-left img { height: 100%; width: 100%; border-radius: 50%; }
	.testim-right p { font-size: 18px; }
	.testim-right img { width: 50%; }
	.testim > p:nth-child(2) { padding: 20px 0px 0px 0px; }

	/* STATS */
	#stats {
		min-height: 50px;
		background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url('<?php echo get_template_directory_uri(); ?>/images/stats-background.jpg') no-repeat fixed 75% center;
		background-size: 200%;
	}
	@media only screen and (max-device-width: 1000px) {
		#stats { background-size: cover; }
	}
	.stat { margin: 30px 50px; color: #FFF; display: inline-block; }
	.statf { font-size: 40px; font-weight: bold; }
	.statl { font-size: 20px; font-weight: normal; }

	/* PORTFOLIO */
	#portfolio { background-color: #EAEAEA; }
	.portimg-cont { width: 22%; margin: 1%; display: inline-block; overflow: hidden; text-align: center; background-color: black; color: #FFF; }
	.port-desc { position: relative; }
	.port-desc p { margin: 0; position: relative; }
	.port-desc hr { border: 1px solid #FFF; margin: 5% 10%; top: -35%; position: relative; }
	.port-img { width: 100%; height: 100%; background-size: 100%; background-position: center; }

	/* OUR CLIENTS */
	.clientslist { list-style: none; }
	.clientslist li { display: inline-block; margin: 25px; }

	/* OUR TEAM*/
	#ourteam { background-color: #0D0D0D; color: #FFF; }
	#ourteam h2, #ourteam h3 { color: #FFF; }
	#ourteam .col-lg-4, #ourteam .col-md-4, #ourteam .col-sm-4 { width: 30%; }
	.teammem { display: inline-block; float: none; }
	.teammem h5 { color: #FFF; }
	.teammem img:first-child { width: 150px; height: 150px; margin: 25px 0px; border-radius: 50%; border: 10px solid #FF4848; box-shadow: 0px 0px 10px 1px #666; }
	.teammemjob { color: #37CB09; font-weight: bold; }
	.teammemhr { width: 50%; }
	.teammemwidget { width: 30px; margin: 3px; }

	/* CONTACT US */
	#contact-map-cont { height: 500px; }
	#contact-map { width: 100%; height: 100%; border: none; display: none; }
	#contact-details { margin-top: 50px; }
	.contact-detail { display: inline-block; width: 300px; vertical-align: top; }
	.contact-detail-hr { border: 1px solid #B3B3B3; margin: 20px auto; width: 75%; }
	.contact-detail p { font-weight: bold; }

	/* FOOTER */
	#footer { display: block; background-color: #0D0D0D; color: #FFF; padding: 25px; }
	#footer h5 { color: #FFF; }
	.footer-recent-post { margin: 20px auto; }
	.footer-recent-post-img-cont { border-right: 1px solid #C1C1C1; display: inline-block; }
	.footer-recent-post img { width: 75px; display: inline-block; margin: auto 20px; }
	.footer-recent-post-content { display: inline-block; max-width: 70%; text-align: left; vertical-align: middle; padding-left: 20px; }
	.footer-recent-post-content h6 { color: #FFF; }

	/* OTHER */
 	.inline { display: inline; }
	.inlineb { display: inline-block; }
	.anim { display: none; }
	.rm { padding: 3% 2%; }

	/* For jQuery Effects, stop them moving to the left */
	.ui-effects-wrapper { margin: 0px auto !important; }

	/* Apple iMacs - 27" (2560px) */
	@media screen and (min-width: 2500px) { html { transform: scale(2); } }
	/* Tablet - iPad, for PACKAGES (Make each package smaller and reduce margins), for TESTIMONIALS (reduce margins for each one, allow them to fit onto one line) */
	@media screen and (max-width: 1025px) { /*.package-cont { width: 30%; margin: 10px; } .package { width: 250px; }*/ .testim {margin: 2%; } }
	/* Tablet (Medium), for OUR COMPANY, for PACKAGES (Make each package wider and have a no side margins) */
	@media screen and (max-width: 900px) { #ourcompanytext { width: 80%; } #ourcompany img { width: 50%; } /*.package { width: 90%; margin: 30px auto; }*/ }
	/* Tablet (Medium), for PACKAGES (To seperate packages onto individual lines) */
/*	@media screen and (max-width: 770px) { .package {width: 400px; } .package-cont { display: block; height: 100%; width: 100%; margin: 0px auto; } }
	/* Mobiles, for PORTFOLIO (o make 2 images per line rathe than 4) */
	@media screen and (max-width: 682px) { .port-img { width: 47%; } }

	/* BOOTSTRAP */
	/* MD - for PACKAGES (to remove margins)*/
	@media (max-width: 992px) { .package-cont { margin: 0px; } }

</style>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.9.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/homepage.js"></script>
<script>
	var landerbuttonsloc = ["<?php echo get_option('lander-button1-location-setting'); ?>", "<?php echo get_option('lander-button2-location-setting'); ?>"];
</script>


</body>

</html>