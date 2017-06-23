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
<head>
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Noto+Sans" rel="stylesheet">	
</head>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="grid">
			<div class="grid__col grid__col--3-of-4 alpha-index"><div class='ct-logo'>
			<span class= 'ct-all' style='font-size: 32px; color: #FDB717'>ALL</span><span class='alphabet'>A | B | C | D | E | F | G | H | I | J | K | L | M | N | O | P | Q | R | S | T | U | V | W | X | Y | Z</span></div></div>
			<div class='editor-text'><p>EDITORS' PICKS</p></div>
			<div class="grid__col grid__col--5-of-6 topics-area">
				<div class="grid__col grid__col--1-of-4 image-1"><div class='layer-1'></div><span class='image-text'>Affordable Living</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-2"><div class='layer-2'></div><span class='image-text'>Land Use - Albemarle</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-3"><div class='layer-3'></div><span class='image-text'>Land Use - Charlottesville</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-4"><div class='layer-4'></div><span class='image-text'>Comprehensive Plans</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-5"><div class='layer-5'></div><span class='image-text'>Community Design</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-6"><div class='layer-6'></div><span class='image-text'>Farming</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-7"><div class='layer-7'></div><span class='image-text'>Transportation</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-8"><div class='layer-8'></div><span class='image-text'>Bicycles</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-9"><div class='layer-9'></div><span class='image-text'>Crozet Area</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-10"><div class='layer-10'></div><span class='image-text'>Rural Areas</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-11"><div class='layer-11'></div><span class='image-text'>Rivanna River</span>
				</div>
				<div class="grid__col grid__col--1-of-4 image-12"><div class='layer-12'></div><span class='image-text'>Parks & Recreation</span>
				</div>
			</div>
			<div class="grid__col grid__col--1-of-6 sidebar">
				<img class='side-ad-1' src="http://localhost/demo-copy/wp-content/uploads/2017/06/crozet-running.jpeg">
				<img class='side-ad-2' src='http://localhost/demo-copy/wp-content/uploads/2017/06/vmdo.jpg'>
				<img class='side-ad-3' src='http://localhost/demo-copy/wp-content/uploads/2017/06/trees-ad.jpg'>
				<img class='side-ad-4' src='http://localhost/demo-copy/wp-content/uploads/2017/06/ragged.jpg'>
			</div>
		</div>
		</main>
</div>

<?php
get_footer();
?>