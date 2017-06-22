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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class='footer-bg'>
				    <div class="grid__col grid__col--1-of-4 pages our-pages">
					    <p class='footer-heading'>Our Pages</p>
					 	<div class='pages-list-items''>
						    <ul class='pages-items'>
							    <li>Home</li>
							    <li>About Us</li>
							    <li>Jobs</li>
							    <li>Underwriting Opportunities</li>
							    <li>Privacy Policy</li>
							    <li>Our Writers</li>
						    </ul>
						</div>
					</div>
					<div class="footerSpace"></div>
					<div class="grid__col grid__col--1-of-4 our-platform">
					    <p class='footer-heading2'>Our Platform</p>
					    <div class="platform-list">
						    <ul class='platform-items' style='color: white;'>
							    <li>Apps</li>
							    <li>Tools</li>
							    <li>RSS Feeds</li>
							    <li>Meeting & Conference Room Info</li>
							    <li>All Staff & Contributors</li>
						    </ul>
						</div>
					</div>
					<div class="footerSpace"></div>
					<div class="grid__col grid__col--1-of-4 contact">
					    <p class='footer-heading3'>Contact Us</p>
					    <div class='contact-div'>
					    	<ul class='contact-items'>
							    <li>P.O. Box 1591</li>
							    <li>100 5th Street NE</li>
							    <li>Charlottesville, VA 22902</li>
							    <li class="contact-number">434-260-1533</li>
						    </ul>
						</div>
						<div class='social-media-imgs'>
						    <img class='fb-img' src="<?php echo bloginfo('template_url');?>/footer-images/facebook.png" alt="fb image" >
						    <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/twitter.png">
						    <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/email.png" style="width: 32px;height:32px">
						    <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/linkedin.png">
						    <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/google-plus.png">
						    <img  src="<?php echo bloginfo('template_url'); ?>/footer-images/pinterest.png">
					    </div>
					</div>
					<div class='copyright'>
				    	© 2005-2017 Charlottesville Tomorrow. All Rights Reserved
				    </div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
