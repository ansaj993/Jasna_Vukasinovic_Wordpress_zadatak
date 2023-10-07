<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bernhardt_News_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		the_category();
		the_title( '<h2>', '</h2>' );

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<p>
					<?php echo get_the_date() . '<span>' . get_the_time() . '</span>';?>
				</p>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if(is_singular()){
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bernhardt-news-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

		} else {
			the_excerpt();
			echo '<a href="' . get_post_permalink() . '" class="read-more"> Read more &#8594;</a>';
		}
		

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bernhardt-news-theme' ),
				'after'  => '</div>',
			)
		);?>

		<div class="author">
			<div class="author-image">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 150); ?>
			</div>

			<div class="author-bio">
				<h3 class="author-name">
					<?php
					echo get_the_author_meta('first_name');
					echo '<span>' . get_the_author_meta('last_name') . '</span>';?>
				</h3>

				<?php echo '<p class="author-nickname">' . get_the_author_meta('nickname') . '</p>';?>
			
				<?php echo '<p class="author-description">' . get_the_author_meta('description') . '</p>';?>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
