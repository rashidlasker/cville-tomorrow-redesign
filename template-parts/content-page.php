<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cville-tomorrow-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-entry-header">
		<?php the_title( '<h1 class="page-entry-title">', '</h1>' ); ?>
	</header><!-- .page-entry-header -->

	<div class="page-entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cville-tomorrow-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .page-entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="page-entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'cville-tomorrow-theme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .page-entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
