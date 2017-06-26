<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cville-tomorrow-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cville-tomorrow-theme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class='nothing-found'>It looks like nothing was found at this location. Please return to the 
					<b><a href=''>homepage</a></b> or try searching properly!</p>
					<?<?php get_search_form(); ?>
					<p class='nothing-found'>If you're still here, enjoy some great quotes that have <b>nothing</b> to do with our dissatisfaction with the name of our publication! </p>
					
					<section class="rw-wrapper">
					<p class="rw-sentence">
						<div class="rw-words rw-words-1">
							<span>"Carpe Diem." - Horace</span>
							<span>"Americans deserve a better tomorrow, today." - Nancy Pelosi</span>
							<span>"The future starts today, not tomorrow." - Pope John Paul II</span>
							<span>"Nobody got where they are today by living for tomorrow." - Tom Wilson</span>
							<span>"Tomorrow is a thief of pleasure." - Rex Harrison</span>
							<span>"Life lived for tomorrow will always be just a day away from being realized." - Leo Buscaglia </span>
						</div>
						<br />
					</p>
						</section>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
