<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-tomorrow-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="article-page-event">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title-event">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title-event"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php cville_tomorrow_theme_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content-event">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cville-tomorrow-theme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) ); ?>
					<div class='event-img'>
					<?php
						echo(types_render_field( 'image')); ?>
					</div>
					<div class='event-info' style='border-top: 5px solid #FDB717; '>
					<p>
					<?php
						echo(types_render_field( 'date')); ?>
					<br>
					<?php 
						echo(types_render_field( 'location')); ?>
					<br>
					<b>
					<?php
						echo(types_render_field( 'price')); ?></b>
					
					<?php
						echo(types_render_field( 'contact')); ?>
					<p><?php
						echo(types_render_field( 'link')); ?></p>
					</div>

					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cville-tomorrow-theme' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->


			<footer class="entry-footer">
				<?php cville_tomorrow_theme_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-<?php the_ID(); ?> -->
    </div>
