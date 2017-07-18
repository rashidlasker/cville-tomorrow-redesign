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
			<span class= 'ct-all' style='font-size: 32px; color: #FDB717'>ALL</span><span class='alphabet'><a href=''>A</a> | <a href=''>B</a> | <a href=''> C</a> | <a href=''> D</a> | <a href=''>E</a>| <a href=''>F</a> | <a href=''>G</a> |<a href=''> H </a>| <a href=''>I</a> | <a href=''>J</a> | <a href=''>K</a> | <a href=''>L</a> | <a href=''>M</a> | <a href=''>N </a>| <a href=''>O </a>| <a href=''>P</a> |<a href=''> Q</a> | <a href=''>R</a> | <a href=''>S</a> | <a href=''>T </a>| <a href=''>U</a> | <a href=''>V</a> | <a href=''>W </a>| <a href=''>X</a> | <a href=''>Y </a>| <a href=''>Z</a></span></div></div>
			<div class='editor-text'><p>EDITORS' PICKS</p></div>
			<div class="grid__col grid__col--5-of-6 topics-area">
				<a href='#'><div class="grid__col grid__col--1-of-4 image-1"><div class='layer-1'></div><span class='image-text'>Affordable Living</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-2"><div class='layer-2'></div><span class='image-text'>Land Use - Albemarle</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-3"><div class='layer-3'></div><span class='image-text'>Land Use - Charlottesville</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-4"><div class='layer-4'></div><span class='image-text'>Comprehensive Plans</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-5"><div class='layer-5'></div><span class='image-text'>Community Design</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-6"><div class='layer-6'></div><span class='image-text'>Farming</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-7"><div class='layer-7'></div><span class='image-text'>Transportation</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-8"><div class='layer-8'></div><span class='image-text'>Bicycles</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-9"><div class='layer-9'></div><span class='image-text'>Crozet Area</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-10"><div class='layer-10'></div><span class='image-text'>Rural Areas</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-11"><div class='layer-11'></div><span class='image-text'>Rivanna River</span></a>
				</div>
				<a href='#'><div class="grid__col grid__col--1-of-4 image-12"><div class='layer-12'></div><span class='image-text'>Parks & Recreation</span></a>
				</div>
			</div>
			<div class="grid__col grid__col--1-of-6 sidebar">
				<a href='http://crozetrunning.com/'><img class='side-ad-1' src="<?php echo bloginfo('template_url'); ?>/topics-images/crozet-running.jpeg"></a>
				<a href='https://www.vmdo.com/'><img class='side-ad-2' src='<?php echo bloginfo('template_url'); ?>/topics-images/vmdo.jpg'></a>
				<a href='http://vytc.com/'><img class='side-ad-3' src='<?php echo bloginfo('template_url'); ?>/topics-images/trees-ad.jpg'></a>
				<a href='http://www.raggedmountainrunning.com/'><img class='side-ad-4' src='<?php echo bloginfo('template_url'); ?>/topics-images/ragged.jpg'></a>
			</div>
		</div>
		</main>
</div>

<?php
get_footer();
?>