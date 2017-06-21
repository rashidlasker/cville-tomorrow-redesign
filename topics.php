<?php
/**
 * Template Name: Topics
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-tomorrow-theme
 */?>
<?php 
	get_header();

?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="grid">
			  <div class="grid__col grid__col--3-of-4 topics-area">
			    <p>Centered columns? No problem.</p>
			  </div>
			  <div class="grid__col grid__col--1-of-4 sidebar">
			    <p>Push and pull columns in plain English.</p>
			  </div>
		</div>
		</main>
</div>

<?php
get_footer();