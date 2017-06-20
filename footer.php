<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cville-tomorrow-theme
 */

?>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Noto+Sans" rel="stylesheet">	
	</head>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class='footer-bg' style='height: 350px; width: 100%; background-color: #182e5a;'>
				<div class="grid">
				    <div class="grid__col grid__col--1-of-3 pages">
					    <p class='footer-heading' style='width: 50%; padding-left: 50%';>Pages</p>
						    <ul class='pages-items' style='color: white;'>
							    <li style='padding-left: 30%'>Home</li>
							    <li style='padding-left: 30%'>About Us</li>
							    <li style='padding-left: 30%'>Jobs</li>
							    <li style='padding-left: 30%'>Underwriting Opportunities</li>
							    <li style='padding-left: 30%'>Privacy Policy</li>
							    <li style='padding-left: 30%'>Our Writers</li>
						    </ul>
					</div>
					<div class="grid__col grid__col--1-of-3 our-platform">
					    <p class='footer-heading2' style="padding-left: 28%;">Our Platform</p>
					    <div class="platform-list" style="height:200px">
						    <ul class='platform-items' style='color: white;'>
							    <li>Apps</li>
							    <li>Tools</li>
							    <li>RSS Feeds</li>
							    <li>Meeting & Conference Room Info</li>
							    <li>All Staff & Contributors</li>
							    <span>© 2005-2017 Charlottesville Tomorrow. All Rights Reserved</span>
						    </ul>
						</div>
					</div>
					<div class="grid__col grid__col--1-of-3 contact">
					    <p class='footer-heading3' style="padding-left: 25%;">Contact</p>
					    	<ul class='contact-items' style='color: white;'>
							    <li style='padding-top:-10px'>P.O. Box 1591</li>
							    <li>100 5th Street NE</li>
							    <li>Charlottesville, VA 22902</li>
							    <li class="contact-number">434-260-1533</li>
						    </ul>
						    <img class='social-media-imgs' src="<?php echo bloginfo('template_url'); ?>/footer-images/facebook.PNG" style="padding-left:20%" alt="fb image" >
						     <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/twitter.PNG">
						     <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/email.png" style="width: 32px;height:32px">
						      <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/linkedin.PNG">
						     <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/google-plus.PNG">
						      <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/pinterest.PNG">
					</div>

				</div>
			</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
