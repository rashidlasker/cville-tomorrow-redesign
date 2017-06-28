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
	<div class="article-page">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php cville_tomorrow_theme_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

<<<<<<< HEAD
	<div class="article-photo"> 
		<img src = "<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail_url();
			} 
		   ?> ">
	</div>

<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
    <p class="caption"><?php echo $caption; ?></p>
<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cville-tomorrow-theme' ),
					array(
						'span' => array(
							'class' => array(),
=======
			<div class="entry-content">
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
>>>>>>> c8ee84ae8af0858b81682b400c993fe6bc06519d
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cville-tomorrow-theme' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

<<<<<<< HEAD
	<div class="ads"> 
		
		</div>

</article><!-- #post-<?php the_ID(); ?> -->
=======

			<footer class="entry-footer">
				<?php cville_tomorrow_theme_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</article><!-- #post-<?php the_ID(); ?> -->
    </div>
>>>>>>> c8ee84ae8af0858b81682b400c993fe6bc06519d
